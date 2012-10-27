/* RESEARCH_PROGRESS - Таблица хранения базовой информации о выполненнии подпроектов
	ID			- Идентификатор подпроекта
	RESEARCH_NAME_EN	- Название подпроекта (EN)
	RESEARCH_NAME_RU	- Название подпроекта (RU)
	RESEARCH_WORKUNITS_TOTAL- Общее число заданий, которое надо будет завершить в подпроекте
	BASE_WORKUNIT_ID	- Базовый номер задания - ID Workunit-а, по который (включительно),
				  все задания по данному подпроекту уже были удалены из БД. Предполагается,
				  что все эти задания можно отнести к разряду завершённых. Получить
				  полного числа обработанных заданий на момент Now() можно выборкой
				  всех WU из таблицы WORKUNIT по условию ID > BASE_WORKUNIT_ID и
				  CANONICAL_RESULTID > 0.
				  Получить число просто созданных заданий можнро просто посчитав число WU
				  с ID > BASE_WORKUNIT_ID.
	WORKUNITS_COMPLETED_BASE- Число заданий, завершённых в рамках подпроекта и находяшихся ниже,
				  чем BASE_WORKUNIT_ID.
 */

CREATE TABLE RESEARCH_PROGRESS
(
    ID INTEGER,
    RESEARCH_NAME_EN VARCHAR(128),
    RESEARCH_NAME_RU VARCHAR(128),
    RESEARCH_WORKUNITS_TOTAL INTEGER,
    BASE_WORKUNIT_ID INTEGER,
    WORKUNITS_COMPLETED_BASE INTEGER,
    CONSTRAINT CS_RESEARCH_PROGRESS_PK PRIMARY KEY(ID)
);