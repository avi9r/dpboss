<?php
ob_start();
require_once('../../connect.php');
session_start();

$row['admin_id'] = $_SESSION['admin_id'];

if (isset($_SESSION['admin_id'])) {

    $_SERVER["PHP_SELF"];
} else {


    header("Location: ../login.php");
}  ?>




<?php include 'header.php'; ?>

<?php include 'sidebar.php'; ?>



<!-- Content Section -->

<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">All Special Offers</h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Special Offers</a></li>
                                <!-- <li class="breadcrumb-item active" aria-current="page">Data Tables</li> -->
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->

        <?php
        if (isset($_SESSION["flash"])) {
            echo '<div class="alert alert-success d-flex justify-content-center">';
            vprintf("<p class='flash %s'>%s</p>", $_SESSION["flash"]);
            echo '</div>';
            unset($_SESSION["flash"]);
        }
        ?>

        <script>
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function() {
                    $(this).remove();
                });
            }, 2000);
        </script>


        <!-- basic form -->
        <!-- ============================================================== -->
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mx-auto">
            <div class="card">
                <h5 class="card-header">Basic Form</h5>
                <div class="card-body">
                    <form action="edit_delete.php" method="post">

                        <div class="form-group">
                            <label for="inputUserName">Enter Special Offer</label>
                            <textarea name="details" class="form-control" rows="4" cols="50">
</textarea></div>



                        <div class="row">
                            <div class="col-sm-6 pl-0">
                                <p class="text-right">
                                    <button type="submit" name="addspecialoffer" class="btn btn-space btn-success">Submit</button>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end basic form -->

    </div>
    <!-- ============================================================== -->


</div>

<!-- /Content Section -->





<!-- footer -->
<!-- ============================================================== -->
<?php include 'footer.php'; ?>