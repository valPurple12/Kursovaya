<?php
// require 'config.php'; 

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {

//     $name = htmlspecialchars(trim($_POST['name']));
//     $tel = htmlspecialchars(trim($_POST['phone']));
//     if (empty($name)) {
//         die("Имя обязательно для заполнения!");
//     }
//     else if(empty($tel)){
//         die("Телефон обязательно для заполнения!");
//     }

//     try {
//         $stmt = $conn->prepare("INSERT INTO registrations (name, phone) VALUES (?, ?)");
//         $stmt->execute([$name, $tel]);
        
//         header('Location: index.php');
//         exit;
//     } catch (PDOException $e) {
//         die("Ошибка записи: " . $e->getMessage());
//     }
// }
require 'config.php';

header('Content-Type: application/json');

$response = ['success' => false, 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $tel = htmlspecialchars(trim($_POST['phone'] ?? ''));

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
        $stmt = $conn->prepare("INSERT INTO registrations (name, phone) VALUES (?, ?)");
        $stmt->execute([$name, $tel]);
        
        $response['success'] = true;
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