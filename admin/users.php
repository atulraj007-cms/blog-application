<?php include "includes/header_admin.php"; ?>

<?php 

if(isset($_SESSION['user_role'])) {

    if($_SESSION['user_role'] == 'admin'){


    


    }
}

// if(!isAdmin($_SESSION['username'])){


//     header("Location: index_admin.php");
    

// }


?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/navigation_admin.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Welcome To Admin
                            <small><?php echo $_SESSION['username']; ?></small>
                        </h1>
    <?php


    if(isset($_GET['source'])){

       $source = $_GET['source']; 
    }else{

        $source = '';
    }

    switch($source){

            case 'add_users':
            include "includes/add_users.php";
            break;

            case 'edit_users':
                include "includes/edit_users.php";
                break;

        default:
         
         include "includes/view_all_users.php";
         break;





    }












    ?>

 

                      
                    


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   <?php include "includes/footer_admin.php"; ?>