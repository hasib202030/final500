<aside class="main-sidebar bg-secondary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <span class="brand-text font-weight-light">LMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <!--<div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div> -->
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name ?? ''}}</a>
            </div>
        </div>


        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item menu-close ">
                    <a href="#" class="nav-link active bg-success">
                        <i class="nav-icon fas fa-plus"></i>
                        <p>
                            Student
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview bg-dark">
                        <li class="nav-item bg-dark">
                            <a href="{{ route('users.create') }}" class="nav-link active bg-dark">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Student</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('users.index')}}" class="nav-link active bg-dark">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Student</p>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-item menu-close">
                    <a href="#" class="nav-link active bg-success">
                        <i class="nav-icon fas fa-plus"></i>
                        <p>
                            Teacher
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link active bg-dark">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Teacher</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link active bg-dark">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Teacher</p>
                            </a>
                        </li>
                    </ul>
                </li>


                    <li class="nav-item menu-close ">
                    <a href="#" class="nav-link active bg-success">
                        <i class="nav-icon fas fa-plus"></i>
                        <p>
                            Coures
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('courses.create')}}" class="nav-link active bg-dark">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Coures</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('courses.index')}}" class="nav-link active bg-dark">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Coures</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item menu-close ">
                    <a href="#" class="nav-link active bg-success">
                        <i class="nav-icon fas fa-plus"></i>
                        <p>
                            Department
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('departments.create')}}" class="nav-link active bg-dark">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Department</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('departments.index')}}" class="nav-link active bg-dark">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Department</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item menu-close ">
                    <a href="#" class="nav-link active bg-success">
                        <i class="nav-icon fas fa-plus"></i>
                        <p>
                            Section
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('sections.create')}}" class="nav-link active bg-dark">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Section</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('sections.index')}}" class="nav-link active bg-dark">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Section</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item menu-close ">
                    <a href="{{ route('users.logout')}}" class="nav-link active bg-success">

                        <p>
                            Logout
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                 </li>



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
