
$(document).ready(function() {
    $("#button_Preview").click(function() {
        var InputName  = $('input[name="exampleInputName"]').val();
        var InputEmail = $('input[name="exampleInputEmail1"]').val();
        var InputImg   = $('input[name="exampleInputFile"]').val();
        var InputTask  = $('textarea[name="exampleTextarea"]').val();

        $.post('/create/preview',
            {InputName:InputName,InputEmail:InputEmail,InputImg:InputImg,InputTask:InputTask},
            function(data){
                $("#toPreview").html(data);
            }
        );
    });
});

