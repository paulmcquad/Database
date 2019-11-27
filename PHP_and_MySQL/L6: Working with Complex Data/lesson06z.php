<form action="lesson06z.php" method="post">
<label for="username">User Name:</label><br />
<input type="text" id="username" name="username" /><br />
<label for="password">Password</label><br />
<input type="text" name="password" /><br />
<button type="submit">Submit</button>
</form>
<p>You entered <?php echo $_POST["username"] ?> as the User Name and <?php echo $_POST["password"] ?> as the Password.</p>