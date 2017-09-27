<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\common\widgets\lte\AdminLTENav;
/* @var $this \yii\web\View */
/* @var $content string */
/* @var $identity \app\models\User $identity */
$identity = Yii::$app->user->identity;
$formatter = Yii::$app->formatter;
?>
  <header class="main-header">

    <!-- Logo -->
    <a href="/manage/default/index" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?=Html::img($identity->avatarPath,['class' => 'user-image','alt' => $identity->publicIdentity])?>
              <?=Html::tag('span',$identity->publicIdentity,['class' => 'hidden-xs'])?>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <?=Html::img($identity->avatarPath,['class' => 'img-circle','alt' => $identity->publicIdentity])?>

                <p>
                  <strong><?=$identity->publicIdentity;?></strong>
                  <small><?="Member since: <b>{$formatter->asDate($identity->created_at)}</b>";?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="/manage/user/info" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="/manage/secure/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>