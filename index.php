<?php
header('Content-Type: text/html; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $type = strtolower(trim($_POST['shape'] ?? ''));

    if ($type === 'circle' || $type === 'square') {
        header("Location: classes/pages/{$type}.php");
        exit;
    } else {
        header("Location: classes/pages/others.php?shape=" . urlencode($type));
        exit;
    }
}
?>

<h2>Shape Factory</h2>
<hr>

<form method="POST">
    <label>Input a shape:</label><br><br>
    
    <input type="text" name="shape" placeholder="e.g. circle" required>
    <br><br>
    
    <button type="submit">Enter</button>
</form>