<?php 

session_start();

include "conn.php";

if (!isset($_SESSION['admin'])) {

    ?>

    <script type="text/javascript">
        alert('You are not authorized to access this page! Please login as an admin to proceed.');
        location.replace("admin.php");
    </script>

    <?php
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Products</title>

    <!-- Custom fonts for this template -->
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

    <!-- Custom styles for this template-->
    <style type="text/css">
        <?php 

        include "admin/css/sb-admin-2.css";
        ?>
    </style>

    <!-- Custom styles for this page -->
    <link href="admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion " style="position: sticky !important;" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin/index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SkyFood </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="admin/index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <li class="nav-item">
                <a class="nav-link" href="admin/users.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Users</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="admin/admin.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Admins</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link " href="products.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Products</span></a>
            </li>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php

                            if(empty($_SESSION['username']))
                            {
                                if(empty($_SESSION['admin']))
                                {
                                    echo "Profile";
                                }
                            }else
                            {
                                echo $_SESSION['username'];
                            }



                            ?>

                            <?php

                            if(empty($_SESSION['admin']))
                            {
                                if(empty($_SESSION['username']))
                                {
                                    echo "";
                                }
                            }else
                            {
                                echo $_SESSION['admin'];
                            }



                            ?></span>
                                <img class="img-profile rounded-circle"
                                    src="admin/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <?php

                            if(empty($_SESSION['username']))
                            {

                                if (empty($_SESSION['admin'])) {
                            // code...
                                    echo '<a class="dropdown-item"  href="../admin.php">Login</a>';

                                }

                            }else
                            {
                                echo '<a class="dropdown-item"  href="orders.php">My orders</a>';
                                echo '<a class="dropdown-item"  href="admin.php">Admin Login</a>';
                                echo '<a class="dropdown-item"  href="logout.php">Logout</a>';
                            }


                            ?>

                            <?php

                            if(empty($_SESSION['admin']))
                            {

                                if (empty($_SESSION['username'])) {
                            // code...
                                    echo '';

                                }

                            }else
                            {
                                echo '<a class="dropdown-item"  href="admin/index.php">Dashboard</a>';
                                echo '<a class="dropdown-item"  href="index.php">Back to website</a>';
                                echo '<a class="dropdown-item"  href="logout.php">Logout</a>';
                            }


                            ?>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Add items</h1>
                    <p class="mb-4">You can add items into menu here</p>

                    <div class="card shadow">
                        <div class="card-header">
                            <h6 class="m-0 font-weight-bold text-primary">Add items</h6>
                        </div>
                        <div class="card-body">
                            <form action="add.php" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                                    <input type="text" name="name"  class="form-control" id="exampleFormControlInput1" placeholder="Item name" required>
                                </div>

                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="text" name="price"  class="form-control" id="price" placeholder="Price" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Category</label>

                                    <select name="category" required  class="form-control" id="exampleFormControlInput1" placeholder="Category">
                                        <option>Pizza</option>
                                        <option>Burger</option>
                                        <option>Desert</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="image" class="form-label">Item image</label>

                                    <input type="file" required name="file" class="form-control" id="image">
                                </div>


                                <input type="submit" value="Submit" name="submit" class="btn btn-primary"></input>
                            </form>
                        </div>
                    </div>

                    <!-- DataTales Example -->
                    <h1 class="h3 mt-5 text-gray-800">Total items</h1>
                    <p class="mb-4">Total available items are listed here</p>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">List of all items</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        $showdata = "SELECT * FROM `products`";

                                        $query = mysqli_query($conn, $showdata);

                                        $id = 0;

                                        while ($result = mysqli_fetch_assoc($query)) {

                                            $id++;

                                            ?>

                                            <tr>
                                                <td class="align-middle text-center"><?php echo $id; ?></td>
                                                <td class="align-middle"><?php echo $result['name']; ?></td>
                                                <td class="align-middle"><?php echo $result['category']; ?></td>
                                                <td class="align-middle"><?php echo $result['price']; ?></td>
                                                <td class="align-middle text-center"><img src="<?php echo $result['image']; ?>" class="img-fluid" style="width: 5rem; height: 5rem;"></td>
                                                <td class="align-middle text-center"><a href="admin/updatepro.php?nm=<?php echo $result['name'] ?> & id=<?php echo $result['id'] ?> &  cat=<?php echo $result['category'] ?> & pr=<?php echo $result['price'] ?>" class="btn btn-primary">Update</a></td>
                                                <td class="align-middle text-center"><a href="admin/deletepro.php?id=<?php echo $result['id']; ?>" class="btn btn-primary">Delete</a></td>
                                            </tr>

                                            <?php
                                        }

                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="admin/vendor/jquery/jquery.min.js"></script>
<script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="admin/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="admin/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="admin/js/demo/datatables-demo.js"></script>

</body>

</html>