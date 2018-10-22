
<?php
 include 'header.php';
?>

<html>

<form action="contact_submit.php" method="get">
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
                <td><input type="text" name="name" size="50" length="auto"></td>
            </tr>

            <tr>
                <td>Message:</td>
                <td><input type="text" name="name" size="400" width="600px" height="400px"></td>
            </tr>






            <tr>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </div>



</form>


</html>


<?php
include 'footer.php';
?>
