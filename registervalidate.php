<?php
require_once '../../core/init.php';
$db = DB::getInstance();
$settingsQ = $db->query("SELECT * FROM settings");
$settings = $settingsQ->first();
$validation = new Validate();
$validation->check($_POST,array(
  'userid' => array(
    'display' => 'UserID',
    'required' => true,
    'min' => 2,
    'max' => 35,
  ),
  'username' => array(
    'display' => 'UserName',
    'required' => true,
    'min' => 2,
    'max' => 35,
  ),
  'email' => array(
    'display' => 'Email ID',
		'required' => true,
		'min' => 2,
		'max' => 35,
  ),
  
  'supervisor' => array(
    'display' => 'Supervisor Email ID',
    'required' => true,
    'valid_email' => true,
    'unique' => 'users',
  ),
  'password' => array(
    'display' => 'Choose Password',
    'required' => false,
    'min' => 2,
    'max' => 75,
  ),
  'confirm' => array(
    'display' => 'Confirm Password',
    'required' => true,
    'min' => 6,
    'max' => 25,
  ),
  'assessment' => array(
    'display' => 'Assessment Location',
    'required' => true,
    'matches' => 'password',
  ),
));


if($validation->passed()){
  echo 'success';
}else{
  echo display_errors($validation->errors());
}
