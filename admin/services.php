<?php include 'includes/header.php'; 

include "includes/helper.php";
if(isset($_GET['delete_service']) && $_GET['delete_service'] != ''){
	$dlt = $_GET['delete_service'];
	if(delete('services','service_id',$dlt)){
redirect('services.php?source=');
	}else{
		die('FAILED');
	}
}

if(isset($_POST['modifyservice'])){
	$eid = $_POST['editid'];
	$title = $_POST['title'];
	// $category = $_POST['category'];
	// $author = $_POST['author'];
	$content = $_POST['content'];
	$img = $_POST['image'];
	$post_image= $_FILES['post_image']['name'];
	$image="";
	//user upload check
	if(isset($_FILES['post_image'])&& $post_image != ""){
$dir= "../admin/images/";
$filename= $_FILES['post_image']['name'];
$filesize= $_FILES['post_image']['size'];
$filetmpname= $_FILES['post_image']['tmp_name'];
$allowed = ['png','jpg','jpeg'];
$fileExt = explode('.', $filename);
$fileActExt = strtolower(end($fileExt));
//check img extension
if(!in_array($fileActExt,$allowed)){
	echo "<script>alert('file type not allowed)</script>";
}elseif($filesize> 10000000){
	echo "<script>alert('file to large')</script>";
}

else{
	$newImage = "img".uniqid().".".$fileActExt;
	$target = $dir.basename($newImage);
	if(move_uploaded_file($filetmpname,$target)){
		$image = $target;
	}
}


	}else
	{
		$image=$img;
	}

	$finalimg= explode("/", $image);
	$finalimgcorrn= "../images/".$finalimg[3];
	$query=mysqli_query($connection, "UPDATE services SET service_title='$title', service_content='$content',service_image='$finalimgcorrn' WHERE service_id='$eid'");
	if($query){
		header("Location: services.php");
	}
		// echo "<script>alert('$eid')</script>";
}

?>


<div id="wrapper">

	<!-- Navigation -->
	<?php include 'includes/navigation.php'; ?>


	<div id="page-wrapper">

		<div class="container-fluid">

			<!-- Page Heading -->
			<div class="row">

					<h1 class="page-header">
						Services
					</h1>
</div>
				</div>

				
<?php
if(isset($_GET['source'])){
	$source= $_GET['source'];
}
switch ($source){
	case 'add_new':
	include "includes/add_service.php";
	break;
	
	case 'edit':
		include "includes/edit_service.php";
		break;
default:
include "includes/view_service.php";
// header("Location:posts.php");
break;
}
?>

			</div>

			<!-- /.row -->

		</div>
		<!-- /.container-fluid -->

	</div>
	<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
