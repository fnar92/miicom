/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function(){
    $("#btn-login").click(function(){
        var data=$("#form-login").serialize();
        //alert(JSON.stringify(data));
        
       $.ajax({
            url: 'welcome/auth',
            type: 'POST',
            dataType: 'json',
            data: data,
            beforeSend: function(){
                showWait();
            },
            success: function(data){
                console.log(JSON.stringify(data));
                setTimeout(function(){
                    if(data.error=='2'){
                        hideWait();
                        modalEnabled();
                        var text='<div class="alert alert-danger alert-dismissable"><strong>¡Error!</strong> '+data.msj+'.<br><p></p></div>';
                        $(".ajax_msj").html(text);
                        showModal();
                    }else{
                        if(data.success==undefined&&data.error==undefined){
                            hideWait();
                            modalEnabled();
                            var text='<div class="alert alert-danger alert-dismissable"><strong>¡Error!</strong> Credenciales invalidas.<br><p></p></div>';
                            $(".ajax_msj").html(text);
                            showModal();
                        }else{
                           /* hideWait();
                            modalDisable();
                            var text='<div class="alert alert-success"><strong>¡Correcto!</strong> Iniciando sesión....</div><img src="http://www.hrwise.com.mx/assets/page/images/load.GIF" class="img_ajax">';
                            $(".ajax_msj").html(text);
                            showModal();
                            setTimeout(function(){
                                //location.href = "admin/sw";
                                location.reload();
                            },3000);*/
                            location.reload();
                        }
                    }
                },300);
            },
            error: function (xhr, status, errorThrown) {
                console.log( "Error: " + errorThrown );
                console.log( "Status: " + status );
                console.dir( xhr );
            }
        });
    });
});


