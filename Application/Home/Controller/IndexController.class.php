<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $res = explode("/", $_SERVER["PATH_INFO"]);
        $ress = $res[0];
        $this->assign('res',$ress);
        $this->display();
    }
}
