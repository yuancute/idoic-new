<?php
namespace app\front\controller;
use Request;
use app\front\model\Product as ProductModel;

class Product extends Controller
{
    protected $model;
    public function initialize()
    {
        parent::initialize();
        $this->model= new ProductModel;
    }
    public function index(){
        $text = input('get.text')?input('get.text'):'';
        $list = $this->model->getList($text);
        $this->assign('list',$list);
        return $this->fetch();
    }
/*    public function detail($id)
    {
        $data = $this->model->detail($id);
        $this->assign('data',$data);
        return $this->fetch();
    }*/
}

