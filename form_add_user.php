<form name="userform" action="manage_user.php" method="POST">
<table style='width: 500px'>
  <tr>
    <td style='width: 100px'>
      <label>Name</label><br />
      <label>Age</label><br />
      <label>Gender</label><br />
      <label>Email</label><br />
      <label>Password</label><br />
    </td>
    <td>
      <input type="text" name="name" value="<?php echo($name) ?>" /><br />
      <input type="text" name="age" value="<?php echo($age) ?>" /><br />
      <input type="text" name="gender" value="<?php echo($gender) ?>" /><br />
      <input type="text" name="email" value="<?php echo($email) ?>" <?php echo($flag == 'edit') ? 'readonly="readonly"' : '' ?> /><br />
      <input type="text" name="password" value="<?php echo($password) ?>" /><br />
    </td>
  </tr>
  <tr>
    <td colspan='2'>
    <input type="hidden" name="flag" value="<?php echo($flag) ?>" />
    <input name="Submit" type="submit" value="Save" />&nbsp;&nbsp;<a href="manage_user.php"><input name="Submit" type="button" value="Cancel" /></a>
    </td>
  </tr>
</table>
</form>
