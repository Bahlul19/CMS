<!--DO some php code in below-->

<?php

	if(isset($_POST['create_post']))
	{
		$post_title = $_POST['post_title'];
		$post_catagory_id = $_POST['post_catagory_id'];
		$post_author = $_POST['post_author'];
		$post_status = $_POST['post_status'];

		$post_image = $_FILES['post_image']['name'];
		$post_image_temp = $_FILES['post_image']['tmp_name'];

		$post_tags = $_POST['post_tags'];
		$post_content = $_POST['post_content'];
		$post_date = date('d-m-y');
		$post_comment_count = 4;


		move_uploaded_file($post_image_temp,"../images/$post_image");

		$query = "INSERT INTO posts(post_title,post_catagory_id,post_author,post_status,post_image,post_tags,post_content,post_date,	post_comment_count) VALUES('{$post_title}','{$post_catagory_id}','{$post_author }','{$post_status}','{$post_image}','{$post_tags}','{$post_content}',now(),'{$post_comment_count}') ";

		$insert_post_query = $connection->query($query);

	}


?>





<form action="" method="POST" enctype="multipart/form-data">

<div class="form-group">

	<label for="post_title">Title</label>
	<input type="text" name="post_title" class="form-control">

</div>

<div class="form-group">

	<label for="post_catagory_id">Post Catagory ID</label>
	<input type="text" name="post_catagory_id" class="form-control">

</div>

<div class="form-group">

	<label for="post_author">Author</label>
	<input type="text" name="post_author" class="form-control">

</div>

<div class="form-group">

	<label for="post_status">Post Status</label>
	<input type="text" name="post_status" class="form-control">

</div>

<div class="form-group">

	<label for="post_image">Post Images</label>
	<input type="file" name="post_image">

</div>

<div class="form-group">

	<label for="post_tags">Post Tags</label>
	<input type="text" name="post_tags" class="form-control">

</div>

<div class="form-group">

	<label for="post_content">Post Content</label>
	<textarea name="post_content" id="" cols='30' rows='10' class="form-control"></textarea>

</div>

<div class="form-group">

<input type="submit" class="btn btn-primary" name="create_post" value="Publish Post">

</div>



</form>