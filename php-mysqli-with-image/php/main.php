<?php
//database conection  file
include('dbconnection.php');
//Code for deletion
if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);
$nftpic=$_GET['ppic'];
$ppicpath="nftpics"."/".$nftpic;
$sql=mysqli_query($con,"delete from tblusers where ID=$rid");
unlink($ppicpath);
echo "<script>alert('NFT deleted');</script>"; 
echo "<script>window.location.href = 'main.php'</script>";     
} 
if(isset($_GET['delID']))
{
$ridcoll=intval($_GET['delID']);
$sqlcoll=mysqli_query($con,"delete from collection where ID=$ridcoll");
echo "<script>alert('Collection deleted');</script>"; 
echo "<script>window.location.href = 'main.php'</script>";     
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Elegant Table Design</title>
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
<div class="header">
    <!--Home section--->
<h1>Become an artiste !</h1>
<p>Show us what you got</p>
</div>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Collection <b>Management</b></h2>
                    </div>
                       <div class="col-sm-7"align="right" >
                        
                        <a href="insert-collection.php" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New Collection</span></a>
                                        
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Collection</th>                       
                        <th>Artiste</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                     <?php
                     //Query to get Collections infos from Collection table 
                         $ret=mysqli_query($con,"select * from collection");
                         $cnt=1;
                         $row=mysqli_num_rows($ret);
                         if($row>0){
                         while ($row=mysqli_fetch_array($ret)) {

                     ?>
                      <!--Fetch the Records -->
                    <tr>
                        <td><?php echo $cnt;?></td>
                        <td> <?php  echo $row['collname'];?></td>
                        <td><?php  echo $row['artiste'];?></td>                        
                        
                        <td> <?php  echo $row['CreationDate'];?></td>
                        <td>
                        
                            <a href="edit-collection.php?editid=<?php echo htmlentities ($row['ID']);?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="main.php?delID=<?php echo ($row['ID']);?>" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Do you really want to Delete ?');"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <?php 
                   $cnt=$cnt+1;
                    } } else {?>
                      <tr>
                      <th style="text-align:center; color:red;" colspan="6">No Collection Found</th>
                      </tr>
                       <?php } ?>       

          
                
                </tbody>
            </table>
       
        </div>
    </div>
</div> 
</div>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>NFT <b>Management</b></h2>
                    </div>
                       <div class="col-sm-7" align="right" >
                        <a href="insert.php" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New NFT</span></a>
                        
                                        
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>NFT</th>
                        <th> Name</th>                       
                        <th>Collection</th>
                        <th>Price "ETH"</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                     <?php
                     //Query to get NFT infos from NFT table 
                      $ret=mysqli_query($con,"select * from tblusers");
                      $cnt=1;
                      $row=mysqli_num_rows($ret);
                        if($row>0){
                        while ($row=mysqli_fetch_array($ret)  ) {
                           $a=$row['Collection'];
                           $sqlyy=mysqli_query($con,"SELECT collname FROM `collection` WHERE ID = $a");
                      ?>
                    <!--Fetch the Records -->
                    <tr>
                        <td><?php echo $cnt;?></td>
                        <td><img src="../nftpics/<?php  echo $row['nftpic'];?>" width="80" height="80"></td>
                        <td> <?php  echo $row['nftname'];?></td>
                        <?php  $ro=mysqli_fetch_array($sqlyy)?>
                        <td><?php  echo $ro['collname'];?></td>                     
                        <td><?php  echo $row['Prix'];?> </td>
                        <td> <?php  echo $row['CreationDate'];?></td>
                        <td>
                            <a href="read.php?viewid=<?php echo htmlentities ($row['ID']);?>" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                            <a href="edit.php?editid=<?php echo htmlentities ($row['ID']);?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="main.php?delid=<?php echo ($row['ID']);?>&&ppic=<?php echo $row['nftpic'];?>" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Do you really want to Delete ?');"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <?php 
                    $cnt=$cnt+1;
                     } } 
                     else {?>
                       <tr>
                       <th style="text-align:center; color:red;" colspan="6">No NFT     Found</th>
                       </tr>
                       <?php } ?>       

          
                
                </tbody>
            </table>
       
        </div>
    </div>
</div> 
</div>
                      
</body>
</html>