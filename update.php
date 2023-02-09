
<?php  
   require_once "connection.php";
    $id = $_GET['id'];
    
    $kk="SELECT * FROM `user` WHERE id=$id";
    $result = mysqli_query($group5, $kk);
    $row = mysqli_fetch_assoc($result);

   if(isset($_POST['editData']))
   {
      $name = $_POST['name'];
      $age = $_POST['age'];
      $gender = $_POST['gender'];
      $contact_no = $_POST['contact_no'];
      $email= $_POST['email'];

      $kk = "UPDATE `user` SET `id`='$id', `name`= '$name',`age`= '$age' ,`gender`= '$gender' ,`contact_no`= '$contact_no' ,`email`= '$email' WHERE `id` = '$id';";
      $result = mysqli_query($group5, $kk);
      
      header("Location: info.php");
          
     }
     

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Information</title>
</head>
<body class="" v-on:click="Reload"> 
     <table>
        <div class="container">
          
            <div class="page-header">
              <h1 class="page-title">
                <a href="info.php" class="text-primary"></a> <i style="font-size: 50px;" class="fa-solid fa-chevrons-right"></i> Edit Information
              </h1>
             </div>

             <input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
    
     <div class="col-12">
                <div class="card">
               <div class="">
              <form class="" method="POST" action="">
                <div class="card-body">
                  <h3 class="card-title"><strong>Personal Data</strong></h3>
                  <div class="row">

                  <div class="col-md-4">
                      <div class="form-group">
                        <label class="form-label">Name</label>
                        <input type="text" required="" name="name" class="form-control" value="<?php echo $row['name'] ?>">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="form-label">Age</label>
                        <input type="text" required="" name="age" class="form-control" value="<?php echo $row['age'] ?>">
                      </div>
                    </div>
                    <br>
                    <div class="col-md-4 mt-4">
                      <div class="form-group">
                        <label class="form-label">Gender</label>
                        <input type="text" required="" name="gender" class="form-control" value="<?php echo $row['gender'] ?>">
                      </div>
                    </div>
                    <div class="col-md-4 mt-4">
                      <div class="form-group">
                        <label class="form-label">Contact Number</label>
                        <input type="text" required="" name="contact_no" class="form-control" value="<?php echo $row['contact_no'] ?>">
                      </div>
                    </div>
                    <div class="col-md-4 mt-4">
                      <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="text" required="" name="email" class="form-control" value="<?php echo $row['email'] ?>">
                      </div>
                    </div>

                <div class=" mt-3 d-grid gap-3 d-flex justify-content-end "> 
                    <a href="info.php" class="btn btn-outline-danger">Cancel</a> 
                    <button type="submit"  name="editData"  class="btn btn-outline-success">Update</button>
                </div>
        </table>
       </div>

</body>
</html>