<?php include 'includes/header.php'; 
include 'admin/includes/db.php'; 
?>

    <div class="wrap">

<?php include 'includes/navigation.php'; ?>
      <!-- END header -->

    <section class="site-section py-lg">
      <div class="container">
        
        <div class="row blog-entries element-animate">
<?php 
if(isset($_GET['post'])){
  $p_id= $_GET['post'];
  $query = "SELECT * FROM posts WHERE post_id=$p_id";
  $result = mysqli_query($connection,$query);
}else{
  header("Location: index.php");
}
?>
<?php

while($row = mysqli_fetch_assoc($result)){
  $post_id= $row['post_id'];
  $post_title= $row['post_title'];
  // $post_author= $row['post_author'];
  $post_category=$row['post_category'];
  $post_category_id=$row['post_category_id'];
  $post_content= $row['post_content'];
  // $post_status= $row['post_status'];
  $post_image= $row['post_image'];
?>


<img src="admin/images/<?php echo $post_image; ?>" alt="Image" class="img-fluid mb-2" >  
  <div class="col-md-12 col-lg-8 main-content">
            
            <h1 class="mb-4"><?php echo $post_title?></h1>
           
           
            <div class="post-content-body">
              <p><?php echo $post_content; ?></p>
          
             
            </div>
            
            </div>
   
           



<?php }


?>


        

            

          <!-- END main-content -->

     
            <!-- END sidebar -->

          </div>
        </div>
      </section>
<div>
  <div>


    </div>
    <?php include 'includes/footer.php'; ?>
   

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    
    <script src="js/main.js"></script>
  </body>
</html>