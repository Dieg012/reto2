<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <div id="insertForm">
        <form action="product" method="POST">
            <ul>
                <li>
                    <h4 class="formh4">Shop name</h4>
                    <input type="checkbox" id="ZAR" name="Zara" value="Zara">
                    <label for="Zara">Zara</label>  
                    <input type="checkbox" id="NIK" name="Nike" value="Nike">
                    <label for="Nike">Nike</label>  
                    <input type="checkbox" id="BTW" name="BTwin" value="BTwin">
                    <label for="BTwin">BTwin</label>
                </li>
                <li> 
                    <h4>Product name</h4> 
                    <input type="text" name='name'>
                </li>
                <li>
                    <h4>Description</h4> 
                    <textarea></textarea>
                </li>
                <li>
                    <h4>Price</h4> 
                    <input type="text">
                </li>
                <li>
                    <h4>Stock</h4>
                    <input type="number" min="0">
                </li>
                <li>
                    <h4>Image</h4> 
                    <input type="file">
                </li>
                <li>
                    <h4>Price</h4> 
                    <input type="text">
                </li>
                <li>
                    <input id="send" type="submit" value="Add Product">
                </li>
            </ul>
        </form>
    </div>
    <?php
        use App\Controllers\addProduct;
        if($_SERVER['METHOD_REQUEST']) {
            $name = $_POST['name'];
            addProduct::
        }        
    ?>
</body>
</html>