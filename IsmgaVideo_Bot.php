<?php
ob_start();

define('API_KEY','token'); 
$admin = "765076446"; // admin IDsi
$bot= "IsmgaVideo_Bot";
$kanalimz = "@PHP_UzMasters";
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
function put($fayl, $nima)
{
file_put_contents("$fayl", "$nima");
}

function get($fayl)
{
$get = file_get_contents("$fayl");
return $get;
}
function objectToArrays($object)
    {
        if (!is_object($object) && !is_array($object)) {
            return $object;
        }
        if (is_object($object)) {
            $object = get_object_vars($object);
        }
        return array_map("objectToArrays", $object);
    }

## Bu @IsmgaVideo_Bot Kodi @Nazirjon_Official Tomonidan Tuzildi va @PHP_UzMasters Kanalida Tarqatildi! ###
## Mualliflik huquqini hurmat Qiling iltimos Kod Muallifi @Nazirjon_Official ##
## Bizni Kuzatib Boring v Bizdan Uzoqlashmang @PHP_UzMasters ##

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$cid = $message->chat->id;
$text = $message->text;
$type = $message->chat->type;
$name = $message->from->first_name;
$uid = $message->from->id;
$mid = $message->message_id;
$user = $message->from->username;
$soat = date("H",strtotime("4 hour"));
$sana = date("d.m.Y",strtotime("4 hour"));
$kun = date("d",strtotime("4 hour"));
$audio = $message->audio;
$reply = $message->reply_to_message->text;
$step=file_get_contents("bot/$cid.step");
$stepp=file_get_contents("step/$cid.step");
mkdir("bot");
mkdir("step");
mkdir("vid");
$nazad="🔙Orqaga";
$regi="[$name](tg://user?id=$uid)";
$yil = date("Y",strtotime("4 hour"));
$mid = $message->message_id;
$sreply = $message->reply_to_message->text;  
$sreplyd = $message->reply_to_message->document;

//////////
## Bu @IsmgaVideo_Bot Kodi @Nazirjon_Official Tomonidan Tuzildi va @PHP_UzMasters Kanalida Tarqatildi! ###
## Mualliflik huquqini hurmat Qiling iltimos Kod Muallifi @Nazirjon_Official ##
## Bizni Kuzatib Boring v Bizdan Uzoqlashmang @PHP_UzMasters ##


$cid2 = $update->callback_query->message->chat->id;
$type=$message->chat->type;
$fname = $message->from->first_name;
$fid2 = $update->callback_query->from->id;
$data = $update->callback_query->data;
$mid = $message->message_id;
$mid2 = $update->callback_query->message->message_id;
$callback = $update->callback_query;
$cqid = $update->callback_query->id;
$name = $message->from->first_name;
$soat = date('H:i:s', strtotime('4 hour'));
$bugun = date('d.m.20y',strtotime('4 hour'));
$photo = $message->photo;
$photoid = $message->photo[0]->file_id;
$call = $update->callback_query;
$mes = $call->message;

$qid = $call->id;
$callcid = $mes->chat->id;
$callmid = $mes->message_id;
$callfrid = $call->from->id;
$calluser = $mes->chat->username;
$callfname = $call->from->first_name;
$id = $update->callback_query->id;
$message = $update->message;
$callbackdata = $update->callback_query->data;
$chatid = $message->chat->id;
$chat_id = $update->callback_query->message->chat->id;
$messageid = $message->message_id;
$id = $update->callback_query->id;
$fromid = $message->from->id;
$from_id = $update->callback_query->from->id;
$firstname = $message->from->first_name;
$first_name = $update->callback_query->from->first_name;
$lastname = $message->from->last_name;
$message_id = $update->callback_query->message->message_id;
$text = $message->text;
$contact = $message->contact;
$contactid = $contact->user_id;
$contactuser = $contact->username;
$contactname = $contact->first_name;
$phonenumber = $contact->phone_number;
$messagereply = $message->reply_to_message->message_id;
$user = $message->from->username;
$userid = $update->callback_query->from->username;
$query = $update->inline_query->query;
$inlineid = $update->inline_query->from->id;
$messagereply = $message->reply_to_message->message_id;


////////////////
## Bu @IsmgaVideo_Bot Kodi @Nazirjon_Official Tomonidan Tuzildi va @PHP_UzMasters Kanalida Tarqatildi! ###
## Mualliflik huquqini hurmat Qiling iltimos Kod Muallifi @Nazirjon_Official ##
## Bizni Kuzatib Boring v Bizdan Uzoqlashmang @PHP_UzMasters ##


$rpl = json_encode([
            'resize_keyboard'=>false,
            'force_reply'=>true,
            'selective'=>true
        ]);

$back = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$nazad"],],
]
]);

$ret1 = bot("getChatMember",[
         "chat_id"=>"-1001442068287", // secretius
         "user_id"=>$uid
         ]);
$ret2 = bot("getChatMember",[
         "chat_id"=>"-1001175588184", // secretius
         "user_id"=>$uid
         ]);
     

$stat1 = $ret1->result->status;
$stat2 = $ret2->result->status;

         if(($stat1=="creator" or $stat1=="administrator" or $stat1=="member") and ($stat2=="creator" or $stat2=="administrator" or $stat2=="member")){}else{
     bot("sendmessage",[
         "chat_id"=>$uid,
         "text"=>"<b>Kechirasiz Doʻstim Botning Kanali Oʻzgargan ☺️ Botni ishlatish uchun Kanalga aʼzo Boʻlib keyin /start bosing! 😉 
Atiga 2ta Kanal ☺️</b>",
         'disable_web_page_preview'=>true,
         'parse_mode'=>'html',
         "reply_to_message_id"=>$mid,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"📢 Kanalga aʼzo bo'lish","url"=>"https://t.me/clan_uzb_rap"],],
[["text"=>"📢 Kanalga aʼzo bo'lish","url"=>"https://t.me/PHP_uzmasters"],],
]
]),
]); 
return false;
}

## Bu @IsmgaVideo_Bot Kodi @Nazirjon_Official Tomonidan Tuzildi va @PHP_UzMasters Kanalida Tarqatildi! ###
## Mualliflik huquqini hurmat Qiling iltimos Kod Muallifi @Nazirjon_Official ##
## Bizni Kuzatib Boring v Bizdan Uzoqlashmang @PHP_UzMasters ##



if($text=="/start"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"*Salom $name
@$bot ga Hush Kelibsiz ☺️
Bu bot Orqali istalgan harfingizga Video Yasab olishingiz mumkin!
Video Tayyorlash Uchun Menga harf Yuboring!*

_Botda muammo Sezsangiz @KaYFsHuNoSs ga murojaat qiling!_

Yordam uchun /help buyrugʻi!",
'parse_mode'=>'markdown',
'reply_markup'=>$tugma,
]);
} 
## Bu @IsmgaVideo_Bot Kodi @Nazirjon_Official Tomonidan Tuzildi va @PHP_UzMasters Kanalida Tarqatildi! ###
## Mualliflik huquqini hurmat Qiling iltimos Kod Muallifi @Nazirjon_Official ##
## Bizni Kuzatib Boring v Bizdan Uzoqlashmang @PHP_UzMasters ##


if($text=="/help"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"
Bu bot faqat harflarga video yasaydi. 
Agar to'lliq ismga video zakaz bermoqchi boʻlsangiz @PHP_Coderlar_Masterlar Guruhimizga 100 ta odam qoʻshing va ismga video zakaz bering!",
'parse_mode'=>'html',
'reply_markup'=>$tugma,
]);
} 
## Bu @IsmgaVideo_Bot Kodi @Nazirjon_Official Tomonidan Tuzildi va @PHP_UzMasters Kanalida Tarqatildi! ###
## Mualliflik huquqini hurmat Qiling iltimos Kod Muallifi @Nazirjon_Official ##
## Bizni Kuzatib Boring v Bizdan Uzoqlashmang @PHP_UzMasters ##



if($text=="A" or $text=="a"){
bot('sendMessage',[
'chat_id'=>$cid,
 'text'=>"
 🆗 <b>Aniqlanmoqda Biroz Kuting... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'◽◽◽◽◽◽◽◽◽◽ 0%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'▪️◽◽◽◽◽◽◽◽◽ 10%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️◽◽◽◽◽◽◽◽ 20%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️◽◽◽◽◽◽◽ 30%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️◽◽◽◽◽◽ 40%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️◽◽◽◽◽ 50%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️◽◽◽◽ 60%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️◽◽◽ 70%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️◽◽ 80%'
]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️◽ 90%'
 ]);
 sleep(0.7);
bot('editMessageText',[
'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️ 100%'
 ]);
 sleep(0.7);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendVideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/jsjsjshsshjdndjrj/2",
'caption'=>"*A harfiga Video Tayyor 😉*

➖➖➖➖➖
*@$bot Tomonidan Yasab Berildi!*
_Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!_
",
'parse_mode'=>'markdown',
'reply_markup'=>$tugma,
]);
} 
## Bu @IsmgaVideo_Bot Kodi @Nazirjon_Official Tomonidan Tuzildi va @PHP_UzMasters Kanalida Tarqatildi! ###
## Mualliflik huquqini hurmat Qiling iltimos Kod Muallifi @Nazirjon_Official ##
## Bizni Kuzatib Boring v Bizdan Uzoqlashmang @PHP_UzMasters ##



if($text=="B" or $text=="b"){
bot('sendMessage',[
'chat_id'=>$cid,
 'text'=>"
 🆗 <b>Aniqlanmoqda Biroz Kuting... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'◽◽◽◽◽◽◽◽◽◽ 0%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'▪️◽◽◽◽◽◽◽◽◽ 10%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️◽◽◽◽◽◽◽◽ 20%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️◽◽◽◽◽◽◽ 30%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️◽◽◽◽◽◽ 40%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️◽◽◽◽◽ 50%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️◽◽◽◽ 60%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️◽◽◽ 70%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️◽◽ 80%'
]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️◽ 90%'
 ]);
 sleep(0.7);
bot('editMessageText',[
'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️ 100%'
 ]);
 sleep(0.7);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendVideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/jsjsjshsshjdndjrj/3",
'caption'=>"*B harfiga Video Tayyor 😉*

➖➖➖➖➖
*@$bot Tomonidan Yasab Berildi!*
_Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!_
",
'parse_mode'=>'markdown',
'reply_markup'=>$tugma,
]);
} 
## Bu @IsmgaVideo_Bot Kodi @Nazirjon_Official Tomonidan Tuzildi va @PHP_UzMasters Kanalida Tarqatildi! ###
## Mualliflik huquqini hurmat Qiling iltimos Kod Muallifi @Nazirjon_Official ##
## Bizni Kuzatib Boring v Bizdan Uzoqlashmang @PHP_UzMasters ##

if($text=="D" or $text=="d"){
bot('sendMessage',[
'chat_id'=>$cid,
 'text'=>"
 🆗 <b>Aniqlanmoqda Biroz Kuting... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'◽◽◽◽◽◽◽◽◽◽ 0%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'▪️◽◽◽◽◽◽◽◽◽ 10%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️◽◽◽◽◽◽◽◽ 20%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️◽◽◽◽◽◽◽ 30%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️◽◽◽◽◽◽ 40%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️◽◽◽◽◽ 50%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️◽◽◽◽ 60%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️◽◽◽ 70%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️◽◽ 80%'
]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️◽ 90%'
 ]);
 sleep(0.7);
bot('editMessageText',[
'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️ 100%'
 ]);
 sleep(0.7);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendVideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/jsjsjshsshjdndjrj/4",
'caption'=>"*D harfiga Video Tayyor 😉*

➖➖➖➖➖
*@$bot Tomonidan Yasab Berildi!*
_Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!_
",
'parse_mode'=>'markdown',
'reply_markup'=>$tugma,
]);
} 
## Bu @IsmgaVideo_Bot Kodi @Nazirjon_Official Tomonidan Tuzildi va @PHP_UzMasters Kanalida Tarqatildi! ###
## Mualliflik huquqini hurmat Qiling iltimos Kod Muallifi @Nazirjon_Official ##
## Bizni Kuzatib Boring v Bizdan Uzoqlashmang @PHP_UzMasters ##


if($text=="E" or $text=="e"){
bot('sendMessage',[
'chat_id'=>$cid,
 'text'=>"
 🆗 <b>Aniqlanmoqda Biroz Kuting... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'◽◽◽◽◽◽◽◽◽◽ 0%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'▪️◽◽◽◽◽◽◽◽◽ 10%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️◽◽◽◽◽◽◽◽ 20%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️◽◽◽◽◽◽◽ 30%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️◽◽◽◽◽◽ 40%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️◽◽◽◽◽ 50%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️◽◽◽◽ 60%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️◽◽◽ 70%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️◽◽ 80%'
]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️◽ 90%'
 ]);
 sleep(0.7);
bot('editMessageText',[
'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️ 100%'
 ]);
 sleep(0.7);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendVideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/jsjsjshsshjdndjrj/5",
'caption'=>"*E harfiga Video Tayyor 😉*

➖➖➖➖➖
*@$bot Tomonidan Yasab Berildi!*
_Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!_
",
'parse_mode'=>'markdown',
'reply_markup'=>$tugma,
]);
} 

## Bu @IsmgaVideo_Bot Kodi @Nazirjon_Official Tomonidan Tuzildi va @PHP_UzMasters Kanalida Tarqatildi! ###
## Mualliflik huquqini hurmat Qiling iltimos Kod Muallifi @Nazirjon_Official ##
## Bizni Kuzatib Boring v Bizdan Uzoqlashmang @PHP_UzMasters ##

if($text=="F" or $text=="f"){
bot('sendMessage',[
'chat_id'=>$cid,
 'text'=>"
 🆗 <b>Aniqlanmoqda Biroz Kuting... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'◽◽◽◽◽◽◽◽◽◽ 0%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'▪️◽◽◽◽◽◽◽◽◽ 10%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️◽◽◽◽◽◽◽◽ 20%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️◽◽◽◽◽◽◽ 30%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️◽◽◽◽◽◽ 40%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️◽◽◽◽◽ 50%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️◽◽◽◽ 60%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️◽◽◽ 70%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️◽◽ 80%'
]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️◽ 90%'
 ]);
 sleep(0.7);
bot('editMessageText',[
'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️ 100%'
 ]);
 sleep(0.7);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendVideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/jsjsjshsshjdndjrj/6",
'caption'=>"*F harfiga Video Tayyor 😉*

➖➖➖➖➖
*@$bot Tomonidan Yasab Berildi!*
_Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!_
",
'parse_mode'=>'markdown',
'reply_markup'=>$tugma,
]);
} 

## Bu @IsmgaVideo_Bot Kodi @Nazirjon_Official Tomonidan Tuzildi va @PHP_UzMasters Kanalida Tarqatildi! ###
## Mualliflik huquqini hurmat Qiling iltimos Kod Muallifi @Nazirjon_Official ##
## Bizni Kuzatib Boring v Bizdan Uzoqlashmang @PHP_UzMasters ##

if($text=="G" or $text=="g"){
bot('sendMessage',[
'chat_id'=>$cid,
 'text'=>"
 🆗 <b>Aniqlanmoqda Biroz Kuting... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'◽◽◽◽◽◽◽◽◽◽ 0%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'▪️◽◽◽◽◽◽◽◽◽ 10%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️◽◽◽◽◽◽◽◽ 20%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️◽◽◽◽◽◽◽ 30%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️◽◽◽◽◽◽ 40%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️◽◽◽◽◽ 50%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️◽◽◽◽ 60%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️◽◽◽ 70%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️◽◽ 80%'
]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️◽ 90%'
 ]);
 sleep(0.7);
bot('editMessageText',[
'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️ 100%'
 ]);
 sleep(0.7);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendVideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/jsjsjshsshjdndjrj/7",
'caption'=>"*G harfiga Video Tayyor 😉*

➖➖➖➖➖
*@$bot Tomonidan Yasab Berildi!*
_Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!_
",
'parse_mode'=>'markdown',
'reply_markup'=>$tugma,
]);
} 

## Bu @IsmgaVideo_Bot Kodi @Nazirjon_Official Tomonidan Tuzildi va @PHP_UzMasters Kanalida Tarqatildi! ###
## Mualliflik huquqini hurmat Qiling iltimos Kod Muallifi @Nazirjon_Official ##
## Bizni Kuzatib Boring v Bizdan Uzoqlashmang @PHP_UzMasters ##

if($text=="H" or $text=="h"){
bot('sendMessage',[
'chat_id'=>$cid,
 'text'=>"
 🆗 <b>Aniqlanmoqda Biroz Kuting... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'◽◽◽◽◽◽◽◽◽◽ 0%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'▪️◽◽◽◽◽◽◽◽◽ 10%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️◽◽◽◽◽◽◽◽ 20%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️◽◽◽◽◽◽◽ 30%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️◽◽◽◽◽◽ 40%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️◽◽◽◽◽ 50%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️◽◽◽◽ 60%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️◽◽◽ 70%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️◽◽ 80%'
]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️◽ 90%'
 ]);
 sleep(0.7);
bot('editMessageText',[
'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️ 100%'
 ]);
 sleep(0.7);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendVideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/jsjsjshsshjdndjrj/8",
'caption'=>"*H harfiga Video Tayyor 😉*

➖➖➖➖➖
*@$bot Tomonidan Yasab Berildi!*
_Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!_
",
'parse_mode'=>'markdown',
'reply_markup'=>$tugma,
]);
} 

## Bu @IsmgaVideo_Bot Kodi @Nazirjon_Official Tomonidan Tuzildi va @PHP_UzMasters Kanalida Tarqatildi! ###
## Mualliflik huquqini hurmat Qiling iltimos Kod Muallifi @Nazirjon_Official ##
## Bizni Kuzatib Boring v Bizdan Uzoqlashmang @PHP_UzMasters ##

if($text=="I" or $text=="i"){
bot('sendMessage',[
'chat_id'=>$cid,
 'text'=>"
 🆗 <b>Aniqlanmoqda Biroz Kuting... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'◽◽◽◽◽◽◽◽◽◽ 0%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'▪️◽◽◽◽◽◽◽◽◽ 10%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️◽◽◽◽◽◽◽◽ 20%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️◽◽◽◽◽◽◽ 30%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️◽◽◽◽◽◽ 40%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️◽◽◽◽◽ 50%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️◽◽◽◽ 60%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️◽◽◽ 70%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️◽◽ 80%'
]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️◽ 90%'
 ]);
 sleep(0.7);
bot('editMessageText',[
'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️ 100%'
 ]);
 sleep(0.7);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendVideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/jsjsjshsshjdndjrj/9",
'caption'=>"*I harfiga Video Tayyor 😉*

➖➖➖➖➖
*@$bot Tomonidan Yasab Berildi!*
_Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!_
",
'parse_mode'=>'markdown',
'reply_markup'=>$tugma,
]);
} 
## Bu @IsmgaVideo_Bot Kodi @Nazirjon_Official Tomonidan Tuzildi va @PHP_UzMasters Kanalida Tarqatildi! ###
## Mualliflik huquqini hurmat Qiling iltimos Kod Muallifi @Nazirjon_Official ##
## Bizni Kuzatib Boring v Bizdan Uzoqlashmang @PHP_UzMasters ##


if($text=="J" or $text=="j"){
bot('sendMessage',[
'chat_id'=>$cid,
 'text'=>"
 🆗 <b>Aniqlanmoqda Biroz Kuting... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'◽◽◽◽◽◽◽◽◽◽ 0%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'▪️◽◽◽◽◽◽◽◽◽ 10%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️◽◽◽◽◽◽◽◽ 20%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️◽◽◽◽◽◽◽ 30%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️◽◽◽◽◽◽ 40%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️◽◽◽◽◽ 50%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️◽◽◽◽ 60%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️◽◽◽ 70%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️◽◽ 80%'
]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️◽ 90%'
 ]);
 sleep(0.7);
bot('editMessageText',[
'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️ 100%'
 ]);
 sleep(0.7);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendVideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/jsjsjshsshjdndjrj/10",
'caption'=>"*J harfiga Video Tayyor 😉*

➖➖➖➖➖
*@$bot Tomonidan Yasab Berildi!*
_Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!_
",
'parse_mode'=>'markdown',
'reply_markup'=>$tugma,
]);
} 

## Bu @IsmgaVideo_Bot Kodi @Nazirjon_Official Tomonidan Tuzildi va @PHP_UzMasters Kanalida Tarqatildi! ###
## Mualliflik huquqini hurmat Qiling iltimos Kod Muallifi @Nazirjon_Official ##
## Bizni Kuzatib Boring v Bizdan Uzoqlashmang @PHP_UzMasters ##

if($text=="K" or $text=="k"){
bot('sendMessage',[
'chat_id'=>$cid,
 'text'=>"
 🆗 <b>Aniqlanmoqda Biroz Kuting... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'◽◽◽◽◽◽◽◽◽◽ 0%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'▪️◽◽◽◽◽◽◽◽◽ 10%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️◽◽◽◽◽◽◽◽ 20%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️◽◽◽◽◽◽◽ 30%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️◽◽◽◽◽◽ 40%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️◽◽◽◽◽ 50%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️◽◽◽◽ 60%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️◽◽◽ 70%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️◽◽ 80%'
]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️◽ 90%'
 ]);
 sleep(0.7);
bot('editMessageText',[
'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️ 100%'
 ]);
 sleep(0.7);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendVideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/jsjsjshsshjdndjrj/11",
'caption'=>"*K harfiga Video Tayyor 😉*

➖➖➖➖➖
*@$bot Tomonidan Yasab Berildi!*
_Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!_
",
'parse_mode'=>'markdown',
'reply_markup'=>$tugma,
]);
} 

## Bu @IsmgaVideo_Bot Kodi @Nazirjon_Official Tomonidan Tuzildi va @PHP_UzMasters Kanalida Tarqatildi! ###
## Mualliflik huquqini hurmat Qiling iltimos Kod Muallifi @Nazirjon_Official ##
## Bizni Kuzatib Boring v Bizdan Uzoqlashmang @PHP_UzMasters ##

if($text=="L" or $text=="l"){
bot('sendMessage',[
'chat_id'=>$cid,
 'text'=>"
 🆗 <b>Aniqlanmoqda Biroz Kuting... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'◽◽◽◽◽◽◽◽◽◽ 0%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'▪️◽◽◽◽◽◽◽◽◽ 10%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️◽◽◽◽◽◽◽◽ 20%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️◽◽◽◽◽◽◽ 30%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️◽◽◽◽◽◽ 40%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️◽◽◽◽◽ 50%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️◽◽◽◽ 60%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️◽◽◽ 70%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️◽◽ 80%'
]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️◽ 90%'
 ]);
 sleep(0.7);
bot('editMessageText',[
'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️ 100%'
 ]);
 sleep(0.7);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendVideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/jsjsjshsshjdndjrj/12",
'caption'=>"*L harfiga Video Tayyor 😉*

➖➖➖➖➖
*@$bot Tomonidan Yasab Berildi!*
_Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!_
",
'parse_mode'=>'markdown',
'reply_markup'=>$tugma,
]);
} 

## Bu @IsmgaVideo_Bot Kodi @Nazirjon_Official Tomonidan Tuzildi va @PHP_UzMasters Kanalida Tarqatildi! ###
## Mualliflik huquqini hurmat Qiling iltimos Kod Muallifi @Nazirjon_Official ##
## Bizni Kuzatib Boring v Bizdan Uzoqlashmang @PHP_UzMasters ##

if($text=="M" or $text=="m"){
bot('sendMessage',[
'chat_id'=>$cid,
 'text'=>"
 🆗 <b>Aniqlanmoqda Biroz Kuting... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'◽◽◽◽◽◽◽◽◽◽ 0%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'▪️◽◽◽◽◽◽◽◽◽ 10%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️◽◽◽◽◽◽◽◽ 20%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️◽◽◽◽◽◽◽ 30%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️◽◽◽◽◽◽ 40%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️◽◽◽◽◽ 50%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️◽◽◽◽ 60%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️◽◽◽ 70%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️◽◽ 80%'
]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️◽ 90%'
 ]);
 sleep(0.7);
bot('editMessageText',[
'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️ 100%'
 ]);
 sleep(0.7);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendVideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/jsjsjshsshjdndjrj/13",
'caption'=>"*M harfiga Video Tayyor 😉*

➖➖➖➖➖
*@$bot Tomonidan Yasab Berildi!*
_Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!_
",
'parse_mode'=>'markdown',
'reply_markup'=>$tugma,
]);
} 

## Bu @IsmgaVideo_Bot Kodi @Nazirjon_Official Tomonidan Tuzildi va @PHP_UzMasters Kanalida Tarqatildi! ###
## Mualliflik huquqini hurmat Qiling iltimos Kod Muallifi @Nazirjon_Official ##
## Bizni Kuzatib Boring v Bizdan Uzoqlashmang @PHP_UzMasters ##

if($text=="N" or $text=="n"){
bot('sendMessage',[
'chat_id'=>$cid,
 'text'=>"
 🆗 <b>Aniqlanmoqda Biroz Kuting... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'◽◽◽◽◽◽◽◽◽◽ 0%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'▪️◽◽◽◽◽◽◽◽◽ 10%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️◽◽◽◽◽◽◽◽ 20%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️◽◽◽◽◽◽◽ 30%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️◽◽◽◽◽◽ 40%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️◽◽◽◽◽ 50%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️◽◽◽◽ 60%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️◽◽◽ 70%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️◽◽ 80%'
]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️◽ 90%'
 ]);
 sleep(0.7);
bot('editMessageText',[
'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️ 100%'
 ]);
 sleep(0.7);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendVideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/jsjsjshsshjdndjrj/14",
'caption'=>"*N harfiga Video Tayyor 😉*

➖➖➖➖➖
*@$bot Tomonidan Yasab Berildi!*
_Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!_
",
'parse_mode'=>'markdown',
'reply_markup'=>$tugma,
]);
} 

## Bu @IsmgaVideo_Bot Kodi @Nazirjon_Official Tomonidan Tuzildi va @PHP_UzMasters Kanalida Tarqatildi! ###
## Mualliflik huquqini hurmat Qiling iltimos Kod Muallifi @Nazirjon_Official ##
## Bizni Kuzatib Boring v Bizdan Uzoqlashmang @PHP_UzMasters ##

if($text=="O" or $text=="o"){
bot('sendMessage',[
'chat_id'=>$cid,
 'text'=>"
 🆗 <b>Aniqlanmoqda Biroz Kuting... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'◽◽◽◽◽◽◽◽◽◽ 0%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'▪️◽◽◽◽◽◽◽◽◽ 10%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️◽◽◽◽◽◽◽◽ 20%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️◽◽◽◽◽◽◽ 30%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️◽◽◽◽◽◽ 40%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️◽◽◽◽◽ 50%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️◽◽◽◽ 60%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️◽◽◽ 70%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️◽◽ 80%'
]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️◽ 90%'
 ]);
 sleep(0.7);
bot('editMessageText',[
'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️ 100%'
 ]);
 sleep(0.7);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendVideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/jsjsjshsshjdndjrj/15",
'caption'=>"*O harfiga Video Tayyor 😉*

➖➖➖➖➖
*@$bot Tomonidan Yasab Berildi!*
_Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!_
",
'parse_mode'=>'markdown',
'reply_markup'=>$tugma,
]);
} 

## Bu @IsmgaVideo_Bot Kodi @Nazirjon_Official Tomonidan Tuzildi va @PHP_UzMasters Kanalida Tarqatildi! ###
## Mualliflik huquqini hurmat Qiling iltimos Kod Muallifi @Nazirjon_Official ##
## Bizni Kuzatib Boring v Bizdan Uzoqlashmang @PHP_UzMasters ##

if($text=="P" or $text=="p"){
bot('sendMessage',[
'chat_id'=>$cid,
 'text'=>"
 🆗 <b>Aniqlanmoqda Biroz Kuting... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'◽◽◽◽◽◽◽◽◽◽ 0%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'▪️◽◽◽◽◽◽◽◽◽ 10%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️◽◽◽◽◽◽◽◽ 20%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️◽◽◽◽◽◽◽ 30%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️◽◽◽◽◽◽ 40%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️◽◽◽◽◽ 50%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️◽◽◽◽ 60%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️◽◽◽ 70%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️◽◽ 80%'
]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️◽ 90%'
 ]);
 sleep(0.7);
bot('editMessageText',[
'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️ 100%'
 ]);
 sleep(0.7);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendVideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/jsjsjshsshjdndjrj/16",
'caption'=>"*P harfiga Video Tayyor 😉*

➖➖➖➖➖
*@$bot Tomonidan Yasab Berildi!*
_Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!_
",
'parse_mode'=>'markdown',
'reply_markup'=>$tugma,
]);
} 

## Bu @IsmgaVideo_Bot Kodi @Nazirjon_Official Tomonidan Tuzildi va @PHP_UzMasters Kanalida Tarqatildi! ###
## Mualliflik huquqini hurmat Qiling iltimos Kod Muallifi @Nazirjon_Official ##
## Bizni Kuzatib Boring v Bizdan Uzoqlashmang @PHP_UzMasters ##

if($text=="Q" or $text=="q"){
bot('sendMessage',[
'chat_id'=>$cid,
 'text'=>"
 🆗 <b>Aniqlanmoqda Biroz Kuting... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'◽◽◽◽◽◽◽◽◽◽ 0%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'▪️◽◽◽◽◽◽◽◽◽ 10%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️◽◽◽◽◽◽◽◽ 20%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️◽◽◽◽◽◽◽ 30%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️◽◽◽◽◽◽ 40%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️◽◽◽◽◽ 50%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️◽◽◽◽ 60%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️◽◽◽ 70%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️◽◽ 80%'
]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️◽ 90%'
 ]);
 sleep(0.7);
bot('editMessageText',[
'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️ 100%'
 ]);
 sleep(0.7);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/jsjsjshsshjdndjrj/17",
'caption'=>"*Q harfiga Video Tayyor 😉*

➖➖➖➖➖
*@$bot Tomonidan Yasab Berildi!*
_Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!_
",
'parse_mode'=>'markdown',
'reply_markup'=>$tugma,
]);
} 

## Bu @IsmgaVideo_Bot Kodi @Nazirjon_Official Tomonidan Tuzildi va @PHP_UzMasters Kanalida Tarqatildi! ###
## Mualliflik huquqini hurmat Qiling iltimos Kod Muallifi @Nazirjon_Official ##
## Bizni Kuzatib Boring v Bizdan Uzoqlashmang @PHP_UzMasters ##

if($text=="R" or $text=="r"){
bot('sendMessage',[
'chat_id'=>$cid,
 'text'=>"
 🆗 <b>Aniqlanmoqda Biroz Kuting... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'◽◽◽◽◽◽◽◽◽◽ 0%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'▪️◽◽◽◽◽◽◽◽◽ 10%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️◽◽◽◽◽◽◽◽ 20%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️◽◽◽◽◽◽◽ 30%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️◽◽◽◽◽◽ 40%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️◽◽◽◽◽ 50%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️◽◽◽◽ 60%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️◽◽◽ 70%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️◽◽ 80%'
]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️◽ 90%'
 ]);
 sleep(0.7);
bot('editMessageText',[
'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️ 100%'
 ]);
 sleep(0.7);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendVideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/jsjsjshsshjdndjrj/18",
'caption'=>"*R harfiga Video Tayyor 😉*

➖➖➖➖➖
*@$bot Tomonidan Yasab Berildi!*
_Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!_
",
'parse_mode'=>'markdown',
'reply_markup'=>$tugma,
]);
} 

## Bu @IsmgaVideo_Bot Kodi @Nazirjon_Official Tomonidan Tuzildi va @PHP_UzMasters Kanalida Tarqatildi! ###
## Mualliflik huquqini hurmat Qiling iltimos Kod Muallifi @Nazirjon_Official ##
## Bizni Kuzatib Boring v Bizdan Uzoqlashmang @PHP_UzMasters ##

if($text=="S" or $text=="s"){
bot('sendMessage',[
'chat_id'=>$cid,
 'text'=>"
 🆗 <b>Aniqlanmoqda Biroz Kuting... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'◽◽◽◽◽◽◽◽◽◽ 0%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'▪️◽◽◽◽◽◽◽◽◽ 10%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️◽◽◽◽◽◽◽◽ 20%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️◽◽◽◽◽◽◽ 30%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️◽◽◽◽◽◽ 40%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️◽◽◽◽◽ 50%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️◽◽◽◽ 60%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️◽◽◽ 70%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️◽◽ 80%'
]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️◽ 90%'
 ]);
 sleep(0.7);
bot('editMessageText',[
'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️ 100%'
 ]);
 sleep(0.7);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendVideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/jsjsjshsshjdndjrj/19",
'caption'=>"*S harfiga Video Tayyor 😉*

➖➖➖➖➖
*@$bot Tomonidan Yasab Berildi!*
_Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!_
",
'parse_mode'=>'markdown',
'reply_markup'=>$tugma,
]);
} 

## Bu @IsmgaVideo_Bot Kodi @Nazirjon_Official Tomonidan Tuzildi va @PHP_UzMasters Kanalida Tarqatildi! ###
## Mualliflik huquqini hurmat Qiling iltimos Kod Muallifi @Nazirjon_Official ##
## Bizni Kuzatib Boring v Bizdan Uzoqlashmang @PHP_UzMasters ##

if($text=="T" or $text=="t"){
bot('sendMessage',[
'chat_id'=>$cid,
 'text'=>"
 🆗 <b>Aniqlanmoqda Biroz Kuting... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'◽◽◽◽◽◽◽◽◽◽ 0%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'▪️◽◽◽◽◽◽◽◽◽ 10%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️◽◽◽◽◽◽◽◽ 20%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️◽◽◽◽◽◽◽ 30%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️◽◽◽◽◽◽ 40%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️◽◽◽◽◽ 50%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️◽◽◽◽ 60%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️◽◽◽ 70%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️◽◽ 80%'
]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️◽ 90%'
 ]);
 sleep(0.7);
bot('editMessageText',[
'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️ 100%'
 ]);
 sleep(0.7);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendVideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/jsjsjshsshjdndjrj/21",
'caption'=>"*T harfiga Video Tayyor 😉*

➖➖➖➖➖
*@$bot Tomonidan Yasab Berildi!*
_Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!_
",
'parse_mode'=>'markdown',
'reply_markup'=>$tugma,
]);
} 

## Bu @IsmgaVideo_Bot Kodi @Nazirjon_Official Tomonidan Tuzildi va @PHP_UzMasters Kanalida Tarqatildi! ###
## Mualliflik huquqini hurmat Qiling iltimos Kod Muallifi @Nazirjon_Official ##
## Bizni Kuzatib Boring v Bizdan Uzoqlashmang @PHP_UzMasters ##

if($text=="U" or $text=="u"){
bot('sendMessage',[
'chat_id'=>$cid,
 'text'=>"
 🆗 <b>Aniqlanmoqda Biroz Kuting... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'◽◽◽◽◽◽◽◽◽◽ 0%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'▪️◽◽◽◽◽◽◽◽◽ 10%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️◽◽◽◽◽◽◽◽ 20%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️◽◽◽◽◽◽◽ 30%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️◽◽◽◽◽◽ 40%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️◽◽◽◽◽ 50%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️◽◽◽◽ 60%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️◽◽◽ 70%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️◽◽ 80%'
]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️◽ 90%'
 ]);
 sleep(0.7);
bot('editMessageText',[
'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️ 100%'
 ]);
 sleep(0.7);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendVideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/jsjsjshsshjdndjrj/23",
'caption'=>"*U harfiga Video Tayyor 😉*

➖➖➖➖➖
*@$bot Tomonidan Yasab Berildi!*
_Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!_
",
'parse_mode'=>'markdown',
'reply_markup'=>$tugma,
]);
} 

## Bu @IsmgaVideo_Bot Kodi @Nazirjon_Official Tomonidan Tuzildi va @PHP_UzMasters Kanalida Tarqatildi! ###
## Mualliflik huquqini hurmat Qiling iltimos Kod Muallifi @Nazirjon_Official ##
## Bizni Kuzatib Boring v Bizdan Uzoqlashmang @PHP_UzMasters ##

if($text=="V" or $text=="v"){
bot('sendMessage',[
'chat_id'=>$cid,
 'text'=>"
 🆗 <b>Aniqlanmoqda Biroz Kuting... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'◽◽◽◽◽◽◽◽◽◽ 0%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'▪️◽◽◽◽◽◽◽◽◽ 10%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️◽◽◽◽◽◽◽◽ 20%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️◽◽◽◽◽◽◽ 30%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️◽◽◽◽◽◽ 40%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️◽◽◽◽◽ 50%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️◽◽◽◽ 60%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️◽◽◽ 70%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️◽◽ 80%'
]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️◽ 90%'
 ]);
 sleep(0.7);
bot('editMessageText',[
'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️ 100%'
 ]);
 sleep(0.7);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendVideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/jsjsjshsshjdndjrj/24",
'caption'=>"*V harfiga Video Tayyor 😉*

➖➖➖➖➖
*@$bot Tomonidan Yasab Berildi!*
_Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!_
",
'parse_mode'=>'markdown',
'reply_markup'=>$tugma,
]);
} 

## Bu @IsmgaVideo_Bot Kodi @Nazirjon_Official Tomonidan Tuzildi va @PHP_UzMasters Kanalida Tarqatildi! ###
## Mualliflik huquqini hurmat Qiling iltimos Kod Muallifi @Nazirjon_Official ##
## Bizni Kuzatib Boring v Bizdan Uzoqlashmang @PHP_UzMasters ##

if($text=="X" or $text=="x"){
bot('sendMessage',[
'chat_id'=>$cid,
 'text'=>"
 🆗 <b>Aniqlanmoqda Biroz Kuting... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'◽◽◽◽◽◽◽◽◽◽ 0%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'▪️◽◽◽◽◽◽◽◽◽ 10%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️◽◽◽◽◽◽◽◽ 20%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️◽◽◽◽◽◽◽ 30%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️◽◽◽◽◽◽ 40%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️◽◽◽◽◽ 50%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️◽◽◽◽ 60%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️◽◽◽ 70%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️◽◽ 80%'
]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️◽ 90%'
 ]);
 sleep(0.7);
bot('editMessageText',[
'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️ 100%'
 ]);
 sleep(0.7);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendVideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/jsjsjshsshjdndjrj/26",
'caption'=>"*X harfiga Video Tayyor 😉*

➖➖➖➖➖
*@$bot Tomonidan Yasab Berildi!*
_Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!_
",
'parse_mode'=>'markdown',
'reply_markup'=>$tugma,
]);
} 

## Bu @IsmgaVideo_Bot Kodi @Nazirjon_Official Tomonidan Tuzildi va @PHP_UzMasters Kanalida Tarqatildi! ###
## Mualliflik huquqini hurmat Qiling iltimos Kod Muallifi @Nazirjon_Official ##
## Bizni Kuzatib Boring v Bizdan Uzoqlashmang @PHP_UzMasters ##

if($text=="Y" or $text=="y"){
bot('sendMessage',[
'chat_id'=>$cid,
 'text'=>"
 🆗 <b>Aniqlanmoqda Biroz Kuting... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'◽◽◽◽◽◽◽◽◽◽ 0%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'▪️◽◽◽◽◽◽◽◽◽ 10%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️◽◽◽◽◽◽◽◽ 20%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️◽◽◽◽◽◽◽ 30%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️◽◽◽◽◽◽ 40%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️◽◽◽◽◽ 50%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️◽◽◽◽ 60%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️◽◽◽ 70%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️◽◽ 80%'
]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️◽ 90%'
 ]);
 sleep(0.7);
bot('editMessageText',[
'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️ 100%'
 ]);
 sleep(0.7);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendVideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/jsjsjshsshjdndjrj/28",
'caption'=>"*Y harfiga Video Tayyor 😉*

➖➖➖➖➖
*@$bot Tomonidan Yasab Berildi!*
_Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!_
",
'parse_mode'=>'markdown',
'reply_markup'=>$tugma,
]);
} 


## Bu @IsmgaVideo_Bot Kodi @Nazirjon_Official Tomonidan Tuzildi va @PHP_UzMasters Kanalida Tarqatildi! ###
## Mualliflik huquqini hurmat Qiling iltimos Kod Muallifi @Nazirjon_Official ##
## Bizni Kuzatib Boring v Bizdan Uzoqlashmang @PHP_UzMasters ##


if($text=="Z" or $text=="z"){
bot('sendMessage',[
'chat_id'=>$cid,
 'text'=>"
 🆗 <b>Aniqlanmoqda Biroz Kuting... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'◽◽◽◽◽◽◽◽◽◽ 0%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'▪️◽◽◽◽◽◽◽◽◽ 10%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️◽◽◽◽◽◽◽◽ 20%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️◽◽◽◽◽◽◽ 30%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️◽◽◽◽◽◽ 40%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️◽◽◽◽◽ 50%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️◽◽◽◽ 60%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️◽◽◽ 70%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️◽◽ 80%'
]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️◽ 90%'
 ]);
 sleep(0.7);
bot('editMessageText',[
'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️ 100%'
 ]);
 sleep(0.7);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendVideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/jsjsjshsshjdndjrj/27",
'caption'=>"*Z harfiga Video Tayyor 😉*

➖➖➖➖➖
*@$bot Tomonidan Yasab Berildi!*
_Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!_
",
'parse_mode'=>'markdown',
'reply_markup'=>$tugma,
]);
} 

## Bu @IsmgaVideo_Bot Kodi @Nazirjon_Official Tomonidan Tuzildi va @PHP_UzMasters Kanalida Tarqatildi! ###
## Mualliflik huquqini hurmat Qiling iltimos Kod Muallifi @Nazirjon_Official ##
## Bizni Kuzatib Boring v Bizdan Uzoqlashmang @PHP_UzMasters ##

if($text=="Oʻ" or $text=="oʻ"){
bot('sendMessage',[
'chat_id'=>$cid,
 'text'=>"
 🆗 <b>Aniqlanmoqda Biroz Kuting... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'◽◽◽◽◽◽◽◽◽◽ 0%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'▪️◽◽◽◽◽◽◽◽◽ 10%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️◽◽◽◽◽◽◽◽ 20%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️◽◽◽◽◽◽◽ 30%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️◽◽◽◽◽◽ 40%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️◽◽◽◽◽ 50%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️◽◽◽◽ 60%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️◽◽◽ 70%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️◽◽ 80%'
]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️◽ 90%'
 ]);
 sleep(0.7);
bot('editMessageText',[
'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️ 100%'
 ]);
 sleep(0.7);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendVideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/jsjsjshsshjdndjrj/29",
'caption'=>"*Oʻ harfiga Video Tayyor 😉*

➖➖➖➖➖
*@$bot Tomonidan Yasab Berildi!*
_Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!_
",
'parse_mode'=>'markdown',
'reply_markup'=>$tugma,
]);
} 

## Bu @IsmgaVideo_Bot Kodi @Nazirjon_Official Tomonidan Tuzildi va @PHP_UzMasters Kanalida Tarqatildi! ###
## Mualliflik huquqini hurmat Qiling iltimos Kod Muallifi @Nazirjon_Official ##
## Bizni Kuzatib Boring v Bizdan Uzoqlashmang @PHP_UzMasters ##


if($text=="Gʻ" or $text=="gʻ"){
bot('sendMessage',[
'chat_id'=>$cid,
 'text'=>"
 🆗 <b>Aniqlanmoqda Biroz Kuting... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'◽◽◽◽◽◽◽◽◽◽ 0%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'▪️◽◽◽◽◽◽◽◽◽ 10%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️◽◽◽◽◽◽◽◽ 20%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️◽◽◽◽◽◽◽ 30%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️◽◽◽◽◽◽ 40%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️◽◽◽◽◽ 50%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️◽◽◽◽ 60%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️◽◽◽ 70%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️◽◽ 80%'
]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️◽ 90%'
 ]);
 sleep(0.7);
bot('editMessageText',[
'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️ 100%'
 ]);
 sleep(0.7);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendVideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/jsjsjshsshjdndjrj/7",
'caption'=>"*Gʻ harfiga Video Tayyor 😉*

➖➖➖➖➖
*@$bot Tomonidan Yasab Berildi!*
_Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!_
",
'parse_mode'=>'markdown',
'reply_markup'=>$tugma,
]);
} 

## Bu @IsmgaVideo_Bot Kodi @Nazirjon_Official Tomonidan Tuzildi va @PHP_UzMasters Kanalida Tarqatildi! ###
## Mualliflik huquqini hurmat Qiling iltimos Kod Muallifi @Nazirjon_Official ##
## Bizni Kuzatib Boring v Bizdan Uzoqlashmang @PHP_UzMasters ##

if($text=="Sh" or $text=="sh"){
bot('sendMessage',[
'chat_id'=>$cid,
 'text'=>"
 🆗 <b>Aniqlanmoqda Biroz Kuting... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'◽◽◽◽◽◽◽◽◽◽ 0%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'▪️◽◽◽◽◽◽◽◽◽ 10%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️◽◽◽◽◽◽◽◽ 20%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️◽◽◽◽◽◽◽ 30%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️◽◽◽◽◽◽ 40%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️◽◽◽◽◽ 50%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️◽◽◽◽ 60%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️◽◽◽ 70%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️◽◽ 80%'
]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️◽ 90%'
 ]);
 sleep(0.7);
bot('editMessageText',[
'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️ 100%'
 ]);
 sleep(0.7);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendVideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/jsjsjshsshjdndjrj/30",
'caption'=>"*Sh harfiga Video Tayyor 😉*

➖➖➖➖➖
*@$bot Tomonidan Yasab Berildi!*
_Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!_
",
'parse_mode'=>'markdown',
'reply_markup'=>$tugma,
]);
} 


if($text=="Ch" or $text=="ch"){
bot('sendMessage',[
'chat_id'=>$cid,
 'text'=>"
 🆗 <b>Aniqlanmoqda Biroz Kuting... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'◽◽◽◽◽◽◽◽◽◽ 0%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'▪️◽◽◽◽◽◽◽◽◽ 10%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️◽◽◽◽◽◽◽◽ 20%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️◽◽◽◽◽◽◽ 30%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️◽◽◽◽◽◽ 40%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️◽◽◽◽◽ 50%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️◽◽◽◽ 60%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️◽◽◽ 70%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️◽◽ 80%'
]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️◽ 90%'
 ]);
 sleep(0.7);
bot('editMessageText',[
'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️ 100%'
 ]);
 sleep(0.7);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendVideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/jsjsjshsshjdndjrj/31",
'caption'=>"*Ch harfiga Video Tayyor 😉*

➖➖➖➖➖
*@$bot Tomonidan Yasab Berildi!*
_Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!_
",
'parse_mode'=>'markdown',
'reply_markup'=>$tugma,
]);
} 

## Bu @IsmgaVideo_Bot Kodi @Nazirjon_Official Tomonidan Tuzildi va @PHP_UzMasters Kanalida Tarqatildi! ###
## Mualliflik huquqini hurmat Qiling iltimos Kod Muallifi @Nazirjon_Official ##
## Bizni Kuzatib Boring v Bizdan Uzoqlashmang @PHP_UzMasters ##

if($text=="W" or $text=="w"){
bot('sendMessage',[
'chat_id'=>$cid,
 'text'=>"
 🆗 <b>Aniqlanmoqda Biroz Kuting... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'◽◽◽◽◽◽◽◽◽◽ 0%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'▪️◽◽◽◽◽◽◽◽◽ 10%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️◽◽◽◽◽◽◽◽ 20%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️◽◽◽◽◽◽◽ 30%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️◽◽◽◽◽◽ 40%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️◽◽◽◽◽ 50%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️◽◽◽◽ 60%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️◽◽◽ 70%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️◽◽ 80%'
]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️◽ 90%'
 ]);
 sleep(0.7);
bot('editMessageText',[
'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️ 100%'
 ]);
 sleep(0.7);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendVideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/jsjsjshsshjdndjrj/25",
'caption'=>"*W harfiga Video Tayyor 😉*

➖➖➖➖➖
*@$bot Tomonidan Yasab Berildi!*
_Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!_
",
'parse_mode'=>'markdown',
'reply_markup'=>$tugma,
]);
} 





$lichka=file_get_contents("azo.db");
$gruppa=file_get_contents("gr.db");
if($type=="group" or $type=="supergroup"){
if(strpos($gruppa,"$cid") !==false){
}else{
file_put_contents("gr.db","$gruppa\n$cid");
}
}
if($type=="private"){
if(strpos($lichka,"$cid") !==false){
}else{
file_put_contents("azo.db","$lichka\n$cid");
}
}
if($text=="/stat"){
$lichka=file_get_contents("azo.db");
$lich=substr_count($lichka,"\n");
$gruppa=file_get_contents("gr.db");
$gro=substr_count($gruppa,"\n");
$um=$lich+$gro;
bot('sendmessage',[
'chat_id'=>$cid,
    'text'=> "<b>Bot statatistikasi:</b>    
├▶A'zolar: <b>$lich</b>
├▶Guruxlar: <b>$gro</b>
└▶⭕Umumuy: <b>$um</b>

👨‍💻Dasturchi: @Nazirjon_Official",
'parse_mode' => 'html',
'reply_markup'=>$keys, 
]);
}
## Bu @IsmgaVideo_Bot Kodi @Nazirjon_Official Tomonidan Tuzildi va @PHP_UzMasters Kanalida Tarqatildi! ###
## Mualliflik huquqini hurmat Qiling iltimos Kod Muallifi @Nazirjon_Official ##
## Bizni Kuzatib Boring v Bizdan Uzoqlashmang @PHP_UzMasters ##


?>