<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Administrator</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Management Data</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-tasks"></i> <span>Data Master</span>
            <span class="pull-left-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('saham/classifier');?>"><i class="fa fa-file-text"></i>Classifier</a></li>
            <li><a href="<?php echo base_url('saham/company');?>"><i class="fa fa-file-text"></i>Company</a></li>
          </ul>
        </li>
        <li class="header">Management User</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-tasks"></i> <span>Data User</span>
            <span class="pull-left-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('saham/member');?>"><i class="fa fa-file-text"></i>Users</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
