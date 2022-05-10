<?php
include "config.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $stmt = $conn->prepare("select * from citizen_qualification where qid=?");
    $stmt->bindParams(1, $id);
    $stmt->execute();
    $data = $stmt->fetch();

    $cv_file = 'media/'.$data['cv_filename'];
    $cl_file = 'media/'.$data['coverletter_filename'];
    $c_file = 'media/'.$data['certifi_filename'];

    if(file_exists($cv_file)){
        header('Content-Description: ', $data['description']);
        header('Content-Type: '.$data['type']);
        header('Content-Disposition: '.$data['disposition'].':cv_filename="'.basename($cv_file).'"');
        header("Cache-Control: public");
        readfile($cv_file);
        exit;
    }
    
    if(file_exists($cl_file)){
        header('Content-Description: ', $data['description']);
        header('Content-Type: '.$data['type']);
        header('Content-Disposition: '.$data['disposition'].':cv_filename="'.basename($cl_file).'"');
        header("Cache-Control: public");
        readfile($cl_file);
        exit;
    }

    if(file_exists($c_file)){
        header('Content-Description: ', $data['description']);
        header('Content-Type: '.$data['type']);
        header('Content-Disposition: '.$data['disposition'].':cv_filename="'.basename($c_file).'"');
        header("Cache-Control: public");
        readfile($c_file);
        exit;
    }
}


?>