<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Book Rv</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="wallhaven-57vjx9.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?=$_SESSION["login"]?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Categories & Slider -->
                <li class="nav-item has-treeview menu-open">
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="category_list.php" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Book Categories</p>
                            </a>
                        </li>

                        
                    </ul>
                </li>

                <!-- Manage Books -->
                <a href="book_list.php" class="nav-link active">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-book-fill" viewBox="0 0 16 16">
                        <path d="M1 2.828c.885-.37 2.154-.738 3.5-.738s2.615.368 3.5.738c.885-.37 2.154-.738 3.5-.738 1.346 0 2.615.368 3.5.738V13.5c0 .898-.396 1.439-1 1.725V2.828c-.885-.37-2.154-.738-3.5-.738s-2.615.368-3.5.738c-.885-.37-2.154-.738-3.5-.738-1.346 0-2.615.368-3.5.738V15.225c-.604-.286-1-.827-1-1.725V2.828z"/>
                    </svg>

                    <p> Manage Books </p>
                </a>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
