/* RESEARCH_BAGE_CHECKPOINT - Таблица отметок о датах последнедних результататов учтённых в статистике нашивок
	RESEARCH_ID			- Идентификатор подпроекта
	LAST_MOD_TIME			- Временная метка последнего результата, учтённого в статистике нашивок
 */

DROP TABLE RESEARCH_BAGE_CHECKPOINT;

CREATE TABLE RESEARCH_BAGE_CHECKPOINT
(
	RESEARCH_ID	INTEGER,
	LAST_MOD_TIME	TIMESTAMP
);