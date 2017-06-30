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

                        <!--Catagory Form-->

                        <div class="col-xs-6">


                        <!--Some php code for add catagory-->

                        <?php insert_catagories(); ?>


                  <!--Catagory form-->

                        <form action="" method="POST">
                         
                         <div class="from-group">
                           
                           <label for="cat_title">Add Catagories </label>
                           <input type="text" name="cat_title" class="form-control" >  

                         </div>

                         <br/>

                         <div class="form-group">

                             <input type="submit" name="submit" value="Add Catagory" class="btn btn-primary">

                         </div> 



                        </form>

                        <!--Catagory Edit form-->

                        <!--Define the path of new update category file, so that the code should be easily understandable-->

                        <?php 

                        if(isset($_GET['edit']))
                        {
                          $edit = $_GET['edit'];
                          include('includes/update_catagories.php');
                        }


                        ?>

                        </div>


                        
                        <!--Catagory Form End-->

                         <!--Read the value from the Database-->
                       <div class="col-xs-6">



                       <table class="table table-bordered table-striped table-hover">
                           <thead>
                               <tr>
                                   <th>ID</th>
                                   <th>Catagory Title</th>
                                   <th>Delete Data</th>
                                   <th>Edit Data</th>
                               </tr>
                           </thead>

                           <tbody>

            

            <!--Select/Find all data from the database-->                
            <?php read_catagories(); ?>

            <!--Delete php code-->
             <?php delete_catagories(); ?>

                               
                           </tbody>
                       </table>


                       </div>
                       <!--End the read the value from the Database-->


                    </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    


 <?php include('includes/admin_footer.php') ?>


<!--Take out the footer section from the template to the diffrent folder-->