<!DOCTYPE html>
<?php session_start()?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ở Đây Có Bán Aó Quần</title>
</head>
<style>
.card .card_image{
    display: grid;
}
.Nam{
    display: flex;
    text-align: center;
}
.Nu{
    display: flex;
    text-align: center;
}

.card_img{
    height: 200px;
    width: 200px;
}
.card{
    padding:20px
}
.card .card_price{
    color: red;
}
.card .card_buy{
    background-color :#2E8B57;
    text-color:while;
    border: none;  color: white;
}

</style>
<body>
<?php
$Product=array();
$Product[0]['ID']="0";
$Product[0]['Name']="The Cosmo(Black)Quần short kaki";
$Product[0]['Code']="TC1025011BA";
$Product[0]['Price']="398,000đ";
$Product[0]['Image']="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbL4eulT7PO9ERuLs-740EhRe_IzYMJIC46Q&usqp=CAU";

$Product[1]['ID']="1";
$Product[1]['Name']="Quần short nam Bemice màu cobal";
$Product[1]['Code']="QSD 013";
$Product[1]['Code']="TC1025011BA";
$Product[1]['Price']="345.000đ";
$Product[1]['Image']="https://aloshop.com.vn/content/uploads/1_cdc1085fb4c141e4b0b5736c05b13936_master.png";

$Product[2]['ID']="2";
$Product[2]['Name']="Quần kaki nam màu sữa";
$Product[2]['Code']="QSD 013";
$Product[2]['Price']="545.000đ";
$Product[2]['Image']="https://tuychon.vn/wp-content/uploads/2020/03/qu%E1%BA%A7n-%E1%BB%91ng-%C4%91%E1%BB%A9ng.jpg";


$Product[3]['ID']="3";
$Product[3]['Name']="Quần baggy đen sang trọng QQ";
$Product[3]['Code']="Quyên 059";
$Product[3]['Price']="495.000đ";
$Product[3]['Image']="https://sieuthiviettin.com/wp-content/uploads/2021/03/1-52.jpg";

$Product[4]['ID']="4";
$Product[4]['Name']="Quần short linnen MNT Bacsic MBP21404LG";
$Product[4]['Code']="MBP21404LG";
$Product[4]['Price']="495.000đ";
$Product[4]['Image']="https://i.vietgiaitri.com/2019/3/23/mac-short-vai-linen-xuong-pho-cuoi-tuan-1a09b7.jpg";

$Product[5]['ID']="5";
$Product[5]['Name']="Aó len bím 2 túi thời trang";
$Product[5]['Code']="QSD 013";
$Product[5]['Price']="300.000đ";
$Product[5]['Image']="https://lzd-img-global.slatic.net/live/vn/p/a6991f0f442c552a12e659938ebb5ff5.jpg_720x720q80.jpg_.webp";
?>
<div class="list_card">
    <h1>Thời Trang Nam</h1>
    <div class="Nam">
        <?php
        for($i=0;$i<=2;$i++){
            echo'<div class="card">
            <img class="card_img" src="'.$Product[$i]['Image'].'">
            <h3 class="card_name">'.$Product[$i]['Name'].'</h3>
            <div class="card_code">'.$Product[$i]['Code'].'</div>
            <div class="card_price" >'.$Product[$i]['Price'].'</div>
            <button class="card_buy">Đặt mua</button>
            </div>';
        }
        ?>
    </div>
    <h1>Thời Trang Nữ</h1>
    <div class="Nu">
        <?php
        for($i=3;$i<=5;$i++){
            echo'<div class="card">
            <img class="card_img" src="'.$Product[$i]['Image'].'">
            <h3 class="card_name">'.$Product[$i]['Name'].'</h3>
            <div class="card_code">'.$Product[$i]['Code'].'</div>
            <div class="card_price" >'.$Product[$i]['Price'].'</div>
            <button class="card_buy">Đặt mua</button>
            </div>';
        }
        ?>
    </div>
</div>
</body>
</html>