/* VW_COUNTRY - ������������� ��� ����������� ���������� �����.
	COUNTRY_NAME	- �������� ������
	USERS_COUNT	- ����� ����������
	COUNTRY_CREDIT	- ����� Credit ���������� �� ������ ������
	COUNTRY_RA�	- ����� Recent Average Credit ���������� �� ������ ������
 */

DROP VIEW VW_COUNTRY;

CREATE VIEW VW_COUNTRY AS
SELECT
    CASE COUNTRY
        WHEN '' THEN 'International'
        WHEN 'None' THEN 'International'
        ELSE COUNTRY
    END AS COUNTRY_NAME,
    COUNT(*) AS USERS_COUNT,
    SUM(TOTAL_CREDIT) AS COUNTRY_CREDIT,
    SUM(EXPAVG_CREDIT) AS COUNTRY_RAC
  FROM user
 GROUP BY COUNTRY_NAME;