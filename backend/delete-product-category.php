<?php
    include_once('config.php');
    $data = [];
    if(!$conn){
            $data['db'] ="Connection Error";
            die("Connection failed: ");
            echo json_encode($data);
    }else{
                if($_GET['id']){
                    $input  =   json_decode(file_get_contents('php://input'),true);
                    $id     =   $_GET['id'];
                    $result =  mysqli_query($conn, "DELETE FROM tbl_category WHERE id=$id");
                    if(mysqli_num_rows($result) >0){
                            $data['message'] ="Product Category Are Deleted";
                            $data['status'] ="200";
                            echo json_encode($data);
                    }else{
                            $data['message'] ="Product Id Not Exist";
                            $data['status'] ="500";
                            echo json_encode($data);
                    }
                }else{
                    $data['message'] ="Problem In Id?";
                    echo json_encode($data);
                }
        }
?>