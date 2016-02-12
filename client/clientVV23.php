<?php

ini_set('display_errores', 1);
error_reporting(E_ALL);

$token = '9be257478df8fec35a375c1a0f999d9d';
$domainname = 'http://moodle23.vicensvivesdigital.com';

// REST RETURNED VALUES FORMAT.
$restformat = 'json';

// PARAMETERS - NEED TO BE CHANGED IF YOU CALL A DIFFERENT FUNCTION.
$params = array();
$params['courseid'] = 44;
$params['userid'] = 11;
$params['ltiidnumber'] = 'question_71810';
$params['grade'] = 33;


// REST CALL.
header('Content-Type: text/plain');

$functionname = 'local_wsvicensvives_get_lti_grade';
$restformat = 'json';
$serverurl = $domainname . '/webservice/rest/server.php'. '?wstoken=' . $token . '&wsfunction='.$functionname;
echo 'Set Grades

';
require_once('./curl.php');
$curl = new curl;

$restformat = ($restformat == 'json')?'&moodlewsrestformat=' . $restformat:'';
$resp = $curl->post($serverurl . $restformat, $params);
var_dump($resp);