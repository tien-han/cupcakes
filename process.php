<!--
    Authors/Names: Tien Han & Yadira Cervantes
    Date: 4/4/2024
    URL:
    Description: This program shows the results from a submitted cupcake form.
    -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        //Print out the name
        $name = $_POST["name"];
        echo "<p>Thank you, " . $name . ", for your order!</p>";

        //Print out the order
        echo "<p>Order Summary:</p>";
        $flavors = $_POST["flavor"];
        echo "<ul>";
        foreach ($flavors as $flavor) {
            echo "<li>" . $flavor . "</li>";

        }
        echo "</ul>";

        //Print out the order total
        echo "<p>Order Total: $";
        $CUPCAKE_COST = 3.5;

        echo number_format($CUPCAKE_COST * count($flavors), 2);
        echo "</p>";
    ?>
</body>
</html>
