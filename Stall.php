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
                    <a href="seller.php"><i class="fa fa-users"></i> Seller</a>
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
                    <div class="col-lg-8 col-md-12 col-sm-12 ">
                        <div class="row mb-3 d-flex justify-content-between">
                            <h2 class="cath2">Stalls</h2>
                            <button class="btn btn-success" data-toggle="modal" data-target="#addmodal"><i
                                    class="fa fa-circle-plus fa-1x"></i> Add</button>

                        </div>
                        <table id="myTable" class="text-center">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Owner</th>
                                    <th>Type</th>
                                    <th>Category</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require_once("Connection.php");
                                $sql = "SELECT DISTINCT  Stall.Type, Stall.Name ,Seller.Name as Seller_name FROM `Stall`  inner join `Seller` on `Stall`.`Seller_id` = `Seller`.`id`";
                                $result = mysqli_query($conn, $sql);

                                if ($result->num_rows > 0) {
                                    while ($data = mysqli_fetch_array($result)) {
                                        $Stall_Name = $data['Name'];
                                        $i++;
                                        ?>
                                        <tr>
                                            <th>
                                                <?php echo $i ?>
                                            </th>
                                            <td>
                                                <?php echo $data["Name"] ?>
                                            </td>
                                            <th class="d-flex mx-2">
                                                <?php echo $data["Seller_name"] ?>
                                            </th>
                                            <td>
                                                <?php echo $data["Type"] ?>
                                            </td>
                                            <td class="d-flex justify-content-end">
                                                <a href="Show_category.php?id=<?php echo $data["Name"] ?>">
                                                    <button type="submit" class="btn btn-sm btn-success" data-toggle="tooltip"
                                                        title="Edit"><i
                                                            class="fa-solid fa-pen-to-square  fa-lg"></i></button>
                                                    <button type="submit" class="btn btn-sm btn-warning" data-toggle="tooltip"
                                                        title="Transfer"><i
                                                            class="fa-solid fa-arrow-right-arrow-left  fa-lg"></i></button>
                                                    <button type="submit" class="btn btn-sm btn-primary" data-toggle="tooltip"
                                                        title="Report"><i
                                                            class="fa-sharp fa-solid fa-file-lines  fa-lg"></i></button>
                                                </a>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-primary" data-toggle="modal"
                                                    data-target="#showCategory<?php echo $data["Name"] ?>">View</button>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="showCategory<?php echo $data["Name"] ?>" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-header text-center">
                                                        <div>
                                                            <h4 class="modal-title w-100 d-flex font-weight-bold">Stall :
                                                                <?php echo $data['Name'] ?>
                                                            </h4>
                                                            <h6 class="d-flex justify-content-start">
                                                                <?php echo $data['Seller_name'] ?>
                                                            </h6>
                                                        </div>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="row  px-5 ">
                                                        <div class="col-6 my-1 bg-secondary ">
                                                            Category
                                                        </div>
                                                        <div class="col-6 my-1 bg-secondary ">
                                                            Rate
                                                        </div>
                                                        <?php
                                                        $sql_cat = "SELECT * FROM Category";
                                                        $result_cat = mysqli_query($conn, $sql_cat);
                                                        while ($data_cat = mysqli_fetch_assoc($result_cat)) {
                                                            $Category = $data_cat['Title'];
                                                            ?>
                                                            <div class="col-6 my-2">
                                                                <?php echo $data_cat['Title']; ?>
                                                            </div>
                                                            <div class="col-6 my-2">
                                                                <?php
                                                                $sql1 = "SELECT * FROM `Stall` WHERE `Name`='$Stall_Name' AND `Category`='$Category'";
                                                                $result1 = mysqli_query($conn, $sql1);
                                                                $data1 = mysqli_fetch_assoc($result1);
                                                                ?>
                                                                <?php if ($data1['Rate'] == !null) {
                                                                    echo " <div class='d-flex'><p class='h6 d-flex mx-1 text-center'> Rs. </p>" . "<p class='h6 text-center'>" . $data1['Rate'] . "</p> </div> ";
                                                                } else {
                                                                    echo " <div class='d-flex'><p class='h6 d-flex mx-1 text-center'> Rs. </p>" . "<p class='h6 text-center'>" . 0 . "</p> </div> ";

                                                                }
                                                                ?>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                    <div class="modal-footer d-flex justify-content-center">
                                                        <button class="btn w-50 btn-success">Edit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
















            <!-- modal start -->
            <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <form method="POST" action="Add_stall.php" class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Add Stall</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3">
                            <div class="md-form">
                                <label data-error="wrong" data-success="right" for="catName">Stall Name: </label>
                                <input type="text" id="catName" class="form-control" name="Stall_name">
                            </div>
                            <div class="col-md-12 col-lg-12 pl-0 mt-3 pr-0">
                                <div>
                                    <strong class="sl d-block">Select Catagories:</strong>
                                    <select name="Category[]" id="multiple-checkboxes" multiple>
                                        <option value="Rent">Rent</option>
                                        <option value="Water">Water</option>
                                        <option value="Electricity">Electricity</option>
                                        <option value="Waste">Waste</option>
                                        <option value="Security">Security</option>
                                    </select>
                                </div>
                            </div>

                            <input type="text" name="Rent" value=""> Rent <br>
                            <input type="text" name="Water" value="" /> Water <br>
                            <input type="text" name="Electrical" value="" /> electrical <br>
                            <input type="text" name="Waste" value="" /> waste <br>
                            <input type="text" name="Security" value="" /> security <br>
                            <div class="col-md-12 col-lg-12 pl-0 mt-3 pr-0">
                                <strong class="sl d-block">Select Seller:</strong>
                                <select id="multiple-checkboxes" class="w-100" name="Seller_id">
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



                            <div class="col-md-12 col-lg-12 pl-0 mt-3 pr-0">
                                <strong class="sl d-block">Select Seller:</strong>
                                <select id="multiple-checkboxes" class="w-100" name="Type">
                                    <option value="None">None</option>
                                    <option value="Fruits">Fruits</option>
                                    <option value="Vegetable">Vegetable</option>
                                    <option value="Dairy">Dairy</option>
                                    <option value="Meat">Meat</option>
                                </select>
                            </div>


                            <div class="modal-footer d-flex justify-content-center">
                                <button type="submit" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button class="btn btn-success">Add</button>
                            </div>
                    </form>
                </div>
            </div>

            <!-- modal end -->
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
                        "emptyTable": "No stalls available",
                        "info": "Showing _START_ to _END_ of _TOTAL_ Stalls",
                        "infoEmpty": "Showing 0 to 0 of 0 stalls",
                        "infoFiltered": "(filtered from _MAX_ total stalls)",
                        "lengthMenu": "Show _MENU_ Stalls",
                        "zeroRecords": "No matching stalls found",
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