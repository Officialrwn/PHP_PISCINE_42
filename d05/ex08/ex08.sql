SELECT last_name, first_name, birthdate FROM db_leotran.user_card
WHERE birthdate LIKE '%1989%'
ORDER BY last_name;