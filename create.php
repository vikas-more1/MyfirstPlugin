<?php
/*
*Plugin name: test plugin1
*Plugin URI: http://www.miniorange.com
*Description: This is Test Plugin
*Version: 1.0.0
*Author: <a href="#">Sparsh</a>
*License URI: http://www.miniorange.com


*/

add_action( 'admin_menu', 'main_menu' );
function page()
{
include_once('form.php');
DBP_insert_data();
}
function main_menu() {

$page = add_menu_page( 'test plugin1', 'form', 'administrator','Form_Creation','page');
$submenu_page=add_submenu_page( 'Form_Creation', 'test plugin1', 'details', 'administrator', 'form_details',);
}
?>
