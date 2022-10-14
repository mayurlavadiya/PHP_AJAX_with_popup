<?php

$conn = mysqli_connect("localhost","root","","phpajax");

if (isset($_POST['checking_add']))
{
    $fname = $_POST['fname'];    
    $lname = $_POST['lname'];    
    $class = $_POST['class'];    
    $section = $_POST['section'];    

    $query = "INSERT INTO stud_detail (fname, lname, class, section) VALUES ('$fname','$lname','$class','$section')";
    $query_run = mysqli_query($conn,$query);

    if($query_run){
        echo $return = "Data inserted Successfully !";
    }
    else{
        echo $return = "Something went wrong !";
    }
}


// view data code from database fetch

if (isset($_POST['checking_view']))
{
    $stud_id = $_POST['stud_id'];
    $result_array = [];

    $query = "SELECT * FROM stud_detail WHERE id = '$stud_id'";
    $query_run = mysqli_query($conn, $query);

    if(mysqli_num_rows($query_run)> 0)
    {
        foreach ($query_run as $row) 
        {
            array_push($result_array, $row);
        }
        header('content-type: application/json');
        echo json_encode($result_array);
    }
    else
    {
        echo $return = "No record found !";
    }
}

// Edit data code 

if(isset($_POST['checking_edit']))
{
    $stud_id = $_POST['stud_id'];
    $result_array = [];

    $query = "SELECT * FROM stud_detail WHERE id = '$stud_id'";
    $query_run = mysqli_query($conn, $query);

    if(mysqli_num_rows($query_run)> 0)
    {
        foreach ($query_run as $row) 
        {
            array_push($result_array, $row);
        }
        header('content-type: application/json');
        echo json_encode($result_array); // array pass using json
    }
    else
    {
        echo $return = "No record found !";
    }
}

// UPdate data code 

if(isset($_POST['checking_update']))
{
    $id = $_POST['stud_id'];
    $fname = $_POST['fname'];    
    $lname = $_POST['lname'];    
    $class = $_POST['class'];    
    $section = $_POST['section']; 

    $queryupd = "UPDATE stud_detail SET fname='$fname', lname='$lname', class='$class', section='$section' WHERE id='$id'";
    $query_run_update = mysqli_query($conn, $queryupd);

    if($query_run_update)
    {
        echo $return = "Student Data Updated Successfully !";   
    }
    else
    {
        echo $return = "Unable to update data !";
    }
}

// Delete data code

if(isset($_POST['checking_delete']))
{
    $id = $_POST['stud_id'];

    $querydlt = "DELETE FROM stud_detail WHERE id='$id' ";
    $query_run_delete = mysqli_query($conn, $querydlt);

    if($query_run_delete)
    {
        echo $return = "Student data deleted successfully !";   // $return give response 
    }
    else
    {
        echo $return = "Unable to delete data !";
    }
}


?>

