$(document).ready(function() {

    $('form').submit(function(event){

        
        event.preventDefault();
        
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: new FormData(this),
            contentType: false,
            caches: false,
            processData: false,
            succes: function(result){
                alert(result);
            }
        });

    });
    
});