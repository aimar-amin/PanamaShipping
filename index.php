<?php
include "includes/header.php"
?>

<!-- Custom -->
<link href="css/mainpage.css" rel="stylesheet">
<link href="css/login.css" rel="stylesheet">

<script src="js/login.js"></script>

<style>
    body {
        background: -webkit-linear-gradient(90deg, #b3dced 10%, #29b8e5  90%);
        background: -moz-linear-gradient(90deg, #b3dced 10%, #29b8e5 90%);
        background: -ms-linear-gradient(90deg, #b3dced 10%, #29b8e5 90%);
        background: -o-linear-gradient(90deg, #b3dced 10%, #29b8e5 90%);
        background: linear-gradient(90deg, #b3dced 10%, #29b8e5 90%);
        font-family: 'Open Sans', sans-serif!important;
    }
</style>
    <div class="row vertical-center">
        <div class="container">
            <div class="well welcome-text">
                Hello, to access Panama Shipping please
                <!-- BEGIN # BOOTSNIP INFO -->
                <a href="#" class="btn btn-default btn-login" role="button" data-toggle="modal" data-target="#login-modal">Login</a>
                <!-- END # BOOTSNIP INFO -->
            </div>
            <?php
                include "includes/login-modal.php";
            ?>
        </div>
    </div>
<!---->
<!--<!-- Bootstrap core JavaScript-->
<!--================================================== -->-->
<!--<!-- Placed at the end of the document so the pages load faster -->-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<!--<script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>-->
<!--<script src="js/bootstrap.min.js"></script>-->
<!--<script src="js/login.js"></script>-->

</body>
</html>