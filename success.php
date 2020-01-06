<?php
    if(!empty($_GET['tid']) && !empty($_GET['product'])) {
        $GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);

        $tid = $GET['tid'];
        $product = $GET['product'];
    } else {
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Payment Successful</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-4">
            <h2>Thank you for purchasing <?php echo $product; ?></h2>
            <hr>
            <p>Your transaction ID is <?php echo $tid; ?></p>
            <p>Check your email for more info</p>
            <p><a href="index.php" class="btn btn-light mt-2">Go back</a></p>
        </div>
    </body>
</html>