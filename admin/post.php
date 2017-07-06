<?php include('includes/admin_header.php') ?>

<!-- Header -->

<!--Take out the header section from the template to the diffrent folder-->

    <div id="wrapper">


<!-- Navigation -->

<?php include('includes/admin_navigation.php') ?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">

                    <div class="col-lg-12">

                    <h1 class="page-header">
                            Welcome to admin
                            <small>Author</small>
                    </h1>


                    <?php

                    if(isset($_GET['source']))
                    {
                      $source = $_GET['source'];
                    }

                    else 
                    {
                      $source = '';
                    }
                    switch($source)
                    {
                      /*case '34';*/
                      case 'add_post';
                      include('includes/add_post.php');
                      break;

                      case '100';
                      echo "Nice 100";
                      break;

                      case '200';
                      echo "Nice 200";
                      break; 

                      default:
                      include('./includes/view_all_posts.php');
                      break;
                    }

                    ?>


                    <?php 

                    if(isset($_GET['edit']))
                    {
                      $edit = $_GET['edit'];
                      include('includes/edit_post.php');
                    }

                    ?>
                 

                    </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    


 <?php include('includes/admin_footer.php') ?>


<!--Take out the footer section from the template to the diffrent folder-->