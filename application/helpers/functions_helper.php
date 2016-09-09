<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


function loadModuleAdminA($modulo, $params = 0){
    get_instance()->load->library('Vsession');
    $data = getNombreModelo($modulo);
    $data['ejecutarModelo'] = true;
    if(is_array($params))
            $data['params'] = $params;
    get_instance()->load->view('template/admin/header', $data);
    get_instance()->load->view('template/admin/header');
}
function getNombreModelo($cadena){
    $exp = explode('/', $cadena);
    return array('modelo' => $exp[0], 'modulo' => ucfirst($exp[1]));
}

function view($view, $data){
    $arr=  explode("/", $view);
    $modulo=$arr[0];
    $vista=$arr[1];
    //get_instance()->load->library('Vsession');
    get_instance()->load->view('template/'.$modulo.'/header', $data);
    get_instance()->load->view($modulo.'/'.$vista, $data);
    get_instance()->load->view('template/'.$modulo.'/footer', $data);
}