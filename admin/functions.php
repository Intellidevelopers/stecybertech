<?php 
session_start();

require 'config.php';

function validate($inputData){
    global $conn;
    $validatedData = mysqli_real_escape_string($conn, $inputData);
    return trim($validatedData);
}

function redirect($url, $status){
    $_SESSION['status'] = $status;
    header('location: '.$url);
    exit(0);
}

function alertMessage(){
    if(isset($_SESSION['status'])){
        echo '<div class="alert alert-success">
        <h4>'.$_SESSION['status'].'</h4>
        </div>';
        unset($_SESSION['status']);
    }
}

function checkParamId($paramType){
    if(isset($_GET[$paramType])){
        if($_GET[$paramType] != null){
            return $_GET[$paramType];
        }else{
            return 'No Id Found';
        }
    }else{
        return 'No id given';
    }
}

function getAll($tableName){
    global $conn;

    $table = validate($tableName);

    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn, $query);
    return $result;
}

function getById($tableName, $id){
    global $conn;

    $table = validate($tableName);
    $id = validate($id);

    $query = "SELECT * FROM $table WHERE id='$id' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result){
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $response = [
                'status' => 200,
                'message' => 'Data Fetched Successfully',
                'data' => $row
            ];
            return $response;
        }else{
            $response = [
                'status' => 404,
                'message' => 'No Record Found'
            ];
            return $response;
        }
    }else{
            $response = [
                'status' => 500,
                'message' => 'Something Went Wrong'
            ];
            return $response;
    }
}

function deleteQuery($tableName, $id){
    global $conn;

    $table = validate($tableName);
    $id = validate($id);
    $query = "DELETE FROM $table WHERE id='$id' LIMIT 1";
    $result = mysqli_query($conn, $query);
    return $result;
}

function getTotalStudents(){
    global $conn;
    $query = "SELECT COUNT(*) AS total_students FROM users"; // Assuming 'customers' is the name of your users table
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    return $row['total_students'];
}

function getTotalCourse(){
    global $conn;
    $query = "SELECT COUNT(*) AS total_course FROM course"; // Assuming 'customers' is the name of your users table
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    return $row['total_course'];
}

function getTotalPendingCourses(){
    global $conn;
    $query = "SELECT COUNT(*) AS total_pendingcourses FROM course WHERE status = 'published'"; // Replace 'status' with your actual column name
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row['total_pendingcourses'];
    } else {
        // Handle query error if needed
        return 0;
    }
}
