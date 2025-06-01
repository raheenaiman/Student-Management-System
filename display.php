
<!DOCTYPE html>
<?php 
include 'connection.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
   <div class="container my-5 mx-5 text-center shadow-lg p-3 mb-5 bg-white rounded ">
<h1 class="text-center shadow-lg p-3 mb-5 bg-white rounded">Student Management System</h1>
<button class="btn btn-primary"><a href="Home.php" class="text-light">Add Student</a></button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Student ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">email</th>
      <th scope="col">Program</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $sql = "select * from stutbl";
       $result = mysqli_query($conn,$sql);
         if($result){
            while($row=mysqli_fetch_assoc($result)){
                $stuid=$row['id'];
                $fname=$row['firstname'];
                $lname=$row['lastname'];
                $email=$row['email'];
                $program=$row['pos'];
                echo '<tr>
                <th scope="row">'.$stuid.'</th>
                <td>'.$fname.'</td>
                <td>'.$lname.'</td>
                <td>'.$email.'</td>
                <td>'.$program.'</td>
                <td>
                <button class="btn btn-primary"><a href="update.php ? updateid='.$stuid.'" class="text-light">Update</a></button>
                <button class="btn btn-danger"><a href="delete.php ? deleteid='.$stuid.'" class="text-light">Delete</a></button>
                </td>
                 

              </tr>' ;

            }
            
         }
    ?>
  </tbody>
</table>
   </div> 
</body>
</html>
