<?php
   include "connection.php";
   
if (isset($_POST['save'])) {

    $numbers = '';
    for ($i = 0; $i < 10; $i++) {
      $numbers .= $i;
    }

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $contact_no = $_POST['contact_no'];
    $email = $_POST['email'];

    $group5= "INSERT INTO `user` (`name`, `age`, `gender`, `email`, `contact_no`) VALUES ( '$name', '$age', '$gender', '$email', '$contact_no');";
    
    
    $query = mysqli_query($conn, $group5) or die("error: $group5");

    echo "<script>window.location.href='info.php'</script>";
  }
  
?>

    <div class="modal fade" id="exampleModal" tabhome="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <form method="POST">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Information</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                         <label for="" class="">Name</label>
                         <input name="name" type="text" class="form-control" placeholder = "Enter your name"required> <br>
                         <label for="">Age</label>
                         <input name="age" type="text" class="form-control" placeholder = "Enter your age"required> <br>
                         <label class="form-label">Gender</label>
                         <select required="" name="gender" class="form-control custom-select">
                         <option class="text-muted" value="">Select Gender</option>
                         <option value="Male">Male</option>
                         <option value="Female">Female</option>
                         </select>
                         <br>
                         <label for="">Contact Number</label>
                         <input name="contact_no"type="text" class="form-control" placeholder = "Enter your Contact number"required> <br>
                         <label for="">Email</label>
                         <input name="email"type="text" class="form-control" placeholder = "Enter your Email"required> <br>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
                        <button name="save" type="submit" class="btn btn-outline-success">Save</button>
                      </div>
                    </div>
                  </div>
                </div>
                </form>

