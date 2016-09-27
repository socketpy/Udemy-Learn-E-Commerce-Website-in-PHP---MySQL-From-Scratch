<!DOCTYPE>
<?php
include('functions/functions.php');
?>
<html>
<head>
<title>My Online Shope</title>
<link rel="stylesheet" href="styles/style.css" media="all" />
</head>
<body>
    <div class="main_wrapper">
        <div class="header_wrapper">
            <img id="logo" src="images/logo.gif" />
            <img id="banner" src="images/ad_banner.gif" />
        </div>        
        <div class="menubar">
            <ul id="menu">
                <li><a href="">Home</a></li>
                <li><a href="">All products</a></li>
                <li><a href="">My account</a></li>
                <li><a href="">Sign up</a></li>
                <li><a href="">Shopping cart</a></li>
                <li><a href="">Contact us</a></li>                
            </ul>
            <div id="form">
                <form method="get" action="results.php" enctype="multipart/form-data">
                    <input type="text" name="user_query" placeholder="Search a product" />
                    <input type="submit" name="search" value="search" />
                </form>
            </div>
        </div>
        <div class="content_wrapper">
        <div id="sidebar">
            <div id="sidebar_title">Categories</div>
            <ul id="cats">
                <?php
                    getCategories(); 
                ?>
            </ul>
            <div id="sidebar_title">Brands</div>
            <ul id="cats">
                <?php
                    getBrands(); 
                ?>
            </ul>
        </div>
        <div id="content_area">This is content area</div>
        </div>
        <div id="footer">
            <h2 style="text-align: center; padding-top: 30px;">&copy; 2016 www.onlineTuting.com</h2>;
        </div>
    </div>
</body>
</html?