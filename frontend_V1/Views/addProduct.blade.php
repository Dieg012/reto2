<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<?php
    use App\Controllers\addProduct;
    function checkImg() {
        $fileDir = "imgs/";
        $file = $fileDir . basename($_FILES['file']['name']);
        $correct = true;
        $check = getimagesize($_FILES['file']['tmp_name']);
        if($check === false) {
            $correct = false;
        }
        else if(file_exists($file)) {
            $correct = false;
        }
        return $correct;
    }
    function validateForm() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            if(checkImg()) {
                $shopCod = $_COOKIE['shopCod'];
                $name = $_POST['productName'];
                $desc = $_POST['description'];
                $price = $_POST['price'];
                $stock = $_POST['stock'];
                $fileDir = "imgs/";
                $file = $fileDir . basename($_FILES['file']['name']);
                move_uploaded_file($_FILES['file']['tmp_name'], $file);
            }
            else {
                echo('Estas flipao');
            }
        }
    }
?>
<body>
    <div id="Form">
        <h3>Insert Product Form</h3>
            <div id="insertForm">
                <form action="addProduct" class="formulario" id="form" method='POST' enctype="multipart/form-data">
                    <!--Shop Group -->
                    
                    <div class="formulario_group " id="shop_group">
                        <label for="name" class="formulario_label">Shop name</label>
                        <div class="formulario_group_input">
                            <label for="ZAR">Zara</label>  
                            <input type="Radio" class="formulario_input_checbox" id="ZAR" name="radio" value="Zara">
                            <label for="NIK">Nike</label>  
                            <input type="Radio"  class="formulario_input_checbox" id="NIK" name="radio" value="Nike">
                            <label for="BTW">BTwin</label>
                            <input type="Radio" class="formulario_input_checbox" id="BTW" name="radio" value="BTwin">
                        </div>
                        <p class="formulario_input_error">Choose one shop please.</p>
                    </div>

                    	<!-- Name Group -->
                    <div class="formulario_group formulario_group_incorrect" id="name_group">
                        <label for="productName" class="formulario_label">Name of the Product</label>
                        <div class="formulario_group_input">
                            <input type="text" class="formulario_input" name="productName" id="productName" placeholder="name">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario_input_error">Write a name. Minimun 4 digits and maximun 30.</p>
                    </div>

                       	<!-- Description Group -->
                    <div class="formulario_group formulario_group_correct" id="description_group">
                        <label for="description" class="formulario_label">Description of the Product</label>
                        <div class="formulario_group_input">
                            <textarea type="text" class="formulario_input" name="description" id="description" placeholder="Write a short description"></textarea>
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario_input_error">Write a name. Minimun 4 digits and maximun 30.</p>
                    </div>

                    <!-- Price Group -->
                    <div class="formulario_group formulario_group_correct" id="price_group">
                        <label for="price" class="formulario_label">Price per unit</label>
                        <div class="formulario_group_input">
                            <input type="number" class="formulario_input" name="price" id="price" placeholder="Write a price" min="0">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario_input_error">Insert a price.</p>
                    </div>

                        <!-- Stock Group -->
                    <div class="formulario_group formulario_group_correct" id="stock_group">
                        <label for="stock" class="formulario_label">New Stock</label>
                        <div class="formulario_group_input">
                            <input type="number" class="formulario_input" name="stock" id="stock" min="0">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario_input_error">Insert a stock.</p>
                    </div>

                    <!-- Image Group -->
                    <div class="formulario_group formulario_group_correct" id="image_group">
                        <label for="file" class="formulario_label">Insert an image</label>
                        {{ validateForm() }}
                        <div class="formulario_group_input">
                            <input type="file" class="formulario_input" name="file" id="file">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario_input_error">Insert an image.</p>
                    </div>

                    <div class="formulario_group formulario_group_sendButton">
                        <button type="submit" class="formulario_button" id="send">Send</button>
                        <p class="formulario_check_msg" id="formulario_check_msg">Form send</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function addListeners() {
            let radios = document.getElementsByName("radio");
            for(let i=0; i<radios.length; i++) {
                radios[i].addEventListener('click',getID);
            }
            let form = document.getElementById('form');
            form.addEventListener('submit', validateForm);
        }
        
        //validate form fields
        function validateForm() {
            emptySpaces();
        }
        function emptySpaces() {
            if(radiosCheckedOrNot() && fileValidOrNot()) {
                let inputs = document.getElementsByTagName('input');
                let finished = false;
                for(let i=0; i<inputs.length && finished === false; i++) {
                    if(inputs[i].value === '') {
                        finished = true;
                        alertMsg();
                    }
                }
            }
            else {
                alertMsg();
            }
        }
        function radiosCheckedOrNot() {
            let checked = false;
            let radios = document.getElementsByName("radio");
            for(let i=0; i<radios.length && checked === false; i++) {
                if(radios[i].checked === true) {
                    checked = true;
                }
            }
            return checked;
        }
        function fileValidOrNot() {
            let valid = false;
            let file = document.getElementById("file").value;
            let validExt = ['png', 'jpeg', 'jpg'];
            let extension = file.split('.').pop();
            extension = extension.toLowerCase();
            if(file.length !== 0) {
                for(let i=0; i<validExt.length && valid === false; i++) {
                    if(extension === validExt[i]) {
                        valid = true;
                    }
                }
            }
            return valid;
        }
        function alertMsg() {
            let msg = "One of the fields is empty.";
            alert(msg);
        }

        //Set shopID
        function getID() {
            let checkedID = checkedRadio();
            document.cookie = 'shopCod='+checkedID;
        }
        function checkedRadio() {
            let radios = document.getElementsByName("radio");
            let checkedID = '';
            for(let i=0; i<radios.length; i++) {
                if(radios[i].checked === true) {
                    checkedID = radios[i].id;
                }
            }
            return checkedID;
        }

        addListeners();
    </script>
</body>
</html>