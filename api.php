<?php


//Creating Repository Pattern


include("repositorypattern.php");

$con = mysqli_connect("localhost","root","","vaccination_management_system");
$response = array();
if($con){
    header("Content-Type:json");
   $ApiData = new Repository($con);
   $Apiresult = $ApiData->Data();

   echo json_encode($Apiresult,JSON_PRETTY_PRINT);


}
else
{
    echo "Connection Failed";
}

?>