<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }

    public function login()
    {
        $this->display('login');
    }
    public function register()
    {
        $this->display('register');
    }
    public function phoneregister()
    {
        $this->display('phoneregister');
    }

}