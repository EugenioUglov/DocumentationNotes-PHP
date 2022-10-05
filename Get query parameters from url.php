$url = "https://some-site.php?q=createlastquiz";
$url_components = parse_url($url);

$parsed_query = parse_str($url_components['query'], $params);

var_dump($params);
