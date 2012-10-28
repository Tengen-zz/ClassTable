<html>
<head>
    <title>Сайт pm-11</title>
</head>
<body>
<form method="post" action="/student/update/<?=$student_id?>"/>

Введите имя <input name="name" type="text"  value="<?=$student->name?>"/> <br>
Введите телефон <input name="phone" type="text" value="<?=$student->phone?>"/> <br>
Введите почту <input name="email" type="text" value="<?=$student->email?>"/> <br>
Введите пароль<input name="password" type="text" value="<?=$student->password?>"/> <br>
Введите пароль еще раз <input name="password1" type="text" value="<?=$student->password?>"/> <br>
<input type="submit" value="Отправить"/>
</form>
</body>
</html>
