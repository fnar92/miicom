/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function smallModal(){
    $('#modal').removeClass("modal-lg");
}
function largeModal(){
    $('#modal').addClass("modal-lg");
}
function showWait(){
    $('#wait').modal('show');
}
function hideWait(){
    $('#wait').modal('hide');    
}
function showModal(){
    $('#modal').modal('show');
}
function hideModal(){
    $('#modal').modal('hide');
}
function modalDisable(){
    $('.cros_close_modal').hide();
    $('.btn_close_modal').hide();
    //data-backdrop="static" data-keyboard="false"
    $('#modal').attr('data-backdrop', 'static');
    $('#modal').attr('data-keyboard', 'false');
}
function modalEnabled(){
    $('.cros_close_modal').show();
    $('.btn_close_modal').show();
    //data-backdrop="static" data-keyboard="false"
    $("#modal").removeAttr('data-backdrop');
    $("#modal").removeAttr('data-keyboard');
}