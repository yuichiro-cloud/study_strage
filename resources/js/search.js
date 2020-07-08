$(function(){
    $('.search-input').keyup(function(){
            const input_text = $('.search-input').val();
            $(function(){
                $.ajax({
                    type:'GET',
                    url:'/search',
                    data:{'word':input_text},

                })
                .done(function(response){
                    $(".searched-box").empty()
                    const searched = response;
                    for (var i in searched){
                        $(".searched-box").append(`<a class="search-study" href="/study/${searched[i].id}">${searched[i].keyword}</a>`)
                    }
                });
            });
    })
})
