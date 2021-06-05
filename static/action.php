<?php
    $name = $_POST['name'];
    $contact = $_POST['contact'];

    $name = htmlspecialchars($name);
    $contact = htmlspecialchars($contact);

    echo $name;
    echo "<br>";
    echo $contact;

    $subject = "Заявка с сайта";
    $from = 'From: Форма обратной связи<feedbackform@cyberlawyer>\r\n';
    $message = "Контакт: " . $contact . ". Зовут: " . $name;

    if (mail("vlasenkonikita@gmail.com", "Заказ с сайта", "Имя:".$name.". Контакт: ".$contact ,"From: no-reply@vlasnikita.ru \r\n"))
     {
        echo "сообщение успешно отправлено";
    } else {
        echo "при отправке сообщения возникли ошибки";
    }
?>