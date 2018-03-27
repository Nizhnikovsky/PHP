$(document).ready(function () {
    $(".sort span").click(function () {
        var id = $(this).attr('id');
        $("#fon").css({'display':'block'});
        $("#load").fadeIn(1000,function () {
            $.ajax({
                url:'pages/admin_login.php',
                data:'sort_id='+id,//sort_id=pricea
                type:'get',
                dataType:'json',
                success:function (html) {
                    $("#task").html('');
                    for(value in html) {
                        $("#task").append(
                            '<li><img src="images/'+
                            html[value]['img'] +
                            '"><p id="title">' +
                            html[value]['title'] +
                            '</p><p id="price">' +
                            html[value]['price'] +
                            'руб.</p></li>'
                        );
                    }

                    $("#task").hide().fadeIn(2000);
                    $("#fon").css({'display':'none'});
                    $("#load").fadeOut(1000);
                    /*
                    $("#tovar").html(html).hide().fadeIn(2000);
                    $("#fon").css({'display':'none'});
                    $("#load").fadeOut(1000);
                    */
                }
            });
        });
    });
});

