$(function(){

    $("#posting").on('submit',function(e){
        e.preventDefault();
        $.ajax({
            url : $(this).attr('action') ,
            method : $(this).attr('method') ,
            data : new FormData(this) ,
            processData : false ,
            contentType : false ,
            beforeSend : function(){
                $(".btn").attr('disabled',true);
                $(document).find('span.error-text').text('');
            },
            success : function(data){
                if(data.status == 0){
                    $.each(data.error ,function(prefix , val){
                        $('span.' + prefix + '_error').text(val[0]);
                    })
                }else {
                    $('#process').css('display', 'block');
                    var percentage = 0;
                    var timer = setInterval(function(){
                    percentage = percentage + 50;
                    progress_bar_process(percentage, timer);
                    }, 1000);
                    $("#posting")[0].reset();
                    location.reload();
                    //alert(data.msg);
                }
            },
            complete : function(){
                $(".btn").attr('disabled',false);
            }   
        })
    })

    function progress_bar_process(percentage, timer)
    {
        $('.progress-bar').css('width', percentage + '%');
        if(percentage > 100)
        {
            clearInterval(timer);
            $('#process').css('display', 'none');
            $('.progress-bar').css('width', '0%');
            setTimeout(function(){
            $('#success_message').html('');
            }, 5000);
        }
    }

    //request tipe kerusakan 
    $("#tipe_rusak").on('change', function() {
       var id =  $("#tipe_rusak").val();
       if(id == "Rutin"){
           document.getElementById('jamSLA').innerHTML = 89 ;
           document.getElementById('jamSLA1').innerHTML = 89 ;
           document.getElementById('prioritas').innerHTML = "Rutin";
           document.getElementById('sla_jam').value = 89 ;
        }else if(id == "Urgent") {
            document.getElementById('jamSLA').innerHTML = 150 ;
            document.getElementById('jamSLA1').innerHTML = 150 ;
            document.getElementById('sla_jam').value = 150 ;
            document.getElementById('prioritas').innerHTML = "Urgent";
        }else {
            document.getElementById('jamSLA').innerHTML = "" ;
            document.getElementById('jamSLA1').innerHTML = "" ;
            document.getElementById('prioritas').innerHTML = "";
       }
    })
})