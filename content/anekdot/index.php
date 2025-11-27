<?php include "header.php"; ?>

<h1>Tere tulemast!</h1>
<p>Vali menüüst mõni anekdoot.</p>

<div class="message-box">
    <?php echo file_get_contents(__DIR__ . '/message'); ?>
</div>

<div class="author-info">
    <?php echo file_get_contents(__DIR__ . '/author'); ?>
</div>

<?php include "footer.php"; ?>
