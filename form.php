<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="data.php" enctype="multipart/form-data" method="POST" >
        <h2>Input Data Product</h2>

        <!-- input nama : single line text input  -->
        Name : <input type="text" name="name" value="" ><br/>
        Description : <input type="text" name="description" id=""><br/>
        Price : <input type="number" name="prie" id=""><br/>
        Brand_id : <input type="text" name="brand_id" id=""> <br/>
        Tanggal Lahir : <input type="date" name="tgl_lahir" id=""><br/>
        Alamat : <textarea name="alamat" id="" cols="30" rows="10"></textarea>
        <br/>
        No Telp : <input type="number" name="no_telp" id=""><br/>
        Gender : <input type="radio" name="gender" id="" value=""> Laki 
                 <input type="radio" name="gender" id="" value=""> Perempuan
                 <br/>
        Hobi : <input type="checkbox" name="hobi1" id="" value=""> Membaca <br/>
        <input type="checkbox" name="hobi2" id="" value=""> berlari <br/>
        <input type="checkbox" name="hobi3" id="" value=""> tidur <br/>
        <input type="checkbox" name="hobi4" id="" value=""> main game <br/>
        Foto : <input type="file" name="foto" id=""><br/>

        <input type="submit" value="Input Data" name="inputData"> 
        <!-- <button type="submit">Inputkan</button> -->


    </form>
    
</body>
</html>