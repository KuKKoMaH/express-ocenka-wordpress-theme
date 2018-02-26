<?
/*
 * template name: report
 */

function parseHeaders($headers)
{
  $head = array();
  foreach ($headers as $k => $v) {
    $t = explode(':', $v, 2);
    if (isset($t[1]))
      $head[trim($t[0])] = trim($t[1]);
    else {
      $head[] = $v;
      if (preg_match("#HTTP/[0-9\.]+\s+([0-9]+)#", $v, $out))
        $head['reponse_code'] = intval($out[1]);
    }
  }
  return $head;
}

error_reporting(0);
$opts = [
  "http" => [
    "method" => "GET",
    "header" => "token: " . explode('|', $_COOKIE['auth'])[0] . "\r\n"
  ]
];

$context = stream_context_create($opts);

$id = $_GET['id'];
$url = get_field('api_domain', 'options') . 'order/' . $id . '/report';
$resp = file_get_contents($url, false, $context);
if (!$resp) {
//  header("HTTP/1.0 404 Not Found");
//  echo '<h1>Сертификат не найден</h1>';
  include get_404_template();
  die();
}

$headers = parseHeaders($http_response_header);
header('Content-type: ' . $headers['Content-Type']);
header('Content-disposition: ' . $headers['Content-disposition']);
echo $resp;
