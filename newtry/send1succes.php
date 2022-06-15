<?php 
if (isset($_FILES['image'])){
    $errors = array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_ext = strtolower (end(explode('.',$_FILES['image']['name'])));

    $expensions = array("jpeg","jpg","png");

    if ($file_size > 2097152) {
        $errors[] = "Файл должен быть 2МБ";
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "base/".$file_name);
        echo "Succes";
    }   else{
        print $errors;
    }
}
?>
<?php 
require "header.php";
?>
    <main class="content">
            <section class="templetes">
                <div class="templetes__container">
                    <div class="content__text-block">

                        </div>
                    </div>
            </section>
    </main>
<?php 
require "footer.php";
?>