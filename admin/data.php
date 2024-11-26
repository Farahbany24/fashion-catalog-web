<?php
require '../config/config.php';

if (isset($_POST['submit'])) {

    // mengambil semua data dari form ke dalam variabel lokal
    $name = htmlspecialchars($_POST['name']); // mengambil data nama yang berasal dari form 
    $description = $_POST['description'];
    $price = $_POST['price'];
    $Brand_id = $_POST['Brand_id'];
    $Category_id = $_POST['Category_id'];
   
    $fileTmpPath = $_FILES['image']['tmp_name'];
    $fileName = $_FILES['image']['name'];
    $fileSize = $_FILES['image']['size'];
    $fileType = $_FILES['image']['type'];

    // variabel array associative 
    $data = [
        'name' =>  $name,
        'description' =>  $description,
        'price' =>  $price,
        'Brand_id' => $Brand_id,
        'Category_id' =>  $Category_id,
        'image' =>  $fileName
    ];

    $validasi = validasiData($data);

    if ($validasi == 0) {
        echo "data sudah lengkap siap di inputkan";
        $result = inputData($data, $koneksi);

        if ($result) {
            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];

            if (in_array($fileType, $allowedTypes)) {
                // Specify the target directory for uploads

                $uploadDir = $rootDir . '/upload/';
                $destinationPath = $uploadDir . basename($fileName);
                if (!move_uploaded_file($fileTmpPath, $destinationPath)) {
                    echo "Error moving the uploaded file.";
                }

                header("location:view.php");
            } else header("location:input_product.php?errno=1");
        } else {
            echo "data $validasi kurang";
        }
    }

}
else if(isset($_GET['del'])){
    $id = $_GET['del'] ?? null;

    if($id === null || !ctype_digit($id)){
        header("location:view.php?errno=3");
    }
    else {
        // function delete
        $result = delProduct($koneksi, $id);
        if($result) 
            header("location:view.php?success=1");
        else 
            header("location:view.php?errno=5");
    }
}

?>