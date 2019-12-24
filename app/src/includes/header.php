<nav class="navbar navbar-default menu-section">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href='/' class="navbar-brand">
                Library Management System
            </a>
        </div>
        <div class="navbar-collapse collapse ">
            <?php if ($_SESSION['login']) { ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="dashboard.php" class="menu-top-active">DASHBOARD</a></li>
                    <li>
                        <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Account <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="my-profile.php">My Profile</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="change-password.php">Change Password</a></li>
                        </ul>
                    </li>
                    <li><a href="issued-books.php">Issued Books</a></li>
                    <li><a href="logout.php" class="text-danger pull-right">LOG ME OUT</a></li>
                </ul>
            <?php } else { ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="adminlogin.php">Admin Login</a></li>
                    <li><a href="signup.php">User Signup</a></li>
                    <li><a href="index.php">User Login</a></li>
                </ul>
            <?php } ?>
        </div>
    </div>
</nav>