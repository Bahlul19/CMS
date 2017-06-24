   <?php

            if(isset($_POST['submit']))
            {
                $search = $_POST['search'];

                $query = "SELECT * FROM posts WHERE post_tags LIKE 
                '%$search%' ";

                $search_query = $connection->query($query);


                if(!$search_query)
                {
                    die("Query Failed" . mysqli_error($connection));
              
              	}

                $count = mysqli_num_rows($search_query);


                if($count == 0)
                {
                    echo "<h1>No Result</h1>";
                }

               	else
               	{
               	 	echo "Someth Result";
               	}
            }
?>



              