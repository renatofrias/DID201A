<?php
include 'header.php';
?>


<html>

<div class="content">

    <h1 id="center">Thank for you submission</h1>

    <p>
        <?php echo "Thanks for your enquiry " .$_POST["name"] ?><br>
        <?php echo "Your message: " .$_POST["message"] .". will be replied in 5 days!" ?>

    </p>



</div>



</html>


<?php
include 'footer.php';
?>

