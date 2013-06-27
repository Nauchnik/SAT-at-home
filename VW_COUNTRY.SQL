/* VW_COUNTRY - Представление для отображения статистики стран.
	COUNTRY_NAME	- Название страны
	USERS_COUNT	- Число участников
	COUNTRY_CREDIT	- Общий Credit участников из данной страны
	COUNTRY_RAС	- Общий Recent Average Credit участников из данной страны
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