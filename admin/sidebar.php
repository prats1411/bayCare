<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li class="nav-header">
                <div class="profile-element">
                    <p class="text-center" style="margin-bottom:5px; color: #fff; font-size: 16px;"> ADMIN </p>
                </div>
            </li>
            <li <?php echo ($page == 'one') ? "class='active'" : ""; ?> >
                <a href="index.php"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> </a>
            </li>
            <li <?php echo ($page == 'two') ? "class='active'" : ""; ?> >
                <a href="add.php"><i class="fa fa-plus"></i> <span class="nav-label">Add Company</span></a>
            </li>
            <li <?php echo ($page == 'three') ? "class='active'" : ""; ?> >
                <a href="list.php"><i class="fa fa-pencil-square-o"></i> <span class="nav-label">Company List</span></a>
            </li>
            <li <?php echo ($page == 'four') ? "class='active'" : ""; ?> >
                <a href="#"><i class="fa fa-user"></i> <span class="nav-label">Users</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="user.php">Add</a></li>
                    <li><a href="delete.php">Manage</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>