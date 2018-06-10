<?php
include "phpqrcode/qrlib.php";
QRcode::png('1', '1.png');
QRcode::png('2', '2.png');
QRcode::png('3', '3.png');
QRcode::png('4', '4.png');
for($i=1; $i<=4; $i++){
echo "<img src='".$i.".png' width='200' /> <br>";
}
?>

<button onclick="myFunction()">Print this page</button>

<script>
function myFunction() {
    window.print();
}
</script>