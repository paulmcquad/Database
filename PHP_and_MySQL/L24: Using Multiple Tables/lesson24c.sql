SELECT author FROM books;

SELECT * FROM authors WHERE id IN (SELECT author FROM books);

SELECT DISTINCT a.* FROM authors AS a JOIN books WHERE a.id = author;

SELECT * FROM authors WHERE id = ANY (SELECT author FROM books);

SELECT * FROM authors WHERE id = ALL (SELECT author FROM books);

INSERT INTO books (title, author, type_id) 
VALUES ('Sixteen Seconds in March', 
(SELECT id FROM authors WHERE first_name = 'George' AND last_name = 'Smith'),
(SELECT type_id FROM types WHERE type_name = 'Suspense'));
