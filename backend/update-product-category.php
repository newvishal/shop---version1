<?php
    include_once('config.php');
    $data = [];
    if(!$conn){
            $data['db'] ="Connection Error";
            die("Connection failed: ");
            echo json_encode($data);
    }else{
        $input = json_decode(file_get_contents('php://input'),true);
        $category_name     = $_POST["category_name"];
        $status            = $_POST["status"];
        $created_dy        = '1';
        $id                = $_POST["hid"];
        $result = mysqli_query($conn, "UPDATE tbl_category SET category_name='$category_name',status='$status',created_dy='$created_dy' WHERE id='$id'");
        if($result){
            $data['status'] = "200";
            $data['message'] = "Data updated Successfully";
            echo json_encode($data);
        }else{
            $data['status'] = "500";
            $data['message'] = "Somthing Went Wrong!!";
            echo json_encode($data);
        }
    }
?>