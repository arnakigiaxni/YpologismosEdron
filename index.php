<?php
    include_once "ypologismos.php";
    error_reporting(0);
?>

<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form method="post" action='<?php ($_SERVER["PHP_SELF"]); ?>'>
            Ποσοστό κόμματος: <input type="text" name="pk" <?php echo "value='$pk'"; ?>>
            <br />
            <br />
            Ποσοστό κομμάτων εκτός βουλής: <input type="text" name="pev" <?php echo "value='$pev'"; ?>>
            <br />
            <br />
            <input type="submit" value="Υπολογισμός εδρών">
            <br />
            <br />
                Έδρες: <?php echo $edres; ?>
        </form>
    </body>
</html>
