<?php
namespace Home\Controller;
use Think\Controller;

class SellingController extends Controller {
    public function index(){
      $res = explode("/", $_SERVER["PATH_INFO"]);
      $res = implode($res);
      $this->assign('res',$res);
      $this->display();
    }

    public function buyout(){
      $res1 = explode("/", $_SERVER["PATH_INFO"]);
      $res2 = implode($res1);
      $this->assign('res2',$res2);
      $this->display();
    }
    public function rated(){
      $res1 = explode("/", $_SERVER["PATH_INFO"]);
      $res3 = implode($res1);
      $this->assign('res3',$res3);
      $this->display();
    }

    public function withdraw(){
      $res1 = explode("/", $_SERVER["PATH_INFO"]);
      $res4 = implode($res1);
      $this->assign('res4',$res4);
      $this->display();
    }
}

?>
