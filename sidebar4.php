     <!--========== BOX ICONS ==========-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

<!--========== CSS ==========-->
<link rel="stylesheet" href="sidebar4.css">

<title>Responsive sidebar submenus</title>
</head>
<body>
<!--========== HEADER ==========-->
<header class="header">
    <div class="header__container">
        <img src="images/UOC.webp" alt="" class="header__img">

        <a href="#" class="header__logo">Visit Site</a>

        <!-- <div class="header__search">
            <input type="search" placeholder="Search" class="header__input">
            <i class='bx bx-search header__icon'></i>
        </div> -->

        <div class="header__toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>
    </div>
</header>

<!--========== NAV ==========-->
<div class="nav p-3" id="navbar">
    <nav class="nav__container">
        <div>
            <img src="images/UOC.webp" alt="" class="header__img">
            <a href="#" class="nav__link nav__logo">
                <!-- <i class='bx bxs-disc nav__icon' ></i> -->
                <span class="nav__logo-name">CUIET</span>
            </a>

            <div class="nav__list">
                <div class="nav__items">
                    <h3 class="nav__subtitle">Profile</h3>

                    <a href="#" class="nav__link active">
                        <i class='bx bx-home nav__icon' ></i>
                        <span class="nav__name">Home</span>
                    </a>
                    
                    <div class="nav__dropdown">
                        <a href="#" class="nav__link">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__name">Profile</span>
                            <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                        </a>

                        <div class="nav__dropdown-collapse">
                            <div class="nav__dropdown-content">
                                <a href="#" class="nav__dropdown-item">Passwords</a>
                                <a href="#" class="nav__dropdown-item">Mail</a>
                                <a href="#" class="nav__dropdown-item">Accounts</a>
                            </div>
                        </div>
                    </div>
                    <div class="nav__dropdown">
                        <a href="#" class="nav__link">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__name">Slider</span>
                            <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                        </a>

                        <div class="nav__dropdown-collapse">
                            <div class="nav__dropdown-content">
                                <a href="addslider.php" class="nav__dropdown-item">Add slider</a>
                                <a href="editslides.php" class="nav__dropdown-item">Edit slider</a>
                            </div>
                        </div>
                    </div>
                    <div class="nav__dropdown">
                        <a href="#" class="nav__link">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__name">notification</span>
                            <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                        </a>

                        <div class="nav__dropdown-collapse">
                            <div class="nav__dropdown-content">
                                <a href="addnotification.php" class="nav__dropdown-item">Add notification</a>
                                <a href="managenotification.php" class="nav__dropdown-item">Manage notification</a>
                            </div>
                        </div>
                    </div>
                    <div class="nav__dropdown">
                        <a href="#" class="nav__link">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__name">news</span>
                            <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                        </a>

                        <div class="nav__dropdown-collapse">
                            <div class="nav__dropdown-content">
                                <a href="add_post.php" class="nav__dropdown-item">Add news</a>
                                <a href="manage_post.php" class="nav__dropdown-item">Manage news</a>
                            </div>
                        </div>
                    </div>
                    <div class="nav__dropdown">
                        <a href="#" class="nav__link">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__name">gallery</span>
                            <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                        </a>

                        <div class="nav__dropdown-collapse">
                            <div class="nav__dropdown-content">
                                <a href="add_images.php" class="nav__dropdown-item">Add images</a>
                                <a href="manage_images.php" class="nav__dropdown-item">Manage images</a>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="nav__link">
                        <i class='bx bx-message-rounded nav__icon' ></i>
                        <span class="nav__name">Messages</span>
                    </a>
                </div>

                <!-- <div class="nav__items">
                    <h3 class="nav__subtitle">Menu</h3>

                    <div class="nav__dropdown">
                        <a href="#" class="nav__link">
                            <i class='bx bx-bell nav__icon' ></i>
                            <span class="nav__name">Notifications</span>
                            <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                        </a>

                        <div class="nav__dropdown-collapse">
                            <div class="nav__dropdown-content">
                                <a href="#" class="nav__dropdown-item">Blocked</a>
                                <a href="#" class="nav__dropdown-item">Silenced</a>
                                <a href="#" class="nav__dropdown-item">Publish</a>
                                <a href="#" class="nav__dropdown-item">Program</a>
                            </div>
                        </div>

                    </div>

                    <a href="#" class="nav__link">
                        <i class='bx bx-compass nav__icon' ></i>
                        <span class="nav__name">Explore</span>
                    </a>
                    <a href="#" class="nav__link">
                        <i class='bx bx-bookmark nav__icon' ></i>
                        <span class="nav__name">Saved</span>
                    </a>
                </div> -->
            </div>
        </div>

        <a href="logoff.php" class="nav__link nav__logout">
            <i class='bx bx-log-out nav__icon' ></i>
            <span class="nav__name">Log Out</span>
        </a>
    </nav>
</div>




<!--========== MAIN JS ==========-->
<script src="sidebar4.js"></script>