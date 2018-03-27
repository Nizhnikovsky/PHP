<h3 class="title">Редактирование задачи</h3>
<div class="main-create">
<form method="post" action="">
    <input type="hidden" name="id" value="<?=$data['page']['id']?>"/>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text"id="email" name="email" value="<?=$data['page']['user_mail']?>" class="form-control" style="width: 250px"/>
    </div>
    <div class="form-group">
        <label for="name">Имя</label>
        <input type="text"id="name" name="name" value="<?=$data['page']['user_name']?>" class="form-control" style="width: 250px"/>
    </div>
    <div class="form-group">
        <label for="content">Текст задачи</label>
        <textarea name="content" id="content" class="form-control" rows="10"><?=$data['page']['description']?></textarea>
    </div>
    <div class="form-group">
        <label for="is_published">Задача решена</label>
        <input type="checkbox" name="is_published" id="is_published"<?php if($data['page']['status']==1):?>checked="checked"<?php endif;?>/>
    </div>
    <input type="submit" class="btn btn-success"/>
</form>
</div>