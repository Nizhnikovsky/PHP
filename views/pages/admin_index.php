
<h3 class="title">Задачи</h3>
<div class="span8"align="center">
    <div class="task-admin">
        <table class="table table-hover" style="width: 400px" align="center">
            <?php foreach ($data['pages'] as $page_data):?>
                <tr>
                    <td><b>Задача №<?=$page_data['id']?></b></td>
                    <td>
                        <a href="/admin/pages/edit/<?=$page_data['id']?>"><button class="btn btn-sm btn-primary">Редактирование</button> </a>
                        <a href="/admin/pages/delete/<?=$page_data['id']?>" onclick="cofirmDelete()"><button class="btn btn-sm btn-warning">Удалить</button> </a>
                    </td>
                </tr>
            <?php endforeach;?>
        </table>
        <br>
    </div>
</div>