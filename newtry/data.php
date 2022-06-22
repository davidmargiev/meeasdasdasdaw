<?php
require "header.php";
?>
<?php

?>
<?php

if($temp!=NULL){
$temp = htmlspecialchars($_POST['emails']);
$subject = htmlspecialchars($_POST['subject']);
$message = htmlspecialchars($_POST['message']);

$to = explode(",", $temp);
foreach ($to as $row) {
    mail($row, $subject, $message);
}
}

if($temp==NULL){
    $temp = htmlspecialchars($_POST['emails_temple1']);
    $subject = htmlspecialchars($_POST['subject_temple1']);
    $message = htmlspecialchars($_POST['message_temple1']);

    $to = explode(",", $temp);
    foreach ($to as $row){
        mail($row, $subject, $message);
    }
}

?>
<main class="content"></main>
<section class="welldone">
    <div class="done__container">
        <div class="done__visual">
            <img src="/img/well done.svg" alt="">
            <div class="content__text">Email was successfully sent</div>
        </div>
    </div>
</section>
<?php
require "footer.php";
?>