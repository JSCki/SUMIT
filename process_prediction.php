<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $period = $_POST['period'];

    if (!preg_match('/^\d{3}$/', $period)) {
        echo json_encode(['error' => 'Invalid input. Please enter a 3-digit period number.']);
        exit;
    }

    // Generate random prediction
    $sizes = ["Big", "Small"];
    $colors = ["Green 🟢", "Red 🔴"];
    $size = $sizes[array_rand($sizes)];
    $color = $colors[array_rand($colors)];
    $winningPercentage = rand(50, 100);

    $prediction = "$size - $color (Winning Percentage: $winningPercentage%)";

    echo json_encode(['prediction' => $prediction]);
}
?>
