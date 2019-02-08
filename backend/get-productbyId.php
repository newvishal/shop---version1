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
                $sql    =   mysqli_query($conn, "SELECT * FROM tbl_category WHERE id='$id'");
                $rows   =   array();
                while($r = mysqli_fetch_array($sql)) {
                    $rows[] = $r;
                }
                echo json_encode($rows);
            }else{
                $data['message'] ="Problem In Id?";
                echo json_encode($data);
            }
    }
?>