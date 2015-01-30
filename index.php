<?php
    include_once "ypologismos.php";
    error_reporting(0);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Υπολογισμός εδρών</title>
        <link rel='stylesheet' type='text/css' href='style.css' />
    </head>
    <body>
        <div id="bg">
        <form method="post" action='<?php ($_SERVER["PHP_SELF"]); ?>'>
            Ποσοστό κόμματος: <input type="text" maxlength='5' id="pk" name="pk" <?php echo "value='$pk'"; ?>>
                <span class='error'> <?php echo $pk_Error; ?></span>
                <br />
                <br />
            Ποσοστό κομμάτων εκτός βουλής: <input type="text" maxlength='5' id="pev" name="pev" <?php echo "value='$pev'"; ?>>
                <span class='error'> <?php echo $pev_Error; ?></span>
                <br />
                <br />
            <input type="submit" id="button" value="Υπολογισμός εδρών">
                <br />
                <br />
            Έδρες: <?php echo $edres.$edres2.$bonus; ?>
        </form>
        </div>
    </body>
</html>
