

<?php

include 'header.php';
?>

<html>

<link rel="stylesheet" href="CSS/style.css" type="text/css">

<img src="Images/content_1_header.png" id="hero">

<div class="text">




    <h1>
        What happens between the click of a link until it displays on the web browser?
    </h1>

    <p>
        <br> In between the process of typing the link on the Web browser, until the site displays the user request there are 4 important steps. Before we explain the steps of the process, it is better we get use to some names:</br>
         <br>
        -	ISP – Internet Service Provider <br>
        -	DNS – Domain Name Server<br>
        -	IP – Internet Protocol<br>
        -	FTP – File Transfer Protocol<br>
        -	URL – Universal Resource Locator<br>
        <br>
        Let`s talk about the steps, first of all the user type the URL or click on a link the ISP search for the domain on its own DNS. If the link is available, the DNS will send the matching IP address to the Web server.

    </p>

    <img src="Images/Web%20request.png">

    <p>
        The domain name must be registered to make your website live. The domain can be registered on thousands different Domain Registrars (domain registration websites). Once you have your Domain name is registered it`s time to get your DNS delegation (some domain providers could offer a packaged for that).<br>
        <br>
        DNS will synchronise your domain name with the IP address. In another words, when the client request to access the link www.yourlink.com, the IPS will look for the closest DNS and send the request for the IP address equivalent.<br>
        <br>
        If the Website have been developed on a PHP format, the web server will need a PHP interpreter to display the content to the client. The PHP is in direct contact with a SQL Database that will send back all data necessary to fill the page.<br>

    </p>
</div>




<?php
include 'footer.php';
?>




</html>
