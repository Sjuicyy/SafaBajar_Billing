<!-- Category view modal  Start-->
<div class="modal fade" id="showCategory<?php echo $data["Name"] ?>" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="row px-5 ">
                <div class="col-6 my-1 bg-secondary ">
                    Category
                </div>
                <div class="col-6 my-1 bg-secondary ">
                    Rate
                </div>
                <?php
                require_once('Connection.php');
                $sql_cat = "SELECT * FROM Category";
                $result_cat = mysqli_query($conn, $sql_cat);
                while ($data_cat = mysqli_fetch_assoc($result_cat)) {
                    $Category = $data_cat['Title'];
                    ?>
                    <div class="col-6 border border-top-0 border-right-0 border-left-0 border-secondary my-2">
                        <?php echo $data_cat['Title']; ?>
                    </div>
                    <div class="col-6 border border-top-0 border-right-0 border-left-0 border-secondary my-2">
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
                <button class="btn w-50 btn-success" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Category view modal  end -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <style>
        .body-main {
            background: #ffffff;
            border-bottom: 15px solid #6dbe45 !important;
            border-top: 15px solid #6dbe45 !important;
            margin-top: 30px;
            margin-bottom: 30px;
            padding: 20px 30px !important;
            position: relative;
            border: 1px solid rgba(0, 0, 0, 0.5);
            box-shadow: 0 1px 21px #808080;
            font-size: 15px;
        }

        .main thead {
            background: #1E1F23;
            color: #fff;
        }

        h1 {
            text-align: center;
        }

        @media print {

            html,
            body {
                width: 210mm;
                height: 297mm;
                margin: 0;
                padding: 0;
            }

            .invoice {
                width: 48%;
                height: 48%;
                display: inline-block;
                margin: 1%;
            }

            #printBtn {
                display: none;
            }
        }
    </style>
</head>

<body>
        <div class="container">
            <div class="row ">
                <div class="col-md-6 col-md-offset-3 body-main invoice">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4 logo">
                                <img class="img" src="./img/logo.png" height="60px">
                            </div>
                            <?php
                            $Seller_id = $_GET['id'];
                            require_once('Connection.php');
                            $sql = "SELECT  Seller.Name,Seller.Address,Billing.Date,Billing.Amount ,Billing.Remarks FROM `Billing` inner join `Seller` on `Billing`.`Seller_id` = `Seller`.`id` Where `Billing`.`Seller_id`='$Seller_id'";
                            $result = mysqli_query($conn, $sql);
                            $data1 = mysqli_fetch_assoc($result);
                            ?>
                            <div class="col-md-8 text-right">
                                <p class='font-weight-bold h5'>Name:
                                    <?php echo $data1['Name'] ?>
                                </p>
                                <p class='font-weight-bold'>
                                    <?php echo $data1['Address'] ?>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th scope="col" colspan="2">Date</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Remarks</th>
                                    </tr>
                                </thead>
                                <?php
                                $sql = "SELECT  Seller.Name,Seller.Address,Billing.Date,Billing.Amount ,Billing.Remarks FROM `Billing` inner join `Seller` on `Billing`.`Seller_id` = `Seller`.`id` Where `Billing`.`Seller_id`='$Seller_id'";
                                $result = mysqli_query($conn, $sql);
                                while ($data = mysqli_fetch_array($result)) {
                                    ?>
                                    <tbody>
                                        <tr>
                                            <th scope="row" colspan="2">
                                                <?php
                                                echo substr($data["Date"], 0, 11)
                                                    ?>
                                            </th>
                                            <td>
                                                <?php echo $data["Amount"] ?>
                                            </td>
                                            <td>
                                                <?php echo $data["Remarks"] ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="text-center">
                <button class="btn btn-lg btn-primary" id="printBtn">Print</button>
            </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            $('#printBtn').on('click', function () {
                window.print();
            });
        });
    </script>
</body>

</html>