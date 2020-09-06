<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-02 02:32:53 --> Severity: Notice --> Undefined index: image /home/dailyest/public_html/dailyestore/application/controllers/Api.php 434
ERROR - 2020-09-02 02:32:53 --> Severity: Notice --> Undefined index: createdBy /home/dailyest/public_html/dailyestore/application/controllers/Api.php 435
ERROR - 2020-09-02 02:32:53 --> Query error: Column 'image' cannot be null - Invalid query: INSERT INTO `itemdetails` (`typeId`, `subId`, `itemTypeName`, `subName`, `itemName`, `description`, `quantity`, `price`, `status`, `image`, `createdBy`) VALUES ('1', '1', 'Food', 'Bakers', 'Lenovo', 'Laptop', '1', '60000', '1', NULL, NULL)
ERROR - 2020-09-02 02:52:57 --> Severity: Warning --> Illegal string offset 'itemName' /home/dailyest/public_html/dailyestore/application/controllers/Api.php 427
ERROR - 2020-09-02 02:52:57 --> Severity: Warning --> Illegal string offset 'subName' /home/dailyest/public_html/dailyestore/application/controllers/Api.php 428
ERROR - 2020-09-02 02:52:57 --> Severity: Notice --> Undefined index: image /home/dailyest/public_html/dailyestore/application/controllers/Api.php 434
ERROR - 2020-09-02 02:52:57 --> Query error: Column 'image' cannot be null - Invalid query: INSERT INTO `itemdetails` (`typeId`, `subId`, `itemTypeName`, `subName`, `itemName`, `description`, `quantity`, `price`, `status`, `image`, `createdBy`) VALUES ('[1, test, sowmya]', 'meat', '0', '0', 'noufal', 'noufal', 'noufal', 'noufal', 'noufal', NULL, 'noufal')
ERROR - 2020-09-02 11:20:02 --> Query error: Table 'dailyest_dailyestore.oders' doesn't exist - Invalid query: SELECT `odr`.*, `itd`.*, `u`.*
FROM `itemdetails` `itd`
LEFT JOIN `users` `u` ON `u`.`userId` = `itd`.`userId`
LEFT JOIN `oders` `odr` ON `odr`.`itemId` = `itd`.`itemId`
ERROR - 2020-09-02 11:20:02 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/dailyest/public_html/dailyestore/application/models/Api_model.php 356
ERROR - 2020-09-02 11:21:34 --> Query error: Table 'dailyest_dailyestore.oders' doesn't exist - Invalid query: SELECT `odr`.*, `itd`.*, `u`.*
FROM `itemdetails` `itd`
LEFT JOIN `users` `u` ON `u`.`userId` = `itd`.`userId`
LEFT JOIN `oders` `odr` ON `odr`.`itemId` = `itd`.`itemId`
ERROR - 2020-09-02 11:21:34 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/dailyest/public_html/dailyestore/application/models/Api_model.php 356
ERROR - 2020-09-02 11:23:51 --> Query error: Unknown column 'itd.userId' in 'on clause' - Invalid query: SELECT `odr`.*, `itd`.*, `u`.*
FROM `itemdetails` `itd`
LEFT JOIN `users` `u` ON `u`.`userId` = `itd`.`userId`
LEFT JOIN `orders` `odr` ON `odr`.`itemId` = `itd`.`itemId`
ORDER BY `odr`.`orderId` DESC
ERROR - 2020-09-02 11:23:51 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/dailyest/public_html/dailyestore/application/models/Api_model.php 356
ERROR - 2020-09-02 11:23:53 --> Query error: Unknown column 'itd.userId' in 'on clause' - Invalid query: SELECT `odr`.*, `itd`.*, `u`.*
FROM `itemdetails` `itd`
LEFT JOIN `users` `u` ON `u`.`userId` = `itd`.`userId`
LEFT JOIN `orders` `odr` ON `odr`.`itemId` = `itd`.`itemId`
ORDER BY `odr`.`orderId` DESC
ERROR - 2020-09-02 11:23:53 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/dailyest/public_html/dailyestore/application/models/Api_model.php 356
ERROR - 2020-09-02 11:24:54 --> Query error: Unknown column 'itd.userId' in 'on clause' - Invalid query: SELECT `odr`.*, `itd`.*, `u`.*
FROM `itemdetails` `itd`
LEFT JOIN `users` `u` ON `u`.`userId` = `itd`.`userId`
LEFT JOIN `orders` `odr` ON `odr`.`itemId` = `itd`.`itemId`
ORDER BY `odr`.`orderId` DESC
ERROR - 2020-09-02 11:24:54 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/dailyest/public_html/dailyestore/application/models/Api_model.php 356
ERROR - 2020-09-02 11:25:12 --> Query error: Unknown column 'itd.userId' in 'on clause' - Invalid query: SELECT `odr`.*, `itd`.*, `u`.*
FROM `itemdetails` `itd`
LEFT JOIN `users` `u` ON `u`.`userId` = `itd`.`userId`
LEFT JOIN `orders` `odr` ON `odr`.`itemId` = `itd`.`itemId`
ORDER BY `odr`.`orderId` DESC
ERROR - 2020-09-02 11:25:12 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/dailyest/public_html/dailyestore/application/models/Api_model.php 356
ERROR - 2020-09-02 11:31:20 --> Query error: Unknown column 'itd.userId' in 'on clause' - Invalid query: SELECT `odr`.*, `itd`.*, `u`.*
FROM `itemdetails` `itd`
LEFT JOIN `users` `u` ON `u`.`userId` = `itd`.`userId`
LEFT JOIN `orders` `odr` ON `odr`.`itemId` = `itd`.`itemId`
ORDER BY `odr`.`orderId` DESC
ERROR - 2020-09-02 11:31:20 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/dailyest/public_html/dailyestore/application/models/Api_model.php 356
ERROR - 2020-09-02 11:40:14 --> Severity: Notice --> Undefined index: typeId /home/dailyest/public_html/dailyestore/application/controllers/Api.php 472
ERROR - 2020-09-02 11:40:14 --> Severity: Notice --> Undefined index: subId /home/dailyest/public_html/dailyestore/application/controllers/Api.php 473
ERROR - 2020-09-02 11:40:14 --> Severity: Warning --> Illegal string offset 'itemName' /home/dailyest/public_html/dailyestore/application/controllers/Api.php 476
ERROR - 2020-09-02 11:40:14 --> Severity: Warning --> Illegal string offset 'subName' /home/dailyest/public_html/dailyestore/application/controllers/Api.php 477
ERROR - 2020-09-02 11:40:14 --> Severity: Notice --> Undefined index: itemName /home/dailyest/public_html/dailyestore/application/controllers/Api.php 478
ERROR - 2020-09-02 11:40:14 --> Severity: Notice --> Undefined index: description /home/dailyest/public_html/dailyestore/application/controllers/Api.php 479
ERROR - 2020-09-02 11:40:14 --> Severity: Notice --> Undefined index: quantity /home/dailyest/public_html/dailyestore/application/controllers/Api.php 480
ERROR - 2020-09-02 11:40:14 --> Severity: Notice --> Undefined index: price /home/dailyest/public_html/dailyestore/application/controllers/Api.php 481
ERROR - 2020-09-02 11:40:14 --> Severity: Notice --> Undefined index: status /home/dailyest/public_html/dailyestore/application/controllers/Api.php 482
ERROR - 2020-09-02 11:40:14 --> Severity: Notice --> Undefined variable: target_file /home/dailyest/public_html/dailyestore/application/controllers/Api.php 483
ERROR - 2020-09-02 11:40:14 --> Severity: Notice --> Undefined index: createdBy /home/dailyest/public_html/dailyestore/application/controllers/Api.php 484
ERROR - 2020-09-02 11:40:14 --> Query error: Column 'typeId' cannot be null - Invalid query: INSERT INTO `itemdetails` (`typeId`, `subId`, `itemTypeName`, `subName`, `itemName`, `description`, `quantity`, `price`, `status`, `image`, `createdBy`) VALUES (NULL, NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL)
ERROR - 2020-09-02 11:40:25 --> Severity: Notice --> Undefined index: typeId /home/dailyest/public_html/dailyestore/application/controllers/Api.php 472
ERROR - 2020-09-02 11:40:25 --> Severity: Notice --> Undefined index: subId /home/dailyest/public_html/dailyestore/application/controllers/Api.php 473
ERROR - 2020-09-02 11:40:25 --> Severity: Warning --> Illegal string offset 'itemName' /home/dailyest/public_html/dailyestore/application/controllers/Api.php 476
ERROR - 2020-09-02 11:40:25 --> Severity: Warning --> Illegal string offset 'subName' /home/dailyest/public_html/dailyestore/application/controllers/Api.php 477
ERROR - 2020-09-02 11:40:25 --> Severity: Notice --> Undefined index: itemName /home/dailyest/public_html/dailyestore/application/controllers/Api.php 478
ERROR - 2020-09-02 11:40:25 --> Severity: Notice --> Undefined index: description /home/dailyest/public_html/dailyestore/application/controllers/Api.php 479
ERROR - 2020-09-02 11:40:25 --> Severity: Notice --> Undefined index: quantity /home/dailyest/public_html/dailyestore/application/controllers/Api.php 480
ERROR - 2020-09-02 11:40:25 --> Severity: Notice --> Undefined index: price /home/dailyest/public_html/dailyestore/application/controllers/Api.php 481
ERROR - 2020-09-02 11:40:25 --> Severity: Notice --> Undefined index: status /home/dailyest/public_html/dailyestore/application/controllers/Api.php 482
ERROR - 2020-09-02 11:40:25 --> Severity: Notice --> Undefined variable: target_file /home/dailyest/public_html/dailyestore/application/controllers/Api.php 483
ERROR - 2020-09-02 11:40:25 --> Severity: Notice --> Undefined index: createdBy /home/dailyest/public_html/dailyestore/application/controllers/Api.php 484
ERROR - 2020-09-02 11:40:25 --> Query error: Column 'typeId' cannot be null - Invalid query: INSERT INTO `itemdetails` (`typeId`, `subId`, `itemTypeName`, `subName`, `itemName`, `description`, `quantity`, `price`, `status`, `image`, `createdBy`) VALUES (NULL, NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL)
ERROR - 2020-09-02 11:45:44 --> Severity: Notice --> Undefined index: subId /home/dailyest/public_html/dailyestore/application/controllers/Api.php 473
ERROR - 2020-09-02 11:45:44 --> Severity: Warning --> Illegal string offset 'subName' /home/dailyest/public_html/dailyestore/application/controllers/Api.php 477
ERROR - 2020-09-02 11:45:44 --> Severity: Notice --> Undefined index: itemName /home/dailyest/public_html/dailyestore/application/controllers/Api.php 478
ERROR - 2020-09-02 11:45:44 --> Severity: Notice --> Undefined index: description /home/dailyest/public_html/dailyestore/application/controllers/Api.php 479
ERROR - 2020-09-02 11:45:44 --> Severity: Notice --> Undefined index: quantity /home/dailyest/public_html/dailyestore/application/controllers/Api.php 480
ERROR - 2020-09-02 11:45:44 --> Severity: Notice --> Undefined index: price /home/dailyest/public_html/dailyestore/application/controllers/Api.php 481
ERROR - 2020-09-02 11:45:44 --> Severity: Notice --> Undefined index: status /home/dailyest/public_html/dailyestore/application/controllers/Api.php 482
ERROR - 2020-09-02 11:45:44 --> Severity: Notice --> Undefined variable: target_file /home/dailyest/public_html/dailyestore/application/controllers/Api.php 483
ERROR - 2020-09-02 11:45:44 --> Severity: Notice --> Undefined index: createdBy /home/dailyest/public_html/dailyestore/application/controllers/Api.php 484
ERROR - 2020-09-02 11:45:44 --> Query error: Column 'subId' cannot be null - Invalid query: INSERT INTO `itemdetails` (`typeId`, `subId`, `itemTypeName`, `subName`, `itemName`, `description`, `quantity`, `price`, `status`, `image`, `createdBy`) VALUES ('1', NULL, 'Food', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL)
