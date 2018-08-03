<?php



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $this->lang->line("Tax Invoice ") . " " . $inv->reference_no; ?></title>
    <link href="<?= $assets ?>styles/helpers/bootstrap.min.css" rel="stylesheet"/>
    <style>

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

        .cus-tbody tr td{
            padding: 3px 0px;
            font-size: 12px ;
        }
        body{
            font-size: 12px;
            font-family: "Khmer OS System";
            -moz-font-family: "Khmer OS System";
        }
    </style>
</head>
<body>

<div class="container">

    <div class="row">
        <div class="col text-center">
            <h4 style="margin-bottom: -5px;  font-family:'Khmer OS Muol Light';
                    -moz-font-family: 'Khmer OS System';"><?= $biller->company_kh ?></h4>

            <h4 class=""><b><?= $biller->company != '-' ? $biller->company : $biller->name; ?></b></h4>

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

                </tr>
                <tr>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;
                    </td>
                    <td><p>អាស័យដ្ឋាន : <?= $biller->cf4; ?> </p></td>
<!--                    --><?php //$this->erp->print_arrays($biller); ?>
                </tr>
                <tr>
                    <td></td>
                    <td><p>Address : <?= $biller->address; ?></p></td>

                </tr>
                <tr>
                    <td></td>
                    <td>
                        <table >
                            <tr>
                                <td><p>ទូរស័ព្ទលេខ: </p></td>
                                <td rowspan="2">
                                    <p >
                                        <?php
                                        if($biller->phone){
                                            echo '<span> &nbsp;&nbsp; '.$biller->phone.'</span>';
                                        }
                                        if($biller->email){
                                            echo ' Email : '.$biller->email;
                                        }
                                        ?>

                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td><p><?php
                                        if($biller->phone){
                                            echo 'Telephone No:' ;
                                        }
                                        ?>
                                    </p></td>
                            </tr>
                        </table>
                    </td>


                </tr>
            </table>
        </div>
    </div>


    <div class="row-line">

    </div>

    <div class="row">
        <div class="col text-center">
            <h4 style="padding-bottom: 3px;font-family:'Khmer OS Muol Light';
                    -moz-font-family: 'Khmer OS System'; ">វិក្កយប័ត្រអាករ</h4>

            <h5 style="font-weight: bold">TAX ​INVOICE</h5>
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
                                <td><p>&nbsp;<?= $customer->name; ?></p></td>
                            </tr>
                            <tr>
                                <td><p>ឈ្មោះក្រុមហ៊ុន / អតិថិជន :&nbsp;</p></td>
                                <td><p> &nbsp;<?= $customer->company_kh; ?></p></td>
                            </tr>
                            <tr>
                                <td><p>Company name : </p> </td>
                                <td><p>&nbsp; <?= $customer->company; ?></p></td>
                            </tr>
                            <tr>
                                <td><p>អាស័យដ្ឋាន :</p></td>
                                <td><p>&nbsp; <?php echo $customer->address . ", " . $customer->city . " " . $customer->postal_code . " " . $customer->state . " " . $customer->country; ?></p></td>
                            </tr>
                            <tr>
                                <td><p> </p></td>
                                <td><p>&nbsp;</p></td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table style="font-weight: bold; "  width="100%">
                            <tr>
                                <td><p>លេខរៀងវិក័យប័ត្រ / Invoice N<sup>o</sup>&nbsp;: </p></td>
                                <td><p>&nbsp; <?= $inv->reference_no ?></p></td>
                            </tr>
                            <tr>
                                <td><p>កាលបរិច្ឆេត / Date :</p></td>
                                <td><p>&nbsp; <?= date("d-m-Y", strtotime($inv->date)); ?></p></td>
                            </tr>
                            <tr>
                                <td><p> </p></td>
                                <td><p>&nbsp; </p></td>
                            </tr>

                            <tr>
                                <td><p></p></td>
                                <td><p>&nbsp; </p></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td></td>
                            </tr>


                        </table>
                    </td>
                </tr>
            </table>


        </div>




    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 ">
            <table class=" text-center cus-tb"  width="100%" >
                <thead>
                <tr style="font-weight: 800" class="cus-th">
                    <?php
                    $r=1;
                    foreach ($rows as $row){

                        $dis+=$row->item_discount;
                        $tax+=$row->item_tax;
                    }
                    ?>
                    <td><p>ល.រ</p><p>N<sup>o</sup></p></td>
                    <td><p>បរិយាយមុខទំនិញ</p><p>Description</p></td>
                    <td><p>បិរមាណ </p><p>Quantity</p></td>
                    <td><p>ថ្លៃឯកតា</p><p>Unit Price</p></td>
                    <?php
                    if($tax>0){
                        echo '<td><p>ពន្ធទំនិញ</p></td>';
                    }
                    if($dis>0){
                        echo ' <td><p>បញ្ចុះតម្លៃ</p></td>';
                    }

                    ?>


                    <td><p>ថ្លៃទំនិញ</p><p>Amount</p></td>
                </tr>
                </thead>

                <tbody class="cus-tbody">
                <?php $r = 1;

                foreach ($rows as $row):
                    $subtotal=($row->subtotal+$row->item_tax)-$row->item_discount;
                    $g_total+=$subtotal;

                    ?>
                    <tr>
                        <td ><?= $r; ?></td>
                        <td class="text-left">&nbsp;&nbsp;<?= $row->product_name . " (" . $row->product_code . ")" . ($row->variant ? ' (' . $row->variant . ')' : ''); ?>
                            <?= $row->details ? '<br>' . $row->details : ''; ?>
                            <?= $row->product_noted ? '<br>' . $row->product_noted : ''; ?>
                        </td>
                        <td>
                            <?= $this->erp->formatQuantity($row->quantity); ?>
                        </td>
                        <?php
                        if ($Settings->product_serial) {
                            echo '<td>' . $row->serial_no . '</td>';
                        }
                        ?>
                        <td><?= $this->erp->formatMoney($row->real_unit_price); ?></td>
                        <?php
                        if ($tax>0) {
                            echo '<td>' . ($row->item_tax != 0 && $row->tax_code ? '<small>(' . $row->tax_code . ')</small> ' : '') . $this->erp->formatMoney($row->item_tax) . '</td>';
                        }
                        if ($dis>0) {
                            echo '<td >' . ($row->discount != 0 ? '<small>(' . $row->discount . ')</small> ' : '') . $this->erp->formatMoney($row->item_discount) . '</td>';
                        }
                        ?>
                        <td><?= $this->erp->formatMoney($subtotal); ?></td>
                    </tr>
                    <?php
                    $r++;
                endforeach;
                ?>


                <?php
                if($r<11){
                    $k=11 - $r;
                    for($j=1;$j<=$k;$j++){
                        if( $dis >0){
                            if($tax>0){
                                echo  '<tr>
											<td >'.$r.'</td>
											<td ></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											

										</tr>';
                            }else{
                                echo  '<tr>
											<td>'.$r.'</td>
											
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td ></td>

										</tr>';
                            }


                        }else{
                            if($tax>0){
                                echo  '<tr>
											<td >'.$r.'</td>
											
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td ></td>

										</tr>';

                            }
                            else{
                                echo  '<tr>
											<td >'.$r.'</td>
											
											<td></td>
											<td></td>
											<td></td>
											<td></td>

										</tr>';
                            }
                        }
                        $r++;
                    }
                }
                $col=6;
                if($dis<=0){
                    $col-=1;
                }
                if($tax<=0){
                    $col-=1;
                }
                if($inv->order_tax>0){
                    ?>
                     <tr>
                            <td colspan="<?= $col; ?>" class="text-right" style="padding-top: 5px; font-weight: 800" ><p>ពន្ធអាករ&nbsp;/ Order Tax&nbsp;</p></td>
                            <td ><?= $this->erp->formatMoney($inv->order_tax); ?></td>
                        </tr>
                <?php }
                if($inv->order_discount>0){
                    ?>
                    <tr>

                        <td colspan="<?= $col; ?>" class="text-right" style="padding-top: 5px; font-weight: 800" ><p>បញ្ចុះតម្លៃ&nbsp;/ Order Discount&nbsp;</p></td>
                        <td ><?= $this->erp->formatMoney($inv->order_discount); ?></td>

                    </tr>
                <?php } ?>
                <tr>

                    <td colspan="<?= $col; ?>" class="text-right" style="padding-top: 5px; font-weight: 800" ><p>សរុប(បូកបញ្ចូលទាំអាករ)&nbsp;/ Total(VAT included)&nbsp;</p></td>
                    <td ><?= $this->erp->formatMoney( ($g_total+$inv->order_tax)-$inv->order_discount); ?></td>

                </tr>
                </tbody>


            </table>

        </div>
    </div>
    <br><br><br>
    <div class="row">
        <div  class="col-lg-12 col-md-12 col-sm-12">



            <table width="100%" class="text-center" style="font-size: 13px;" >


                <tr >
                    <td class="text-left" width="40%" style="border-top: 1px solid black; padding-bottom: 3px;"></td>
                    <td width="20%"></td>
                    <td class="text-right" width="40%" style="border-top: 1px solid black;"></td>
                </tr>
                <tr>
                    <td >ហត្ថលេខា និងឈ្មោះអ្នកទិញ</td>
                    <td></td>
                    <td>ហត្ថលេខា និងឈ្មោះអ្នកលក់</td>
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
