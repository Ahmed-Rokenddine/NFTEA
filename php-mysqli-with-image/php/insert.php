<?php 
//Databse Connection file
include('dbconnection.php');
if(isset($_POST['submit']))
  {
  	//getting the post values
    
    $nftname=$_POST['nftname'];
    $Prix=$_POST['Prix'];
    $Collection=$_POST['collection'];
    $add=$_POST['Description'];
   	$ppic=$_FILES["nftpic"]["name"];
// get the image extension
$extension = substr($ppic,strlen($ppic)-4,strlen($ppic));
// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{
//rename the image file
$imgnewfile=md5($imgfile).time().$extension;
// Code for move image into directory
move_uploaded_file($_FILES["nftpic"]["tmp_name"],"../nftpics/".$imgnewfile);
// Query for data insertion
$query=mysqli_query($con, "insert into tblusers (nftname, Prix, Collection, Description,nftpic) value('$nftname', '$Prix', '$Collection', '$add','$imgnewfile' )");
if ($query) {
echo "<script>alert('You have successfully inserted the data');</script>";
echo "<script type='text/javascript'> document.location ='main.php'; </script>";
} else{
echo "<script>alert('Something Went Wrong. Please try again');</script>";
}}
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
<style>
	.col-sm-7 {
    text-shadow: none;
    max-width: 66.333333%;
}
</style>
</head>
<body>
    <!--Home section--->
<div class="header">
<h1>Become an artiste !</h1>
<p>Show us what you got</p>
</div>
<div class="signup-form">
    <form  method="POST" enctype="multipart/form-data" >
		<h2>NFT ADD</h2>
		
        <div class="form-group">
			<div class="row">
				
				<div class="col"><input type="text" class="form-control" name="nftname" placeholder="NFT-Name" required="true"></div>
			</div>        	
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Prix" placeholder="Prix" required="true" maxlength="10" pattern="[0-9]+">
        </div>
        <div class="form-group">
			<select name="collection" value="none" class="form-control"  required="true" >
			<option value="">Select Collection</option>
                        <?php
                        //Query to select a collection from the ones already existing 
                        $select=mysqli_query($con,"SELECT * FROM collection");
                        while($row=mysqli_fetch_array($select)){
                            ?>
                            <option value="<?php echo $row['ID']; ?>"> <?php echo $row['collname']?></option>
                            <?php
                        }
                            ?>
            </select>
        </div>

		
		<div class="form-group">
            <textarea class="form-control" name="Description" placeholder="Description" required="true"></textarea>
        </div>  
             <div class="form-group">
        	<input type="file" class="form-control" name="nftpic"  required="true">
        	<span style="color:red; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span>
        </div>      
      
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">ADD to collection</button>
        </div>
    </form>
	<div class="text-center">View Aready Inserted Data!!  <a href="main.php">View</a></div>
	<div class="col-sm-7" align="right">
                        <a href="main.php" class="btn btn-secondary"> <span>Cancel</span></a>
                                        
    </div>    
</div>
</body>
</html>