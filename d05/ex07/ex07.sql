SELECT title, summary FROM db_leotran.film
WHERE summary LIKE '%42%' OR title LIKE '%42%'
ORDER BY duration;