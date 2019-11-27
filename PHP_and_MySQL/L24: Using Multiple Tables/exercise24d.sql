SELECT type_name, title, CONCAT(last_name, ', ', first_name) AS full_name 
FROM books AS b 
JOIN authors AS a ON author = a.id 
JOIN types AS t ON b.type_id = t.type_id 
WHERE title LIKE '%Day%'
ORDER BY type_name DESC, title;
