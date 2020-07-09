$(function(){
    $("#btn-delete").on('click',function(){
        const id = document.getElementById('main').getAttribute('data-index');
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
        });
        $.ajax({
            type:'delete',
            url:`/study/${id}/delete`,
            data:{'id':id},

        })
        .done(function(response){
            // window.location.href = "/";
            window.location.href = "http://studystrage.cf/";
        });
    })
});
