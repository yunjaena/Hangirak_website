<?php
  include"./connect.php";
$sql="create table membership (";
$sql.="id  varchar(10) not null,";
$sql.="password varchar(255) not null,";
$sql.="sex varchar(1) ,";
$sql.="allergy varchar(100),";
$sql.="name varchar(10) not null,";
$sql.="post_num char(8),";
$sql.="address varchar(80),";
$sql.="tel varchar(20),";
$sql.="age int,";
$sql.="primary key(id)";
$sql.=")CHARSET=utf8";
$res = $dbConnect -> query($sql);
