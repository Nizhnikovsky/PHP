<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=Config::get('site_name')?></title>
    <link  rel="stylesheet" href="/webroot/css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="script" href="/webroot/js/bootstrap.min.js">
    <link rel="script" href="/webroot/js/bootstrap.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<nav class="navbar navbar-inverse bg-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Навигация</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/admin"><?=Config::get('site_name')?> - <?=__('lng.admin','Панель администратора')?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="/logout" ">Выход</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<?=$data['content']?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/webroot/js/jquery-slim.min.js"><\/script>')</script>
<script src="/webroot/js/popper.min.js"></script>
<script src="/webroot/js/bootstrap.min.js"></script>
<script src="/webroot/js/bootstrap.js"></script>
<script src="/webroot/js/jquery.min.js"></script>
<script src="/webroot/js/admin.js"></script>
</html>