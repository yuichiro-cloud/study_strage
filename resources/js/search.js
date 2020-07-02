$(function(){
    $('.search-input').keyup(function(){
        if($(".searched-box").children().length != 0){
            $(".searched-box").empty();
        }
        // $(".searched-box").child.remove();
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
                // searched.each(function(index){
                //     console.log(index);
                // })
                for (var i in searched){
                    $(".searched-box").append(`<a class="search-study" href="/study/${searched[i].id}">${searched[i].keyword}</a>`)
                }
                // $(".search-box").append(`<a href="/study/1">aaaa</a>`)
            });
        });
    })
})
