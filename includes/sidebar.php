<div class="col-md-4">

        <!-- Blog Search Well -->
        
                <div class="well">
                    <h4>Blog Search</h4>
                    <form action="search.php" method="post">
                    <div class="input-group">
                        <input name="search" type="text" class="form-control">
                        <span class="input-group-btn">

                            <button name="submit" class="btn btn-default" type="submit">

                                <span class="glyphicon glyphicon-search"></span>
                                
                        </button>
                        </span>
                    </div>

                    </form>
                    <!-- /.input-group -->
                </div>


                <!-- Blog Categories Well -->
                <div class="well">


                <!--add some catagory section in the sidebar from the database and same query as in the navigation section-->


                <?php


                $query = "SELECT * FROM catagories /*LIMIT 5*/ ";

                $select_catagories_sidebar_query = $connection->query($query);

                ?>

                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-12">

                            <ul class="list-unstyled">



                            <?php


            while($row = $select_catagories_sidebar_query->fetch_assoc())
            {
                    // echo '<li>$row["cat_title"]</li>';

                    $cat_title = $row['cat_title'];

                    echo "<li><a href='#'>{$cat_title}</a></li>";
            }

                            ?>


                            </ul>
                        </div>
                        
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <?php

                include('includes/widget.php');

                ?>

            </div>