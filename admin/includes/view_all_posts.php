     <table class="table table-bordered">
                    
                    <thead>
                    <tr>
                    <th>ID</th>
                    <th>Author</th>
                    <th>Title</th>
                    <th>Catagory</th>
                    <th>Status</th>
                    <th>Image</th>
                    <th>Tag</th>
                    <th>Comments</th>
                    <th>Date</th>
                     <th>Content</th>
                     <th>Remove</th>
                    </tr>
                    </thead>

                    <tbody>



                <!--Let's pull out data from the database-->

                <?php

                $query = "SELECT * FROM posts";

                $select_posts_query = $connection->query($query);


                while($row = $select_posts_query->fetch_assoc())
                {
                  $post_id = $row['post_id'];
                  $post_author = $row['post_author'];
                  $post_title = $row['post_title'];
                  $post_catagory_id = $row['post_catagory_id'];
                  $post_status = $row['post_status'];
                  $post_image = $row['post_image'];
                  $post_tags = $row['post_tags'];
                  $post_comment_count = $row['post_comment_count'];
                  $post_date = $row['post_date'];
                  $post_content = $row['post_content'];

                  echo "<tr>";

                  echo "<td>{$post_id}</td>";
                  echo "<td>{$post_author}</td>";
                  echo "<td>{$post_title}</td>";
                  echo "<td>{$post_catagory_id}</td>";
                  echo "<td>{$post_status}</td>";
                  echo "<td><img width='100' src='../images/{$post_image}' alt='image'></td>";
                  echo "<td>{$post_tags}</td>";
                  echo "<td>{$post_comment_count}</td>";
                  echo "<td>{$post_date}</td>";
                  echo "<td>{$post_content}</td>";

                  echo "<td><a href='post.php?delete={$post_id}'>Delete</a></td>";

                  echo "<td><a href='post.php?edit={$post_id}'>Edit</a></td>";

                  echo "</tr>";



                }


                ?>


                    
                    </tbody>

                    </table>

<?php 

if(isset($_GET['delete']))
{
  $delete = $_GET['delete'];

  $query = "DELETE FROM posts WHERE post_id = {$delete}";

  $delete_posts_query = $connection->query($query);
  header('Location: post.php');
}

?>