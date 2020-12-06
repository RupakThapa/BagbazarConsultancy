
<?php
$sql= "SELECT * FROM categories";
$res= mysqli_query($connection,$sql);
if(isset($_GET['edit_post'])&& $_GET['edit_post'] != ""){
$edit_id= $_GET['edit_post'];
$query = mysqli_query($connection,"SELECT * FROM posts WHERE post_id=$edit_id");
if(mysqli_num_rows($query)>0){
$data= mysqli_fetch_array($query);
$title = $data['post_title'];
// $author = $data['post_author'];
$category = $data['post_category'];
$content= $data['post_content'];
$image = $data['post_image'];
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
<h2>edit post</h2>
    <div class="col-sm-12 col-lg-7">
        <form action="posts.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Study Country</label>
                <input type="text" name="title" placeholder="Country Name" class="form-control" value="<?php echo $title;?>">
            </div>

            <div class="form-group">
                <label for="">Author</label>
                <input type="text" name="author" placeholder="post author" value="boec" class="form-control" disabled>
            </div>

            <div class="form-group">
                <label for="">Category</label>
               <select name="category" class="form-control" value="Study Destinations">
                   <option value="Study Destinations" selected>Study Destinations</option>
               </select>
            </div>    
            
            <!-- <div class="form-group">
                <label for="">post category ID</label>
               <select name="category" class="form-control" >
                   <option value=""></option>
               </select>
            </div> 
            
            <div class="form-group">
                <label for="">post category ID</label>
               <select name="category" class="form-control" value="<?php echo $title;?>">
                   <option value=""></option>
               </select>
            </div> -->

            <!-- <div class="form-group">
                <label for="">post status</label>
                <select name="status" class="form-control">
                   <option value="draft">Draft</option>
                   <option value="published">Published</option>
               </select>
            </div> -->
            
            <div class="form-group">
                <label for="">Main content</label>
                <textarea name="content" placeholder="post content" rows="8" cols="80" class="form-control" id="editor"><?php echo $content;?>
</textarea>
            </div>

            <div class="form-group">
                <label for="">Banner image</label>
               <input type="file" name="post_image" class="form-control">
               <br>
               <input type="text" name="image" value="<?php echo $image;?>" style="display:none;">
               <input type="text" name="editid" value="<?php echo $edit_id;?>" style="display:none;">
               <img src="images/<?php echo $image;?>" style="width: 150px; height:150px;">
            </div>
             <div class="form-group">
               <input type="submit" name="modify" value="modify" class="btn" style="background-color:#D7221B;color:white;">
            </div>
        </form>
    </div>
</div>
</div>

<script>
CKEDITOR.replace('editor');
</script>



