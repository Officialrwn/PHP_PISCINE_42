INSERT INTO db_leotran.ft_table (login, `group`, creation_date)
SELECT last_name, 'other', birthdate
FROM db_leotran.user_card
WHERE last_name LIKE '%a%' AND CHAR_LENGTH(last_name) < 9
ORDER BY last_name LIMIT 10;