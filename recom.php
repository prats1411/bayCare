<?php

require_once "admin/config.php";

$latest = $conn->prepare("
select id as id, `name` as name, `pr` as pr, `link` as link, `text` as text, `image` as image, `work_mobile` as work_mobile,
`qualification` as qualification, `prefecture` as prefecture, `service_type` as service_type, `job_category` as job_category,
`additional_info` as additional_info, `additional_text` as additional_text from `companies` ORDER BY id DESC LIMIT 2");
$latest->execute();
$companiesLatest = $latest->fetchAll();

$popular = $conn->prepare("
select id as id, `name` as name, `pr` as pr, `link` as link, `text` as text, `image` as image, `work_mobile` as work_mobile,
`qualification` as qualification, `prefecture` as prefecture, `service_type` as service_type, `job_category` as job_category,
`additional_info` as additional_info, `additional_text` as additional_text, `count` as counts from `companies` ORDER BY counts DESC LIMIT 2");
$popular->execute();
$companiesPopular = $popular->fetchAll();