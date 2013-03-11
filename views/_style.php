<?php ob_start() ?>
<style type="text/css">
    body {
        padding-top: 20px;
        padding-bottom: 60px;
    }

    /* Custom container */
    .container {
        margin: 0 auto;
        max-width: 1000px;
    }
    .container > hr {
        margin: 60px 0;
    }

    /* Main marketing message and sign up button */
    .jumbotron {
        margin: 80px 0;
        text-align: center;
    }
    .jumbotron h1 {
        font-size: 100px;
        line-height: 1;
    }
    .jumbotron .lead {
        font-size: 24px;
        line-height: 1.25;
    }
    .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
    }

    /* Supporting marketing content */
    .marketing {
        margin: 60px 0;
    }
    .marketing p + h4 {
        margin-top: 28px;
    }

    .table-striped tbody > tr:nth-child(odd) > td,
    .table-striped tbody > tr:nth-child(odd) > th {
        background-color: #ececec;
    }
    /* Customize the navbar links to be fill the entire space of the .navbar */
</style>
<?php 
$style_content = ob_get_contents();
ob_end_clean(); 
?>