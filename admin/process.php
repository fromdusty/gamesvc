<?php 
include "connect.php";

if(isset($_POST['action'])){
    //var_dump($_FILES);

    //echo $_FILES['thumbnail']['name'];
    //die();

    
    if($_POST['action'] == "add"){
        $product_name = $_POST['product_name'];
        $product_code = $_POST['product_code'];
        $thumbnail = $_FILES['thumbnail']['name'];
        $product_description = $_POST['product_description'];
        $product_status = $_POST['product_status'];
        $product_type = $_POST['product_type'];

        $dir = "img/";
        $tmpFile = $_FILES['thumbnail']['tmp_name'];

        move_uploaded_file($tmpFile, $dir.$thumbnail);


        $query = "INSERT INTO data_product VALUES (null, '$product_name', '$product_code','$thumbnail','$product_description', '$product_status', '$product_type')";
        $sql = mysqli_query($conn, $query);

        if($sql){
                header("Location: product.php");
        } else {
           echo mysqli_error($conn);
        }


        //echo $product_name." | ".$product_code." | ".$product_description." | ".$trxmode." | ".$thumbnail." | ".$product_status;
        //echo "Tambah data <a href='index.php'>[Home]</a>";
    } else if($_POST['action'] == "edit"){
          echo "Edit data <a href='index.php'>[Home]</a>";
          $id = $_POST['id_product'];
          $product_name = $_POST['product_name'];
        $product_code = $_POST['product_code'];
        $product_description = $_POST['product_description'];
        $product_status = $_POST['product_status'];
        $product_type = $_POST['product_type'];

        $queryShow = "SELECT * FROM data_product WHERE id = '$id';";
        $sqlShow = mysqli_query($conn, $queryShow);
        $result = mysqli_fetch_assoc($sqlShow);

        if($_FILES['thumbnail']['name'] == ""){
            $thumbnail = $result['thumbnail'];
        } else {
            $thumbnail = $_FILES['thumbnail']['name'];
            unlink("img/".$result['thumbnail']);
            move_uploaded_file($_FILES['thumbnail']['tmp_name'],  "img/".$_FILES['thumbnail']['name'] );
        }

        $query = "UPDATE data_product SET id = '$id', 
        product_name = '$product_name', 
        product_code = '$product_code', 
        product_description = '$product_description',
        product_status = '$product_status',
        product_type = '$product_type' ,
        thumbnail = '$thumbnail' WHERE id = '$id';";

        $sql = mysqli_query($conn, $query);
        header("Location: product.php");
    }
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $queryShow = "SELECT * FROM data_product WHERE id = '$id';";
    $sqlShow = mysqli_query($conn, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    //var_dump($result);

    unlink("img/".$result['thumbnail']);


    $query = "DELETE FROM data_product WHERE id = '$id';";
    $sql = mysqli_query($conn, $query);

    
    if($sql){
            header("Location: product.php");
    } else {
        echo mysqli_error($conn);
    }
      //echo "Hapus data <a href='index.php'>[Home]</a>";
}
?>