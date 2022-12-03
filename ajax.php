<?php 
    define("NR", "\r\n");
	$to = 'info@krovla.pro,nailly_88@mail.ru'; // адрес получателя
	$subject = 'Заявка Krovla.pro'; // тема письма
	
	
	$name = trim($_POST['name']); 
	
	$phone = trim($_POST['phone']); 
  $pole = trim($_POST['pole']); 
	


	// формируем тело сообщения
	$message = 'Имя: ' . $name . NR . NR . 'Почта: ' . $mail . NR . NR . 'Телефон: ' . $phone
    . NR . NR . 'Поле: ' . $pole 
      
      
      ; 
	 
	// кодируем заголовок в UTF-8
	$subject = preg_replace("/(\r\n)|(\r)|(\n)/", "", $subject);
	$subject = preg_replace("/(\t)/", " ", $subject);
	$subject = '=?UTF-8?B?' . base64_encode($subject) . '?=';

	// отправка
if(@mail($to, $subject, $message))

echo 'Спасибо, ваше сообщение отправлено!';
else 
    echo 'Произошла ошибка отправки';
//}
?>