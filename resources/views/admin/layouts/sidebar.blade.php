 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION  </li>
        <li class="active treeview">

          <li class=""><a href="{{ route('post.index')}}"><i class="fa fa-circle-o"></i> Post </a></li>

            <li class=""><a href="{{ route('user.index')}}"><i class="fa fa-circle-o"></i> User Info</a></li>

  



            <li class=""><a href="{{ route('personalInfo.index')}}"><i class="fa fa-circle-o"></i> Update Personal Info</a></li>


            <li class=""><a href="{{ route('contactInfo.index')}}"><i class="fa fa-circle-o"></i> Update Contact Info</a></li>

             <li class=""><a href="{{ route('imageInfo.index')}}"><i class="fa fa-circle-o"></i> Update Profile Image</a></li>


            <li class=""><a href="index.html"><i class="fa fa-circle-o"></i> Profile View</a></li>
            <li class=""><a href="index.html"><i class="fa fa-circle-o"></i> Apply for Leave</a></li>

            <li class=""><a href="index.html"><i class="fa fa-circle-o"></i> Admin</a></li>

             <li class=""><a href="{{ route('role.index')}}"><i class="fa fa-circle-o"></i> Roles</a></li>
          <!--   <li class=""><a href="index.html"><i class="fa fa-circle-o"></i> User Info</a></li> -->


        </li>
      </ul>

    </section>
    <!-- /.sidebar -->
  </aside>

