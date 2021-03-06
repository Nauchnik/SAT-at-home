/* VW_HOST - ������������� ��� ����������� ���������� � ���������� ��� ����������� ���������� ����������.
	ID	- ������������� ����������
	USERID	- ������������� ���������
	VENDOR	- ����� Credit ���������� �� ������ ������
	TOTAL_CREDIT	- Credit ����������
	EXPAVG_CREDIT	- Recent Average Creditr ����������
	RPC_TIME	- ����� ���������� ��������� � �������
	P_NCPUS		- ����� �����������, ����, �������
 */

DROP VIEW VW_HOST;

CREATE VIEW VW_HOST AS
SELECT
    ID,
    USERID,
    CASE
        WHEN P_MODEL LIKE '%AMD%' OR P_VENDOR = 'AuthenticAMD'
        THEN 'AMD'
        WHEN P_VENDOR = 'CentaurHauls'
        THEN 'Centaur'
        WHEN
            P_MODEL LIKE '%Intel%' OR
            P_MODEL LIKE '%Pentium%' OR
            P_MODEL LIKE '%Celeron%' OR
            P_VENDOR = 'GenuineIntel'
        THEN 'Intel'
        WHEN P_MODEL LIKE '%Transmeta%'
        THEN 'Transmeta'
        ELSE 'Unidentified'
    END AS VENDOR,
    TOTAL_CREDIT,
    EXPAVG_CREDIT,
    RPC_TIME,
    P_NCPUS
  FROM host;