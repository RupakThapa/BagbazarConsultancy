<?php 
include 'admin/includes/db.php'; 
$query="SELECT * FROM services ORDER BY service_id DESC";
$result= mysqli_query($connection,$query);




while($row=mysqli_fetch_assoc($result)){
  $service_id= $row['service_id'];
  $service_title= $row['service_title'];
  $service_content= $row['service_content'];
  $service_image= $row['service_image'];
  ?>


<div class="col-sm-12 mb-3">
  <div class="row">
  <div class="col-sm-4"><img src="admin/images/<?php echo $service_image;?>" height="262.75px" width="100%" alt="Image placeholder"></div>
  <div class="col-sm-8">
<div class="row"> <h3><?php echo $service_title;?></h3></div>
<div class="row">    <p><?php echo $service_content;?></p></div>

</div>
  </div>


  
</div>


  <?php }  
  ?>
 






