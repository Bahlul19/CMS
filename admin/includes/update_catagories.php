<form action="" method="POST">
                         
                         <div class="from-group">
                           
                           <label for="cat_title">Edit Catagories </label>


<!--PHP CODE FOR EDIT THE VALUE INTO FORM WHEN WE CLICK ON EDIT-->

            <?php

            if(isset($_GET['edit']))
            {

            $edit = $_GET['edit'];

            $query = "SELECT * FROM catagories WHERE cat_id = {$edit}";

            $edit_catagories_query = $connection->query($query);


            while($row = $edit_catagories_query->fetch_assoc())
            {
                    // echo '<li>$row["cat_title"]</li>';

                    $cat_id = $row['cat_id'];
                    $cat_title = $row['cat_title'];

     

            ?> 

            <input value="

            <?php 
            if(isset($cat_title)) 
              {echo $cat_title;} 
            ?> "

            type="text" name="cat_title" class="form-control" > 

            <?php }}  ?>


            <!--BELOW! Now this time edit the value and update it with php-->

            <?php 

            if(isset($_POST['update_catagory']))
            {
              $update_cat_title = $_POST['cat_title']; //same work as id which we work before in all the row php crud system

              $query = "UPDATE catagories SET cat_title = '{$update_cat_title}' WHERE cat_id ={$edit} ";
              
              $update_catagory_queries = $connection->query($query);
          }


             ?>




                    
                         </div>

                         <br/>

                         <div class="form-group">

                             <input type="submit" name="update_catagory" value="Update Catagory" class="btn btn-primary">

                         </div> 



                        </form>
