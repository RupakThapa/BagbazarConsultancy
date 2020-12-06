
<script src="../admin/ckeditor/ckeditor.js"></script>
<div class="container">
<h2>Add Study Destinatons</h2>
<div class="row">
    <div class="col-sm-12 col-lg-7">
        <form action="includes/functions.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" placeholder="Country Name" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Author</label>
                <input type="text" name="author" placeholder="post author" value="boec" class="form-control" disabled>
            </div>

            <div class="form-group">
                <label for="">Category</label>
               <select name="category" class="form-control">
                   <option value="Study Destinations" selected>Study Destinations</option>
               </select>
            </div>    
            
            <!-- <div class="form-group">
                <label for="">post category ID</label>
               <select name="category" class="form-control">
                   <option value=""></option>
               </select>
            </div> 
            
            <div class="form-group">
                <label for="">post category ID</label>
               <select name="category" class="form-control">
                   <option value=""></option>
               </select>
            </div>

            <div class="form-group">
                <label for="">post status</label>
                <select name="status" class="form-control">
                   <option value="draft">Draft</option>
                   <option value="published">Published</option>
               </select>
            </div> -->
            
            <div class="form-group">
                <label for="">Main content</label>
                <textarea name="content" placeholder="post content" rows="8" cols="80" class="form-control" id="editor">
</textarea>
            </div>

            <div class="form-group">
                <label for="">Banner image</label>
               <input type="file" name="post_image" class="form-control">
            </div>
             <div class="form-group">
               <input type="submit" name="publish" class="btn" style="background-color:#D7221B;color:white;">
            </div>
        </form>
    </div>
</div>
</div>

<script>
CKEDITOR.replace('editor');
</script>



