<?php 
    $level ="../";
    require_once ($level."config.php");
    require_once ($level."lib/db.php");
if($_REQUEST['prodName']){
    //----------------------UPFILE -------------------------------------- 
    $target_file = "../assets/images/".basename($_FILES["img"]["name"]);
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
        if(isset($_FILES["img"]) && $_FILES["img"]["error"]==0 &&$uploadOk == 1 ){
            move_uploaded_file($_FILES["img"]["tmp_name"],"../assets/images/prod/".$_FILES["img"]["name"]);
        }else{
            echo "Thêm ảnh thất bại";
        }
    // -----------------------------THÊM CSDL-----------------------------------
      if(isset($_REQUEST['prodName']) && $uploadOk == 1){
            // Insert prod
            $strProd = 
            "insert INTO `product`(`prodName`, `prodPrice`, `prodSL`, `prodInit`, `prodReleaseYear`,
             `prodDescription`, `prodStatus`, `provID`, `catID`)
              VALUES (?,?,?,'đ',?,?,'1',?,?)";
            $parans_Prod = [];
            array_push($parans_Prod,$_REQUEST['prodName'],$_REQUEST['prodPrice'],$_REQUEST['prodSL']);
            array_push($parans_Prod,$_REQUEST['prodReleaseYear'],$_REQUEST['prodDescription'],$_REQUEST['provID']);
            array_push($parans_Prod,$_REQUEST['catID']);
            

            $resultProd = DP::run_query($strProd,$parans_Prod,1);

            //Insert Img

            $maxID_Prod = DP::run_query("select max(`prodID`) as 'maxID' FROM `product`",[],2); // lay ID sản phẩm mới thêm vào
            $strImg ="insert INTO `images`(`prodID`, `img1`)
             VALUES (?,?)";
            $parans_Img = [];
            array_push($parans_Img,$maxID_Prod[0]["maxID"],$_FILES["img"]["name"]);

            $result_Img = DP::run_query($strImg,$parans_Img,1);

            //Insert Color
             $strColor ="insert INTO `color`(`prodID`, `color1`) 
             VALUES (?,?)";
            $parans_Color = [];
            array_push($parans_Color,$maxID_Prod[0]["maxID"],$_REQUEST["color"]);

            $result_Color = DP::run_query($strColor,$parans_Color,1);

          
            if($maxID_Prod == true && $result_Img  ==true && $result_Color == true){  
                echo '<script language="javascript">';
                echo 'alert("Thêm sản phẩm thành công");';
                echo ' window.location="../pages/ListFilm.php";';
                echo '</script>';
            }
        }else{
            echo '<script language="javascript">';
            echo 'alert("Thêm sản phẩm thất bại");';
            echo ' window.location="../pages/ListFilm.php";';
            echo '</script>';
        }
}else{
    header("location:../pages/Order.php");
} 
?>

