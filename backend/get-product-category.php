<?php
    include_once('config.php');
    $data = [];
    if(!$conn){
            $data['db'] ="Connection Error";
            die("Connection failed: ");
            echo json_encode($data);
    }else{
        
        $query = "SELECT * FROM tbl_category";
        $result = mysqli_query($conn , $query);
        $rows = array();
        while($r = mysqli_fetch_array($result)) {
            $rows[] = $r;
        }
        echo json_encode($rows);
    }
?>