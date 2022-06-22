<?php
require "header.php";
?>
<main class="content"></main>
    <section class="templetes">
        <div class="templetes__container">
            <div class="content__text-block">
                <div class="content__tittle"><span>Create</span> message in one second</div>
                <div class="content__text templetes__text">
                    <p1>Choose ready-made example messages or send non HTML-mail</p1>
                </div>
                <div class="templetes__img">
                    <a href="send1.php"><img class="templetes__block" src="/img/templete1.svg" alt=""></a>
                </div>
            </div>
    </section>
    <section class="features">
        <div class="red__container non-html__block">
            <div class="content__tittle">Put here your <span>non-html</span> message</div>

            <form method="post" action="data.php">
                <div class="area">
                    <textarea class="non-html__block" placeholder="Massage..." name = "message" id = "message"></textarea>
                    <input type="text" placeholder="Subject..." name = "subject" id = "subject">
                    <input type="email" multiple="multiple" required="required" placeholder="Emails..." name = "emails" id = "emails">
                    <input class="upload__btn content__text" type="submit" value="Submit" />
                </div>
            </form>
        </div>
    </section>
</main>

<?php
require "footer.php";
?>