<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Contact</title>
<style type="text/css">
li {list-style:none; margin-bottom: 10px}
</style>
</head>
<body>
<form action="lesson11b.php" method="get">
<fieldset>
<legend>Contact</legend>
<ul>
<li><label for="fullname">Name*</label><br />
<input id="fullname" name="fullname" type="text" /></li>

<li><label for="address">Address* </label><br />
<textarea id="address" name="address" rows="3" cols="30"></textarea></li>

<li>
<fieldset>
<legend>What is your gender?</legend>
<input type="radio" id="genderf" name="gender" value="f" checked="checked"/>
<label for="genderf"> Female</label>
<input type="radio" id="genderm" name="gender" value="m"/>
<label for="genderm"> Male</label>
</fieldset>
</li>

<li>
<input type="checkbox" id="imagesonly" name="imagesonly" value="yes" />
<label for="imagesonly"> Check here if you only want images.</label>
</li>

<li>
<fieldset>
<legend>Where do you like to live?</legend>
<input type="checkbox" id="arearural" name="areatypes[]" value="rural" />
<label for="arearural"> Rural</label>
<input type="checkbox" id="areasuburb" name="areatypes[]" value="suburb"/>
<label for="areasuburb"> Suburb</label>
<input type="checkbox" id="areacity" name="areatypes[]" value="city"/>
<label for="areacity"> City</label>
</fieldset>
</li>

<li>
<label for="level">Level</label>
<select id="level" name="level">
<option value="">- Select a level -</option>
	<option value="gold">Gold</option>
	<option value="silver">Silver</option>
	<option value="bronze">Bronze</option>
</select>
</li>

<li>
<label for="interests">What do you like?</label>
<select id="interests" name="interests[]" multiple="multiple" size="3">
	<option value="0">Reading</option>
	<option value="1">Whitewater boating</option>
	<option value="2">Music</option>
</select>
</li>

</ul>

<input type="submit" value="Submit" name="contactForm" />
<input type="reset" value="Clear" />

<div>
<input type="hidden" name="id" value="12345" />
</div>

</fieldset>
</form>
</body>
</html>

