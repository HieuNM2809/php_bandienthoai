<?php 
    $level ="../";
    require_once ($level."config.php");
    require_once ($level."lib/db.php");
    if($_REQUEST['prodID']){
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
                echo "Cập nhật ảnh thất bại";
            }
        
        // -----------------------------THÊM CSDL-----------------------------------
        if(isset($_REQUEST['prodID']) && $uploadOk == 1){

            // Update prod
            $strProd = 
            "update `product` SET `prodName`=?,
            `prodPrice`=?,`prodSL`=?,
            `prodReleaseYear`=?,`prodDescription`=?,
            `provID`=?,`catID`=? 
            WHERE  `prodID`=?";

            $parans_Prod = [];
            array_push($parans_Prod,$_REQUEST['prodName'],$_REQUEST['prodPrice'],$_REQUEST['prodSL']);
            array_push($parans_Prod,$_REQUEST['prodReleaseYear'],$_REQUEST['prodDescription'],$_REQUEST['provID']);
            array_push($parans_Prod,$_REQUEST['catID'] ,$_REQUEST['prodID']);
            
            $resultProd = DP::run_query($strProd,$parans_Prod,1);
            //Update Img
            $strImg = "update `images` SET `img1`=? WHERE prodID =?";
            $parans_Img = [];
            array_push($parans_Img,$_FILES["img"]["name"],$_REQUEST['prodID']);

            $result_Img = DP::run_query($strImg,$parans_Img,1);

            //Update Color
            $strColor ="update `color` SET `color1`=? WHERE prodID = ?";
            $parans_Color = [];
            array_push($parans_Color,$_REQUEST["color"] ,$_REQUEST['prodID']);

            $result_Color = DP::run_query($strColor,$parans_Color,1);

            
            if( $result_Img  ==true && $result_Color == true &&  $resultProd == true){  
                    echo '<script language="javascript">';
                    echo 'alert("Sửa sản phẩm thành công");';
                    echo ' window.location="../pages/ListFilm.php";';
                    echo '</script>';
            }else{
                echo '<script language="javascript">';
                echo 'alert("Sửa sản phẩm thất bại");';
                echo ' window.location="../pages/ListFilm.php";';
                echo '</script>';
            }
        }else{
            echo '<script language="javascript">';
            echo 'alert("Sửa sản phẩm thất bại");';
            echo ' window.location="../pages/ListFilm.php";';
            echo '</script>';
        }
    }else{
        header("location:../pages/ListFilm.php");
    } 
?>
