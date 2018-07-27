<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quote KH&nbsp;<?= $invs->reference_no ?></title>
    <link href="<?= $assets ?>styles/helpers/bootstrap.min.css" rel="stylesheet"/>
    <style>
            *{
                padding: 0;

            }
            body{

            }
            .quote,.cus_tb1 thead> tr> td,.cb_sign{
                font-family: "Times New Roman","Khmer OS System";
            }
            .cus_tb1 thead> tr> td{
                height: 30px;
                padding-left: 9px;
                font-weight: 300;
                font-size: 14px;
            }

            .cus_tb1 td{
                border: 1px solid black;
                font-family: "Khmer OS System";
                -moz-font-family: "Khmer OS System";

            }
            .cus_tb1>tbody>tr:nth-child(1){
                font-weight: bold;
                font-size: 15px;
            }
         .cus_tb1 tbody>tr>td{
             text-align: center;

             height: 30px;
         }
        span.h_en{
            font-size: 30px;
        }
        span.h_kh{
            font-size: 23px;
        }
        .f_border{
            width: 100%;
            border: 3px solid #622423;
            position: relative;
        }
        .f_border::after{
            position: absolute;
            content:'';
            width: 51%;
            top:4px;
            right: -3px;
            height: 1px;
            background: #622423;
            /*border: 1px solid #622423;*/
        }
            .f_border::before{
                position: absolute;
                content:'';
                width: 51%;
                top:4px;
                left: -3px;
                height: 1px;
                background: #622423;
                /*border: 1px solid #622423;*/
            }
        @media print{
            .f_border::before,.f_border::after{

            }
            .t_foot td,.u_c{
                color:#0070bf!important;
            }
            .q_title>td>h3{
                color:#0070bf!important;

            }
            .container{
                margin-top: 15px;
            }
            td.td_kh_en span{
                color: #0070bf!important;
            }
            .border{
                border: 1px solid #0070bf;
                border-radius: 4px;
                box-shadow: 1px 1px 1px 1px rgba(0,0,0,0.5)!important;
                margin-top: 3px;
            }
            tr.f_line>td{
                color: #0070bf!important;
            }
        }
            .border{
                border: 1px solid #0070bf;
                border-radius: 4px;
                box-shadow: 1px 1px 1px 1px rgba(0,0,0,0.5);
                margin-top: 3px;
            }
            .container{
                margin-top: 15px;
            }
        .q_title>td>h3{
            color:#0070bf;

            font-size: 29px;
        }

    </style>
</head>
<body>
<?php //$this->erp->print_arrays($customer);
foreach ($rows as $row):
    $dis+=$row->item_discount;
$tax+=$row->item_tax;

endforeach;
$col=3;
$lcol=2;
$dcol=5;
if($dis<=0){
    $col-=1;
    $dcol-=1;

}
if($tax<=0){
    $lcol-=1;
}
//echo '<h1>Col='.$col.' - LCol='.$lcol.'- DCol='.$dcol.'</h1>';
?>
        <div class="container">
            <div class="header" style="">
                <table width="100%" class="text-center">
                    <tr>
                        <td width="25%">
                            <img height="80px" src="<?= base_url() ?>assets/uploads/logos/<?= $biller->logo; ?>"
                                 alt="<?= $Settings->site_name; ?>">
                        </td>
                        <td class="td_kh_en" width="50%" style="color: #0070bf;">
                            <span class="h_kh" style="font-family:'Khmer OS Muol Light'; -moz-font-family: 'Khmer OS System';"><?= $biller->company_kh ?></span>
                            <br><span class="h_en" style="font-weight:bold; "><?= strtoupper($biller->company); ?></span>
                        </td>
                        <td width="25%"></td>
                    </tr>
                </table>
                <div class="border" ></div>
            </div>

            <div class="body">
                <table width="100%" class="text-center" >
                    <tr class="q_title">
                        <td><h3 style="font-weight: bold; text-decoration: underline;  " class="quote">ពង្រាងតម្លៃ</h3></td>
                    </tr>
                </table>

                <table class="cus_tb1" width="100%" style="line-height: 22px">
                    <thead>
                        <tr >
                            <td  style="border: none;"colspan="<?= $dcol; ?>" class="text-right"> </td>
                            <td <?php if($tax>0){echo 'colspan="2"';} ?> style="border: none;" class="text-center"> <b>Date:</b></td>
                        </tr>
                        <tr>
                            <td colspan="2">ឈ្មោះ អតិថិជន : <?= $customer->name_kh ?></td>
                            <td colspan="<?= $col ?>">តម្លើង និង ធ្វើ</td>
                            <td colspan="<?= $lcol ?>"> : <?= date("d-M", strtotime($invs->date)); ?></td>
                        </tr>
                        <tr>
                            <td colspan="2">ឈ្មោះ ទំនាក់ទំនង : <?= $customer->phone ?></td>
                            <td colspan="<?= $col ?>">ឆ្នាំ</td>
                            <td colspan="<?= $lcol ?>"> : <?= date("Y", strtotime($invs->date)); ?></td>
                        </tr>
                        <tr>
                            <?php
                                $addr='';
                                if($customer->address){
                                    $addr.=$customer->address.' ';
                                }
                                if($customer->street){
                                    $addr.=$customer->street.' ';
                                }
                                if($customer->village){
                                    $addr.=$customer->village.' ';
                                }
                                if ($customer->sangkat){
                                    $addr.=$customer->sangkat.' ';
                                }
                                if($customer->district){
                                    $addr.=$customer->district.' ';
                                }
                                if($customer->state){
                                    $addr.=$customer->state.' ';
                                }
                                if($customer->country){
                                    $addr.=$customer->country;
                                }
                            ?>
                            <td colspan="2">អាសយដ្ឋាន : <?= $addr; ?></td>
                            <td colspan="<?= $col ?>"></td>
                            <td colspan="<?= $lcol ?>"></td>
                        </tr>
                        <tr>
                            <td colspan="2">លេខទំនាកទំនង <b>1</b> : </td>
                            <td colspan="<?= $col ?>"></td>
                            <td colspan="<?= $lcol ?>"></td>
                        </tr>
                        <tr>
                            <td colspan="2">លេខទំនាកទំនង <b>2</b> : </td>

                            <td colspan="<?= $col ?>"></td>

                            <td colspan="<?= $lcol ?>"></td>
                        </tr>
                        <tr>
                            <td colspan="2"> <b>* ​ពង្រាងតម្លៃនេះ</b> មានសុពលភាពរយៈពេល១ខែ</td>

                            <td colspan="<?= $col ?>"></td>
                            <td colspan="<?= $lcol ?>"></td>
                        </tr>
                        <tr>
                            <td > </td>
                            <td></td>
                            <td colspan="<?= $col ?>">លេខរៀងឯកសារ</td>

                            <td colspan="<?= $lcol ?>"> : <?= $invs->reference_no ?></td>
                        </tr>
                    <tr>
                        <td colspan="<?= ($col+2+$lcol); ?>" style="height: 15px;"></td>
                    </tr>
                    </thead>

                    <tbody>
                    <?php
                    if($dis>0&&$tax>0)
                    {
                        $dw='40%';
                        $wp='6%';
                        $p='10%';
                    }

                    if($dis<=0&&$tax<=0){
                        $wp='13%';
                        $p='13%';
                    }
                    if($tax>0&&$dis<=0){
                        $wt='8%';
                        $wp='8%';
                    }
                    if($tax<=0&&$dis>0){
                        $wt='8%';
                        $wp='8%';
                    }


                    ?>
                    <tr style="height: 50px;">
                        <td width="5%">លរ</td>
                        <td width="<?php if($dis>0&&$tax>0){echo '43%';}else{echo '50%';}?>">បរិយាយ</td>
                        <td width="<?= $wp; ?>">ចំនួន</td>
                        <td width="<?= $p; ?>">តម្លៃរាយ</td>
                        <?php
                            if($dis>0){
                        ?>
                        <td width="<?= $wp; ?>">បញ្ចុះតម្លៃ</td>
                        <?php } ?>
                        <?php
                        if($tax>0){
                            ?>
                            <td width="<?= $wt; ?>">ពន្ធទំនិញ</td>
                        <?php } ?>
                        <td width="">តម្លៃសរុប</td>
                    </tr>
                    <?php
                    $c=0;
                        foreach ($rows as $row){
                            $c++;
                            $total1=$row->unit_price*$row->quantity;


                            ?>
                            <tr>
                                <td><?= $c; ?></td>
                                <td style="text-align: left; padding-left: 10px"><?= $row->product_name; ?></td>
                                <td><?=$this->erp->formatQuantity($row->quantity);?>
                                    <td>
                                    <?php
                                    if($row->unit_price==0){
                                        echo "Free";
                                    }else
                                    {
                                        echo $this->erp->formatMoney($row->unit_price);
                                    }
                                    ?>

                                </td>
                                <?php if($dis > 0){ ?>
                                    <td><span></span>

                                        <?php echo $this->erp->formatMoney($row->item_discount);
                                        $total1-=$row->item_discount;
                                        ?>
                                    </td>
                                <?php  } ?>
                                <?php if($tax > 0){ ?>
                                    <td >
                                        <?php echo $this->erp->formatMoney($row->item_tax);
                                        $total1+=$row->item_tax;
                                        ?>
                                    </td>
                                <?php  } ?>

                                <td style="text-align: right; padding-right: 10px""> <?= $this->erp->formatMoney($total1); ?></td>

                            </tr>


                            <?php

                            $g_total+=$total1;
                            $g_total1=0;
                            $g_total1+=$g_total;

                        }
                        if($c<4){
                            for($i=1;$i<=(4-$c);$i++){
                                if($dis>0){
                                    if($tax>0){
                                        echo '<tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>';
                                    }
                                    else {
                                        echo '<tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            
                                        </tr>';
                                    }
                                }else{
                                    if($tax>0){
                                        echo '<tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                           
                                        </tr>';
                                    }
                                    else{
                                        echo '<tr>
                                           
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>';
                                    }
                                }
                            }
                        }



//                    $this->erp->print_arrays($invs);
                    ?>



                    </tbody>
                    <style>
                        .cus_tf>tr>td{
                            font-weight: bold;

                        <?php

                        if($invs->order_tax>0 || $invs->shipping>0 || $invs->order_discount>0){
                                $br='';
                        }
                        else{
                            echo ' height: 50px;';
                            $br='<br><br>';
                        }
                        ?>
                        }
                    </style>

                    <tfoot class="text-center cus_tf" style="color:" >
                    <tr>
                        <td colspan="2" style="border-left: none; border-bottom: none;"></td>
                        <td colspan="<?= $col; ?>" style="">សរុបទឹកប្រាក់</td>
                        <td style="text-align: right; padding-right: 10px" colspan="<?= $lcol; ?>"><?= $this->erp->formatMoney($g_total); ?></td>
                    </tr>
                        <?php
                        if($invs->order_discount>0){
                            $g_total1-=$invs->order_discount;
                            ?>
                            <tr>
                                <td colspan="2" style="border-left: none; border-bottom: none; border-top: none;"></td>
                                <td colspan="<?= $col; ?>" ">បញ្ចុះតម្លៃ</td>
                                <td style="text-align: right; padding-right: 10px" colspan="<?= $lcol; ?>"><?= $this->erp->formatMoney($invs->order_discount); ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        <?php
                        if($invs->shipping>0){
                            $g_total1+=$invs->shipping;
                            ?>
                            <tr>
                                <td colspan="2" style="border-left: none; border-bottom: none; border-top: none;"></td>
                                <td colspan="<?= $col; ?>" style="">តម្លៃដឹកជញ្ចូន</td>
                                <td style="text-align: right; padding-right: 10px" colspan="<?= $lcol; ?>"><?= $this->erp->formatMoney($invs->shipping); ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        <?php
                        if($invs->order_tax>0){
                            $g_total1+=$invs->order_tax;
                            ?>
                            <tr>
                                <td colspan="2" style="border-left: none; border-bottom: none; border-top: none;"></td>
                                <td colspan="<?= $col; ?>" style="">ពន្ឋអាករ</td>
                                <td style="text-align: right; padding-right: 10px" colspan="<?= $lcol; ?>"><?= $this->erp->formatMoney($invs->order_tax); ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        <?php
                        if($invs->order_tax>0 || $invs->shipping>0 || $invs->order_discount>0){
                            ?>
                            <tr>
                                <td colspan="2" style="border-left: none; border-bottom: none; border-top: none;"></td>
                                <td colspan="<?= $col; ?>" style="">សរុប</td>
                                <td style="text-align: right; padding-right: 10px" colspan="<?= $lcol; ?>"><?= $this->erp->formatMoney($g_total1); ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tfoot>
                </table>
                <?= $br; ?>
                <table width="100%" >
                    <tr class="text-center f_line" style="font-size: 40px; color:#0070bf; ">
                        <td width="35%">

                            ________
                        </td>
                        <td width="30%"></td>
                        <td width="35%">
                            _________
                        </td>
                    </tr>
                    <tr class="text-center cb_sign" style="font-size: 16px; font-weight: bold;">
                        <td><?= $customer->name_kh ?></td>
                        <td></td>
                        <td><?= $biller->company_kh ?></td>
                    </tr>
                <?php //$this->erp->print_arrays($biller) ?>
                </table>
            </div>
            <br><br><?= $br; ?><br><br><br>
            <div class="footer">
                <div class="f_border"></div>
                <div class="page_num" style="width: 100%">
                    <p style="float:right;padding-right: 45px;">Page 1</p>
                </div>
                <table class="t_foot"    width="100%"  style="vertical-align: top;font-size: 12px; color:#0070bf;">
                    <tr>
                        <td width="45%" style="vertical-align: top">
                            <table style="font-size: 13px;">
                                <tr>
                                    <td><b class="u_c">Factory</b></td><td><b> : </b></td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: top">Address</td><td> : Cheng Kep Village, Kandal Stueng
                                        District, Kandal Province, Cambodia</td>
                                </tr>
                                <tr>
                                    <td>Sale</td><td> : +(855) 78 373 544 </td>
                                </tr>
                                <tr>
                                    <td>Factory</td><td> : + (855) 24 66 75 747</td>
                                </tr>
<!--                                <tr><td>d</td></tr>-->
<!--                                <tr><td>d</td></tr>-->
                            </table>
                        </td>
                        <td width="10%"></td>
                        <td width="45%">
                            <table style=" vertical-align: top;">
                                <tr>
                                    <td><b class="u_c">Office</b></td><td><b> : </b></td>
                                </tr>
                                <tr>
                                    <?php
//                                    $this->erp->print_arrays($customer);
//                                            $this->erp->print_arrays($biller);

                                            $addrBiller='';
                                            if($biller->address){
                                                $addrBiller.=$biller->address.' ';
                                            }
                                            if($biller->street){
                                                $addrBiller.=$biller->street.' ';
                                            }
                                            if($biller->village){
                                                $addrBiller.=$biller->village.' ';
                                            }
                                            if ($biller->sangkat){
                                                $addrBiller.=$biller->sangkat.' ';
                                            }
                                            if($biller->district){
                                                $addrBiller.=$biller->district.' ';
                                            }
                                            if($biller->state){
                                                $addrBiller.=$customer->state.' ';
                                            }
                                            if($biller->country){
                                                $addrBiller.=$biller->country;
                                            }
                                    ?>
                                    <td style="vertical-align: top;font-size: 12px;">Address</td><td> : <?= $addrBiller; ?>
                                    </td>
                                </tr>
                                <!--<tr>
                                    <td>H/P</td><td> :  </td>
                                </tr>-->
                                <tr>
                                    <td>Tel</td><td> : <?= $biller->phone ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td><td> : <?= $biller->email ?></td>
                                </tr>
                                <!--<tr>
                                    <td>Website</td><td> : sokenterprise.com</td>
                                </tr>-->
                            </table>
                        </td>
                    </tr>
                </table>


            </div>


        </div>

</body>
</html>