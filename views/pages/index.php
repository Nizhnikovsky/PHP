
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span4">
            <div class="block-content">
                <div id="fon"></div>
                <div id="load"></div>
                <div class="sort">
                <p>Сортировка по:</p>
                <ul class="list-group">
                    <li><a  href="/index?email" id="email" class="list-group-item list-group-item-action">Email</a></li>
                    <li><a  href="/index?name" id="name" class="list-group-item list-group-item-action">Имени</a></li>
                    <li><a  href="/index?status" id="status" class="list-group-item list-group-item-action">Статусу</a></li>
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
                    <h4 class="display-4">Статус задачи :<?=$page_data['status']?></h4>
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
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>












