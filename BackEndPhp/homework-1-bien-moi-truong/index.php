<?php 
session_start();

if ( isset($name) ){
	echo 'The varible is none  defined';
}else echo 'OK';
 ?>
}
<form method="post" action="index.php">
	<div class="user-name">
		User Name: <input type="text" name="username" placeholder="User Name">
	</div>
	<div class="password">
		Password: <input type="password" name="password" placeholder="Password">
	</div>
	<button type="submid" name="submit-login" value="abc"></button>
</form>