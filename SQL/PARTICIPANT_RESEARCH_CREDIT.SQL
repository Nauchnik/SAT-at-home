/* PARTICIPANT_RESEARCH_CREDIT - ������� ����������� ������������� � �����������
	RESEARCH_ID			- ������������� ����������
	PARTICIPANT_ID			- ������������� ���������
	CREDIT				- ������������ Credit
 */

DROP TABLE PARTICIPANT_RESEARCH_CREDIT;

CREATE TABLE PARTICIPANT_RESEARCH_CREDIT
(
	RESEARCH_ID	INTEGER,
	PARTICIPANT_ID	INTEGER,
	CREDIT		DOUBLE
);