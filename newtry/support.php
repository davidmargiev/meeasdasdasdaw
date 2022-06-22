<?php
require "header.php";
?>
<main class="content">
    <section class="support__questions">
        <div class="questions__img">
            <img src="/img/support__main.png" alt="">
        </div>
        <div class="questions__container">
                <div class="question__text">The letter does not arrive in the mail. What to do?</div>
                <div class="answer__text">Our project works only on the local machine, so to send a letter to the mail domain, you need to raise an external SMTP server.</div>
                <div class="question__text">How to create a mailsletter?</div>
                <div class="answer__text">Click on the rightmost green button in the header of the site or pay attention to the rightmost footer element. You can send empty messages, but be sure to specify the recipients of the letter.Without this, the letter cannot be sent.<a class="answer__link" href="workspace.php"> Try it</a></div>
                <div class="question__text">What are the security guarantees?</div>
                <div class="answer__text">You can see our reviews in the reviews section. More reviews can be found on our social networks.<a class="answer__link" href="workspace.php"> reviews</a></div>
                <div class="question__text">What are the distribution options?</div>
                <div class="answer__text">You can select an unlimited number of email recipients and send them either a message with an HTML template or without using HTML.<a class="answer__link" href="workspace.php"> features</a></div>
        </div>
    </section>
</main>
<?php
require "footer.php";
?>