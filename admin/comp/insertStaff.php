<?php 
    $level ="../";
    require_once ($level."config.php");
    require_once ($level."lib/db.php");
if($_REQUEST['suserLogin']){
    //----------------------UPFILE -------------------------------------- 
    $target_file = "../assets/images/".basename($_FILES["simage"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $uploadOk = 1;
    // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        if(isset($_FILES["simage"]) && $_FILES["simage"]["error"]==0 &&$uploadOk == 1 ){
            move_uploaded_file($_FILES["simage"]["tmp_name"],"../assets/images/users/".$_FILES["simage"]["name"]);
        }else{
            echo "Thêm ảnh thất bại";
        }
    // -----------------------------THÊM CSDL-----------------------------------
        if(isset($_REQUEST['suserLogin']) && $uploadOk == 1){
            // Insert bẳng Staff Login 
            $strinsLogin = 
            "insert into `staff_login`(`LoginID`,`LoginUserName`, `LoginPassword`, `LoginStatus`)
            VALUES (?,?,?,1);";
            $paras = [];
            array_push($paras,$_REQUEST['sID'],$_REQUEST['suserLogin'],$_REQUEST['spass']);
            $insLogin = DP::run_query($strinsLogin,$paras,1);

            // insert staff
            $strinsStaff = 
            "insert into `staff` ( `staName`, `staBirthday`, `staAddress`, `staImg`, `staPhone`, `staSex`, `staDescription`, `staStatus`, `staSalary`, `staPosition`, `LoginID`)  
            VALUES(?,?,?,?,?,?,?,?,?,?,?)";
            $paranstaff = [];
            array_push($paranstaff,$_REQUEST['sname'],$_REQUEST['sdate'],$_REQUEST['saddress']);
            array_push($paranstaff,$_FILES["simage"]["name"],$_REQUEST['sphone'],$_REQUEST['sSex']);
            array_push($paranstaff,$_REQUEST['sDescription'],1,$_REQUEST['ssalary']);
            array_push($paranstaff,$_REQUEST['sposition'],$_REQUEST['sID']);

            $insStaff = DP::run_query($strinsStaff,$paranstaff,   1);
            if($insLogin == true && $insStaff  ==true){  
                echo '<script language="javascript">';
                echo 'alert("Đã thêm nhân viên thành công");';
                echo ' window.location="../pages/CreateStaff.php";';
                echo '</script>';
            }
        }else{
            echo '<script language="javascript">';
            echo 'alert("Thêm nhân viên thất bại");';
            echo ' window.location="../pages/CreateStaff.php";';
            echo '</script>';
        }
}else{
    header("location:../pages/CreateStaff.php");
} 
?>