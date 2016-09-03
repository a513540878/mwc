<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        $this->display();
    }

    public function dologin(){
       if ($_POST['user']!=='admin') {
         $data = '账号错误！';
         $this->ajaxReturn($data);
       }elseif ($_POST['pw']!== '111111') {
         $data = '密码错误！';
         $this->ajaxReturn($data);
       }else {
         $data = '登录成功';
         $this->ajaxReturn($data);
       }
    }
}




?>
