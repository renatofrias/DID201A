
<?php
 include 'header.php';
?>

<html>

<h1 id="center">Get in touch!</h1>
<p id="center">Please fill the details bellow and I will get back to you as soon as possible.</p>

<form action="contact_submit.php" method="post">
    <div class="form">
        <table align="center">
            <tr>
                <td>Your name:</td>
                <td><input type="text" name="name" size="50" length="auto"></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="text" name="e-mail" size="50" length="auto"></td>
            </tr>

            <tr>
                <td>Mobile:</td>
                <td><input type="text" name="phone" size="50" length="auto"></td>
            </tr>

            <tr>
                <td>Message:</td>
                <td><input id="message" name="message" type="text" ></td>
            </tr>






            <tr>
                <td><input id="submit" type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </div>



</form>


</html>


<?php
include 'footer.php';
?>
