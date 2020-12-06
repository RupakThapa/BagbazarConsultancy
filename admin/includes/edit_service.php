
<?php
$sql= "SELECT * FROM services";
$res= mysqli_query($connection,$sql);
if(isset($_GET['edit_service'])&& $_GET['edit_service'] != ""){
$edit_id= $_GET['edit_service'];
$query = mysqli_query($connection,"SELECT * FROM services WHERE service_id=$edit_id");
if(mysqli_num_rows($query)>0){
$data= mysqli_fetch_array($query);
$title = $data['service_title'];
$content= $data['service_content'];
$image = $data['service_image'];
}else{
    die("No such record in db");
}
}
else{
    die("failed");
}
?>


<script src="../admin/ckeditor/ckeditor.js"></script>


<div class="container">

<div class="row">
<h2>Edit Service</h2>
    <div class="col-sm-12 col-lg-7">
        <form action="services.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Service title</label>
                <input type="text" name="title" placeholder="service title" class="form-control" value="<?php echo $title;?>">
            </div>

            
            <!-- <div class="form-group">
                <label for="">edit category ID</label>
               <select name="category" class="form-control" value="<?php echo $title;?>">
                   <option value=""></option>
               </select>
            </div> -->

         
            
            <div class="form-group">
                <label for="">Service content</label>
                <textarea name="content" placeholder="service content" rows="8" cols="80" class="form-control" id="editor"><?php echo $content;?>
</textarea>
            </div>

            <div class="form-group">
                <label for="">Service thumbnail (square recommended)</label>
               <input type="file" name="post_image" class="form-control">
               <br>
               <input type="text" name="image" value="<?php echo $image;?>" style="display:none;">
               <input type="text" name="editid" value="<?php echo $edit_id;?>" style="display:none;">
               <img src="images/<?php echo $image;?>" style="width: 150px; height:150px;">
            </div>
             <div class="form-group">
               <input type="submit" name="modifyservice" value="modifyservice" class="btn" style="background-color:#D7221B;color:white;">
            </div>
        </form>
    </div>
</div>
</div>

<script>
CKEDITOR.replace('editor');
</script>



