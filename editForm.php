<?php
// ddtabase connection
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

 // fetch from database
$fetchEven =mysqli_query($conn, "SELECT * FROM eventwebsite WHERE Id = '".$_GET['Id']."' ");
while ($row = mysqli_fetch_array($fetchEven)) {
    # code...
    $firstname = $row ['firstname'];
    $lastname = $row ['lastname'];
    $phone = $row ['phone'];
    $email = $row ['email'];
    $message = $row ['message'];

}

?>

<?php require_once ("includes/links.php");?>
    <body>
        <?php require_once ("includes/header.php");?>
    
        <div class="main-content">
            <div class="container-fluid">
                <div class="row mt-0">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-dark text-white text-center">
                                <span class="float-end">Edit Message</span>
                            </div>
                            <div class="body">
                                <form >
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label class="form-label">First Name</label>
                                            <input type="text" class="form-control" value = "<?php echo $firstname; ?>" >
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control" value = "<?php echo $lastname; ?>">
                                        </div>
                                        <div class="col-lg-6 mt-4 ">
                                            <label class="form-label">Phone No.</label>
                                            <input type="tel" class="form-control" value = "<?php echo $phone; ?> ">
                                        </div>
                                        <div class="col-lg-6 mt-4">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" value = "<?php echo $email; ?> ">
                                        </div>
                                        <div class="col-lg-12 mt-4">
                                            <label class="form-label">Message</label>
                                            <textarea class="form-control" cols="10" rows="3"><?php echo $message ?></textarea>
                                            <div class="col-lg-3 mt-1">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once ("includes/script.php");?>
    </body>
</html>