<html>
<head>
    <title>Сайт pm-11</title>
</head>
<body>
Группа <?=$group->name?>
<form method="post" action="/group/update/<?=$group_id?>">
    <input name="name" type="text" value="<?=$group->name?>"/>
    <input type="submit" value="Изменить"/>
</form>
</body>
</html>
