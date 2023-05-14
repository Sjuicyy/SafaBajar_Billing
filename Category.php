<?php
session_start();
if(!($_SESSION['Email'])){
    header('Location:Login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Safabazar</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <!-- Font Awesone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Font Awesome JS -->
    <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
        crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
        crossorigin="anonymous"></script> -->

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>

            <div class="sidebar-header">
                <a href="" class="navbar-brand"><img src="img/logo.png" alt="Safabazar" width="" height="55"></a>
            </div>

            <ul class="list-unstyled components">

                <li>
                    <a href="Index.php"><i class="fa fa-home"></i> Home</a>
                </li>
                <li>
                    <a href="Stall.php"> <i class="fa fa-store"></i> Stalls</a>
                    <!-- <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul> -->
                </li>
                <li class="active">
                    <a href="Category.php"><i class="fa fa-list"></i> Category</a>
                </li>
                <li>
                    <a href="Seller.php"><i class="fa fa-users"></i> Seller</a>
                </li>
                <li>
                    <a href="Bill_entry.php"> <i class="fa fa-file-invoice-dollar"></i> Billing</a>
                </li>
                <li>
                    <a href="Report.php"> <i class="fa-sharp fa-solid fa-file-lines"></i> Report</a>
                </li>
            </ul>


        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn">
                        <i class="fas fa-arrow-right"></i>
                        <span></span>
                    </button>
                    <button class="btn navtoggle d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                              <li class="nav-item">
                                <a class="nav-link text-dark h4" href="Index.php">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                                    aria-expanded="false"><i class="fa-solid fa-user fa-lg"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="Admin.php">View Profile</a>
                                    
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="Logout.php">LogOut</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-10 col-md-12 col-sm-12">
                        <div class="row mb-4 d-flex justify-content-between">
                            <h2 class="cath2">Catagories</h2>
                            <button class="btn btn-success" data-toggle="modal" data-target="#modalSubscriptionForm"><i
                                    class="fa fa-circle-plus fa-1x"></i> Add</button>
                        </div>
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th scope="col" colspan="2">No.</th>
                                    <th scope="col">Catagories</th>
                                    <th scope="col">Rate</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>y
                                <?php
                                require_once 'Connection.php';
                                $sql = "SELECT * from Category";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($data = mysqli_fetch_array($result)) {
                                        ?>
                                        <tr>
                                            <th scope="row" colspan="2">
                                                <?php echo $data["Id"] ?>
                                            </th>
                                            <td>
                                                <?php echo $data["Title"] ?>
                                            </td>
                                            <td>
                                                <?php echo $data["Rate"] ?>
                                            </td>
                                            <td>
                                                <button data-toggle="modal" data-target="#Cat_edit<?php echo $data["Id"] ?>"
                                                    class="btn btn-success">Edit</button>
                                                <a href="Delete_category.php?id=<?php echo $data["Id"] ?>"> <input type="submit"
                                                        value="Delete" class="btn btn-danger"></a>
                                            </td>
                                        </tr>






                                        <!--Edit modal start -->
                                        <div class="modal fade" id="Cat_edit<?php echo $data["Id"] ?>" tabindex="-1"
                                            role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog  bg-light" role="document">
                                                <div class="modal-content">

                                                <form method="POST" action="Edit_category.php?id=<?php echo $data["Id"] ?>"
                                                    >
                                                    <div class="modal-header text-center">
                                                        <h4 class="modal-title w-100 font-weight-bold">Edit catagory</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body mx-3">
                                                        <div class="md-form">
                                                            <label data-error="wrong" data-success="right"
                                                                for="catName">Catagory Name: </label>
                                                            <input type="text" id="catName" class="form-control"
                                                                name="CatagoryName" value="<?php echo $data["Title"] ?>"
                                                                required>
                                                        </div>
                                                        <div class="md-form">
                                                            <label data-error="wrong" data-success="right" for="catName">Default
                                                                Price </label>
                                                            <input type="number" id="catName" class="form-control"
                                                                name="DefaultPrice" value="<?php echo $data["Rate"] ?>"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer d-flex justify-content-center">
                                                        <button type="submit" class="btn w-100 btn-success">Update</button>
                                                    </div>
                                                </form>
                                                </div>

                                            </div>
                                        </div>
                                        <!--Edit modal end -->
                                        <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
          
            
            <!--Add modal start -->
            <div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog"
                aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form method="POST" action="Add_category.php" class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Add catagory</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3">
                            <div class="md-form">
                                <label data-error="wrong" data-success="right" for="catName">Catagory Name: </label>
                                <input type="text" id="catName" class="form-control" name="CatagoryName" required>
                            </div>
                            <div class="md-form">
                                <label data-error="wrong" data-success="right" for="catName">Default Price </label>
                                <input type="text" id="catName" class="form-control" name="DefaultPrice" required>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button class="btn w-100 btn-success">Add</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--Add modal end -->
        </div>

        <div class="overlay"></div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
            integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>

        <!-- jQuery Custom Scroller CDN -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

        <script src="script.js"></script>
</body>

</html>