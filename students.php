<?php   
 
$server ="localhost";
$username ="root";
$password ="";
$database ="Classwork";

//database connection using mysql_connect
$conn = mysqli_connect($server,$username,$password,$database);
    if(!$conn)
    {
        echo "Connection failed!";
    }

    // perfom SQL to fetch records
    $sqlFetchDetailsRecord =  mysqli_query($conn, "SELECT * FROM register_your_details");
?>


<?php require_once "includes/links.php" ?>
</head>
<body>
   <?php require_once "includes/header.php"?>
    <!-- main-content -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row mt-0">
               <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <span>Students</span>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>NAME</th>
                                        <th>PHONE NO.</th>
                                        <th>EMAIL</th>
                                        <th>GENDER</th>
                                        <!-- <th>COURSE</th> -->
                                        <th>DATE OF REG</th>
                                        <!-- <th>ACTION</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = mysqli_fetch_array($sqlFetchDetailsRecord)) { ?>
                                        <tr>
                                            <td><?php echo $row['id'] ?></td>
                                            <td><?php echo $row['fullname'] ?></td>
                                            <td><?php echo $row['phone'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['gender'] ?></td>
                                            <!-- <td><?php echo $row['course'] ?></td> -->
                                            <td><?php echo $row['created_at'] ?></td>
                                        </tr>
                                    <?php  } ?>       
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>

    <?php require_once "inludes/script.php" ?>
</body>
</html>