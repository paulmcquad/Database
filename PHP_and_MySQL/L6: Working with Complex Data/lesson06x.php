<form action="lesson06x.php" method="get">
<label for="username">User Name:</label><br />
<input type="text" id="username" name="username" /><br />
<label for="password">Password</label><br />
<input type="text" name="password" /><br />
<button type="submit">Submit</button>
</form>
<p>You entered <?php echo $_GET["username"] ?> as the User Name and <?php echo $_GET["password"] ?> as the Password.</p>