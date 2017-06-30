<?php

function insert_catagories()
{
		global $connection; 

		//Make sure if we use reusable function then database connection should be global

		if(isset($_POST['submit']))
		{
	// echo "Hello";

 $cat_title = $_POST['cat_title'];

	if($cat_title == "" || empty($cat_title))
	{
	echo "This field should not be empty";
    }                 
	else 
 	{
	$query = "INSERT INTO catagories(cat_title) VALUES('$cat_title') ";
 	$create_catagory_query = $connection->query($query);

 	if(!$create_catagory_query )
 	{
 	die('Query Failed'. mysqli_error($connection));
 	}
	}
	}
}


function read_catagories()
{

	global $connection; 

	$query = "SELECT * FROM catagories /*LIMIT 5*/ ";

            $select_catagories_query = $connection->query($query);


            while($row = $select_catagories_query->fetch_assoc())
            {
                    // echo '<li>$row["cat_title"]</li>';

                    $cat_id = $row['cat_id'];
                    $cat_title = $row['cat_title'];

                    echo "<tr>";

                    echo "<td>{$cat_id}</td>";
                    echo "<td>{$cat_title}</td>";

                    echo "<td><a href='catagories.php?delete={$cat_id}'>Delete</a></td>";

                    echo "<td><a href='catagories.php?edit={$cat_id}'>Edit</a></td>";


                    echo "</tr>";
            }

}


function delete_catagories()

{
	global $connection; 
	
	if(isset($_GET['delete']))
            {
              $delete = $_GET['delete']; //same work as id which we work before in all the row php crud system

              $query = "DELETE FROM catagories WHERE cat_id ={$delete}";
              
              $delete_catagory_queries = $connection->query($query);

             header('Location: catagories.php');

            }

}



?>