<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/Public/css/index.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="/Public/css/bootstrap.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="/Public/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="/Public/css/animate.css" media="screen" title="no title" charset="utf-8">
  <script src="/Public/js/jquery-2.1.3.min.js" charset="utf-8"></script>
  <script src="/Public/js/bootstrap.min.js" charset="utf-8"></script>
  <script src="/Public/js/index.js" charset="utf-8"></script>
  <title></title>
</head>
<body>
  <div class="logo">
    <a href="#">
        <img src="/Public/img/logoed.png" alt="" />
    </a>
  </div>
  <div class="lock-holder">
      <div class="form-group">
        <div class="input-group">
            <input type="text" class="form-control user" value="请输入账号！" name="user" onfocus="if (value =='请输入账号！'){value =''}"onblur="if (value ==''){value='请输入账号！'}">
            <span class="input-group-addon"><i class="icon-user"></i></span>
        </div>
      </div>
      <span class="icon-fl icon">...</span>
      <svg width="150px" height="150px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="uil-pie">
        <rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect>
        <path d="M0 50A50 50 0 0 1 50 0L50 50L0 50" fill="#054ff4" opacity="0.5">
          <animateTransform attributeName="transform" type="rotate" from="0 50 50" to="360 50 50" dur="0.8s" repeatCount="indefinite"></animateTransform>
        </path>
        <path d="M50 0A50 50 0 0 1 100 50L50 50L50 0" fill="#0096f7" opacity="0.5">
          <animateTransform attributeName="transform" type="rotate" from="0 50 50" to="360 50 50" dur="1.6s" repeatCount="indefinite"></animateTransform>
        </path>
        <path d="M100 50A50 50 0 0 1 50 100L50 50L100 50" fill="#003cd6" opacity="0.5">
          <animateTransform attributeName="transform" type="rotate" from="0 50 50" to="360 50 50" dur="2.4s" repeatCount="indefinite"></animateTransform>
        </path>
        <path d="M50 100A50 50 0 0 1 0 50L50 50L50 100" fill="#00c3f7" opacity="0.5">
          <animateTransform attributeName="transform" type="rotate" from="0 50 50" to="360 50 50" dur="3.2s" repeatCount="indefinite"></animateTransform>
        </path>
        <path d="M50 100A50 50 0 0 1 0 50L50 50L50 100" fill="#00c3f7" opacity="0.5">
          <animateTransform attributeName="transform" type="rotate" from="0 50 50" to="360 50 50" dur="3.2s" repeatCount="indefinite"></animateTransform>
        </path>
      </svg>
      <span class="icon-fr icon">...</span>
      <div class="input-group" style="float:right;width:250px;">
          <input type="text" class="form-control password" value="请输入密码！" name="pw" onfocus="$(this).attr('type', 'password'); if (value =='请输入密码！'){value =''}" onblur="if (value ==''){  $(this).attr('type', 'text');value='请输入密码！'}">
          <span class="input-group-addon"><i class="icon-fire"></i></span>
      </div>
  </div>
  <div class="alert alert-danger" role="alert" style="display:none;"></div>
    <div id="center" style="display:none;">
      <div id="loading">
        <div></div>
    </div>
  </div>
  <div class="wrap">
    <span id="animationSandbox" style="display: none;" class="animated bounceInUp">
      <h1 class="site__title mega">正在登录，请稍后。。。 </h1>
    </span>
  </div>
  <div class="submit">
      <input type="button" name="submit" class="btn btn-success btn-submit" value="登录" onclick="$(this).css('background', '#7ab4da');">
  </div>

<script type="text/javascript">
  var progress_id = "loading";
  function SetProgress(progress) {
    if (progress) {
        $("#" + progress_id + " > div").css("width", String(progress) + "%"); //控制#loading div宽度
        $("#" + progress_id + " > div").html(String(progress) + "%"); //显示百分比
    }
  }
  var i = 0;
  function doProgress() {
    if (i > 100) {
       window.location.href = 'http://localhost/index.php/Home/Index/index';
    }
    if (i <= 100) {
      setTimeout("doProgress()", 50);
      SetProgress(i);
      i++;
      }
  }
  // $(document).ready(function() {
  //   doProgress();
  // });
</script>
</body>
</html>