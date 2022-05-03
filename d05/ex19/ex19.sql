SELECT TIMESTAMPDIFF(day, min(`date`), max(`date`)) 
AS 'uptime'
FROM db_leotran.member_history