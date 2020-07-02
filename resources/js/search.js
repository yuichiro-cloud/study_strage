$(function(){
    $('.search-input').keyup(function(){
        $.when(
            console.log('keyup'),
            $(".searched-box").empty(),
            console.log('clean')

        ).done(function(){

            const input_text = $('.search-input').val();
            $(function(){
                $.ajax({
                    type:'GET',
                    url:'/search',
                    data:{'word':input_text},

                })
                .done(function(response){
                    console.log(response)
                    const searched = response;
                    for (var i in searched){
                        $(".searched-box").append(`<a class="search-study" href="/study/${searched[i].id}">${searched[i].keyword}</a>`)
                    }
                });
            });
        });
    })
})
