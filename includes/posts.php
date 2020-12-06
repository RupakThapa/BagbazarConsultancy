<?php 
include 'admin/includes/db.php'; 
$query="SELECT * FROM posts ORDER BY post_id DESC";
$result= mysqli_query($connection,$query);




while($row=mysqli_fetch_assoc($result)){
  $post_id= $row['post_id'];
  $post_title= $row['post_title'];
  // $post_author= $row['post_author'];
  $post_category=$row['post_category'];
  $post_category_id=$row['post_category_id'];
  $post_content= $row['post_content'];
  // $post_status= $row['post_status'];
  $post_image= $row['post_image'];
  ?>


<div class="col-sm-4">
  <a href="single.php?post=<?php echo $post_id;?>" class="blog-entry element-animate nodecor" data-animate-effect="fadeIn">
    <img src="admin/images/<?php echo $post_image;?>" height="262.75px" class="hoverdim" width="100%" style="overflow:hidden;" alt="Image placeholder">
    <div class="blog-content-body">
      <h2><?php echo $post_title;?></h2><br>
    </div>
  </a>
</div>


  <?php }  
  ?>
 






