SELECT first_name, last_name FROM authors WHERE id = '2';

SELECT title FROM books WHERE author = '2';

SELECT title, type_name FROM books,types;

SELECT title, type_name 
FROM books JOIN types ON books.type_id = types.type_id

SELECT title, type_name 
FROM books AS b JOIN types AS t ON b.type_id = t.type_id

SELECT CONCAT(last_name, ', ', first_name) AS full_name, title 
FROM authors AS a JOIN books AS b ON a.id = author ORDER BY full_name, title;

SELECT CONCAT(last_name, ', ', first_name) AS full_name, title, type_name 
FROM authors AS a 
JOIN books AS b ON a.id = author 
JOIN types AS t ON b.type_id = t.type_id 
ORDER BY full_name, title;

SELECT last_name, first_name, title 
FROM authors AS a LEFT JOIN books AS b ON a.id = author;

SELECT last_name, first_name, title 
FROM authors AS a RIGHT JOIN books AS b ON a.id = author;

SELECT last_name, first_name, title 
FROM authors AS a LEFT JOIN books AS b ON a.id = author
WHERE last_name LIKE 'M%';

SELECT last_name, first_name, title 
FROM authors AS a LEFT JOIN books AS b ON a.id = author
WHERE last_name LIKE 'M%'
ORDER BY last_name, first_name, title;