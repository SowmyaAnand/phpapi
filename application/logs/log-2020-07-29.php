<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-29 15:17:26 --> Query error: Table 'dailyestore.questions' doesn't exist - Invalid query: SELECT q.*,qr.status,qr.questionnaire FROM `questions` as q left join questionnaire as qr on(qr.qrId = q.qrId) WHERE qr.status = '1' AND q.qId > '' ORDER BY qr.`qrId` DESC
ERROR - 2020-07-29 15:17:26 --> Severity: error --> Exception: Call to a member function result_array() on boolean C:\xampp\htdocs\dailyestore\application\views\questionnaire.php 52
ERROR - 2020-07-29 15:17:38 --> Severity: Compile Error --> Cannot declare class First_model, because the name is already in use C:\xampp\htdocs\dailyestore\application\models\Api_model.php 26
