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
        $arrayPostData['messages'][0]['text'] = "สวัสดีครับ กรุณาพิมพ์ เมนู เพื่อดูเมนูของเราได้เลยครับ";
        $arrayPostData['messages'][1]['type'] = "sticker";
        $arrayPostData['messages'][1]['packageId'] = "11538";
        $arrayPostData['messages'][1]['stickerId'] = "51626494";
        replyMsg($arrayHeader,$arrayPostData);
    }
    else if($message == "เมนู"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "พิมพ์ตัวอักษรตามที่กำหนดให้"."\n"."[1] เว็บไซต์ทางการของการยางแห่งประเทศไทย"."\n"."[2] ข้อมูลข่าวสารเกี่ยวกับยางพารา" . "\n"."[3] ราคาปุ๋ยที่มีวางจำหน่ายในสหกรณ์การเกษตรจังหวัดตรัง" ."\n"."[4] ราคายาง" . "\n" . "[5] ราคาของปุ๋ยยางพาราที่ถูกที่สุดในช่วงอายุต่างๆ" . "\n"  . "[6] วิธีการผสมปุ๋ยใช้เอง"."\n"."[7] ตารางคำนวณสูตรปุ๋ย"."\n". "[8] ข้อมูลสภาพอากาศจากกรมอุตุนิยมวิทยา";
        replyMsg($arrayHeader,$arrayPostData);
    }
    else if($message == "1"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "เว็บไซต์ทางการของการยางแห่งประเทศไทย"."\n"."http://www.raot.co.th/main.php?filename=index.";
        replyMsg($arrayHeader,$arrayPostData);
    }
    else if($message == "2"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "ข้อมูลข่าวสารของยางพารา การยางแห่งประเทศไทย"."\n"."http://www.raot.co.th/more_news.php?cid=10&filename=index/.";
        replyMsg($arrayHeader,$arrayPostData);
    }
   else if($message == "3"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "ราคาปุ๋ยที่มีวางจำหน่าย"."\n"."https://docs.google.com/document/d/1CJaSBeO7fPn5N9c0lXvK2z7MOp6qqiL-WqSRVJ24dAg/edit.";
        replyMsg($arrayHeader,$arrayPostData);
    }
    else if($message == "4"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "ราคายางวันนี้ การยางแห่งประเทศไทย"."\n"."http://www.rubber.co.th/rubber2012/menu5.php";
        replyMsg($arrayHeader,$arrayPostData);
    }

   else if($message == "6"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "วิธีการผสมปุ๋ยใช้เอง ข้อมูลจาก Nanagarden"."\n"."https://www.nanagarden.com/topic/3829.";
        replyMsg($arrayHeader,$arrayPostData);
    }
    else if($message == "7"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "https://stark-savannah-41843.herokuapp.com/" ; 
     
        replyMsg($arrayHeader,$arrayPostData);
    }
   else if($message == "8"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "อัตราส่วนการใส่ปุ๋ยผสมต่อปุ๋ยอินทรีย์ผสม" ."\n" . "[H] เพื่อดูเมนู"; 
        $arrayPostData['messages'][1]['type'] = "text";
        $arrayPostData['messages'][1]['text'] =  "https://l.facebook.com/l.php?u=https%3A%2F%2Fdrive.google.com%2Ffile%2Fd%2F1vIkJCruCDgWMcaiU3CZZTyKrW-bAz9CY%2Fview%3Fusp%3Ddrivesdk%26fbclid%3DIwAR07NBUl5ipUXMkWIDv3sC5QY_kOK4LOuQnGVxql3euACogMz1hy-05vdqk&h=AT1BXgDjocVvikc0laTYriErOLrzDLZ94kG7Yx9BCI13qXfqrGACwgLGtItA4na4tZFScJwDJ1JQEhUFim2D0fgOKFVULZVesrXDd563wZQ6UzHrub97gsH7IjL46QT4_Yi6C1VP0yIwtfe_3Mucdw" ;
      
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
        $arrayPostData['messages'][0]['text'] = "สวัสดีครับ ยินดีต้อนรับคุณเข้าสูู่ แอปของเรา."."\n". "กรุณาพิมพ์ [เมนู] เพื่อดูเมนูนะครับ 😊😊😊";
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
