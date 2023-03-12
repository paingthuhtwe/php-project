<?php

// include "_classes/Helpers/Auth.php";
// include "_classes/Helpers/HTTP.php";
// include "_classes/Libs/Database/MySQL.php";
// include "_classes/Libs/Database/UsersTable.php";

// use Helpers\Auth;

// Auth::check();
// use Helpers\HTTP;

// $mysql = new MySQL();

// $db = $mysql->connect();

// $result = $db->query("SELECT * FROM roles");

// echo "<pre>";
// print_r($result->fetchAll());

// Auth::check();
// HTTP::redirect();

// $db = new MySQL;
// $db->connect();

// $table = new UsersTable;
// $table->insert();

// HTTP::redirect("/index.php", "test=true");

include "vendor/autoload.php";
use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Faker\Factory as Faker;

$faker = Faker::create();
$table = new UsersTable(new MySQL());
// $table->insert([
//     "name" => $faker->name,
//     "email" => $faker->email,
//     "phone" => $faker->phoneNumber,
//     "address" => $faker->address,
//     "password" => "password",
// ]);

echo "<pre>";
print_r($table->getAll());
