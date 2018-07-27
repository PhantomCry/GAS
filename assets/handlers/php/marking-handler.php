<?php 
// Fixed Issue of dots being replaced by underscore from
// https://stackoverflow.com/questions/68651/get-php-to-stop-replacing-characters-in-get-or-post-arrays
function getRealInput($source) {
  $pairs = explode("&", $source == 'POST' ? file_get_contents("php://input") : $_SERVER['QUERY_STRING']);
  $vars = array();
  foreach ($pairs as $pair) {
    $nv = explode("=", $pair);
    $name = urldecode($nv[0]);
    $value = urldecode($nv[1]);
    $vars[$name] = $value;
  }
  return $vars;
}

// Move Files to Past Events
for ($i=0; $i < count(array_keys(getRealInput('POST'))); $i++) {
  $file = array_keys(getRealInput('POST'))[$i];
  rename("../../images/events/Upcoming/$file", "../../images/events/Past/$file");
}
?>