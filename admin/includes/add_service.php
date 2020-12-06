
<script src="../admin/ckeditor/ckeditor.js"></script>
<div class="container">
<h2>Add Service</h2>
<div class="row">
    <div class="col-sm-12 col-lg-7">
        <form action="includes/functions.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Service title</label>
                <input type="text" name="title" placeholder="Service Name" class="form-control">
            </div>

            <!-- <div class="form-group">
                <label for="">post author</label>
                <input type="text" name="author" placeholder="post author" value="boec" class="form-control" disabled>
            </div> -->

            <!-- <div class="form-group">
                <label for="">post category</label>
               <select name="category" class="form-control">
                   <option value=""></option>
               </select>
            </div>     -->
            
            <!-- <div class="form-group">
                <label for="">post category ID</label>
               <select name="category" class="form-control">
                   <option value=""></option>
               </select>
            </div>  -->
            
            <!-- <div class="form-group">
                <label for="">post category ID</label>
               <select name="category" class="form-control">
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
                <label for="">Service content</label>
                <textarea name="content" placeholder="Service content" rows="8" cols="80" class="form-control" id="editor">
</textarea>
            </div>

            <div class="form-group">
                <label for="">Service thumbnail (square recommended)</label>
               <input type="file" name="post_image" class="form-control">
            </div>
             <div class="form-group">
               <input type="submit" name="publishservice" class="btn" style="background-color:#D7221B;color:white;">
            </div>
        </form>
    </div>
</div>
</div>

<script>
CKEDITOR.replace('editor');
</script>



