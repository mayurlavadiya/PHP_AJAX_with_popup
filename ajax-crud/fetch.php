<?php

$conn = mysqli_connect("localhost","root","","phpajax");

$query = "SELECT * FROM stud_detail";
$query_run = mysqli_query($conn, $query);
$result_array = []; // create an array

if(mysqli_num_rows($query_run) > 0)
{
    foreach ($query_run as $row) 
    {
        array_push($result_array, $row); // row data ne array ma eva mate function array_push use
    }
    header('content-type: application/json');
    echo json_encode($result_array);
}
else
{
    echo "Record not found !";
}

?>