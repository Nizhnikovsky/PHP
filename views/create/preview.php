
    <form  action="#" method="post"  enctype=multipart/form-data>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="<?=$data['user_mail']?>">
        </div>
        <div class="form-group">
            <label for="exampleInputName">Имя</label>
            <input type="text" class="form-control" id="exampleInputName" name="name" aria-describedby="nameHelp" placeholder="<?=$data['user_name']?>">
        </div>
        <div class="form-group">
            <label for="exampleTextarea">Текст задачи</label>
            <textarea type="text" name="text" class="form-control" id="exampleTextarea" rows="10"><?=$data['description']?></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Загрузить картинку</label>
            <img src="<?= View::getImage(); ?>" width="200" alt=""  />
            <input type="file" name="image" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" preview-target-id="preview_img">
        </div>
        <button type="submit" class="btn btn-primary">Создать</button>
    </form>
