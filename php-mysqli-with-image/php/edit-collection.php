<?php 
//Database Connection
include('dbconnection.php');
if(isset($_POST['submit']))
  {
  	$eid=$_GET['editid'];
  	//Getting Post Values
    
      $collname=$_POST['collname'];
      $artiste=$_POST['artiste'];


    //Query for data updation
     $query=mysqli_query($con, "update  collection set collname='$collname' , artiste='$artiste' where ID='$eid'");
     
    if ($query) {
    echo "<script>alert('You have successfully update the data');</script>";
    echo "<script type='text/javascript'> document.location ='main.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>PHP Crud Operation!!</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>
<div class="header">
<h1>Become an artiste !</h1>
<p>Show us what you got</p>
</div>
<div class="signup-form">
    <form  method="POST">
 <?php
$eid=$_GET['editid'];
$ret=mysqli_query($con,"select * from collection where ID='$eid'");
while ($row=mysqli_fetch_array($ret)) {
?>
		<h2>Update Collection </h2>
		

	

        <div class="form-group">
			<div class="row">
				
				<div class="col"><input type="text" class="form-control" name="collname" value="<?php  echo $row['collname'];?>" required="true"></div>
			</div>        	
        </div>
       
        <div class="form-group">
        	<input type="Collection" class="form-control" name="artiste" value="<?php  echo $row['artiste'];?>" required="true">
        </div>
		
		 

<?php 
}?>
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Update</button>
        </div>
    </form>

</div>
<div class="col-sm-7" align="right">
                        <a href="main.php" class="btn btn-secondary"> <span>Cancel</span></a>
                                        
    </div> 
</body>
</html>