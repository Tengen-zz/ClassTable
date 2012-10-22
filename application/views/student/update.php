<html>
<head>
    <title>Сайт pm-11</title>
</head>
<body>
<form method="post" action="/student/update/<?=$student_id?>">

Введите имя <input name="name" type="text"/> <br>
Введите телефон <input name="phone" type="text"> <br>
Введите почту <input name="email" type="text"> <br>
Введите пароль<input name="password" type="text"> <br>
Введите пароль еще раз <input name="password1" type="text"> <br>
<input type="submit" value="Отправить"/>
</form>
</body>
</html>
