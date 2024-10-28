<?php  
require 'functions.php';

$paramResult = checkParamId('id');
if(is_numeric($paramResult)){
    $courseId = validate($paramResult);

    $course = getById('course', $courseId);
    if($course){
        $courseDeleteRes = deleteQuery('course', $courseId);
        if($courseDeleteRes){
            redirect('my-course.php','Course Deleted Successfully');
        } else {
            redirect('my-course.php','Failed to delete course');
        }
    } else {
        redirect('my-course.php','course not found');
    }
} else {
    redirect('my-course.php',$paramResult);
}