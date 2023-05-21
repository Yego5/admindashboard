<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boostrap admin Template</title>
   <?php require_once "includes/links.php" ?>
</head>
<body>
    <?php require_once "includes/header_sidebar.php" ?>
    <!-- main-content -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row mt-0">
               <div class="card">
                <div class="col-lg-12">
                    <div class="card-header bg-dark text-white text-center">
                        <span>Top content</span>
                    </div>
                </div>
               </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                   <div class="card">
                    <div class="card-header bg-dark text-white text-center">
                        <span>Students</span>
                    </div>
                    <div class="card-body">
                        <span><i class="bi bi-people large"></i></span>
                        <span class="float-end ">00</span>
                    </div>
                    <div class="card-footer bg-secondary">
                        My Profile
                    </div>
                   </div>
                </div>
                <div class="col-lg-3">
                   <div class="card">
                    <div class="card-header bg-dark text-white text-center">
                        <span>Available Courses</span>
                    </div>
                    <div class="card-body">
                        <span><i class="bi bi-folder2-open"></i></span>
                        <span class="float-end">00</span>
                    </div>
                    <div class="card-footer bg-secondary">Access your folder</div>
                   </div>
                </div>
                <div class="col-lg-3">
                   <div class="card">
                    <div class="card-header bg-dark text-white text-center">
                        <span>Compuses</span>
                    </div>
                    <div class="card-body">
                        <span><i class="bi bi-mortarboard"></i></span>
                        <span class="float-end">00</span>
                    </div>
                    <div class="card-footer bg-secondary">My Campus</div>
                   </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <span>Users</span>
                        </div>
                        <div class="card-body">
                            <span><i class="bi bi-person"></i></span>
                            <span class="float-end">00</span>
                        </div>
                        <div class="card-footer bg-secondary">Personal details</div>
                    </div>
                </div>
            </div>
        <div class="row my-3">
            <div class="card">
                <div class="col-lg-12">
                    <div class="card-header bg-dark text-white text-center">
                        <span>Student Analysis</span>
                    </div>
                    <div class="card-body ">
                        <span><i class="bi bi-graph-up-arrow"></i></span>
                    </div>
                    <div class="card-footer bg-secondary">Result of Analysis</div>
                </div>
            </div>
        </div>
        </div>
    </div>
<?php require_once "includes/footer_links.php"?>
</body>
</html>