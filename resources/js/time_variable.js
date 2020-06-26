$(function(){
    function study_start_cal(h,m){
        $('#start-input').val(h+m)
        console.log(h)
        console.log(m)
    }

    function study_end_cal(h,m){
        $('#end-input').val(h+m)
        console.log(h)
        console.log(m)
    }
    $('#study_start_h').on('change',function(){
        var styStrH = $("#study_start_h option:selected").text();
        var styStrM = $('#start-input').val().slice(2,4)
        study_start_cal(styStrH,styStrM)
    })
    $('#study_start_m').on('change',function(){
        var styStrH = $('#start-input').val().slice(0,2)
        var styStrM = $("#study_start_m option:selected").text();
        study_start_cal(styStrH,styStrM)
    })

    $('#study_end_h').on('change',function(){
        var styEndH = $("#study_end_h option:selected").text();
        var styEndM = $('#end-input').val().slice(2,4)
        study_end_cal(styEndH,styEndM)
    })
    $('#study_end_m').on('change',function(){
        var styEndH = $('#end-input').val().slice(0,2)
        var styEndM = $("#study_end_m option:selected").text();
        study_end_cal(styEndH,styEndM)
    })

})


$(function(){
    $('#add-btn').on('click',function(){
        const lan_input = $(".add-lan").val();
        $(".add-lan").remove();
        $("#lan-input-form").append(`<input type="text" class="form-control mb-2 add-lan" id="inlineFormInput" placeholder="新規言語を入力">`)
        if(lan_input == ""){
            alert('value is null')
        }else{
            $(".language-select").append(`<option>${lan_input}</option>`)
            alert(`${lan_input}を言語に追加しました`)
        }

    })
});
