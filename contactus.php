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
    $sqlFetchDetailsRecord =  mysqli_query($conn, "SELECT * FROM eventwebsite");
?>


<?php require_once "includes/links.php" ?>
<body>
   <?php require_once "includes/header.php"?>
    <!-- main-content -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row mt-0">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <span>Contact Us</span>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>DATE OF REG</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $count =1;
                                    while ($row = mysqli_fetch_array($sqlFetchDetailsRecord)) { ?>
                                        <tr>
                                            <td><?php echo $count ?></td>
                                            <td><?php echo $row['firstname'] ?></td>
                                            <td><?php echo $row['lastname'] ?></td>
                                            <td><?php echo $row['phone'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['message'] ?></td>
                                            <td><?php echo $row['created_at'] ?></td>
                                            <td>
                                                <a href="editForm.php? Id= <?php echo $row['Id'] ?>" class="btn btn-success btn-sm ">View</a>
                                                <a href="#" class="btn btn-info btn-sm ">Edith</a>
                                                <a href="#" class="btn btn-danger btn-sm ">Delete</a>
                                            </td>
                                        </tr>
                                    <?php $count++;  } ?>       
                                   
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