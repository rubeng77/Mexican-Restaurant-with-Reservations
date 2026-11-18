<?php include 'header.php'; ?>
<?php
function show_dish($name, $description, $price)
{
    echo '<h4>' . $name . ' - ' . $price . '</h4>';
    echo '<p>' . $description . '</p>';
}
?>

<h2>Our Menu</h2>

<h3>Platillos (Main Dishes)</h3>
<?php
// This calls the function once for each dish
show_dish('Carnitas Estilo Quiroga', 'Slow-cooked pork served with tortillas, onion, and cilantro.', '$15.99');
show_dish('Corundas', 'Triangle shaped tamales topped with cream and salsa.', '$9.99');
show_dish('Enchiladas Placeras', 'Enchiladas with potatoes, carrots, and chicken.', '$13.99');
?>

<h3>Sopas (Soups)</h3>
<?php
show_dish('Sopa Tarasca', 'Bean and tomato soup with tortilla strips and cheese.', '$8.99');
show_dish('Churipo', 'Beef and vegetable soup with red chile.', '$11.99');
?>

<h3>Postres (Desserts)</h3>
<?php
show_dish('Uchepos', 'Sweet fresh corn tamales with cream.', '$6.99');
show_dish('Nieve de Pasta', 'Creamy ice cream from Patzcuaro.', '$4.99');
?>

<?php include 'footer.php'; ?>