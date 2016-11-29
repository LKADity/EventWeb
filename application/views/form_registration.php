<form action="<?php echo site_url(); ?>/Event/registration_process" method="post">
	username <input type="text" name="username">
	<br>
	password <input type="password" name="password">
	<br>
	Password Confirmation <input type="password" name="passconf">
	<br>
	name <input type="text" name="name">
	<br>
	Gender 
	<select name="gender">
		<option value="1">Laki </option>	
		<option value="2">Perempuan </option>
		<option value="3">Other </option>
	</select>
	<br>
	date <input type="date" name="date">
	<br>
	email <input type="text" name="email">
	<br>
	ktp <input type="text" name="ktp">
	<br>
	contact <input type="text" name="contact">
	<br>
	Address <textarea name="address"></textarea>
	<br>
	Poss <input type="text" name="poss">
	<br>
	<?php 
		echo validation_errors();
	 ?>
	 <br>
	<input type="submit" name="submit">
</form>