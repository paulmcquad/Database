DELETE FROM types WHERE type_id = '2';

DELETE FROM types;

INSERT INTO types VALUES (NULL, 'Fantasy');

DELETE FROM types LIMIT 1;

DELETE FROM books ORDER BY title ASC LIMIT 2;

DELETE FROM books WHERE author = '2' AND title LIKE '%Days%';

DELETE FROM books WHERE author NOT IN (SELECT id FROM authors); 

DELETE authors FROM authors LEFT JOIN books ON authors.id = author WHERE author IS NULL;
