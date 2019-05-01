 <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <img alt="image" class="rounded-circle" src="{{ asset ('assets/admin/img/profile_small.jpg') }}"/>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="block m-t-xs font-bold">David Williams</span>
                                <span class="text-muted text-xs block">Art Director <b class="caret"></b></span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                                <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                                <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="login.html">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>

                    <li class="active">
                        <a href="{{ url('admin/dashboard') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
                    </li>

                    <li>
                        <a href="{{ route('admin.employee') }}"><i class="fa fa-users"></i> <span class="nav-label">Employees</span></a>
                    </li>

                    <li>
                        <a href="{{ url('admin/post') }}"><i class="fa fa-users"></i> <span class="nav-label">Post</span></a>
                    </li>

                    <li>
                        <a href="{{ url('admin/product') }}"><i class="fa fa-users"></i> <span class="nav-label">Product</span></a>
                    </li>

                    <li>
                        <a href="{{ url('admin/store') }}"><i class="fa fa-users"></i> <span class="nav-label">Store</span></a>
                    </li>

                </ul>
            </div>
        </nav>