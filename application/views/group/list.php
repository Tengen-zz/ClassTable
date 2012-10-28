<html>
<head>
    <title>Сайт pm-11</title>
</head>
<body>
    <?if($isadmin!=0):?>
   <a href="/group/create">Добавить</a></br>
    <?endif?>
   <?foreach($groups123 as $group):?>
        <a href="/group/read/<?=$group->id?>"><?=html::chars($group->name)?></a></br>
   <?endforeach?>
</body>
</html>
