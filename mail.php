<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Данные обрабатываются...</title>

	<script type="text/javascript" src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="js/jquery.arcticmodal.js" type="text/javascript"></script>
	
</head>

<?php
/* Проверяем существуют ли переменные, которые передала форма обратной связи. 
   Если не существуют, то мы их создаем.
   Если форма передала пустые значения мы их удаляем */       
if (isset($_POST['name'])) {$name = $_POST['name']; if ($name == '') {unset($name);}}
if (isset($_POST['number'])) {$number = $_POST['number']; if ($number == '') {unset($number);}}


/* Убираем все лишние пробелы, а также преобразуем все теги HTML в символы*/
$name = htmlspecialchars(trim($name));
$number = htmlspecialchars(trim($number));

/* Формируем сообщение */
$address = "eralistexno@ukr.net";
$sub = "Заказ обратного звонка";
$mes = "Имя: $name \nТелефон: $number";

/* Отправка сообщения */
$verify = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
      if ($verify == 'true')
	  
     {

echo '<table id="tabl" align="center">
<tr>
<td>
<p>Спасибо, Ваше запрос успешно отправлен!</p>
<script type="text/javascript">
function timer(){
var obj=document.getElementById("timer_inp");
obj.innerHTML--;
if(obj.innerHTML==0){history.go(-1);setTimeout(function(){},1000);}
else{setTimeout(timer,1000);}
}
setTimeout(timer,1000);
</script>
<p>Через <span id="timer_inp">7</span> секунд Ваш запрос будет получен нашими менеджерами...</p>
</td>
</tr>
</table>';

            }
            else 
            {
                
				echo '<table id="tabl" align="center">
<tr>
<td class="pagu" align="center">
<p><span style="color:red;">Error!</span> Ваше запрос не отправлен, попробуйте еще разок!</p>
<script type="text/javascript">
function timer(){
var obj=document.getElementById("timer_inp");
obj.innerHTML--;
if(obj.innerHTML==0){history.go(-1);setTimeout(function(){},1000);}
else{setTimeout(timer,1000);}
}
setTimeout(timer,1000);
</script>
<p>Через <span id="timer_inp">7</span> секунд вы будете перенаправлены обратно...</p>
</td>
</tr>
</table>';
				
            }	
    ?>	
	
	</body>
</html>