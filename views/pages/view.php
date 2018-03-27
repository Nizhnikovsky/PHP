<div style="padding-top: 20px">
    <div class="span8">
        <div class="jumbotron">
            <h4 class="display-4">Задача №<?=$data['page']['id']?></h4>
            <h4 class="display-4">Имя пользователя:<?=$data['page']['user_name']?></h4>
            <h4 class="display-4">Email:<?=$data['page']['user_mail']?></h4>
            <h4 class="display-4">Статус задачи :<?=$data['page']['status']?></h4>
            <p class="lead">Текст задачи:</p>
            <img src="/webroot/uploads/<?=$data['page']['id']?>.jpg" alt="">
            <p class="task-content">
                <?=$data['page']['description']?>
        </div>
    </div>
</div>
