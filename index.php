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
    <form>
        <section>
            <label for="name">Your name:</label><br>
            <input name="name" id="name" type="text">
        </section>

        <!--    Cupcake Flavors    -->
        <label for="flavors">Cupcake flavors:</label>
        <section>
            <input name="flavors[]" id="grasshopper" type="checkbox">
            <label for="grasshopper">The Grasshopper</label><br>
            <input name="flavors[]" id="bacon" type="checkbox">
            <label for="bacon">Whiskey Maple Bacon</label><br>
            <input name="flavors[]" id="walnut" type="checkbox">
            <label for="walnut">Carrot Walnut</label><br>
            <input name="flavors[]" id="salted" type="checkbox">
            <label for="salted">Salted Caramel Cupcake</label><br>
            <input name="flavors[]" id="velvet" type="checkbox">
            <label for="velvet">Red Velvet</label><br>
            <input name="flavors[]" id="lemon" type="checkbox">
            <label for="lemon">Lemon Drop</label><br>
            <input name="flavors[]" id="tiramisu" type="checkbox">
            <label for="tiramisu">Tiramisu</label><br>
        </section>

        <button>Order</button>
    </form>
</body>
</html>