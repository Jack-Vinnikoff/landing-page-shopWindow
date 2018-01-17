<?php
 //Принимаем постоянные данные
 $name=$_POST['name'];
 $phone=$_POST['phone'];
 $what=$_POST['what'];
 //Тут указываем на какой адрес посылать письмо
 $to = "vinnicox@gmail.com";
 //Далее идет тема и само сообщение
$subject = "Заявка с сайта жалюзи";
$message = "
Письмо отправлено из моей формы.<br />
Пользователь хочет: ".htmlspecialchars($what)."<br />
Имя: ".htmlspecialchars($name)."<br />
Телефон: ".htmlspecialchars($phone);
$headers = "From: mysite.ru <site-email@mysite.ru\r\n Content-type: text/html;
            charset=utf8 \r\n";
mail ($to,$subject, $message, $headers);
header ('Location: thanks.html');
exit();
?>