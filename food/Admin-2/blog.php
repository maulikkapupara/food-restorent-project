<!DOCTYPE html>
<html lang="en">
<?php include("include/config.php"); ?>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Forms</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/nutbut.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/nutbut.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <?php include('include/left.php'); ?>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php include('include/header.php'); ?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <?php 
                                $editid = isset($_REQUEST['EditId']) ? $_REQUEST['EditId'] : '';
                                $hiddenname = $editid ? 'editblog' : 'insertblog';

                                if(isset($_REQUEST['EditId'])){
                                    $display="SELECT * FROM  blog WHERE id='$editid'";
                                    $displayresult = $conn->query($display);
                                    $displayrow = $displayresult->fetch_assoc();
                                    //echo '<pre>'; print_r($displayrow); exit;

                                    $blogtitle = isset($displayrow['blogtitle']) ? $displayrow['blogtitle'] : '';
                                    $blogdiscription = isset($displayrow['blogdiscription']) ? $displayrow['blogdiscription'] : '';
                                    $blogimg = isset($displayrow['blogimg']) ? $displayrow['blogimg'] : '';
                                } 
                                else{
                                    $blogtitle = '';
                                    $blogdiscription = '';
                                    $blogimg = '';
                                }
                            ?>
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header" style="background-color:black; color:white;">
                                        <strong>ADD Blog</strong>
                                    </div>
                                    <div class="card-body card-block">
                                    <form action="blogaction.php" method="post" name="blogform" enctype="multipart/form-data" class="form-horizontal">                    
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Blog Title</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="blogtitle" name="blogtitle" placeholder="Blog Title" class="form-control" value="<?php echo $blogtitle; ?>">         
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Blog Discription</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="blogdiscription" id="editor" rows="6" placeholder="Enter Blog Discription" class="form-control"><?php echo $blogdiscription; ?></textarea>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Upload IMG</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="blogimg" name="blogimg" class="form-control-file">
                                                    <?php if(isset($_REQUEST['EditId'])){ ?>
                                                        <img src="<?php echo $blogimg; ?>" width="50" height="50">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <input type="hidden"  name="<?php echo $hiddenname; ?>" value="<?php echo  $editid; ?>">
                                                <button type="submit" name="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Submit
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Reset
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                                
                            </div>

                            <?php                
                                    $seletBlog = "SELECT *FROM blog";
                                    $result = $conn->query($seletBlog);
                            ?>

                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Blog Title</th>
                                                <!-- <th>Blog Discription</th> -->
                                                <th>Blog Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php while ($row = $result->fetch_assoc()){ ?>
                                            <tr>
                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['blogtitle']; ?></td>
                                                <!-- <td><?php echo $row['blogdiscription']; ?></td> -->
                                                <td>
                                                    <img src="<?php echo $row['blogimg']; ?>" width="50" height="50">
                                                </td>
                                                <td>
                                                    <a href="blog.php?EditId=<?php echo $row['id']; ?>">Edit</a> | 
                                                    <a href="blogaction.php?BlogdeletId=<?php echo $row['id']; ?>&DeleteImg=<?php echo $row['blogimg']; ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                                                </td>
                                                
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2020 LifeCare Hospital. All rights reserved. Created By <a href="http://localhost/project/lifecare/index.php">LifeCare Hospital</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->