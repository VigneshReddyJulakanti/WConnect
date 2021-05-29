
<?php

header('Access-Control-Allow-Origin: *');

header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("sql310.epizy.com", "epiz_28667295", "8WHB0w5OG5", "epiz_28667295_workersinfo");

$result = $conn->query("SELECT username,password,name,id FROM usersinfo");

$outp = "[";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "[") {$outp .= ",";}
    $outp .= '{"username":"'  . $rs["username"] . '",';
    $outp .= '"password":"'   . $rs["password"]        . '",';
    $outp .= '"name":"'   . $rs["name"]        . '",';

    $outp .= '"id":"'. $rs["id"]     . '"}';
}
$outp .="]";

$conn->close();

echo($outp);
return $outp;

?>

