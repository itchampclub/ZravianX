<?php
include_once("../../Account.php");
mysql_connect(SQL_SERVER, SQL_USER, SQL_PASS);
mysql_select_db(SQL_DB);
if ($session->access < ADMIN) die("Access Denied: You are not Admin!");
?>