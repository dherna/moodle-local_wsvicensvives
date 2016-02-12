<?php

ini_set('display_errores', 1);
error_reporting(E_ALL);

$token = 'eef7c82468df231d18c51f822e49f930';
$domainname = 'http://localhost/vicens';

// REST RETURNED VALUES FORMAT.
$restformat = 'json';

// PARAMETERS - NEED TO BE CHANGED IF YOU CALL A DIFFERENT FUNCTION.
$params = array();
$params['courseid'] = 81;
$params['userid'] = 10;
$params['ltiidnumber'] = 'lol';
$params['grade'] = 22;


// REST CALL.
header('Content-Type: text/plain');

$functionname = 'local_wsvicensvives_get_lti_grade';
$restformat = 'json';
$serverurl = $domainname . '/webservice/rest/server.php'. '?wstoken=' . $token . '&wsfunction='.$functionname;
echo 'Get Grades

';
require_once('./curl.php');
$curl = new curl;

$restformat = ($restformat == 'json')?'&moodlewsrestformat=' . $restformat:'';
$resp = $curl->post($serverurl . $restformat, $params);
var_dump($resp);