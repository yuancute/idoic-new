<?php
namespace app\front\controller;
class Brands extends Controller
{
    public function index(){
        return $this->fetch();
    }
}