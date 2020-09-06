<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-06 07:38:23 --> Severity: Warning --> mysqli::real_connect(): (HY000/1130): Host '103.41.32.1' is not allowed to connect to this MySQL server C:\xampp\htdocs\newdailyestore\dailyestore\system\database\drivers\mysqli\mysqli_driver.php 201
ERROR - 2020-09-06 07:38:23 --> Unable to connect to the database
ERROR - 2020-09-06 07:38:23 --> Severity: Warning --> mysqli::real_connect(): (HY000/1130): Host '103.41.32.1' is not allowed to connect to this MySQL server C:\xampp\htdocs\newdailyestore\dailyestore\system\database\drivers\mysqli\mysqli_driver.php 201
ERROR - 2020-09-06 07:38:23 --> Unable to connect to the database
ERROR - 2020-09-06 07:38:24 --> Severity: Warning --> mysqli::real_connect(): (HY000/1130): Host '103.41.32.1' is not allowed to connect to this MySQL server C:\xampp\htdocs\newdailyestore\dailyestore\system\database\drivers\mysqli\mysqli_driver.php 201
ERROR - 2020-09-06 07:38:24 --> Unable to connect to the database
ERROR - 2020-09-06 07:38:24 --> Query error: Host '103.41.32.1' is not allowed to connect to this MySQL server - Invalid query: SELECT *
FROM `users`
 LIMIT 1
ERROR - 2020-09-06 07:38:24 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\newdailyestore\dailyestore\application\models\Api_model.php 16
ERROR - 2020-09-06 08:01:42 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\newdailyestore\dailyestore\application\controllers\Api.php 20
ERROR - 2020-09-06 09:32:19 --> Query error: Unknown column 'itd.userId' in 'on clause' - Invalid query: SELECT `odr`.*, `itd`.*, `u`.*
FROM `itemdetails` `itd`
LEFT JOIN `users` `u` ON `u`.`userId` = `itd`.`userId`
LEFT JOIN `orders` `odr` ON `odr`.`itemId` = `itd`.`itemId`
ORDER BY `odr`.`orderId` DESC
ERROR - 2020-09-06 09:32:19 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\newdailyestore\dailyestore\application\models\Api_model.php 371
ERROR - 2020-09-06 09:32:26 --> Query error: Unknown column 'itd.userId' in 'on clause' - Invalid query: SELECT `odr`.*, `itd`.*, `u`.*
FROM `itemdetails` `itd`
LEFT JOIN `users` `u` ON `u`.`userId` = `itd`.`userId`
LEFT JOIN `orders` `odr` ON `odr`.`itemId` = `itd`.`itemId`
ORDER BY `odr`.`orderId` DESC
ERROR - 2020-09-06 09:32:26 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\newdailyestore\dailyestore\application\models\Api_model.php 371
ERROR - 2020-09-06 09:32:29 --> Query error: Unknown column 'itd.userId' in 'on clause' - Invalid query: SELECT `odr`.*, `itd`.*, `u`.*
FROM `itemdetails` `itd`
LEFT JOIN `users` `u` ON `u`.`userId` = `itd`.`userId`
LEFT JOIN `orders` `odr` ON `odr`.`itemId` = `itd`.`itemId`
ORDER BY `odr`.`orderId` DESC
ERROR - 2020-09-06 09:32:29 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\newdailyestore\dailyestore\application\models\Api_model.php 371
ERROR - 2020-09-06 09:32:46 --> Query error: Unknown column 'itd.userId' in 'on clause' - Invalid query: SELECT `odr`.*, `itd`.*, `u`.*
FROM `itemdetails` `itd`
LEFT JOIN `users` `u` ON `u`.`userId` = `itd`.`userId`
LEFT JOIN `orders` `odr` ON `odr`.`itemId` = `itd`.`itemId`
ORDER BY `odr`.`orderId` DESC
ERROR - 2020-09-06 09:32:46 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\newdailyestore\dailyestore\application\models\Api_model.php 371
ERROR - 2020-09-06 09:56:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '1
 LIMIT 1' at line 2 - Invalid query: SELECT *
FROM `itemdetails`, 1
 LIMIT 1
ERROR - 2020-09-06 09:56:39 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\newdailyestore\dailyestore\application\models\Api_model.php 409
ERROR - 2020-09-06 09:59:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '1
 LIMIT 1' at line 2 - Invalid query: SELECT *
FROM `itemdetails`, 1
 LIMIT 1
ERROR - 2020-09-06 09:59:45 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\newdailyestore\dailyestore\application\models\Api_model.php 409
ERROR - 2020-09-06 10:00:47 --> Query error: Not unique table/alias: 'itemdetails' - Invalid query: SELECT *
FROM `itemdetails`, `itemdetails`
WHERE `subId` = '1'
 LIMIT 1
ERROR - 2020-09-06 10:00:47 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\newdailyestore\dailyestore\application\models\Api_model.php 409
ERROR - 2020-09-06 10:06:15 --> Severity: error --> Exception: syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ')' C:\xampp\htdocs\newdailyestore\dailyestore\application\models\Api_model.php 409
ERROR - 2020-09-06 10:07:48 --> Query error: Not unique table/alias: 'itemdetails' - Invalid query: SELECT *
FROM `itemdetails`, `itemdetails`
WHERE `subId` = '1'
 LIMIT 1
ERROR - 2020-09-06 10:07:48 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\newdailyestore\dailyestore\application\models\Api_model.php 409
ERROR - 2020-09-06 12:46:31 --> Query error: Unknown column 'itd.userId' in 'on clause' - Invalid query: SELECT `odr`.*, `itd`.*, `u`.*
FROM `itemdetails` `itd`
LEFT JOIN `users` `u` ON `u`.`userId` = `itd`.`userId`
LEFT JOIN `orders` `odr` ON `odr`.`itemId` = `itd`.`itemId`
ORDER BY `odr`.`orderId` DESC
ERROR - 2020-09-06 12:46:31 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\newdailyestore\dailyestore\application\models\Api_model.php 371
ERROR - 2020-09-06 12:47:17 --> Query error: Unknown column 'itd.userId' in 'on clause' - Invalid query: SELECT `odr`.*, `itd`.*, `u`.*
FROM `itemdetails` `itd`
LEFT JOIN `users` `u` ON `u`.`userId` = `itd`.`userId`
LEFT JOIN `orders` `odr` ON `odr`.`itemId` = `itd`.`itemId`
ORDER BY `odr`.`orderId` DESC
ERROR - 2020-09-06 12:47:17 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\newdailyestore\dailyestore\application\models\Api_model.php 371
ERROR - 2020-09-06 12:47:20 --> Query error: Unknown column 'itd.userId' in 'on clause' - Invalid query: SELECT `odr`.*, `itd`.*, `u`.*
FROM `itemdetails` `itd`
LEFT JOIN `users` `u` ON `u`.`userId` = `itd`.`userId`
LEFT JOIN `orders` `odr` ON `odr`.`itemId` = `itd`.`itemId`
ORDER BY `odr`.`orderId` DESC
ERROR - 2020-09-06 12:47:20 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\newdailyestore\dailyestore\application\models\Api_model.php 371
ERROR - 2020-09-06 12:47:55 --> Query error: Unknown column 'itd.userId' in 'on clause' - Invalid query: SELECT `odr`.*, `itd`.*, `u`.*
FROM `itemdetails` `itd`
LEFT JOIN `users` `u` ON `u`.`userId` = `itd`.`userId`
LEFT JOIN `orders` `odr` ON `odr`.`itemId` = `itd`.`itemId`
ORDER BY `odr`.`orderId` DESC
ERROR - 2020-09-06 12:47:55 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\newdailyestore\dailyestore\application\models\Api_model.php 371
ERROR - 2020-09-06 12:47:59 --> Query error: Unknown column 'itd.userId' in 'on clause' - Invalid query: SELECT `odr`.*, `itd`.*, `u`.*
FROM `itemdetails` `itd`
LEFT JOIN `users` `u` ON `u`.`userId` = `itd`.`userId`
LEFT JOIN `orders` `odr` ON `odr`.`itemId` = `itd`.`itemId`
ORDER BY `odr`.`orderId` DESC
ERROR - 2020-09-06 12:47:59 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\newdailyestore\dailyestore\application\models\Api_model.php 371
ERROR - 2020-09-06 12:48:01 --> Query error: Unknown column 'itd.userId' in 'on clause' - Invalid query: SELECT `odr`.*, `itd`.*, `u`.*
FROM `itemdetails` `itd`
LEFT JOIN `users` `u` ON `u`.`userId` = `itd`.`userId`
LEFT JOIN `orders` `odr` ON `odr`.`itemId` = `itd`.`itemId`
ORDER BY `odr`.`orderId` DESC
ERROR - 2020-09-06 12:48:01 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\newdailyestore\dailyestore\application\models\Api_model.php 371
ERROR - 2020-09-06 13:17:03 --> Query error: Unknown column 'itd.userId' in 'on clause' - Invalid query: SELECT `odr`.*, `itd`.*, `u`.*
FROM `itemdetails` `itd`
LEFT JOIN `users` `u` ON `u`.`userId` = `itd`.`userId`
LEFT JOIN `orders` `odr` ON `odr`.`itemId` = `itd`.`itemId`
ORDER BY `odr`.`orderId` DESC
ERROR - 2020-09-06 13:17:03 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\newdailyestore\dailyestore\application\models\Api_model.php 371
ERROR - 2020-09-06 13:20:42 --> Query error: Unknown column 'itd.userId' in 'on clause' - Invalid query: SELECT `odr`.*, `itd`.*, `u`.*
FROM `itemdetails` `itd`
LEFT JOIN `users` `u` ON `u`.`userId` = `itd`.`userId`
LEFT JOIN `orders` `odr` ON `odr`.`itemId` = `itd`.`itemId`
ORDER BY `odr`.`orderId` DESC
ERROR - 2020-09-06 13:20:42 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\newdailyestore\dailyestore\application\models\Api_model.php 371
ERROR - 2020-09-06 13:20:50 --> Query error: Unknown table 'dailyestoretest.odr' - Invalid query: SELECT `odr`.*, `itd`.*, `u`.*
FROM `itemdetails` `itd`
ORDER BY `odr`.`orderId` DESC
ERROR - 2020-09-06 13:20:50 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\newdailyestore\dailyestore\application\models\Api_model.php 370
ERROR - 2020-09-06 13:23:06 --> Query error: Unknown column 'itd.userId' in 'on clause' - Invalid query: SELECT `odr`.*, `itd`.*, `u`.*
FROM `itemdetails` `itd`
LEFT JOIN `users` `u` ON `u`.`userId` = `itd`.`userId`
LEFT JOIN `orders` `odr` ON `odr`.`itemId` = `itd`.`itemId`
ORDER BY `odr`.`orderId` DESC
ERROR - 2020-09-06 13:23:06 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\newdailyestore\dailyestore\application\models\Api_model.php 372
ERROR - 2020-09-06 13:26:36 --> Query error: Unknown table 'dailyestoretest.odr' - Invalid query: SELECT `odr`.*, `itd`.*, `u`.*
FROM `itemdetails` `itd`
ERROR - 2020-09-06 13:26:36 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\newdailyestore\dailyestore\application\models\Api_model.php 368
ERROR - 2020-09-06 13:27:16 --> Query error: Unknown table 'dailyestoretest.odr' - Invalid query: SELECT `odr`.*, `itd`.*, `u`.*
FROM `itemdetails` `itd`
ERROR - 2020-09-06 13:27:16 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\newdailyestore\dailyestore\application\models\Api_model.php 368
