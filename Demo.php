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

                <li class="nav-item">
                    <a href="#tab1" class="nav-link"  data-toggle="tab"></a><i class="fa fa-home"></i> Home</a>
                </li>
                <li>
                    <a href="" data-target="#tab1" data-toggle="tab"> <i class="fa fa-store"></i> Stalls</a>
                </li>
                <li>
                    <a href="Category.php"><i class="fa fa-list"></i> Category</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-users"></i> Seller</a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-file-invoice-dollar"></i> Billing</a>
                </li>
                <li>
                    <a href="#"> <i class="fa-sharp fa-solid fa-file-lines"></i> Report</a>
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
                            <li class="nav-item active">
                                <a href="#tab1" class="nav-link"  data-toggle="tab">asdas</a>
                            </li>
                            <li class="nav-item">
                                <a href="#tab2" class="nav-link"  data-toggle="tab">bvvbv</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
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
        </div>

        <div class="tab-content">
            <div id="tab1" class="tab-pane fade">
                <div class="container">
                    <div class="row mb-4">
                        <h2 class="cath2">Dashboard</h2>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <a href="">
                                <div class="main-box">
                                    <i class="fa fa-store fa-5x"></i>
                                    <h5>Stalls</h5>
                                    <p class="float-right">100</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="">
                                <div class="main-box">
                                    <i class="fa fa-list fa-5x"></i>
                                    <h5>Categories</h5>
                                    <p class="float-right">100</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="">
                                <div class="main-box">
                                    <i class="fa fa-users fa-5x"></i>
                                    <h5>Seller</h5>
                                    <p class="float-right">100</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="">
                                <div class="main-box">
                                    <i class="fa fa-file-invoice-dollar fa-5x"></i>
                                    <h5>Billing</h5>
                                    <p class="float-right">100</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="">
                                <div class="main-box">
                                    <i class="fa-sharp fa-solid fa-file-lines fa-5x"></i>
                                    <h5>Report</h5>
                                    <p class="float-right">100</p>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>


        <div class="tab-content">
            <div id="tab2" class="tab-pane fade">


                <div class="container">
                    <div class="row mb-4">
                        <h2 class="cath2">Dashboard</h2>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <a href="">
                                <div class="main-box">
                                    <i class="fa fa-store fa-5x"></i>
                                    <h5>Stalls</h5>
                                    <p class="float-right">100</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="">
                                <div class="main-box">
                                    <i class="fa fa-list fa-5x"></i>
                                    <h5>Categories</h5>
                                    <p class="float-right">100</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="">
                                <div class="main-box">
                                    <i class="fa fa-users fa-5x"></i>
                                    <h5>Seller</h5>
                                    <p class="float-right">100</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="">
                                <div class="main-box">
                                    <i class="fa fa-file-invoice-dollar fa-5x"></i>
                                    <h5>Billing</h5>
                                    <p class="float-right">100</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="">
                                <div class="main-box">
                                    <i class="fa-sharp fa-solid fa-file-lines fa-5x"></i>
                                    <h5>Report</h5>
                                    <p class="float-right">100</p>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>

            </div>


            <div id="tab2" class="tab-pane fade">
                <div class="container">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-lg-10 col-md-12 col-sm-12">
                            <div class="row mb-4 d-flex justify-content-between">
                                <h2 class="cath2">Stalls</h2>
                                <button class="btn btn-success" data-toggle="modal"
                                    data-target="#modalSubscriptionForm"><i class="fa fa-circle-plus fa-1x"></i>
                                    Add</button>
                            </div>
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th scope="col" colspan="2">No.</th>
                                        <th scope="col">Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <th scope="row" colspan="2">1</th>
                                        <td>A11</td>
                                        <td>
                                            <button type="submit" class="btn btn-success" data-toggle="tooltip"
                                                title="Edit"><i
                                                    class="fa-solid fa-pen-to-square fa-beat fa-lg"></i></button>
                                            <button type="submit" class="btn btn-warning" data-toggle="tooltip"
                                                title="Transfer"><i
                                                    class="fa-solid fa-arrow-right-arrow-left fa-beat fa-lg"></i></button>
                                            <button type="submit" class="btn btn-primary" data-toggle="tooltip"
                                                title="Report"><i
                                                    class="fa-sharp fa-solid fa-file-lines fa-beat fa-lg"></i></button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row" colspan="2">2</th>
                                        <td>A12</td>
                                        <td>
                                            <button type="submit" class="btn btn-success" data-toggle="tooltip"
                                                title="Edit"><i
                                                    class="fa-solid fa-pen-to-square fa-beat fa-lg"></i></button>
                                            <button type="submit" class="btn btn-warning" data-toggle="tooltip"
                                                title="Transfer"><i
                                                    class="fa-solid fa-arrow-right-arrow-left fa-beat fa-lg"></i></button>
                                            <button type="submit" class="btn btn-primary" data-toggle="tooltip"
                                                title="Report"><i
                                                    class="fa-sharp fa-solid fa-file-lines fa-beat fa-lg"></i></button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row" colspan="2">3</th>
                                        <td>A13</td>
                                        <td>
                                            <button type="submit" class="btn btn-success" data-toggle="tooltip"
                                                title="Edit"><i
                                                    class="fa-solid fa-pen-to-square fa-beat fa-lg"></i></button>
                                            <button type="submit" class="btn btn-warning" data-toggle="tooltip"
                                                title="Transfer"><i
                                                    class="fa-solid fa-arrow-right-arrow-left fa-beat fa-lg"></i></button>
                                            <button type="submit" class="btn btn-primary" data-toggle="tooltip"
                                                title="Report"><i
                                                    class="fa-sharp fa-solid fa-file-lines fa-beat fa-lg"></i></button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row" colspan="2">4</th>
                                        <td>A14</td>
                                        <td>
                                            <button type="submit" class="btn btn-success" data-toggle="tooltip"
                                                title="Edit"><i
                                                    class="fa-solid fa-pen-to-square fa-beat fa-lg"></i></button>
                                            <button type="submit" class="btn btn-warning" data-toggle="tooltip"
                                                title="Transfer"><i
                                                    class="fa-solid fa-arrow-right-arrow-left fa-beat fa-lg"></i></button>
                                            <button type="submit" class="btn btn-primary" data-toggle="tooltip"
                                                title="Report"><i
                                                    class="fa-sharp fa-solid fa-file-lines fa-beat fa-lg"></i></button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row" colspan="2">5</th>
                                        <td>A15</td>
                                        <td>
                                            <button type="submit" class="btn btn-success" data-toggle="tooltip"
                                                title="Edit"><i
                                                    class="fa-solid fa-pen-to-square fa-beat fa-lg"></i></button>
                                            <button type="submit" class="btn btn-warning" data-toggle="tooltip"
                                                title="Transfer"><i
                                                    class="fa-solid fa-arrow-right-arrow-left fa-beat fa-lg"></i></button>
                                            <button type="submit" class="btn btn-primary" data-toggle="tooltip"
                                                title="Report"><i
                                                    class="fa-sharp fa-solid fa-file-lines fa-beat fa-lg"></i></button>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- modal start -->
                <div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <h4 class="modal-title w-100 font-weight-bold">Add Stall</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body mx-3">
                                <div class="md-form">
                                    <label data-error="wrong" data-success="right" for="catName">Stall Name:
                                    </label>
                                    <input type="text" id="catName" class="form-control" name="CatagoryName">
                                </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                                <button class="btn btn-success">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal end -->


            </div>
        </div>
    </div>

    <div class="overlay"></div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script src="script.js"></script>
</body>

</html>