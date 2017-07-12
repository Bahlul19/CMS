<?php 

	if(isset($_GET['edit']))
	{
		$edit = $_GET['edit'];
	}	
/*
		$query = "SELECT * FROM posts WHERE post_id = {$edit}";

		$select_posts_by_id = $connection->query($query);

		$result = $select_posts_by_id->fetch_assoc();

		if(isset($_POST['update_post']))
		{
			$post_author = $_POST['post_author'];
			$post_title = $_POST['post_title'];
			$post_catagory_id = $_POST['post_catagory_id'];
			$post_image = $_FILES['post_image']['name'];
			$post_image_temp = $_FILES['post_image']['tmp_name'];
			$post_tags = $_POST['post_tags'];
			$post_content = $_POST['post_content'];

		$query = "UPDATE posts SET post_author = '{$post_author}',post_title = '{$post_title}',post_catagory_id = '{$post_catagory_id}',post_image = '{$post_image}',post_tags = '{$post_tags}',post_content = '{$post_content}',post_date = now() WHERE post_id = {$edit} ";

		$update_query = $connection->query($query);

		}
		
	*/
	
	$query = "SELECT * FROM posts WHERE post_id = {$edit}";

	$select_posts_by_id = $connection->query($query);

	while($row = $select_posts_by_id->fetch_assoc())
	{
				  $post_id = $row['post_id'];
                  $post_author = $row['post_author'];
                  $post_title = $row['post_title'];
                  $post_catagory_id = $row['post_catagory_id'];
                  $post_status = $row['post_status'];
                  $post_image = $row['post_image'];
                  $post_tags = $row['post_tags'];
                  $post_content = $row['post_content'];
                  $post_date = $row['post_date'];
                    $post_comment_count = $row['post_comment_count'];
                  $post_date = $row['post_date'];

	}

	if(isset($_POST['update_post']))
	{
		$post_title = $_POST['post_title'];
		$post_catagory_id = $_POST['post_catagory_id'];
		$post_author = $_POST['post_author'];
		$post_status = $_POST['post_status'];

		$post_image = $_FILES['post_image']['name'];
		$post_image_temp = $_FILES['post_image']['tmp_name'];

		$post_tags = $_POST['post_tags'];
		$post_content = $_POST['post_content'];

		move_uploaded_file($post_image_temp,"../images/$post_image");

		if(empty($post_image))
		{
			$query = "SELECT * FROM posts WHERE post_id = {$edit}";
			$select_images = $connection->query($query);

			while($row = $select_images->fetch_assoc())
			{
				$post_images = $row['post_image'];
			}
		}




		$query ="UPDATE posts SET post_title = '{$post_title}', post_catagory_id = '{$post_catagory_id}', post_author = '{$post_author}', post_status = '{$post_status}', post_image = '{$post_image}', post_tags = '{$post_tags}', post_content = '{$post_content}', post_date = now() WHERE post_id = {$edit}";

		$update_post_query = $connection->query($query);
		
	}
	


?>


<form action="" method="POST" enctype="multipart/form-data">

<div class="form-group">

	<label for="post_title">Title</label>
	<input type="text" name="post_title" class="form-control" value="<?= $post_title ?>">

</div>

<div class="form-group">

	<label for="post_catagory_id">Post Catagory ID</label>
	
	<!-- Lets pull up the catagory id value from the database 
	<input type="text" name="post_catagory_id" class="form-control"  value="<?= $post_catagory_id?>"> -->

	<select name="post_catagory_id" id="">

		<?php

			$query = "SELECT * FROM catagories";

            $select_catagories_query = $connection->query($query);


           while($row = $select_catagories_query->fetch_assoc())
            {
                    $cat_id = $row['cat_id'];
                    $cat_title = $row['cat_title'];
                    echo "<option value=''>{$cat_title}</option>";
            }
           
		?>

	</select>
 
</div>

<div class="form-group">

	<label for="post_author">Author</label>
	<input type="text" name="post_author" class="form-control"  value="<?= $post_author ?>">

</div>

<div class="form-group">

	<label for="post_status">Post Status</label>
	<input type="text" name="post_status" class="form-control"  value="<?= $post_status ?>">

</div>

<div class="form-group">

	<label for="post_image">Post Images</label>
	<img width="100" src="../images/<?= $post_image ?>" alt="">
	<input type="file" name="post_image">

</div>

<div class="form-group">

	<label for="post_tags">Post Tags</label>
	<input type="text" name="post_tags" class="form-control"  value="<?= $post_tags ?>">

</div>

<div class="form-group">

	<label for="post_content">Post Content</label>
	<textarea name="post_content" id="" cols='30' rows='10' class="form-control"><?= $post_content ?></textarea>

</div>

<div class="form-group">

<input type="submit" class="btn btn-success" name="update_post" value="Update Post">

</div>
</form>
