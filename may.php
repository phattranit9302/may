<?php
    $accessToken = "pjpgvvXici0XcdXL0UBGVR9WqJLuCMJlqxKptmFNUi/xIBiDNCMnh4UWxpQmRViDfTVIMqUpCysuV1gHgO7lCDO5A9criNfCTPn3qIg7lFEnEFnrx3i0+5wsH+tkmzypPQaMXX4B5dgjfhhDtGyA4AdB04t89/1O/w1cDnyilFU=";//copy Channel access token ในไลน์มาใส่
    
    $content = file_get_contents('php://input');
    $arrayJson = json_decode($content, true);
    
    $arrayHeader = array();
    $arrayHeader[] = "Content-Type: application/json";
    $arrayHeader[] = "Authorization: Bearer {$accessToken}";
    
    //รับข้อความจากผู้ใช้
    $message = $arrayJson['events'][0]['message']['text'];
#ตัวอย่าง Message Type "Text"
    if($message == "สวัสดี"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "สวัสดีครับ/ค่ะ ยินดีต้อนรับเข้าสู่ แอปพลิเคชันของเรา
กรุณาพิมพ์ [เมนู] เพื่อดูเมนูครับ/ค่ะ
";
        $arrayPostData['messages'][1]['type'] = "sticker";
        $arrayPostData['messages'][1]['packageId'] = "11538";
        $arrayPostData['messages'][1]['stickerId'] = "51626494";
        replyMsg($arrayHeader,$arrayPostData);
    }
    else if($message == "เมนู"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "พิมพ์ตัวอักษรตามที่กำหนดให้"."\n"."[1] คู่มือการใช้งานแอปพลิเคชัน Reduce costs Save material"."\n"."[2] ลิงค์คำนวณพื้นที่ผิวที่น้อยที่สุดของปรึซึมสี่เหลี่ยมมุมฉากและทรงกระบอก" . "\n"."[3] ภาพตัวอย่างบรรจุภัณฑ์ปรึซึมสี่เหลี่ยมมุมฉาก" ."\n"."[4] ภาพตัวอย่างบรรจุภัณฑ์ทรงกระบอก" . "\n" . "[5] ลิงค์ page Facebook";
        replyMsg($arrayHeader,$arrayPostData);
    }
    else if($message == "1"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "คู่มือการใช้งานแอปพลิเคชัน Reduce costs Save material"."\n"."http://www.raot.co.th/main.php?filename=index.";
        replyMsg($arrayHeader,$arrayPostData);
    }
    else if($message == "2"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "ลิงค์คำนวณพื้นที่ผิวที่น้อยที่สุดของปรึซึมสี่เหลี่ยมมุมฉากและทรงกระบอก"."\n"."http://www.raot.co.th/more_news.php?cid=10&filename=index/.";
        replyMsg($arrayHeader,$arrayPostData);
    }
   else if($message == "3"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "ภาพตัวอย่างบรรจุภัณฑ์ปรึซึมสี่เหลี่ยมมุมฉาก"."\n"."https://docs.google.com/document/d/1CJaSBeO7fPn5N9c0lXvK2z7MOp6qqiL-WqSRVJ24dAg/edit.";
        replyMsg($arrayHeader,$arrayPostData);
    }
    else if($message == "ฝันดี"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "sticker";
        $arrayPostData['messages'][0]['packageId'] = "2";
        $arrayPostData['messages'][0]['stickerId'] = "46";
        $arrayPostData['messages'][1]['type'] = "sticker";
        $arrayPostData['messages'][1]['packageId'] = "11538";
        $arrayPostData['messages'][1]['stickerId'] = "51626533";
        replyMsg($arrayHeader,$arrayPostData);
    }

    else if($message == "ลาก่อน"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "อย่าทิ้งกันไป";
        $arrayPostData['messages'][1]['type'] = "sticker";
        $arrayPostData['messages'][1]['packageId'] = "1";
        $arrayPostData['messages'][1]['stickerId'] = "131";
        replyMsg($arrayHeader,$arrayPostData);
    }
  else  {
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "สวัสดีครับ/ค่ะ ยินดีต้อนรับเข้าสู่ แอปของเรา."."\n". "กรุณาพิมพ์ [เมนู] เพื่อดูเมนูนะครับ/ค่ะ 😊😊😊";
        replyMsg($arrayHeader,$arrayPostData);
    }
 function replyMsg($arrayHeader,$arrayPostData){
        $strUrl = "https://api.line.me/v2/bot/message/reply";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$strUrl);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $arrayHeader);    
        curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($arrayPostData));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close ($ch);
    }
   echo "HAVE FUN !!!";
?>
