<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Compras</title>
    <link rel="stylesheet" href="styles/ingresar-datos.css">
</head>
<body>

<div class="calculadora">
    <form method="post">
        <h2>Calculadora de Compras</h2>
        <label for="precio1">Precio del primer producto (S/):</label>
        <input type="number" step="0.01" name="precio1" id="precio1" required>

        <label for="cantidad1">Cantidad del primer producto:</label>
        <input type="number" name="cantidad1" id="cantidad1" required>

        <label for="precio2">Precio del segundo producto (S/):</label>
        <input type="number" step="0.01" name="precio2" id="precio2" required>

        <label for="cantidad2">Cantidad del segundo producto:</label>
        <input type="number" name="cantidad2" id="cantidad2" required>

        <label for="precio3">Precio del tercer producto (S/):</label>
        <input type="number" step="0.01" name="precio3" id="precio3" required>

        <label for="cantidad3">Cantidad del tercer producto:</label>
        <input type="number" name="cantidad3" id="cantidad3" required>

        <input type="submit" value="Calcular Total">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $precio1 = floatval($_POST['precio1']);
        $cantidad1 = intval($_POST['cantidad1']);

        $precio2 = floatval($_POST['precio2']);
        $cantidad2 = intval($_POST['cantidad2']);

        $precio3 = floatval($_POST['precio3']);
        $cantidad3 = intval($_POST['cantidad3']);

      
        $subtotal = ($precio1 * $cantidad1) + ($precio2 * $cantidad2) + ($precio3 * $cantidad3);

    
        $impuestos = $subtotal * 0.15;

       
        $descuento = $subtotal * 0.10;

       
        $total_final = $subtotal + $impuestos - $descuento;

        echo "<div class='resultados'>";
        echo "<h2>Resultados de la compra:</h2>";
        echo "<p>Subtotal: S/" . number_format($subtotal, 2) . "</p>";
        echo "<p>Impuestos (15%): S/" . number_format($impuestos, 2) . "</p>";
        echo "<p>Descuento (10%): S/" . number_format($descuento, 2) . "</p>";
        echo "<p>Total final: S/" . number_format($total_final, 2) . "</p>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
