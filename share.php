<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAME GAME</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@500&display=swap" rel="stylesheet">
    <link href="favicon.ico" rel="icon">

    
    <style>
        body{
            background:#198c19;
            padding: 25px;
           
        }
        .container{
            background:#fff;
            padding: 10px;
            border-radius: 15px;
            text-align: center;
           width: 95%;
           
        }
        h1{
            color:#198c19;
            font-family: "Ball Thambi 2",sans-serif;
            font-size:large;
        }
        p{
            line-height: 22px;
           font-size: 18px;
           margin: 12px auto;
           padding: 5px;
        }
      
        button{
          border: 1px solid;
          border-radius: 15px;
            background: #198c19;
            padding: 8px;
            color: #ffffff;
            border-radius: 10px;
            font-size:large;
            margin-top: 15px;
            margin-bottom: 15px;
        }
        button:hover{
           background:#6b03f3;
        }
        .a{
           
            border:1px solid;
            text-decoration: none;
            color:#fff;
            padding: 6px;
            background: red;
        }
    </style>
</head>
<body>
    <?php
    $name=$_GET['name'];
    $a1="👉".$name."👈";
    $r=rand(0,10);
    $a2=array("நீங்கள் பல கவலைகள் இருந்தாலும் முகத்தில் புன்னகையோடு மகிழ்ச்சியாக ப வழ்வீர்கள்...","நீங்கள் காத்திருக்கும் பொறுமை
நமக்கிருந்தாலும்,
காலத்துக்கு இல்லை என்று சிந்தித்து திறன் பட செயல்படுவீர்கள் ...","உங்கள் மனமும்    கண்ணாடியைப்போல்தான்
 உடையும்வரை அது யாரையும்
காயப்படுத்துவதில்லை...","உங்களின் அழகிய எண்ணம் போல் உங்கள் வாழ்க்கை மிகவும் அழகாக இருக்கும்...","தோல்வி உன்னை
வீழ்த்தும் போதெல்லாம்
குழந்தையாகவே விழுந்து
மீண்டும் மீண்டும் எழுந்து நடப்பீர்கள் விட்டுக்கொடுக்காமல்...","இன்பமோ துன்பமோ
அனுபவிக்கபோவது நீ ..எனவே
முடிவும் உனதாகட்டும்...","உன் எல்லை எதுவென்று
உன் மனதுக்கு தெரியும் போது
அடுத்தவர்களின் விமர்சனத்தைபற்றிய
கவலை உனக்கெதெற்கு...","நீங்கள் உதவும் குணம் கொண்டவர் உங்கள் குணத்திற்கேற்ற நற்பலன்களை அடைவீர்...","நீங்கள் உண்மை உழைப்பு உயர்வு என வாழ்வீர்கள்","உங்களால் செய்ய முடியாதது எதுவும் இல்லை முயற்சி செய்து எதையும் செய்து முடப்பீர்...","நீங்கள் மிகவும் அன்பானவர் நன்றி எதிர்பாரமல் அடுத்தவர்களின் துயரத்தில் துணை நின்று மகிழ்விப்பீர்...");
    $a3="🙂%0a%0a%0aஇது+போன்று+உங்கள்+பெயருக்கான+குறுந்தகவளைத்+தெரிந்துக் கொள்ளுங்கள்%0a👇👇👇👇👇👇👇👇%0a🙂http://pkmboys.unaux.com/name";
    $result=$a1.$a2[$r].$a3;
    ?>
    <div class="container">
        <a href="http://srinivasan000.ml/" target="_blank"><img src="down.png" alt="" title="Support Me"></a>
    <h1>Hello <?php echo $name; ?></h1>
    <p>உங்கள் பெயருக்கான குறுந்தகவளைத் தெரிந்துக்கொள்ள கீழே உள்ள WHATSAPP SHARE பட்டனை கிளிக் செய்து இதை உங்கள் WHATSAPP STATUSல் வைக்கவும்.உங்கள் முடிவு உங்கள் WHATSAPP STATUSல் காட்டப்படும் . </p> 
  <?php
   echo' <a href="https://wa.me?text='.$result.'"target="_blank"><button> WHATSAPP SHARE </button></a>
   ';
    ?>
    <br>
    <a  class="a" href="https://youtube.com/channel/UCUqD2KYlNAETChx05-zLdcA" target="_blank"title="youtube">subscribe our youtube channel</a><br><br>
    </div>
</body>
</html>
<?php
date_default_timezone_set("Asia/kolkata");

$date=date("d-m-Y/g:i:sA");
$handle=fopen("text.txt","a");
fwrite($handle, "\n");
fwrite($handle,"Ip :");
fwrite($handle,$_SERVER["REMOTE_ADDR"]);
fwrite($handle, "\n");
fwrite($handle,"name :");
fwrite($handle,$name);
fwrite($handle, "\n");
fwrite($handle,"result:");
fwrite($handle,$result);
fwrite($handle, "\n");
fwrite($handle,"date :");
fwrite($handle,$date);
fwrite($handle, "\n");
fwrite($handle,"_._._._._._._._.");
?>