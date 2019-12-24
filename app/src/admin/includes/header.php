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
            <ul class="nav navbar-nav navbar-right">
                <li><a href="dashboard.php" class="menu-top-active">DASHBOARD</a></li>
                <li>
                    <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Categories <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="add-category.php">Add Category</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-categories.php">Manage Categories</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Authors <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="add-author.php">Add Author</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-authors.php">Manage Authors</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Books <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="add-book.php">Add Book</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-books.php">Manage Books</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Issue Books <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="issue-book.php">Issue New Book</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-issued-books.php">Manage Issued Books</a></li>
                    </ul>
                </li>
                <li><a href="reg-students.php">Reg Students</a></li>
                <li><a href="change-password.php">Change Password</a></li>
            </ul>
        </div>
    </div>
</nav>