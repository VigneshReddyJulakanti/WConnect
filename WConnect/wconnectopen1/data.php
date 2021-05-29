
<?php

header('Access-Control-Allow-Origin: *');

header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("sql310.epizy.com", "epiz_28667295", "8WHB0w5OG5", "epiz_28667295_workersinfo");

$result = $conn->query("SELECT fullName,idd,workPlace,district,state,phoneNo1,phoneNo2,worksector,costPerHour FROM workersdetails");

$outp = "[";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "[") {$outp .= ",";}
    $outp .= '{"fullName":"'  . $rs["fullName"] . '",';
    $outp .= '"idd":"'   . $rs["idd"]        . '",';

    $outp .= '"workPlace":"'   . $rs["workPlace"]        . '",';
    $outp .= '"district":"'. $rs["district"]     . '",';
    $outp .= '"state":"'   . $rs["state"]        . '",';
    $outp .= '"phoneNo1":"'. $rs["phoneNo1"]     . '",';
    $outp .= '"phoneNo2":"'   . $rs["phoneNo2"]        . '",';
    $outp .= '"worksector":"'. $rs["worksector"]     . '",'; 
    $outp .= '"costPerHour":"'. $rs["costPerHour"]     . '"}';
}
$outp .="]";

$conn->close();

echo($outp);
return $outp;

?>

