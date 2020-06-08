<?php
namespace app\front\controller;
class Contact extends Controller
{
    public function index(){
        return $this->fetch();
    }
}