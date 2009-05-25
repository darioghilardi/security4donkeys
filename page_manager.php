<?php
$page_array = array(
  'home' => 'lessons/main.php',
  'xss_1' => 'lessons/xss_1.php',
  'xss_2' => 'lessons/xss_2.php',
  'xss_3' => 'lessons/xss_3.php',
  'xss_4' => 'lessons/xss_4.php',
  'xss_5' => 'lessons/xss_5.php',
  'sqlinjection_1' => 'lessons/sqlinjection_1.php',
  'sqlinjection_2' => 'lessons/sqlinjection_2.php',
  'csrf' => 'lessons/csrf.php',
  'codequality' => 'lessons/codequality.php',
  'maliciousfileexecution' => 'lessons/maliciousfileexecution.php',
  'failuretorestricturlaccess' => 'lessons/failuretorestricturlaccess.php'
);

if (!isset($_GET['p']))
  $included = $page_array['home'];
else {
  switch ($_GET['p']):
    case 'xss_1': $included = $page_array['xss_1'];
    break;
    case 'xss_2': $included = $page_array['xss_2'];
    break;
    case 'xss_3': $included = $page_array['xss_3'];
    break;
    case 'xss_4': $included = $page_array['xss_4'];
    break;
    case 'xss_5': $included = $page_array['xss_5'];
    break;
    case 'sqlinjection_1': $included = $page_array['sqlinjection_1'];
    break;
    case 'sqlinjection_2': $included = $page_array['sqlinjection_2'];
    break;
    case 'csrf': $included = $page_array['csrf'];
    break;
    case 'codequality': $included = $page_array['codequality'];
    break;
    case 'maliciousfileexecution': $included = $page_array['maliciousfileexecution'];
    break;
    case 'impropererrorhandling': $included = $page_array['impropererrorhandling'];
    break;
    case 'failuretorestricturlaccess': $included = $page_array['failuretorestricturlaccess'];
    break;
    default: $included = $page_array['home'];
    break;
   endswitch;
}

?>
