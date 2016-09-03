<?php if (!defined('THINK_PATH')) exit();?>    <!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/Public/css/bootstrap.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="/Public/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="/Public/css/animate.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="/Public/css/admin-index.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="/Public/css/jquery-ui.min.css">
  <link rel="stylesheet" href="/Public/css/jquery-ui-timepicker-addon.css" media="screen" title="no title" charset="utf-8">

  <script src="/Public/js/jquery-2.1.3.min.js" charset="utf-8"></script>
  <script src="/Public/js/jquery-ui.min.js"></script>
  <script src="/Public/js/jquery-ui-timepicker-addon.min.js"></script>

  <script src="/Public/js/bootstrap.min.js" charset="utf-8"></script>
  <script src="/Public/js/admin.js" charset="utf-8"></script>
  <script src="/Public/js/jquery-ui-timepicker-zh-CN.js" charset="utf-8"></script>

  <title></title>
</head>
<body style="background:#f1f1f1;">
<div class="default">
    <img src="/Public/css/default.svg" alt="" />
</div>
<div class="site-holder">
<div class="header">
  <div class="navbar-header" style="float:left;">
      <a href="javascript:;" class="navbar-brand">logo
          <img src="" alt="" />
      </a>
  </div>
  <div class="navbar-right" style="float:right;">
      <a href="http://localhost/index.php/Home/Login/index" class="logout" title="退出">
        <i class="icon-signout"></i>
      </a>
  </div>
</div>

    <div class="sidebar">
  <div class="sidebar-holder">
      <div class="user-menu">
          <img src="/Public/img/user.jpg" alt="" class="avatar"/>
          <div class="user-info">
              <div class="welcome"><font><font>欢迎，</font></font></div>
              <div class="username"><font><font>Admin</font></font></div>
          </div>
          <div class="user-status"></div>
      </div>
      <ul class="nav nav-list">
        <li class="active active1">
          <div class="test1" style="display:none;"><?php echo ($ress); ?></div>
          <a href="http://localhost/index.php/Home/Index/index"><i class="icon-home"></i><span>首页</span></a></li>
        <li class="submenu">
          <a href="javascript:;"><i class="icon-heart"></i><span>热卖商家</span><i class="icon-chevron-right"></i></a>
          <ul class="animated fadeInDown" style="display: none;">
            <li class=""><div class="test" style="display:none;"><?php echo ($res); ?></div><a href="http://localhost/index.php/Home/Selling/index"><i class=" icon-screenshot"></i><span>我的商品列表</span></a></li>
            <li><div class="test2" style="display:none;"><?php echo ($res2); ?></div><a href="http://localhost/index.php/Home/Selling/buyout" class="buyout"><i class="icon-legal"></i><span>商品销售</span></a></li>
            <li><div class="test3" style="display:none;"><?php echo ($res3); ?></div><a href="http://localhost/index.php/Home/Selling/rated" class="rated"><i class="icon-tags"></i><span>商品评价</span></a></li>
            <li><div class="test4" style="display:none;"><?php echo ($res4); ?></div><a href="http://localhost/index.php/Home/Selling/withdraw" class="withdraw"><i class="icon-credit-card"></i><span>提现</span></a></li>
          </ul>
        </li>
        <li class="submenu">
          <a href="javascript:;"><i class="icon-cogs"></i><span>点卷管理</span><i class="icon-chevron-right"></i></a>
          <ul class="animated fadeInDown" style="display: none;">
            <li><a href="javascript:;"><i class="icon-twitter"></i><span>测试</span></a></li>
            <li><a href="javascript:;"><i class="icon-twitter"></i><span>测试</span></a></li>
          </ul>
        </li>
        <li class="submenu">
          <a href="javascript:;"><i class="icon-tint"></i><span>上机免单</span><i class="icon-chevron-right"></i></a>
          <ul class="animated fadeInDown" style="display: none;">
            <li><a href="javascript:;"><i class="icon-twitter"></i><span>测试</span></a></li>
            <li><a href="javascript:;"><i class="icon-twitter"></i><span>测试</span></a></li>
          </ul>
        </li>
        <li class="submenu">
          <a href="javascript:;"><i class="icon-leaf"></i><span>福利发放</span><i class="icon-chevron-right"></i></a>
          <ul class="animated fadeInDown" style="display: none;">
            <li><a href="javascript:;"><i class="icon-twitter"></i><span>测试</span></a></li>
            <li><a href="javascript:;"><i class="icon-twitter"></i><span>测试</span></a></li>
          </ul>
        </li>
        <li class="submenu">
          <a href="javascript:;"><i class="icon-comments-alt"></i><span>消息通知</span><i class="icon-chevron-right"></i></a>
          <ul class="animated fadeInDown" style="display: none;">
            <li><a href="javascript:;"><i class="icon-twitter"></i><span>测试</span></a></li>
            <li><a href="javascript:;"><i class="icon-twitter"></i><span>测试</span></a></li>
          </ul>
        </li>
        <li class="submenu">
          <a href="javascript:;"><i class="icon-cog"></i><span>设置</span><i class="icon-chevron-right"></i></a>
          <ul class="animated fadeInDown" style="display: none;">
            <li><a href="javascript:;"><i class="icon-twitter"></i><span>测试</span></a></li>
            <li><a href="javascript:;"><i class="icon-twitter"></i><span>测试</span></a></li>
          </ul>
        </li>
      </ul>
  </div>
</div>

    <div class="content">
      <div class="breadcrumb-holder">
         <ul class="breadcrumb">
           <li class="active">热卖商品</li>
           <li><a href="javascript:;">我的商品列表</a></li>
         </ul>
         <div class="navbar-right">
           <button type="button" class="btn btn-info">添加新商品</button>
         </div>
      </div>
      <div class="main-content">
          <div class="row">
             <div class="col-md-12" style="height:60px;border-bottom:1px solid #dddddd;">
               <div class="col-xs-3">
                  <input type="text" class="form-control" placeholder="商品名称">
                </div>
                <div class="col-xs-3">
                   <input type="text" class="form-control" placeholder="条形码">
               </div>
                <div class="col-xs-3">
                  <select class="form-control">
                     <option>1</option>
                     <option>2</option>
                     <option>3</option>
                     <option>4</option>
                     <option>5</option>
                 </select>
                </div>
                <div class="col-xs-3">
                  <button type="button" class="btn btn-default">查找</button>
                </div>
             </div>
          </div>
          <div class="row">
            <div class="col-md-12">
                <div class="rew-table">
                  <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>编号</th>
                            <th>条形码</th>
                            <th>图片</th>
                            <th>商品名称</th>
                            <th>销售价格</th>
                            <th>本店库存</th>
                            <th>操作</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">94</th>
                            <td>6921311196494</td>
                            <td>Otto</td>
                            <td>康师傅绿茶调味茶饮品（蜂蜜茉莉味）</td>
                            <td>8.00点 (￥4元)</td>
                            <td>0</td>
                            <td><button type="button" class="btn btn-info btn-sm">编辑商品</button><button type="button" class="btn btn-danger btn-sm">商品下架</button></td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>6921311196494</td>
                            <td>Otto</td>
                            <td>康师傅绿茶调味茶饮品（蜂蜜茉莉味）</td>
                            <td>8.00点 (￥4元)</td>
                            <td>0</td>
                            <td> <button type="button" class="btn btn-info btn-sm">编辑商品</button><button type="button" class="btn btn-danger btn-sm">商品下架</button></td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>6921311196494</td>
                            <td>Otto</td>
                            <td>康师傅绿茶调味茶饮品（蜂蜜茉莉味）</td>
                            <td>8.00点 (￥4元)</td>
                            <td>0</td>
                            <td>商品价格审核未通过 请重新修改价格。 <button type="button" class="btn btn-info btn-sm">修改价格</button></td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>6921311196494</td>
                            <td>Otto</td>
                            <td>康师傅绿茶调味茶饮品（蜂蜜茉莉味）</td>
                            <td>8.00点 (￥4元)</td>
                            <td>0</td>
                            <td>商品价格审核未通过 请重新修改价格。 <button type="button" class="btn btn-info btn-sm">修改价格</button></td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>6921311196494</td>
                            <td>Otto</td>
                            <td>康师傅绿茶调味茶饮品（蜂蜜茉莉味）</td>
                            <td>8.00点 (￥4元)</td>
                            <td>0</td>
                            <td>商品价格审核未通过 请重新修改价格。 <button type="button" class="btn btn-info btn-sm">修改价格</button></td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>6921311196494</td>
                            <td>Otto</td>
                            <td>康师傅绿茶调味茶饮品（蜂蜜茉莉味）</td>
                            <td>8.00点 (￥4元)</td>
                            <td>0</td>
                            <td>商品价格审核未通过 请重新修改价格。 <button type="button" class="btn btn-info btn-sm">修改价格</button></td>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
      </div>
    </div>
    </div>
  </body>
</html>