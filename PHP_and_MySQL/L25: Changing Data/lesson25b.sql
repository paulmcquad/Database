UPDATE authors SET first_name = 'Sarah' WHERE id = '1';

UPDATE authors SET first_name = 'Sarah';

UPDATE authors SET first_name = 'Sally' WHERE id = '1';
UPDATE authors SET first_name = 'George' WHERE id = '2';
UPDATE authors SET first_name = 'Peter' WHERE id = '3';
UPDATE authors SET first_name = 'Dale' WHERE id = '4';

UPDATE authors SET first_name = 'Jeff', last_name = 'Baamer' WHERE id = '4';

UPDATE books JOIN authors AS a ON author = a.id SET title = CONCAT(title, '*') WHERE first_name = 'Sally';

UPDATE books SET title = CONCAT(title, '**') WHERE author NOT IN (SELECT id FROM authors);

INSERT INTO authors (id, first_name, last_name) 
VALUES ('4', 'Jane', 'Smith')
ON DUPLICATE KEY UPDATE first_name = 'Jane', last_name = 'Smith';

