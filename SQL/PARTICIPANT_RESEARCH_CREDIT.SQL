/* PARTICIPANT_RESEARCH_CREDIT - Таблица результатов пользователей в подпроектах
	RESEARCH_ID			- Идентификатор подпроекта
	PARTICIPANT_ID			- Идентификатор участника
	CREDIT				- Выработанный Credit
 */

DROP TABLE PARTICIPANT_RESEARCH_CREDIT;

CREATE TABLE PARTICIPANT_RESEARCH_CREDIT
(
	RESEARCH_ID	INTEGER,
	PARTICIPANT_ID	INTEGER,
	CREDIT		DOUBLE
);