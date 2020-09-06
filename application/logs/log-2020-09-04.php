<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-04 03:41:13 --> Severity: Warning --> Illegal string offset 'subName' /home/dailyest/public_html/dailyestore/application/controllers/Api.php 477
ERROR - 2020-09-04 03:41:13 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`dailyest_dailyestore`.`itemdetails`, CONSTRAINT `itemdetails_ibfk_2` FOREIGN KEY (`subId`) REFERENCES `subcategory` (`subId`) ON DELETE CASCADE ON UPDATE NO ACTION) - Invalid query: INSERT INTO `itemdetails` (`typeId`, `subId`, `itemTypeName`, `subName`, `itemName`, `description`, `quantity`, `price`, `status`, `image`, `createdBy`) VALUES ('1', 'meat', 'Food', '0', 'noufal', 'noufal', 'noufal', 'noufal', 'noufal', 'uploads/itemscropped7978317898556101484.jpg', 'noufal')
ERROR - 2020-09-04 03:41:14 --> Severity: Warning --> Illegal string offset 'subName' /home/dailyest/public_html/dailyestore/application/controllers/Api.php 477
ERROR - 2020-09-04 03:41:14 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`dailyest_dailyestore`.`itemdetails`, CONSTRAINT `itemdetails_ibfk_2` FOREIGN KEY (`subId`) REFERENCES `subcategory` (`subId`) ON DELETE CASCADE ON UPDATE NO ACTION) - Invalid query: INSERT INTO `itemdetails` (`typeId`, `subId`, `itemTypeName`, `subName`, `itemName`, `description`, `quantity`, `price`, `status`, `image`, `createdBy`) VALUES ('1', 'meat', 'Food', '0', 'noufal', 'noufal', 'noufal', 'noufal', 'noufal', 'uploads/itemscropped7978317898556101484.jpg', 'noufal')
ERROR - 2020-09-04 03:41:15 --> Severity: Warning --> Illegal string offset 'subName' /home/dailyest/public_html/dailyestore/application/controllers/Api.php 477
ERROR - 2020-09-04 03:41:15 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`dailyest_dailyestore`.`itemdetails`, CONSTRAINT `itemdetails_ibfk_2` FOREIGN KEY (`subId`) REFERENCES `subcategory` (`subId`) ON DELETE CASCADE ON UPDATE NO ACTION) - Invalid query: INSERT INTO `itemdetails` (`typeId`, `subId`, `itemTypeName`, `subName`, `itemName`, `description`, `quantity`, `price`, `status`, `image`, `createdBy`) VALUES ('1', 'meat', 'Food', '0', 'noufal', 'noufal', 'noufal', 'noufal', 'noufal', 'uploads/itemscropped7978317898556101484.jpg', 'noufal')
ERROR - 2020-09-04 03:41:15 --> Severity: Warning --> Illegal string offset 'subName' /home/dailyest/public_html/dailyestore/application/controllers/Api.php 477
ERROR - 2020-09-04 03:41:15 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`dailyest_dailyestore`.`itemdetails`, CONSTRAINT `itemdetails_ibfk_2` FOREIGN KEY (`subId`) REFERENCES `subcategory` (`subId`) ON DELETE CASCADE ON UPDATE NO ACTION) - Invalid query: INSERT INTO `itemdetails` (`typeId`, `subId`, `itemTypeName`, `subName`, `itemName`, `description`, `quantity`, `price`, `status`, `image`, `createdBy`) VALUES ('1', 'meat', 'Food', '0', 'noufal', 'noufal', 'noufal', 'noufal', 'noufal', 'uploads/itemscropped7978317898556101484.jpg', 'noufal')
ERROR - 2020-09-04 03:41:15 --> Severity: Warning --> Illegal string offset 'subName' /home/dailyest/public_html/dailyestore/application/controllers/Api.php 477
ERROR - 2020-09-04 03:41:15 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`dailyest_dailyestore`.`itemdetails`, CONSTRAINT `itemdetails_ibfk_2` FOREIGN KEY (`subId`) REFERENCES `subcategory` (`subId`) ON DELETE CASCADE ON UPDATE NO ACTION) - Invalid query: INSERT INTO `itemdetails` (`typeId`, `subId`, `itemTypeName`, `subName`, `itemName`, `description`, `quantity`, `price`, `status`, `image`, `createdBy`) VALUES ('1', 'meat', 'Food', '0', 'noufal', 'noufal', 'noufal', 'noufal', 'noufal', 'uploads/itemscropped7978317898556101484.jpg', 'noufal')
ERROR - 2020-09-04 03:41:16 --> Severity: Warning --> Illegal string offset 'subName' /home/dailyest/public_html/dailyestore/application/controllers/Api.php 477
ERROR - 2020-09-04 03:41:16 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`dailyest_dailyestore`.`itemdetails`, CONSTRAINT `itemdetails_ibfk_2` FOREIGN KEY (`subId`) REFERENCES `subcategory` (`subId`) ON DELETE CASCADE ON UPDATE NO ACTION) - Invalid query: INSERT INTO `itemdetails` (`typeId`, `subId`, `itemTypeName`, `subName`, `itemName`, `description`, `quantity`, `price`, `status`, `image`, `createdBy`) VALUES ('1', 'meat', 'Food', '0', 'noufal', 'noufal', 'noufal', 'noufal', 'noufal', 'uploads/itemscropped7978317898556101484.jpg', 'noufal')
ERROR - 2020-09-04 15:45:44 --> Query error: Unknown column 'itd.userId' in 'on clause' - Invalid query: SELECT `odr`.*, `itd`.*, `u`.*
FROM `itemdetails` `itd`
LEFT JOIN `users` `u` ON `u`.`userId` = `itd`.`userId`
LEFT JOIN `orders` `odr` ON `odr`.`itemId` = `itd`.`itemId`
ORDER BY `odr`.`orderId` DESC
ERROR - 2020-09-04 15:45:44 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/dailyest/public_html/dailyestore/application/models/Api_model.php 356
ERROR - 2020-09-04 15:45:46 --> Query error: Unknown column 'itd.userId' in 'on clause' - Invalid query: SELECT `odr`.*, `itd`.*, `u`.*
FROM `itemdetails` `itd`
LEFT JOIN `users` `u` ON `u`.`userId` = `itd`.`userId`
LEFT JOIN `orders` `odr` ON `odr`.`itemId` = `itd`.`itemId`
ORDER BY `odr`.`orderId` DESC
ERROR - 2020-09-04 15:45:46 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/dailyest/public_html/dailyestore/application/models/Api_model.php 356
ERROR - 2020-09-04 15:46:27 --> Query error: Unknown column 'itd.userId' in 'on clause' - Invalid query: SELECT `odr`.*, `itd`.*, `u`.*
FROM `itemdetails` `itd`
LEFT JOIN `users` `u` ON `u`.`userId` = `itd`.`userId`
LEFT JOIN `orders` `odr` ON `odr`.`itemId` = `itd`.`itemId`
ORDER BY `odr`.`orderId` DESC
ERROR - 2020-09-04 15:46:27 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/dailyest/public_html/dailyestore/application/models/Api_model.php 356
ERROR - 2020-09-04 16:32:20 --> Query error: Unknown column 'itd.userId' in 'on clause' - Invalid query: SELECT `odr`.*, `itd`.*, `u`.*
FROM `itemdetails` `itd`
LEFT JOIN `users` `u` ON `u`.`userId` = `itd`.`userId`
LEFT JOIN `orders` `odr` ON `odr`.`itemId` = `itd`.`itemId`
ORDER BY `odr`.`orderId` DESC
ERROR - 2020-09-04 16:32:20 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/dailyest/public_html/dailyestore/application/models/Api_model.php 356
ERROR - 2020-09-04 16:32:22 --> Query error: Unknown column 'itd.userId' in 'on clause' - Invalid query: SELECT `odr`.*, `itd`.*, `u`.*
FROM `itemdetails` `itd`
LEFT JOIN `users` `u` ON `u`.`userId` = `itd`.`userId`
LEFT JOIN `orders` `odr` ON `odr`.`itemId` = `itd`.`itemId`
ORDER BY `odr`.`orderId` DESC
ERROR - 2020-09-04 16:32:22 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/dailyest/public_html/dailyestore/application/models/Api_model.php 356
ERROR - 2020-09-04 16:32:24 --> Query error: Unknown column 'itd.userId' in 'on clause' - Invalid query: SELECT `odr`.*, `itd`.*, `u`.*
FROM `itemdetails` `itd`
LEFT JOIN `users` `u` ON `u`.`userId` = `itd`.`userId`
LEFT JOIN `orders` `odr` ON `odr`.`itemId` = `itd`.`itemId`
ORDER BY `odr`.`orderId` DESC
ERROR - 2020-09-04 16:32:24 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/dailyest/public_html/dailyestore/application/models/Api_model.php 356
ERROR - 2020-09-04 16:32:25 --> Query error: Unknown column 'itd.userId' in 'on clause' - Invalid query: SELECT `odr`.*, `itd`.*, `u`.*
FROM `itemdetails` `itd`
LEFT JOIN `users` `u` ON `u`.`userId` = `itd`.`userId`
LEFT JOIN `orders` `odr` ON `odr`.`itemId` = `itd`.`itemId`
ORDER BY `odr`.`orderId` DESC
ERROR - 2020-09-04 16:32:25 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/dailyest/public_html/dailyestore/application/models/Api_model.php 356
ERROR - 2020-09-04 16:33:54 --> Query error: Unknown column 'itd.userId' in 'on clause' - Invalid query: SELECT `odr`.*, `itd`.*, `u`.*
FROM `itemdetails` `itd`
LEFT JOIN `users` `u` ON `u`.`userId` = `itd`.`userId`
LEFT JOIN `orders` `odr` ON `odr`.`itemId` = `itd`.`itemId`
ORDER BY `odr`.`orderId` DESC
ERROR - 2020-09-04 16:33:54 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/dailyest/public_html/dailyestore/application/models/Api_model.php 356
ERROR - 2020-09-04 16:34:00 --> Query error: Unknown column 'itd.userId' in 'on clause' - Invalid query: SELECT `odr`.*, `itd`.*, `u`.*
FROM `itemdetails` `itd`
LEFT JOIN `users` `u` ON `u`.`userId` = `itd`.`userId`
LEFT JOIN `orders` `odr` ON `odr`.`itemId` = `itd`.`itemId`
ORDER BY `odr`.`orderId` DESC
ERROR - 2020-09-04 16:34:00 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/dailyest/public_html/dailyestore/application/models/Api_model.php 356
ERROR - 2020-09-04 17:08:09 --> 404 Page Not Found: Api/subItemList
ERROR - 2020-09-04 17:08:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/dailyest/public_html/dailyestore/application/controllers/Api.php:1) /home/dailyest/public_html/dailyestore/system/core/Common.php 570
ERROR - 2020-09-04 17:11:48 --> 404 Page Not Found: Api/subItemList
ERROR - 2020-09-04 17:11:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/dailyest/public_html/dailyestore/application/controllers/Api.php:1) /home/dailyest/public_html/dailyestore/system/core/Common.php 570
ERROR - 2020-09-04 17:13:29 --> 404 Page Not Found: Api/subItemList
ERROR - 2020-09-04 17:13:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/dailyest/public_html/dailyestore/application/controllers/Api.php:1) /home/dailyest/public_html/dailyestore/system/core/Common.php 570
ERROR - 2020-09-04 17:14:00 --> 404 Page Not Found: Api/subItemList
ERROR - 2020-09-04 17:14:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/dailyest/public_html/dailyestore/application/controllers/Api.php:1) /home/dailyest/public_html/dailyestore/system/core/Common.php 570
ERROR - 2020-09-04 17:14:12 --> 404 Page Not Found: Api/subItemList
ERROR - 2020-09-04 17:14:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/dailyest/public_html/dailyestore/application/controllers/Api.php:1) /home/dailyest/public_html/dailyestore/system/core/Common.php 570
ERROR - 2020-09-04 17:14:36 --> 404 Page Not Found: Api/subItemList
ERROR - 2020-09-04 17:14:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/dailyest/public_html/dailyestore/application/controllers/Api.php:1) /home/dailyest/public_html/dailyestore/system/core/Common.php 570
ERROR - 2020-09-04 17:16:15 --> 404 Page Not Found: Api/subItemList
ERROR - 2020-09-04 17:16:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/dailyest/public_html/dailyestore/application/controllers/Api.php:1) /home/dailyest/public_html/dailyestore/system/core/Common.php 570
ERROR - 2020-09-04 17:17:34 --> 404 Page Not Found: Api/subItemList
ERROR - 2020-09-04 17:17:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/dailyest/public_html/dailyestore/application/controllers/Api.php:1) /home/dailyest/public_html/dailyestore/system/core/Common.php 570
ERROR - 2020-09-04 17:20:31 --> 404 Page Not Found: Api/subItemList
ERROR - 2020-09-04 17:20:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/dailyest/public_html/dailyestore/application/controllers/Api.php:1) /home/dailyest/public_html/dailyestore/system/core/Common.php 570
ERROR - 2020-09-04 17:20:39 --> 404 Page Not Found: Api/loginData
ERROR - 2020-09-04 17:20:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/dailyest/public_html/dailyestore/application/controllers/Api.php:1) /home/dailyest/public_html/dailyestore/system/core/Common.php 570
ERROR - 2020-09-04 17:20:52 --> 404 Page Not Found: Api/listUser
ERROR - 2020-09-04 17:20:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/dailyest/public_html/dailyestore/application/controllers/Api.php:1) /home/dailyest/public_html/dailyestore/system/core/Common.php 570
ERROR - 2020-09-04 17:47:55 --> Severity: Notice --> Undefined index: subName /home/dailyest/public_html/dailyestore/application/controllers/Api.php 476
ERROR - 2020-09-04 17:47:55 --> Severity: Notice --> Undefined index: itemName /home/dailyest/public_html/dailyestore/application/controllers/Api.php 477
ERROR - 2020-09-04 17:47:55 --> Severity: Notice --> Undefined index: description /home/dailyest/public_html/dailyestore/application/controllers/Api.php 478
ERROR - 2020-09-04 17:47:55 --> Severity: Notice --> Undefined index: quantity /home/dailyest/public_html/dailyestore/application/controllers/Api.php 479
ERROR - 2020-09-04 17:47:55 --> Severity: Notice --> Undefined index: price /home/dailyest/public_html/dailyestore/application/controllers/Api.php 480
ERROR - 2020-09-04 17:47:55 --> Severity: Notice --> Undefined index: status /home/dailyest/public_html/dailyestore/application/controllers/Api.php 481
ERROR - 2020-09-04 17:47:55 --> Severity: Notice --> Undefined variable: target_file /home/dailyest/public_html/dailyestore/application/controllers/Api.php 482
ERROR - 2020-09-04 17:47:55 --> Severity: Notice --> Undefined index: createdBy /home/dailyest/public_html/dailyestore/application/controllers/Api.php 483
ERROR - 2020-09-04 17:47:55 --> Query error: Column 'subName' cannot be null - Invalid query: INSERT INTO `itemdetails` (`typeId`, `subId`, `itemTypeName`, `subName`, `itemName`, `description`, `quantity`, `price`, `status`, `image`, `createdBy`) VALUES ('1', '1', 'Food', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)
ERROR - 2020-09-04 17:50:38 --> Severity: Notice --> Undefined index: subName /home/dailyest/public_html/dailyestore/application/controllers/Api.php 476
ERROR - 2020-09-04 17:50:38 --> Query error: Column 'subName' cannot be null - Invalid query: INSERT INTO `itemdetails` (`typeId`, `subId`, `itemTypeName`, `subName`, `itemName`, `description`, `quantity`, `price`, `status`, `image`, `createdBy`) VALUES ('1', '1', 'Food', NULL, 'xcvxvfvf', 'cbcbb', '350', '125520', '1', 'uploads/itemsimg006 (1).jpg', '1')
ERROR - 2020-09-04 17:54:18 --> Severity: Notice --> Undefined variable: _FILESbasename /home/dailyest/public_html/dailyestore/application/controllers/Api.php 427
ERROR - 2020-09-04 17:54:18 --> Severity: error --> Exception: Function name must be a string /home/dailyest/public_html/dailyestore/application/controllers/Api.php 427
ERROR - 2020-09-04 17:54:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/dailyest/public_html/dailyestore/system/core/Exceptions.php:271) /home/dailyest/public_html/dailyestore/system/core/Common.php 570
