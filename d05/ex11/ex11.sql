SELECT UPPER(last_name) AS 'NAME', first_name, price
FROM db_leotran.user_card
INNER JOIN member ON user_card.id_user = member.id_user_card
INNER JOIN subscription ON subscription.id_sub = member.id_sub
WHERE price > 42
ORDER BY last_name, first_name;