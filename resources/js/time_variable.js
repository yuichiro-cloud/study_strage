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


// $(function(){
//     $('.code-button').on('click',function(){
//         const code_check = document.form1.code_check;
//         if(code_check.checked){
//             code_check.checked = false;
//             // code_check.val('1');
//             $('.code_check').val('0')
//         }else{
//             code_check.checked = true;
//             $('.code_check').val('1')
//         };
//         // console.log('ok')
//         // const content = document.form1.memo.value
//         // const code_check = document.form1.code_check;
//         // console.log(code_check.checked)
//         // if(code_check.checked){
//         //     code_check.checked = false;
//         //     console.log('if')
//         // }else{
//         //     console.log('else')
//         //     code_check.checked = true;
//         // };

//         // if(code_check.checked){
//         //     const code_content = content.replace(/^&ltpre&gt/,ltpre&gt&ltcode&gt).replace(/&lt/pre&gt$/,&lt/code&gt&lt/pre&gt)
//         //     $('.memo-area').text(code_content)
//         //     $('.memo-area').attr('style',"background-color:lightgray;")
//         //     // console.log(code_content)
//         // }else{
//         //     console.log(content)
//         //     // const inner_content = content.replace(str(/^<pre><code>/),<pre>).replace(/'</code></pre>'$/,"</pre>")
//         //     console.log('else2')
//         //     $('.memo-area').removeAttr('style')
//         // }

//     });
// });
