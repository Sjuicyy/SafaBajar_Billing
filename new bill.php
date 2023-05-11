
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
            #printBtn{
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="text-center">
        <button class="btn btn-lg btn-primary" id="printBtn">Print</button>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 body-main invoice">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4 logo">
                            <img class="img" src="../img/logo.png" height="60px">
                        </div>
                        <div class="col-md-8 text-right">
                            <p>Stall: A12</p>
                            <p>Bijen Shrestha</p>
                            <p>Sallaghari-5, Bhaktapur</p>
                            <p>example@gmail.com</p>
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
                                <tr>
                                    <td class="col-md-9">Rent</td>
                                    <td class="col-md-3"><i class="fas fa-rupee-sign" area-hidden="true"></i> 50,000
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-9">Electricity</td>
                                    <td class="col-md-3"><i class="fas fa-rupee-sign" area-hidden="true"></i> 5,200
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-9">Water</td>
                                    <td class="col-md-3"><i class="fas fa-rupee-sign" area-hidden="true"></i> 25,000
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-9">Security</td>
                                    <td class="col-md-3"><i class="fas fa-rupee-sign" area-hidden="true"></i> 2,200
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-9">Waste</td>
                                    <td class="col-md-3"><i class="fas fa-rupee-sign" area-hidden="true"></i> 2,200
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-right">
                                        <p>
                                            <strong>Sub-total Amount: </strong>
                                        </p>
                                        <p>
                                            <strong>Balance Due: </strong>
                                        </p>
                                        <p>
                                            <strong style="font-size: x-large;">Total Amount: </strong>
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            <strong><i class="fas fa-rupee-sign" area-hidden="true"></i> 82,400
                                            </strong>
                                        </p>
                                        <p>
                                            <strong><i class="fas fa-rupee-sign" area-hidden="true"></i>10,000</strong>
                                        </p>

                                        <p>
                                            <strong style="font-size: x-large;"><i class="fas fa-rupee-sign" area-hidden="true"></i>92,400</strong>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <div class="col-md-12 d-flex justify-content-between">
                            <p><b>Signature</b></p>
                            <p><b>Date :</b> 3 May 2023</p>
                        </div>
                    </div>
                </div>
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