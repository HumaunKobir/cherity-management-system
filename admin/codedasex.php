<?php

require( 'dbcon.php');

if(isset($_POST['save_student']))
{
    $years = mysqli_real_escape_string($con, $_POST['years']);
    $months = mysqli_real_escape_string($con, $_POST['months']);
    $date = mysqli_real_escape_string($con, $_POST['datex']);
    $time = mysqli_real_escape_string($con, $_POST['timex']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    
    

    if($years == NULL || $months == NULL || $date == NULL || $time == NULL || $name == NULL || $email == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query = "INSERT INTO expension_tb (yearss,months,date_ex,time_ex,name_ex,money_ex) VALUES ('$years','$months','$date','$time','$name','$email')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => ' Created Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => ' Not Created'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $years = mysqli_real_escape_string($con, $_POST['years']);
    $months = mysqli_real_escape_string($con, $_POST['months']);
    $date = mysqli_real_escape_string($con, $_POST['datex']);
    $time = mysqli_real_escape_string($con, $_POST['timex']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    
    

    if($years == NULL || $months == NULL || $date == NULL || $time == NULL || $name == NULL || $email == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query = "UPDATE expension_tb SET yearss='$years',months='$months',date_ex='$date',time_ex='$time', name_ex='$name', money_ex='$email' 
                WHERE id='$student_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => ' Updated Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => ' Not Updated'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_GET['student_id']))
{
    $student_id = mysqli_real_escape_string($con, $_GET['student_id']);

    $query = "SELECT * FROM expension_tb WHERE id='$student_id'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $student = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => ' Fetch Successfully by id',
            'data' => $student
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => ' Id Not Found'
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $query = "DELETE FROM expension_tb WHERE id='$student_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => ' Deleted Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => ' Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
}

?>