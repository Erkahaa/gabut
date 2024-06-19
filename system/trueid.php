<?php

if(isset($_POST['playid'])){
    $userID = $_POST['playid'];
    $api = "https://restserver.net/trueid/ff/apiff.php?id=".$userID;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $api);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);
    echo $output;
}
?>