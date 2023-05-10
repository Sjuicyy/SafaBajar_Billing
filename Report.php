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
        <div class="row">
            <?php
            require_once("Connection.php");
            $sql_stall = "SELECT DISTINCT Stall.Name FROM `Stall` ";
            $result_stall = mysqli_query($conn, $sql_stall);
            while ($data_stall = mysqli_fetch_array($result_stall)) {
                ?>
                <div class="col-md-5 col-md-offset-3 mx-2 body-main invoice">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4 logo">
                                <img class="img" src="./img/logo.png" height="60px">
                            </div>
                            <?php
                            $Stall_Name = $data_stall['Name'];
                            require_once('Connection.php');
                            $sql = "SELECT  Stall.Name ,Stall.Seller_id,Seller.Name as Seller_name, Seller.Address FROM `Stall` inner join `Seller` on `Stall`.`Seller_id` = `Seller`.`id` Where `Stall`.`Name`='$Stall_Name'";
                            $result = mysqli_query($conn, $sql);
                            $data = mysqli_fetch_array($result);
                            // echo $data['Type'];
                            ?>
                            <div class="col-md-8 text-right">
                                <p class='font-weight-bold'>Stall:
                                    <?php echo $data['Name'] ?>
                                </p>
                                <p class='font-weight-bold'>
                                    <?php echo $data['Seller_name'] ?>
                                </p>
                                <p class='font-weight-bold'>
                                    <?php echo $data['Address'] ?>
                                </p>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2>Bill</h2>
                                <!-- <h5>12345</h5> -->
                            </div>
                        </div>
                        <!-- <br /> -->
                        <div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <h5>Description</h5>
                                        </th>
                                        <th>
                                            <h5>Amount</h5>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    require_once('Connection.php');
                                    $sql_cat = "SELECT * FROM Category";
                                    $result_cat = mysqli_query($conn, $sql_cat);
                                    $Date = Date('d/M/Y');
                                    $sum = 0;
                                    while ($data_cat = mysqli_fetch_assoc($result_cat)) {
                                        $Category = $data_cat['Title'];
                                        ?>
                                        <tr>
                                            <td class="col-md-9">
                                                <?php echo $data_cat['Title']; ?>
                                            </td>
                                            <td class="col-md-3">
                                                <?php
                                                $sql1 = "SELECT * FROM `Stall` WHERE `Name`='$Stall_Name' AND `Category`='$Category'";
                                                $result1 = mysqli_query($conn, $sql1);
                                                $data1 = mysqli_fetch_assoc($result1);
                                                ?>
                                                <?php if ($data1['Rate'] == !null) {
                                                    echo $data1['Rate'];
                                                    $sum = $sum + $data1['Rate'];

                                                } else {
                                                    echo 0;
                                                }
                                                ?>
                                            </td>
                                            <?php
                                    }
                                    ?>
                                    </tr>

                                    <tr>
                                        <td class="text-right">
                                            <p>
                                                <strong style="font-size: x-large;">Total Amount: </strong>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                <strong style="font-size: x-large;"><i class="fas fa-rupee-sign"
                                                        area-hidden="true"></i>
                                                    <?php echo $sum ?>
                                                </strong>
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <div class="col-md-12 d-flex justify-content-between">
                                <p><b>Signature</b></p>
                                <p><b>Date :</b>
                                    <?php echo $Date ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
        <div class="d-flex justify-content-around ">
            <div></div>
            <button class="btn btn-lg font-weight-bold btn-warning btn-primary mb-5" id="printBtn">Print</button>
        </div>
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