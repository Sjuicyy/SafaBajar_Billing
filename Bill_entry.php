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
                <li>
                    <a href="Category.php"><i class="fa fa-list"></i> Category</a>
                </li>
                <li>
                    <a href="Seller.php"><i class="fa fa-users"></i> Seller</a>
                </li>
                <li class="active">
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
                                    <a class="dropdown-item" href="#">Menu</a>
                                    <a class="dropdown-item" href="#">Add Catagories</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">LogOut</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>





            <!--Add modal start -->
            <div class="modal1 fade1" id="modalSubscriptionForm" tabindex="-1" role="dialog"
                aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form method="POST" action="Save_payment.php" class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Bill
                                Entry
                            </h4>

                        </div>
                        <div class="modal-body mx-3">
                            <div class="col-md-12 col-lg-12 pl-0 mt-3 pr-0">
                                <strong class="sl d-block">Select Seller:</strong>
                                <select id="multiple-checkboxes" class="w-100 form-control" name="Seller_id">
                                    <?php
                                    require_once("Connection.php");
                                    $sql = "select * from Seller";
                                    $result = mysqli_query($conn, $sql);
                                    if ($result->num_rows > 0) {
                                        while ($data = mysqli_fetch_array($result)) {
                                            ?>
                                            <option value="<?php echo $data["Id"] ?>">
                                                <?php echo $data["Name"] . " (" . $data["Contact"] . ")" ?>
                                            </option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="md-form">
                                <label data-error="wrong" data-success="right" for="catName">Amount </label>
                                <input type="number" id="catName" class="form-control" name="Amount" required>
                            </div>
                            <div class="md-form">
                                <label data-error="wrong" data-success="right" for="catName">Remarks </label>
                                <input type="text" id="catName" class="form-control" name="Remarks" required>
                            </div>
                        </div>
                        <div class="modal-footer mb-3 mt-3 d-flex justify-content-center">
                            <button class="btn w-75 btn-success">Save</button>
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