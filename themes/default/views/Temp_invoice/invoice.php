<?php



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <link href="<?= $assets ?>styles/helpers/bootstrap.min.css" rel="stylesheet"/>
    <style>
        *,h1,h2,h3,h4,h5,h6{
            font-family: Arial,"khmer kampongtrach";

        }
        p{
            font-size: 12px;
        }
        .row-line{
            background: black;
            height: 1px;
            border: 2px solid black;
        }
        .cus-th{
            background: lightgrey;
        }
        .cus-tb td{
            border: 1px solid black;
        }
        .cus-th td{
            padding-top: 5px;
        }

    </style>
</head>
<body>

<div class="container">

            <div class="row">
                <div class="col text-center">
                    <h3 style="padding-bottom: 7px;"><b>ក្រុមហ៊ុនសុខអីនធឺប្រាយ</b></h3>

                    <h5><b>SOK ENTERPRISE COMPANY</b></h5>
                </div>
            </div>


            <div class="row">

                <div class="col-lg-11 col-md-11 col-sm-11 ">
                    <table>
                        <tr>
                            <td></td>
                            <td>

                                <p>លេខអត្តសញ្ញាណកម្ម អតប (VATTIN)</p>

                            </td>
                            <td>
                                <p>: 9888</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;
                            </td>
                            <td><p>អាស័យដ្ឋាន </p></td>
                            <td><p>: អាម៉ាន់ចាយ៉ា​ អូតែល</p></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><p>Address </p></td>
                            <td><p>: Hotel Amajaya</p></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td> <p>លេខទូរស័ព្ទ​ </p></td>
                            <td><p>: ០៩២​ ៤៣៤ ៩៨៨​ / ០៩១​ ៩៨​៩​ ៨៨៧</p></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><p>Telephone No</p></td>
                            <td><p>: 023 202 922 / 023 981 912</p></td>
                        </tr>
                    </table>
                </div>
            </div>


            <div class="row-line">

            </div>

            <div class="row">
                <div class="col text-center">
                    <h3 style="padding-bottom: 3px;">វិក្កយប័ត្រ</h3>

                    <h5>INVOICE</h5>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <table width="100%" >
                        <tr>
                            <td>
                                <table style="font-weight: bold" >
                                    <tr>
                                        <td><p>អតិថិជន/Customer :</p></td>
                                        <td><p>&nbsp;</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>ឈ្មោះក្រុមហ៊ុន / អតិថិជន :&nbsp;</p></td>
                                        <td><p> &nbsp;</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Company name : </p> </td>
                                        <td><p>&nbsp; NAME</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>អាស័យដ្ឋាន :</p></td>
                                        <td><p>&nbsp; NAME</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Address :</p></td>
                                        <td><p>&nbsp;</p></td>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table style="font-weight: bold; "  width="100%">
                                    <tr>
                                        <td><p>លេខរៀងវិក័យប័ត្រ ៖&nbsp;</p></td>
                                        <td><p>&nbsp; 89384953</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Invoice N <sup>o</sup> </p></td>
                                        <td><p>&nbsp; 34534535</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>កាលបរិច្ឆេត :</p></td>
                                        <td><p>&nbsp; 09/12/2018</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Date :</p></td>
                                        <td><p>&nbsp; 09/12/2018</p></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td></td>
                                    </tr>

                                </table>
                            </td>
                        </tr>
                    </table>
                    <br>




                </div>




            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <table class=" text-center cus-tb"  width="100%" >
                        <thead>
                            <tr style="font-weight: 800" class="cus-th">
                                <td><p>ល.រ</p><p>N<sup>o</sup></p></td>
                                <td><p>បរិយាយមុខទំនិញ</p><p>Description</p></td>
                                <td><p>បិរមាណ </p><p>Quantity</p></td>
                                <td><p>ថ្លៃឯកតា</p><p>Unit Price</p></td>
                                <td><p>ថ្លៃទំនិញ</p><p>Amount</p></td>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                        for($i=0;$i<10;$i++){
                            echo '<tr>
                                        <td>'.($i+1).'</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>';
                        }

                        ?>

                            <tr>
                                <td colspan="4" class="text-right" style="padding-top: 5px; font-weight: 800" ><p>សរុប (បូកបញ្ជូលទាំពន្ធអាករ)&nbsp;</p><p>Total (VAT included)&nbsp;</p></td>
                                <td class="text-left">&nbsp;&nbsp;$</td>
                            </tr>
                        </tbody>


                    </table>

                </div>
            </div>
    <br><br><br><br><br>
            <div class="row">
                <div  class="col-lg-12 col-md-12 col-sm-12">



                    <table width="100%" class="text-center" style="font-size: 13px;" >


                        <tr >
                            <td class="text-left" width="40%" style="border-top: 1px solid black; padding-bottom: 3px;"></td>
                            <td width="20%"></td>
                            <td class="text-right" width="40%" style="border-top: 1px solid black;"></td>
                        </tr>
                        <tr>
                            <td >ហត្ថលេខា និងឈ្មោះនាក់ទិញ</td>
                            <td></td>
                            <td>ហត្ថលេខា និងឈ្មោះនាក់លក់</td>
                        </tr>

                        <tr>
                            <td class="text-center">Buyer's Signature & Name</td>
                            <td></td>
                            <td class="text-center">Seller's Signature & Name</td>
                        </tr>

                    </table>
                    <br>
                    <table>
                        <tr>
                            <td><p><b>សំគាល់: </b> ច្បាប់ដើមសំរាប់អ្នកទិញ ច្បាប់ចម្លងសម្រាប់អ្នកលក់</p></td>
                        </tr>
                        <tr>
                            <td><p><b>Note: </b> Original invoice for customer, Copied invoice for seller</p></td>
                        </tr>

                    </table>
                </div>

    </div>










</div>

</body>
</html>
