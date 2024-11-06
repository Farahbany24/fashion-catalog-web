<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Product</title>
    
</head>

<body>

    <form action="data.php" enctype="multipart/form-data" method="POST" >
        <!-- input nama : single line text input  -->
        <center>
            <h4>Input Data Product</h4>
                <table>
                    <tr>
                        <td>
                            Name
                        </td>
                        <td>
                            <input type="text" placeholder="Name" name="name" value="" ></br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Description
                        </td>
                        <td>
                            <textarea type="text" placeholder="Description" name="description" id="" cols="30" rows="10"></textarea><br/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Price
                        </td>
                        <td>
                            <input type="number" placeholder="Price" name="price" value="" ><br/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Brand_id
                        </td>
                        <td>
                            <select name="Brand_id" id="">
                                <option value="0">--Pilih Brand--</option>
                                <option value="1">Converse</option>
                                <option value="2">Nike</option>
                                <option value="3">New Balance</option>
                                <option value="4">Onitsuka Tiger</option>
                                <option value="5">Adidas</option>
                                <option value="6">Polo Ralph</option>
                            </select> <br/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Category_id
                        </td>
                        <td>
                            <select name="category_id" id="">
                                <option value="0">--Pilih Category--</option>
                                <option value="1">Men</option>
                                <option value="2">Women</option>
                                <option value="3">Kids</option>
                            </select> <br/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Image
                        </td>
                        <td>
                        <input type="file" name="image" placeholder="Image" id=""><br/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                        <button>Submit</button>
                        </td>
                    </tr>
                </table>
        </center>
    </form>
</body>
</html>