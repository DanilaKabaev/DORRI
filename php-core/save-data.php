<?php
    //принять данные из формы
    $url = 'save.php';
    $name = $_POST['name']; 
    $description = $_POST['description']; 
    $content = $_POST['content']; 
    $weight = $_POST['weight']; 
    $pack = $_POST['pack']; 
    $keeping = $_POST['keeping']; 
    $nut_value = $_POST['nut_value']; 
    $note = $_POST['note']; 
    $price = $_POST['price']; 
    $delivery = $_POST['delivery']; 
    if (isset($_POST["category_id"])) {
        $category_id = $_POST["category_id"];
    }
    //принять информацию для картинки из формы
    $imagename=$_FILES["image"]["name"];
    $folder="bd-images/";
    move_uploaded_file($_FILES["image"]["tmp_name"],"$folder".$_FILES["image"]["name"]);
    //картинка помещается в папку (сервер), откуда ее потом можно с помощью пути (кода) 
    // забрать и видеть на страничке товаров

    include ("bd.php");
    //запрос к бд
    $query = "INSERT INTO product SET name='$name', description='$description', content='$content', weight='$weight', pack='$pack', keeping='$keeping', nut_value='$nut_value', note='$note', price='$price', delivery='$delivery', category_id='$category_id', image_path='$folder', image_name='$imagename'";
    mysqli_query($link, $query) or die(mysqli_error($link));
    header('Location: '.$url);

?>