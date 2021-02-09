<?php
//include ('Model/DBConfig.php');
include('Model/DBConfig.php');
$db = new Database();
$db->connect();

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = "";
}
$thanhcong = array();
switch ($action) {
    case 'add':
    {
        if (isset($_POST['add_user'])) {
            $hoten = $_POST['hoten'];
            $namsinh = $_POST['namsinh'];
            $quequan = $_POST['quequan'];
            if ($db->InsertData($hoten, $namsinh, $namsinh)) {
                $thanhcong[] = 'add_success';
                //echo "<p style='color: green; text-align: center'>Thêm thành công</p>";
            }


        }
        require_once('View/thanhvien/add_user.php');
        break;
    }
    case 'edit':
    {
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $tbltable = 'thanhvien';
            $dataId=$db->getDataId($tbltable,$id);
            if (isset($_POST['update_user'])) {
                //lấy dữ liệu từ view
                $hoten = $_POST['hoten'];
                $namsinh = $_POST['namsinh'];
                $quequan = $_POST['quequan'];
                //chuyển sang model
                if($db->updateData($id,$hoten,$namsinh,$quequan)){
                    header('location:index.php?controller=thanh-vien&action=list');
                }


            }

        }
        require_once('View/thanhvien/edit_user.php');
        break;
    }
    case 'delete':
    {
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $tbltable = 'thanhvien';
            if($db->Delete($id,$tbltable)){
                header('location:index.php?controller=thanh-vien&action=list');

            }
            else{
                header('location:index.php?controller=thanh-vien&action=list');
            }
        }
        break;
    }
    case 'list':{
        $tbltable = 'thanhvien';
        $data= $db->getAllData($tbltable);
        require_once ('View/thanhvien/list.php');
        break;
    }
    case 'tim-kiem':{
    if(isset($_GET['tukhoa'])){
        $tukhoa = $_GET['tukhoa'];
        $tbltable = 'thanhvien';
        $data_search=$db->searchData($tbltable,$tukhoa);

    }

        require_once ('View/thanhvien/seach_user.php');
        break;

    }


    default:
    {
        require_once('View/thanhvien/list.php');
        break;
    }
}
?>
