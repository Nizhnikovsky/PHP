
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span4">
            <div class="block-content">
                <div id="fon"></div>
                <div id="load"></div>
                <div class="sort">
                <p>Сортировка по:</p>
                <ul class="list-group">
                    <li><a  href="?sort=email" id="email" class="list-group-item list-group-item-action">Email</a></li>
                    <li><a  href="?sort=name" id="name" class="list-group-item list-group-item-action">Имени</a></li>
                    <li><a  href="?sort=status" id="status" class="list-group-item list-group-item-action">Статусу</a></li>
                </ul>
                </div>
                <a class="btn1 btn1-lg btn1-primary" href="/create">Создать задачу</a>
            </div>
            <br>
        </div>
        <div class="span8">
            <?php foreach ($data['pages'] as $page_data):?>
                <div class="jumbotron" id="task">
                    <h4 class="display-4">Задача № <?=$page_data['id']?></h4>
                    <h4 class="display-4">Имя пользователя:<?=$page_data['user_name']?></h4>
                    <h4 class="display-4">Email:<?=$page_data['user_mail']?></h4>
                    <h4 class="display-4">Статус задачи :
                        <?php if ($page_data['status']==1){ echo 'Решена';}else echo 'Не решена';?>
                    </h4>
                    <p class="lead">Текст задачи:</p>
                    <img src="/webroot/uploads/">
                    <p class="task-content">
                        <?php
                        $temp = tmpfile();
                        fwrite($temp,$page_data['description'] );
                        fseek($temp, 0);
                        echo fread($temp, 801);
                        ?>
                        <br>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="/pages/view/<?=$page_data['id']?>" role="button">Развернуть</a>
                    </p>
                </div>
            <?php endforeach;?>
        </div>
        <div class="pages">
            <?php
            $total_tasks = 9;
            $total_pages = Page::totalPages($total_tasks,COUNT_PER_PAGE);
            ?>
            <?php if($total_tasks>COUNT_PER_PAGE):?>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <?php
                    $page = intval($_GET['page']);
                    // Проверяем нужны ли стрелки назад
                    if ($page != 1) $pervpage = '<li class="page-item"><a class="page-link" href= ?page=1><<</a>
                               <li class="page-item"><a class="page-link" href= ?page='. ($page - 1) .'><</a></li>';
                    // Проверяем нужны ли стрелки вперед
                    if ($page != $total_pages) $nextpage = '<li class="page-item"><a class="page-link" href= ?page='. ($page + 1) .'>></a>
                                   <li class="page-item"><a class="page-link" href= ?page=' .$total_pages. '>>></a></li>';
    
                    // Находим две ближайшие станицы с обоих краев, если они есть
                    if($page - 2 > 0) $page2left = ' <li class="page-item"><a class="page-link" href= ?page='. ($page - 2) .'>'. ($page - 2) .'</a></li> ';
                    if($page - 1 > 0) $page1left = '<li class="page-item"><a class="page-link" href= ?page='. ($page - 1) .'>'. ($page - 1) .'</a></li>';
                    if($page + 2 <= $total_pages) $page2right = ' <li class="page-item"><a class="page-link" href= ?page='. ($page + 2) .'>'. ($page + 2) .'</a></li>';
                    if($page + 1 <= $total_pages) $page1right = '  <li class="page-item"><a class="page-link" href= ?page='. ($page + 1) .'>'. ($page + 1) .'</a></li>';
    
                    // Вывод меню
                    echo $pervpage.$page2left.$page1left.$page1right.$page2right.$nextpage;
                    ?>
                </ul>
                <?php endif;?>
            </nav>
        </div>
    </div>
</div>












