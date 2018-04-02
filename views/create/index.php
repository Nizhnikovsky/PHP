
<h3 align="center" class="title">Создание задачи </h3>
<?php if(Session::hasFlash()):?>
<div class="block-alert">
    <div class="alert">
    <?=Session::flash()?>
    </div>
</div>
<?php endif;?>
<!-- Модальное окно №1 -->
<a href="" class="overlay" id="win1"></a>
<div class="popup">
    <a class="close"title="Закрыть" href="#close"></a>
    <p>Email:</p>
    <p>Имя:</p>
    <div id="toPreview">Здесь должен быть текст задачи!</div>
    
</div>

<div class="main-create">
    <form  action="#" method="post"  enctype=multipart/form-data>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Введите email">
        </div>
        <div class="form-group">
            <label for="exampleInputName">Имя</label>
            <input type="text" class="form-control" id="exampleInputName" name="name" aria-describedby="nameHelp" placeholder="Введите имя">
        </div>
        <div class="form-group">
            <label for="exampleTextarea">Текст задачи</label>
            <textarea type="text" name="text" class="form-control" id="exampleTextarea" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Загрузить картинку</label>
            <img src="<?= View::getImage(); ?>" width="200" alt=""  />
            <input type="file" name="image" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" preview-target-id="preview_img">
        </div>
        <button type="submit" class="btn btn-primary">Создать</button>
        <a href="#win1" class="btn btn-primary" id="button_Preview">Предварительный просмотр</a>
    </form>
</div>

