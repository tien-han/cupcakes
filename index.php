<!--
    Authors/Names: Tien Han & Yadira Cervantes
    Date: 4/4/2024
    URL:
    Description: This program shows a cupcake form that a user can complete.
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
    <h1>Cupcake Fundraiser</h1>
    <form method="POST" action="process.php">
        <!--Name-->
        <section>
            <label for="name">Your name:</label><br>
            <input name="name" id="name" type="text">
        </section>

        <!--Cupcake Flavors-->
        <label for="flavor[]">Cupcake flavors:</label>
        <section>
            <input name="flavor[]" id="grasshopper" type="checkbox" value="The Grasshopper">
            <label for="grasshopper">The Grasshopper</label><br>
            <input name="flavor[]" id="bacon" type="checkbox" value="Whiskey Maple Bacon">
            <label for="bacon">Whiskey Maple Bacon</label><br>
            <input name="flavor[]" id="walnut" type="checkbox" value="Carrot Walnut">
            <label for="walnut">Carrot Walnut</label><br>
            <input name="flavor[]" id="salted" type="checkbox" value="Salted Caramel Cupcake">
            <label for="salted">Salted Caramel Cupcake</label><br>
            <input name="flavor[]" id="velvet" type="checkbox" value="Red Velvet">
            <label for="velvet">Red Velvet</label><br>
            <input name="flavor[]" id="lemon" type="checkbox" value="Lemon Drop">
            <label for="lemon">Lemon Drop</label><br>
            <input name="flavor[]" id="tiramisu" type="checkbox" value="Tiramisu">
            <label for="tiramisu">Tiramisu</label><br>
        </section>

        <!--Submit button-->
        <button>Order</button>
    </form>
</body>
</html>