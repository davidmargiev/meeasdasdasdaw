<?php
require "header.php";
?>
<main class="content">
    <section class="templetes">
        <div class="templetes__container">
            <form method="post" action="data.php">
                <div class="area">
                    <input type="text" placeholder="Subject..." name="subject_temple1" id="subject">
                    <input type="email" multiple="multiple" required="required" placeholder="Emails..." name="emails_temple1" id="emails">
                    <input class="upload__btn content__text" type="submit" value="Submit" />
                </div>
            </form>
        </div>
    </section>
</main>
<?php
require "footer.php";
?>