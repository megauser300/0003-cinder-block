<?php
ini_set( 'display_errors', 1 );
require __DIR__ . '/vendor/autoload.php';
 // $to='trifectahealthnyc@gmail.com';    
$mail = new PHPMailer(true);
$mail->IsMail();
$mail->IsHTML(true);
$mail->Priority = '1';
$mail->Encoding = 'base64';
$mail->CharSet = 'utf-8';

///от кого письмо  
$mail->setFrom('info@info.com');

 $mail->addAddress('wol1414@gmail.com');
//  $mail->addAddress('spike.mgn@gmail.com');
 // $mail->addAddress('horenkova369@gmail.com');
// $mail->addAddress('stab@inbox.support');



//Субъект
$mail->Subject = 'Заявка с сайта';

$time = date('d.m.Y в H:i');
$html = '

<table style="width: 100%;">';
    if (!empty($_POST['order'])) {
        $html .= ' <tr style="background-color: #f8f8f8;">  <td style="padding: 10px; border: #e9e9e9 1px solid;">Вид формы:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['order'] . '</b></td></tr>';
    }

  

    if (!empty($_POST['name'])) {
        $html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;">Имя:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['name'] . '</b></td></tr>';
    }
    
    if (!empty($_POST['tel'])) {
        $html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> Телефон:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['tel'] . '</b></td></tr>';
    }
    
    if (!empty($_POST['email'])) {
        $html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> Email:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['email'] . '</b></td></tr>';
    }
    
    if (!empty($_POST['whatsapp'])) {
        $html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> Whatsapp:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['whatsapp'] . '</b></td></tr>';
    }
    
    if (!empty($_POST['viber'])) {
        $html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> Viber:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['viber'] . '</b></td></tr>';
    }
    
    if (!empty($_POST['time'])) {
        $html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> Время для звонка:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['time'] . '</b></td></tr>';
    }

    
    if (!empty($_POST['choose-type'])) {
        $html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> Тип шлакоблок:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['choose-type'] . '</b></td></tr>';
    }
    
    if (!empty($_POST['result'])) {
        $html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> Объем:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['result'] . '</b></td></tr>';
    }
    
    if (!empty($_POST['cost'])) {
        $html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> Стоимость:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['cost'] . '</b></td></tr>';
    }
    
    if (!empty($_POST['length'])) {
        $html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> Длина стен:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['length'] . '</b></td></tr>';
    }
    
    if (!empty($_POST['height'])) {
        $html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> Высота стен:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['height'] . '</b></td></tr>';
    }
    
    if (!empty($_POST['width'])) {
        $html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> Ширина стен:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['width'] . '</b></td></tr>';
    }
    
    if (!empty($_POST['thickness'])) {
        $html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> Толщина стен:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['thickness'] . '</b></td></tr>';
    }
    
    if (!empty($_POST['windows'])) {
        $html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> Количество окон:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['windows'] . '</b></td></tr>';
    }
    
    
    if (!empty($_POST['doors'])) {
        $html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> Количество дверей:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['doors'] . '</b></td>';
    }

    if (!empty($_POST['utm_source'])) {
        $html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> utm_source:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['utm_source'] . '</b></td>';
    }
    
    if (!empty($_POST['utm_term'])) {
        $html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> utm_term:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['utm_term'] . '</b></td>';
    }
    // if (!empty($_POST['tech'])) {
    //     $html .= ' <tr style="background-color: #f8f8f8;">  <td style="padding: 10px; border: #e9e9e9 1px solid;"> Техника:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . implode(", ",$_POST['tech']) . '</b></td></tr>';
    // }

   
     $html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;">  Время отправки:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $time . '</b></td>
      <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> IP:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_SERVER['REMOTE_ADDR'] . '</b></td> 
</table>
';
$mail->Body = $html;

$uploaddir = __DIR__ . '/upload/';

if ($_FILES['file']['tmp_name']) {    
    $mail->addAttachment($_FILES['file']['tmp_name'],$_FILES['file']['name']);
}

// if ($_FILES['file2']['tmp_name']) {    
//  $mail->addAttachment($_FILES['file2']['tmp_name'],$_FILES['file2']['name']);
// }

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
if (isset($uploadfile))unlink($uploadfile);
if (isset($uploadfile2))unlink($uploadfile2);

?>


<?php 
?>




