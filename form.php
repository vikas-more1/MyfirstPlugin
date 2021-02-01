<form action="" method="post">
<input type="hidden" name="option" value="mo_ldap_form">
<u>
<b>
<label> User information</label>
<?php
error_log("inside page");
?>
</b>
</u>
<br>

<br>

</p>
<p>
<label>First name</label>
<input type="text" name="first_name">
<br>
</p>
<p>
<label>Last name</label>
<input type="text" name="last_name">
<br>
</p>
<label>User name</label>
<input type="text" name="Username">
<br>
</p>
<p>
<label>Email_Id</label>
<input type="text" name="Email_id">
<br>
</p>
<label>Nick name</label>
<input type="text" name="nicename">
<br>
<button type="submit" name="save">Save</button>
</form>



<?php
function DBP_insert_data(){
global $wpdb;
$table_name= $wpdb->prefix.'users';
$DBP_first_name=$_POST['first_name'];
$DBP_last_name=$_POST['last_name'];
$DBP_user_login=$_POST['Username'];
$DBP_user_email=$_POST['Email_id'];
$DBP_user_nicename=$_POST['nicename'];

$row = $wpdb->get_results(  "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS
WHERE table_name = 'wp_users' AND column_name = 'first_name'"  );

if(empty($row)){
   $wpdb->query("ALTER TABLE wp_users ADD first_name varchar(20) NOT NULL DEFAULT 'NULL'");
}
$row1 = $wpdb->get_results(  "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS
WHERE table_name = 'wp_users' AND column_name = 'last_name'"  );

if(empty($row1)){
   $wpdb->query("ALTER TABLE wp_users ADD last_name varchar(20) NOT NULL DEFAULT 'NULL'");
}

if(isset($_POST['save'])){
$wpdb->insert($table_name, array('first_name'=>$DBP_first_name, 'last_name'=>$DBP_last_name,  'user_login'=>$DBP_user_login, 'user_email'=>$DBP_user_email, 'user_nicename'=>$DBP_user_nicename), array('%s','%s','%s','%s','%s'));
}
}
?>