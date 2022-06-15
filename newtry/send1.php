<?php 
require "header.php";
?>
    <main class="content">
            <section class="templetes">
                <div class="templetes__container">
                    <div class="content__text-block">
                    <form action="send1succes.php" method = "POST" enctype = "multipart/form-data">
                    <input type = "file" name = "image">
                    <input type = "submit">
                    </form>
                        </div>
                    </div>
            </section>
    </main>
<?php 
require "footer.php";
?>