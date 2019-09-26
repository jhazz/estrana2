<?php
$cfg=require('../common/config/main-local.php');

/*$config=['db'=>[
  'dsn' => 'mysql:host=localhost;dbname=estrana2',
  'username' => 'root',
  'password' => '',
  'charset' => 'utf8',
]];
$dbc=$config['db'];*/

$dbc=$cfg['components']['db'];
$dbh=new PDO($dbc['dsn'],$dbc['username'],$dbc['password'],[PDO::ATTR_PERSISTENT => true]);
$stmt1=$dbh->prepare('SELECT * from user where username=:username');
$stmt1->bindParam(':username',$username);

$username='user2';
$stmt1->execute();


foreach($stmt1 as $row) {
  print_r($row);
}
$dbh = null;

?>