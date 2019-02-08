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
        $sql = "INSERT INTO tbl_category (category_name,status,created_dy)
			 VALUES ('$category_name','$status','$created_dy')";
        $result = mysqli_query($conn,$sql);
        if($result){
            $data['status'] = "200";
            $data['message'] = "Data Added Successfully";
            echo json_encode($data);
        }else{
            $data['status'] = "500";
            $data['message'] = "Somthing Went Wrong!!";
            echo json_encode($data);
        }
    }
?>