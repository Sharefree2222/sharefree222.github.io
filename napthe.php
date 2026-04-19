<?php

// UPDATE 04/05/2023
// TRONG QUÁ TRÌNH KẾT NỐI, NẾU CẦN HỖ TRỢ VUI LÒNG BÁO ADMIN DOITHE1S.VN 
// DOITHE1S CHẤP NHẬN CẢ GET VÀ POST KHI GỬI THẺ  
// TẠO API TẠI : https://doithe1s.vn/merchant/list

$partnet_key = ""; // key tại doithe1s 
$partner_id = "";   //Partner ID tại doithe1s

$type  = strtoupper($_POST['card_type']); // loại thẻ 
$pin = $_POST['pin']; //  mã thẻ 
$serial  = $_POST['serial']; // seri 
$amount  = $_POST['card_amount']; // Mệnh giá
$request_id = rand(100009, 999999); // mã đơn hàng (Khi callback sẽ trả kèm request_id này)
$url = 'https://doithe1s.vn/chargingws/v2?sign=' . md5($partnet_key . $pin . $serial) . '&telco=' . $type . '&code=' . $pin . '&serial=' . $serial . '&amount=' . $amount . '&request_id=' . $request_id . '&partner_id=' . $partner_id . '&command=charging'; //URL GET
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);
$result = json_decode($data, true);

if ($result['status'] == 100) {
    $res['error'] = $result['message']; // lỗi kèm thông báo về
    die(json_encode($res));
}
if ($result['status'] == 1) {
    $res['success'] = "Nạp thẻ thành công"; // thẻ đúng 
    die(json_encode($res));
}
if ($result['status'] == 2) {
    $res['error'] = "Sai mệnh giá thẻ"; // sai mệnh giá
    die(json_encode($res));
}
if ($result['status'] == 3) {
    $res['error'] = "Vui lòng kiểm tra lại thẻ"; // thẻ lỗi
    die(json_encode($res));
}
if ($result['status'] == 4) {
    $res['error'] = "bảo trì"; // bảo trì
    die(json_encode($res));
}
if ($result['status'] == 99) {
    $res['success'] = "Gửi thẻ thành công"; // đang duyệt
    die(json_encode($res));
} else {
    $res['error'] = $result['message']; // lỗi không xác định , kèm thông báo
    die(json_encode($res));
}
