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

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
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
                <li class="active">
                    <a href="Stall.php"> <i class="fa fa-store"></i> Stalls</a>
                </li>
                <li>
                    <a href="Category.php"><i class="fa fa-list"></i> Category</a>
                </li>
                <li>
                    <a href="Seller.php"><i class="fa fa-users"></i> Seller</a>
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
                                <a class="nav-link" href="Index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Index.php">Home</a>
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


            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-12 col-md-12 col-sm-12 ">
                        <div class="row mb-3 d-flex justify-content-between">
                            <h2 class="cath2">Sellers</h2>
                            <button class="btn btn-success" data-toggle="modal" data-target="#addmodal"><i
                                    class="fa fa-circle-plus fa-1x"></i> Add</button>


                        </div>

                        <table id="myTable" class="text-center">
                            <thead>
                                <tr>
                                    <th>S.N.</th>
                                    <th>Name</th>
                                    <th>Photo</th>
                                    <th>Contact</th>
                                    <th>Address</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require_once("Connection.php");
                                $sql = "SELECT * from Seller";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {

                                    while ($data = mysqli_fetch_array($result)) {
                                        ?>



                                        <tr>
                                            <td>
                                                <?php echo $data["Id"] ?>
                                            </td>
                                            <td>
                                                <?php echo $data["Name"] ?>
                                            </td>
                                            <td>
                                                <img src="./SellerPhotos/<?php echo $data["Photo"] ?>" height="100px">
                                            </td>
                                            <td>
                                                <?php echo $data["Contact"] ?>
                                            </td>
                                            <td>

                                                <?php echo $data["Address"] ?>
                                            </td>
                                            <td>
                                                <button type="submit" class="btn btn-warning" data-toggle="modal"
                                                    data-toggle="tooltip" data-target='#addmodal<?php echo $data["Id"] ?>'
                                                    title="Edit"><i class="fa-solid fa-pen-to-square fa-lg"></i></button>
                                                <button type="submit" class="btn btn-primary" data-toggle="tooltip"
                                                    title="Transfer"><i
                                                        class="fa-solid fa-arrow-right-arrow-left fa-lg"></i></button>
                                                <button type="submit" class="btn btn-info" data-toggle="tooltip"
                                                    title="Report"><i
                                                        class="fa-sharp fa-solid fa-file-lines fa-lg"></i></button>
                                                <a href="Delete_user.php?id=<?php echo $data["Id"] ?>">
                                                    <button class="btn btn-danger">Delete</button>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>








                                    <!-- Edit modal start -->
                                    <div class="modal fade" id="addmodal<?php echo $data["Id"] ?>" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered " role="document">
                                            <div class="modal-content">

                                                <form method="POST" action="Edit_seller.php?id=<?php echo $data["Id"]; ?>"
                                                    enctype='multipart/form-data'>
                                                    <div class="modal-header text-center">
                                                        <h4 class="modal-title w-100 font-weight-bold">Edit Seller</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body mx-3">
                                                        <div class="md-form">
                                                            <label for="Name">Name: </label>

                                                            <input required type="text" id="Name"
                                                                value=" <?php echo $data["Name"] ?>" class="form-control"
                                                                name="Name">
                                                        </div>
                                                        <div class="md-form">
                                                            <label for="Address">Address: </label>
                                                            <input required type="text" id="Address"
                                                                value=" <?php echo $data["Address"] ?>" class="form-control"
                                                                name="Address">
                                                        </div>
                                                        <div class="md-form">
                                                            <label for="Contact">Contact </label>
                                                            <input required type="text" id="Contact"
                                                                value="<?php echo $data["Contact"] ?>" class="form-control"
                                                                name="Contact">
                                                        </div>

                                                        <div class="md-form">
                                                            <label for="Photo">Photo: </label>
                                                            <input type="file" class="form-control-file" id="Photo" name="Photo"
                                                                accept=".jpg, .jpeg, .png">
                                                        </div>

                                                        <div class="md-form">
                                                            <label for="Citizenship">Citizenship: </label>
                                                            <input type="file" class="form-control-file" id="Citizenship"
                                                                name="Citizenship" alt="aaa" accept=".jpg, .jpeg, .png">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer d-flex justify-content-center">
                                                        <button type="button" class="btn btn-danger"
                                                            data-dismiss="modal">Close</button>
                                                        <button class="btn btn-success">Add</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Edit modal end -->






                                    <?php
                                    }

                                }

                                ?>
                        </table>
                    </div>
                </div>
            </div>






            <!-- Add Modal Start -->


            <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <form method="POST" action="Add_seller.php" class="modal-content" enctype='multipart/form-data'>
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Add Seller</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3">
                            <div class="md-form">
                                <label for="Name">Name: </label>
                                <input required type="text" id="Name" class="form-control" name="Name">
                            </div>
                            <div class="md-form">
                                <label for="Address">Address: </label>
                                <input required type="text" id="Address" class="form-control" name="Address">
                            </div>
                            <div class="md-form">
                                <label for="Contact">Contact </label>
                                <input required type="text" id="Contact" class="form-control" name="Contact">
                            </div>

                            <div class="md-form">
                                <label for="Photo">Photo: </label>
                                <input required11 type="file" class="form-control-file" id="Photo" name="Photo"
                                    accept=".jpg, .jpeg, .png">
                            </div>

                            <div class="md-form">
                                <label for="Citizenship">Citizenship: </label>
                                <input required11 type="file" class="form-control-file" id="Citizenship"
                                    name="Citizenship" accept=".jpg, .jpeg, .png">
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button class="btn btn-success">Add</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Add modal end -->










        </div>

        <div class="overlay"></div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
            integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
        <script>
            $(document).ready(function () {
                $('#myTable').DataTable({
                    scrollY: '390px',
                    scrollCollapse: true,
                    paging: false,
                    "order": [[1, "asc"]],
                    "columnDefs": [{
                        "targets": [0, 2],
                        "orderable": false
                    }],
                    "language": {
                        "emptyTable": "No Sellers available",
                        "info": "Showing _START_ to _END_ of _TOTAL_ Sellers",
                        "infoEmpty": "Showing 0 to 0 of 0 Sellers",
                        "infoFiltered": "(filtered from _MAX_ total Sellers)",
                        "lengthMenu": "Show _MENU_ Sellers",
                        "zeroRecords": "No matching Sellers found",
                    }
                });
            });
        </script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>

        <!-- jQuery Custom Scroller CDN -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

        <script src="js/bootstrap-multiselect.js"></script>
        <script src="script.js"></script>

</body>

</html>