<?php

require_once "admin/config.php";

$latest = $conn->prepare("
select id as id, `name` as name, `pr` as pr, `link` as link, `text` as text, `image` as image, `work_mobile` as work_mobile,
`qualification` as qualification, `prefecture` as prefecture, `service_type` as service_type, `job_category` as job_category,
`additional_info` as additional_info, `additional_text` as additional_text from `companies` WHERE `show` = 1 ORDER BY id DESC LIMIT 3");
$latest->execute();
$companiesLatest = $latest->fetchAll();

$popular = $conn->prepare("
select id as id, `name` as name, `pr` as pr, `link` as link, `text` as text, `image` as image, `work_mobile` as work_mobile,
`qualification` as qualification, `prefecture` as prefecture, `service_type` as service_type, `job_category` as job_category,
`additional_info` as additional_info, `additional_text` as additional_text, `count` as counts from `companies` WHERE `show` = 1 ORDER BY counts DESC LIMIT 3");
$popular->execute();
$companiesPopular = $popular->fetchAll();