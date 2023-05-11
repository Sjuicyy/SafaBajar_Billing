
<?php
session_start();
if(!($_SESSION['Email'])){
    header('Location:Login.php');
}
?>

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
                                    <th scope="col">Payment</th>
                                    <th scope="col">Bill</th>
                                    <th scope="col">Remarks</th>
                                </tr>
                            </thead>
                            <?php
                            $sql = "SELECT  Seller.Name,Seller.Address,Billing.Date,Billing.Amount,Billing.Debit ,Billing.Remarks FROM `Billing` inner join `Seller` on `Billing`.`Seller_id` = `Seller`.`id` Where `Billing`.`Seller_id`='$Seller_id'";
                            $result = mysqli_query($conn, $sql);
                            $Amount = 0;
                            $Debit = 0;
                            while ($data = mysqli_fetch_array($result)) {
                                $Amount += $data['Amount'];
                                $Debit += $data['Debit'];
                                ?>

                                <tbody>
                                    <tr>
                                        <th scope="row" colspan="2">
                                            <?php
                                            echo substr($data["Date"], 0, 11)
                                                ?>
                                        </th>
                                        <?php if ($data["Amount"]) {
                                            ?>
                                            <td>
                                                <?php echo $data["Amount"] ?>
                                            </td>
                                            <?php
                                        } else {
                                            ?>
                                            <td>
                                                0
                                            </td>
                                            <?php
                                        }
                                        ?>
                                        <?php if ($data["Debit"]) {
                                            ?>
                                            <td>
                                                <?php echo $data["Debit"] ?>
                                            </td>
                                            <?php
                                        } else {
                                            ?>
                                            <td>
                                                0
                                            </td>
                                            <?php
                                        }
                                        ?>
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
                    <hr class='lh-0'>
                    <div class="d-flex">
                        <div class="font-weight-bold">Total Payment : </div>
                        <p> Rs.<?php echo $Debit; ?></p>
                    </div>
                    <div class="d-flex">
                        <div class="font-weight-bold">Total Bill Amount:</div>
                        <p>Rs.<?php echo $Amount; ?></p>
                    </div>
                    <div class="d-flex justify-content-end ">
                            <div class="font-weight-bold h5">Grand Total: </div>
                            <p class="font-weight-bold h5 mx-2">Rs.<?php echo $Debit-$Amount; ?></p>
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