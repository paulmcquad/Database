<?php 
$result_obj = $connection->query("SELECT first_name FROM authors");
$result = $connection->query("UPDATE authors SET first_name='Sally' WHERE id=4");
