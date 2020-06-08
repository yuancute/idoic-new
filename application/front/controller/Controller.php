<?php
namespace app\front\controller;

use think\Controller as Base;
use Request;
use Session;

class  Controller extends Base
{
    public function initialize()
    {
        $this->getControllerName();
        $this->lan();
    }

    public function getControllerName()
    {
        $controller = Request::controller();
        $this->assign('controller',$controller);
    }

    public function lan()
    {
        if(isset($_GET['lan'])){
            Session::set('lan',$_GET['lan']);
        }
        $lan=Session::get('lan')?Session::get('lan'):'zh';
        $this->assign('lan',$lan);
    }
}