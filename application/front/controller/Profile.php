<?php
namespace app\front\controller;
class Profile extends Controller
{
    public function index(){
        return $this->fetch();
    }
}