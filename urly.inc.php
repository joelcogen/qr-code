<?php
function urly($msg){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://ur.ly/new.json?href=".urlencode($msg));
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $urly_json = curl_exec($ch);
    curl_close($ch);
    $urly = $msg;
    if($urly_json){
        preg_match("/\"code\":\"(.*)\",\"href\"/", $urly_json, $urly_match);
        $urly = "http://ur.ly/".$urly_match[1];
    }
    return $urly;
}

