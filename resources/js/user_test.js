$(function(){
    $('#test-login').on('click',function(){
        $.ajax({
            type:'GET',
            url:'/testlogin',
            data:{'email':'test@test.com','name':'テストユーザー'},

        })
        .done(function(response){
            console.log(response);
            window.location.href = '/';
        });
    });
});
