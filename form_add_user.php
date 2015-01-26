
<form name="userform" action="manage_user.php" method="POST">
<label>Name</label>
<input type="text" name="name" value="<?php echo($name) ?>" /><br />
<label>Email</label>
<input type="text" name="email" value="<?php echo($email) ?>" <?php echo($flag == 'edit') ? 'readonly="readonly"' : '' ?> /><br />
<label>Password</label>
<input type="text" name="password" value="<?php echo($password) ?>" /><br />
<input type="hidden" name="flag" value="<?php echo($flag) ?>" />
<input name="Submit" type="submit" value="Save" />&nbsp;&nbsp;<a href="manage_user.php"><input name="Submit" type="button" value="Cancel" /></a>
</form>
