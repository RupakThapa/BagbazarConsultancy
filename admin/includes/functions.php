<?php include "db.php";?>

<?php

function add_category(){
global $connection;

if(isset($_POST['cat_add'])){
if(empty($_POST['cat_title'])){
    header("Location: ../categories.php?field_cannot_be_empty");
}else{
    $cat_title = $_POST['cat_title'];
$query = "INSERT INTO categories(cat_title)VALUES('$cat_title')";
$result = mysqli_query($connection,$query);

if(!result){
    die("could not send data". mysqli_error($connection));
}
else{
    header("location: ../categories.php?category_added");
}
}

}
}

add_category();

function show_category(){
    global $connection;
    $query = "SELECT * FROM categories";
    $result= mysqli_query($connection, $query);

    while($row= mysqli_fetch_assoc($result)){
       
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];
        
        echo "<tr>";
        echo "<td>{$cat_id}</td>";
        echo "<td>{$cat_title}</td>";
        echo "<td><a href='categories.php?delete_cat={$cat_id}'>delete</a></td>";
        echo "</tr>";
    }
}
// show_category();

function delete_category(){
global $connection;
if(isset($_GET['delete_cat'])){
    $cat_id= $_GET['delete_cat'];

$query = "DELETE FROM categories WHERE cat_id= $cat_id";
$result=mysqli_query($connection,$query);

if(!result){
    die("could not delete". mysqli_error($connection));
}
else{
    header("location: categories.php?category_deleted");
}
}
}

delete_category();

function add_post(){
global $connection;
if(isset($_POST['publish'])){
    $post_title= $_POST['title'];
    // $post_author= $_POST['author'];
    $post_category=$_POST['category'];
    $post_category_id=$_POST['category_id'];
    $post_content= mysqli_real_escape_string($connection,$_POST['content']);
    // $post_status= $_POST['status'];



    if(isset($_FILES['post_image'])){
        $dir = "../images/";
        $target_file= $dir.basename($_FILES['post_image']['name']);
        if(move_uploaded_file($_FILES['post_image']['tmp_name'],$target_file)){
            
        }
        $query= "INSERT INTO posts(post_title, post_category, post_category_id, post_content, post_image) VALUES ('$post_title','$post_category','$post_category_id','$post_content','$target_file')";

        $result=mysqli_query($connection,$query);   
    if(!$result){
        die("could not send".mysqli_error($connection));
        header("Location:../posts.php?source=add_new");
    }
else{
    header("Location: ../posts.php?post_added");
}

    }
}

}
add_post();




//read post
function show_posts(){
    global $connection;
    $query= "SELECT * FROM posts";
    $result= mysqli_query($connection,$query);
    while($row= mysqli_fetch_assoc($result)){

        $post_id= $row['post_id'];
        $post_title= $row['post_title'];
        // $post_author= $row['post_author'];
        $post_category=$row['post_category'];
        $post_category_id=$row['post_category_id'];
        $post_content= substr($row['post_content'],0,50);
        // $post_status= $row['post_status'];
        $post_image= $row['post_image'];

        echo "<tr>";
        echo "<td>{$post_id}</td>";
        echo "<td>{$post_title}</td>";
        // echo "<td>{$post_author}</td>";
        echo "<td>{$post_category}</td>";
        echo "<td><img src='images/{$post_image}' width='50px'></td>";
        echo "<td>{$post_content}</td>";
        // echo "<td>{$post_status}</td>";
        // echo "<td><a href='posts.php?approve=$post_id'>Approve</a></td>";
        // echo "<td><a href='posts.php?unapprove=$post_id'>UnApprove</a></td>";
        echo "<td><a href='posts.php?source=edit&edit_post=$post_id'>".'<i class="fa fa-fw fa-edit"></i>'."Edit</a></td>";
        echo "<td><a href='posts.php?delete_post=$post_id'>".'<i class="fa fa-fw fa-trash"></i>'."Delete</a></td>";
        

    }
}

function add_service(){
    global $connection;
    if(isset($_POST['publishservice'])){
        $service_title= $_POST['title'];
        // $post_author= $_POST['author'];
        // $post_category=$_POST['category'];
        // $post_category_id=$_POST['category_id'];
        $service_content= mysqli_real_escape_string($connection,$_POST['content']);
        // $post_status= $_POST['status'];
    
    
    
        if(isset($_FILES['post_image'])){
            $dir = "../images/";
            $target_file= $dir.basename($_FILES['post_image']['name']);
            if(move_uploaded_file($_FILES['post_image']['tmp_name'],$target_file)){
                
            }
            $query= "INSERT INTO services(service_title, service_content, service_image) VALUES ('$service_title','$service_content','$target_file')";
    
            $result=mysqli_query($connection,$query);   
        if(!$result){
            die("could not send".mysqli_error($connection));
            header("Location:../services.php?source=add_new");
        }
    else{
        header("Location: ../services.php?service_added");
    }
    
        }
    }
    
    }
    add_service();

function show_services(){
    global $connection;
    $query= "SELECT * FROM services";
    $result= mysqli_query($connection,$query);
    while($row= mysqli_fetch_assoc($result)){

        $service_id= $row['service_id'];
        $service_title= $row['service_title'];
        // $post_author= $row['post_author'];
        // $post_category=$row['post_category'];
        // $post_category_id=$row['post_category_id'];
        $service_content= substr($row['service_content'],0,50);
        // $post_status= $row['post_status'];
        $service_image= $row['service_image'];

        echo "<tr>";
        echo "<td>{$service_id}</td>";
        echo "<td>{$service_title}</td>";
        // echo "<td>{$post_author}</td>";
        // echo "<td>{$service_category}</td>";
        echo "<td><img src='images/{$service_image}' width='50px'></td>";
        echo "<td>{$service_content}</td>";
        // echo "<td>{$post_status}</td>";
        // echo "<td><a href='posts.php?approve=$post_id'>Approve</a></td>";
        // echo "<td><a href='posts.php?unapprove=$post_id'>UnApprove</a></td>";
        echo "<td><a href='services.php?source=edit&edit_service=$service_id'>".'<i class="fa fa-fw fa-edit"></i>'."Edit</a></td>";
        echo "<td><a href='services.php?delete_service=$service_id'>".'<i class="fa fa-fw fa-trash"></i>'."Delete</a></td>";
        

    }
}
?>
