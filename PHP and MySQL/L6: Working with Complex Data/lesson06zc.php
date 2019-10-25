<form action="lesson06zc.php" method="post">
<label for="username">User Name:</label><br />
<input type="text" id="username" name="username" /><br />
<label for="password">Password</label><br />
<input type="text" name="password" /><br />
<button type="submit">Submit</button>
</form>
<p>You entered 
<?php echo filter_var($_POST["username"], FILTER_SANITIZE_STRING) ?> 
 as the User Name and 
<?php echo filter_var($_POST["password"], FILTER_SANITIZE_STRING) ?>
 as the Password.</p>