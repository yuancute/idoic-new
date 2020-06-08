<?php
namespace app\front\controller;
use app\front\model\Product;
class Home extends Controller
{
    public function index(){
        return $this->fetch();
    }
}