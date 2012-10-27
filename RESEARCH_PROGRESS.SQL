/* RESEARCH_PROGRESS - Таблица хранения базовой информации о выполненнии подпроектов
	ID			- Идентификатор подпроекта
	NAM	- Название подпроекта
	WORKUNITS_TOTAL		- Общее число заданий, которое надо будет завершить в подпроекте
	WORKUNITS_DELETED	- Число заданий подпроекта уже удалённых из базы (предполагается, что 				  удалению подлежат только завершённые workunits).
	WORKUNITS_MASK		- Маска, по которой задания будут разбиваться по подпроектам. Точно такая 				  же (!) должа использоваться и в скриптах подсчёта удаляемых заданий.
 */
DROP VIEW VW_RESEARCH_PROGRESS;
DROP TABLE RESEARCH_PROGRESS;

CREATE TABLE RESEARCH_PROGRESS
(
    ID INTEGER,
    NAME VARCHAR(128),
    WORKUNITS_TOTAL INTEGER,
    WORKUNITS_DELETED INTEGER,
    WORKUNITS_MASK VARCHAR(16),
    CONSTRAINT CS_RESEARCH_PROGRESS_PK PRIMARY KEY(ID)
);

INSERT INTO RESEARCH_PROGRESS(ID, NAME, WORKUNITS_TOTAL, WORKUNITS_DELETED, WORKUNITS_MASK)
VALUES(1, 'Stream cipher A5/1', -1, -1, 'N/A');

INSERT INTO RESEARCH_PROGRESS(ID, NAME, WORKUNITS_TOTAL, WORKUNITS_DELETED, WORKUNITS_MASK)
VALUES(2, 'Pairs of orthogonal diagonal latin squares 9', -1, -1, '%diag9_2%');

INSERT INTO RESEARCH_PROGRESS(ID, NAME, WORKUNITS_TOTAL, WORKUNITS_DELETED, WORKUNITS_MASK)
VALUES(3, 'Pairs of orthogonal diagonal latin squares 10', 1000000, 0, '%diag10_2%');