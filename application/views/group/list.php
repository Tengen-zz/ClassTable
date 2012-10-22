<html>
<head>
    <title>Сайт pm-11</title>
</head>
<body>
   <a href="/group/create">Добавить</a></br>
   <?foreach($groups123 as $group):?>
        <a href="/group/read/<?=$group->id?>"><?=html::chars($group->name)?></a></br>
   <?endforeach?>
</body>
</html>
