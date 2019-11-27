<?php
$connection = Database::getConnection();

// oo
$connection->close();

// procedural
mysqli_close($connection);
