CREATE PROCEDURE `Deadline`(IN Percent FLOAT)

BEGIN  /*Старт процедуры */

	/*Объявление переменных */
	DECLARE variable1 FLOAT; /* переменная под суммарный процент юнитов */
    DECLARE variable2 INT;  /* переменная под день в который достигается назначенный процент юнитов */
	DECLARE Datetime INT; /* переменная времени в которое выполняется подсчет*/
    DECLARE AVG_CPU_Time_per_WU FLOAT; /*переменная среднего времени ЦП на подсчет 1 юнита*/
    DECLARE Deadline_in_days INT; /*переменная количества дней дэдлайна*/
    DECLARE AVG_CPU_Time_per_WU_old FLOAT; /* переменная среднего времени выполнения 1 юнита за время нынешнего дэдлайна*/
    DECLARE AVG_Deadline_in_days FLOAT; /* переменная среднего значения дэдлайна в днях за нынешний дэдлайн*/
    DECLARE Otnoshenie FLOAT; /* переменная значения отношения AVG_CPU_Time_per_WU к AVG_CPU_Time_per_WU_old*/
    
    SET variable1 = 0;  /* обнуление переменной */
    SET variable2 = 0;  /* обнуление переменной */
        
    /*Подсчет количества юнитов выполненых за обозначенный интервал времени */ 
    UPDATE deadline d
	SET d.count_units = (SELECT COUNT(*) /* количество заносится в колонку d.count_units */
	FROM result r
	WHERE r.validate_state IN (1,2) /*учитываются только валидные и ожидающие подтверждения юниты */
	AND r.received_time-r.sent_time > 86400*d.Start_Day /*условия время выполнения*/
	AND r.received_time-r.sent_time <=86400*d.End_Day );

	/*Подсчет процента количества выполненых юнитов за обозначенный интервал времени */
	UPDATE deadline d
	SET d.Percentage_of_WU = d.Count_units/(SELECT y.Un FROM (SELECT SUM(z.Count_units)/100 AS Un FROM deadline z) y);  /*отношение количества юнитов выполненых за конкретный промежуток к количеству всех юнитов выполненых за "всё" время*/   
    
    /*Обнуление дэдлайна по распределению*/
    UPDATE deadline d
	SET d.Deadlinebyraspred ='0';   
    
    /*Обнуление дэдлайна*/
    UPDATE deadline d
	SET d.Deadline ='0';   
    
    /*Цикл поиска дня в который достигается заданный процент выполненых юнитов*/
    WHILE variable1 <= Percent DO
    SET variable2 = variable2 + 1; 
    SET variable1 = (SELECT sum(Percentage_of_WU) AS variable1 FROM deadline WHERE End_Day <=variable2);
	END WHILE; 
    
    /*Присвоение признака дэдлайна по распределению*/
    UPDATE deadline d
    SET d.Deadlinebyraspred='1'
    WHERE d.End_Day=variable2; 
    
    /*Присвоение признака дэдлайна исходя из распределения*/
    UPDATE deadline d
    SET d.Deadline='1'
    WHERE d.End_Day=variable2; 
    
	SET Datetime = UNIX_TIMESTAMP(); /* значение времени в формате unix*/
    SET AVG_CPU_Time_per_WU = (SELECT avg(r.cpu_time) FROM result r WHERE r.validate_state IN (1,2) AND r.received_time >= Datetime - 86400);
    SET Deadline_in_days =  (SELECT d.End_Day FROM deadline d WHERE d.deadline=1);
	SET AVG_CPU_Time_per_WU_old = (SELECT avg(h.AVG_CPU_Time_per_WU) FROM deadline_history h WHERE h.datetime < Datetime - 1800 AND h.Datetime >= Datetime - h.Deadline_in_days*86400 - 1800);  /*1800 секунд - это домавка 30 минут на выполнение процедуры*/
    SET AVG_Deadline_in_days = (SELECT avg(h.Deadline_in_days) FROM deadline_history h WHERE h.datetime < Datetime - 1800 AND h.Datetime >= Datetime - h.Deadline_in_days*86400 - 1800);
    SET Otnoshenie = AVG_CPU_Time_per_WU/AVG_CPU_Time_per_WU_old;
    
     /*Занесение исторических данных*/
    INSERT INTO deadline_history (Datetime,AVG_CPU_Time_per_WU,Deadline_in_days) VALUES (Datetime,AVG_CPU_Time_per_WU,Deadline_in_days);
    
	/*Проверка на необходимость увеличения дэлайна из-за увеличения среднего времени расчета 1 юнита */
	IF Otnoshenie >= (SELECT d.Percent_for_up FROM deadline d WHERE d.deadline=1) THEN
    UPDATE deadline_history d
    SET d.Deadline_in_days = Otnoshenie*AVG_Deadline_in_days
    WHERE d.Datetime=Datetime;
    
    /*Присвоение признака дэдлайна исходя из-за изменения среднего времени расчета 1 юнита, включающее вначале обнуление поля*/
	UPDATE deadline d
    SET d.Deadline='0';
    UPDATE deadline d 
    SET d.Deadline='1' 
    WHERE d.End_Day=(SELECT h.Deadline_in_days FROM deadline_history h WHERE h.Datetime=Datetime);
    END IF; 
    
    /*Проверка на необходимость уменьшения делайна из-за уменьшения среднего времени расчета 1 юнита */
	IF Otnoshenie <= (SELECT d.Percent_for_down FROM deadline d WHERE d.deadline=1) THEN
    
    UPDATE deadline_history d
    SET d.Deadline_in_days = Otnoshenie*AVG_Deadline_in_days
    WHERE d.Datetime=Datetime;
    
    /*Присвоение признака дэдлайна исходя из-за изменения среднего времени расчета 1 юнита, включающее вначале обнуление поля*/
	UPDATE deadline d
    SET d.Deadline='0';
    UPDATE deadline d 
    SET d.Deadline='1' 
    WHERE d.End_Day=(SELECT h.Deadline_in_days FROM deadline_history h WHERE h.Datetime=Datetime); 	
    END IF;
END 