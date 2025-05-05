<?php
require 'config.php';

header('Content-Type: application/json');

$response = ['success' => false, 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $tel = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $promo = htmlspecialchars(trim($_POST['promo'] ?? '')); 
    $price = 3900;
    
    if (strtoupper($promo) === 'КОНДИ25') {
        $price = 3700;
    }

    if (empty($name)) {
        $response['message'] = "Имя обязательно для заполнения!";
        echo json_encode($response);
        exit;
    }
    
    if (empty($tel)) {
        $response['message'] = "Телефон обязательно для заполнения!";
        echo json_encode($response);
        exit;
    }

    try {
        $stmt = $conn->prepare("INSERT INTO registrations (name, phone, promo, price) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $tel, $promo, $price]);
        
        $response['success'] = true;
        $response['price'] = $price;
        echo json_encode($response);
        exit;
    } catch (PDOException $e) {
        $response['message'] = "Ошибка записи: " . $e->getMessage();
        echo json_encode($response);
        exit;
    }
}

$response['message'] = "Некорректный запрос";
echo json_encode($response);
?>