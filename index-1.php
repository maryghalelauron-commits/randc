<?php

header('Content-Type: text/html; charset = utf-8');

require_once __DIR__ . '/classes/Shapes.php';
require_once __DIR__ . '/classes/Square.php';
require_once __DIR__ . '/classes/Circle.php';
require_once __DIR__ . '/classes/factory.php';


$factory = new factory();

$search = null;
$show = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $search = trim($_POST['shape'] ?? '');

    if ($search !== '') {
        $shape = $factory->findShape($search);
        if ($shape === null) {
            $show = "Invalid shape: '<strong>" . htmlspecialchars($search) . "</strong>'. Try: Circle or Square.";
        } else {
            $show = "Result: " . $shape->getDescription() . "<br>Message: " . $shape->getAreaFormula() . "<br>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Shape Factory</title>
    </head>

<body>
    <h1>Shape Factory</h1>

    <p>Available shapes: <strong>Circle, Square</strong></p>

    <form method="POST">
        <Label for = "shape">Enter shape type:</label>
        <input type = "text" id = "shape" name = "shape" placeholder="e.g. Circle" value = "<?= htmlspecialchars($search) ?>">
        <button type="submit">Search</button>
    </form>

    <?php if ($show): ?>
        <hr>
        <p><?= $show ?></p>
    <?php endif; ?>
</body>

</html>