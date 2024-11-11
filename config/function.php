<?php

function validasiData($data){

    foreach($data as $index => $value){
        $value = trim($value);
        if($value === '' || $value === 0 || $value === null || $value === false){
            return $index;
        }
    }
    return 0;
}

function inputData($data, $koneksi){
    $name = $data['name'];
    $description = $data['description'];
    $price = $data['price'];
    $Brand_id = $data['Brand_id'];
    $Category_id= $_POST['Category_id'];
    $image = $data['image'];
    $tanggal = time();

    $sql = "INSERT INTO product (name, description, price, brand_id, category_id, image, tanggal) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($koneksi, $sql);
    if($stmt === false) 
    {
        return "failed";
    }

    mysqli_stmt_bind_param($stmt, 'siiiisi', $judul, $pengarang, $penerbit, $tahun, $genre, $sinopsis, $tanggal);
    $result = mysqli_stmt_execute($stmt);

    if(!$result)
        return false;
    
    mysqli_stmt_close($stmt);
    return true;  
}