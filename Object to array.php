$object = new stdClass();
$object->test ="test";

// !!!
$arr = json_decode(json_encode ( $object ) , true);

echo $arr["test"];
