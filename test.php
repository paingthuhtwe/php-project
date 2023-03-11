<?php

// include "_classes/Helpers/Auth.php";
// include "_classes/Helpers/HTTP.php";
// include "_classes/Libs/Database/MySQL.php";
// include "_classes/Libs/Database/UsersTable.php";

include "vendor/autoload.php";

// use Helpers\Auth;

// Auth::check();
// use Helpers\HTTP;

use Libs\Database\MySQL;

$mysql = new MySQL();

$db = $mysql->connect();

$result = $db->query("SELECT * FROM roles");

echo "<pre>";
print_r($result->fetchAll());

// use Libs\Database\UsersTable;

// Auth::check();
// HTTP::redirect();

// $db = new MySQL;
// $db->connect();

// $table = new UsersTable;
// $table->insert();

// HTTP::redirect("/index.php", "test=true");
