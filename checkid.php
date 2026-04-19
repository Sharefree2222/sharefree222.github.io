<?php
header('Content-Type: application/json');

// Chỉ cho phép POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        "status" => false,
        "error_msg" => "Phương thức không hợp lệ"
    ]);
    exit;
}

// Lấy ID
$playerID = trim($_POST['idfaifai'] ?? '');

// Check rỗng
if ($playerID === '') {
    echo json_encode([
        "status" => false,
        "error_msg" => "Vui lòng nhập ID người chơi"
    ]);
    exit;
}

/*
|--------------------------------------------------------------------------
| LOGIC CHECK ID (không SQL)
|--------------------------------------------------------------------------
| Bạn có thể tùy chỉnh:
| - Độ dài ID
| - Chỉ cho số
| - Hoặc prefix
*/

// Ví dụ: ID chỉ gồm số và dài từ 6–12 ký tự
if (!preg_match('/^[0-9]{6,12}$/', $playerID)) {
    echo json_encode([
        "status" => false,
        "error_msg" => "ID người chơi không hợp lệ"
    ]);
    exit;
}

// Nếu qua tất cả kiểm tra → OK
session_start();
$_SESSION['player_id'] = $playerID;

echo json_encode([
    "status" => true
]);