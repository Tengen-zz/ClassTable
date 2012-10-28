<html>
<head>
    <title>Супер титл!</title>
</head>
<body>
    <table>
        <tr>

            <td>
                <?$session = Session::instance()?>
                <?$stud_id=$session->get('stud_id')?>
                <?if($stud_id==NULL):?>
                <a href="/security/login/">Войти</a>
                <?endif?>
                <?if($stud_id!=NULL):?>
                <?$student = ORM::factory('student',$stud_id)?>
                Здравствуйте <?=$student->name?>
                <a href="/security/exit/">Выйти</a>
                <?endif?>
            </td>
        </tr>
        <tr>
            <td>SIDE MENU</td>
            <td><?=$body?></td>
        </tr>
        <tr>
            <td>2012</td>
           </tr>
    </table>

</body>
</html>
