<?php
//Database Connection
include('dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Crud Operation Using PHP and MySQLi</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!--Home section--->
<div class="header">
<h1>Become an artiste !</h1>
<p>Show us what you got</p>
</div>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Gallery <b>Details</b></h2>
                        <!--Fetch the Records From all tables and display them -->
                    </div>
<?php
$vid=$_GET['viewid'];
$ret=mysqli_query($con,"select * from tblusers where ID =$vid");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
    $a=$row['Collection'];
    $sqlyy=mysqli_query($con,"SELECT collname FROM `collection` WHERE ID = $a");

?>

                     <div class="col-sm-7" >
                        <a href="edit.php?editid=<?php echo htmlentities ($row['ID']);?>" class="btn btn-primary"><span>Edit Gallery Details</span></a>
                                        
                    </div>
                </div>
            </div>
<table cellpadding="0" cellspacing="0"  class="display table table-bordered" id="hidden-table-info">
               
<tbody>
    <tr>
        <th width="200">NFT</th>
        <td><img src="../nftpics/<?php  echo $row['nftpic'];?>" width="80" height="80"></td>
           <th width="200">Creation Date</th>
    <td><?php  echo $row['CreationDate'];?></td>
    </tr>

 <tr>
   
    <th>NFT Name</th>
    <td><?php  echo $row['nftname'];?></td>
  </tr>
  <tr>
    <th>Collection</th>
    <?php  $ro=mysqli_fetch_array($sqlyy)?>
    <td><?php  echo $ro['collname'];?></td>  
    <th>Price 'ETH'</th>
    <td><?php  echo $row['Prix'];?></td>
  </tr>
  <tr>
    <th>Descritpion</th>
    <td><?php  echo $row['Description'];?></td>
 
  </tr>
<?php 
$cnt=$cnt+1;
}?>
                 
</tbody>
</table>
       
        </div>
    </div>
</div>  
<div class="col-sm-7" >
                        <a href="main.php" class="btn btn-secondary"> <span>Cancel</span></a>
                                        
    </div>    
</body>
</html>