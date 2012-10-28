<html>
<head>
    <title>Сайт pm-11</title>
</head>
<body>
Группа <?=$group->name?></br>
<?if($is_admin!=0):?>
<a href="/group/update/<?=$group_id?>">Изменить</a></br>
<a href="/group/delete/<?=$group_id?>">Удалить группу</a>
    <?endif?>
 <?foreach($students as $student):?>
    <?if($student->group_id == $group_id):?>
        <a href="/student/read/<?=$student->id?>"><?=$student->name?></a>
        <br>
    <?endif?>
<?endforeach?>
<?if($is_admin!=0):?>
    <a href="/student/create">Добавить студента</a>
<?endif?>
<a href="/group/index/">Список групп</a>
<br>
</body>
</html>
