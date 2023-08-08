<?php 
function hasil(){
    $tanggal = $_POST["tanggal"];
    $namcus = $_POST["namcus"];
    $noId = $_POST["noId"];
    $durasi = $_POST['durasi'];
    $type = $_POST['type'];
    $deluxe = 850000;
    $superior = 500000;

    error_reporting(0);
        foreach ($namcus as $key => $val){
            ?>
            <table border="0" width="500" cellpadding = "1" cellspacing = "1">
                <tr>
                    <td><?= "&nbsp tanggal booking"?></td>
                    <td><?= "&nbsp : "?></td>
                    <td><?= "&nbsp" . $tanggal?></td>
                </tr>
                <tr>
                    <td><?= "&nbsp Nama Customer"?></td>
                    <td><?= "&nbsp : "?></td>
                    <td><?= "&nbsp" . $namcus[$key]?></td>
                </tr>
                <tr>
                    <td><?= "&nbsp no identitas"?></td>
                    <td><?= "&nbsp : "?></td>
                    <td><?= "&nbsp" . $noId[$key]?></td>
                </tr>
                <tr>
                    <td><?= "&nbsp type kamar"?></td>
                    <td><?= "&nbsp : "?></td>
                    <td><?= "&nbsp" . $type?></td>
                </tr>
                <tr>
                    <td><?= "&nbsp durasi penginapan"?></td>
                    <td><?= "&nbsp : "?></td>
                    <td><?= "&nbsp" . $durasi . " hari"?></td>
                </tr>
                <tr>
                    <td><?= "&nbsp no identitas"?></td>
                    <td><?= "&nbsp : "?></td>
                    <td><?= "&nbsp" . $noId?></td>
                </tr>
                <tr>
                    <td><?= "&nbsp no diskon"?></td>
                    <td><?= "&nbsp : "?></td>
                    <td>
                        <?php 
                           if($type){
                            if($durasi == ""){
                                echo "durasi belum diisi";
                            }else if($type == "deluxe"){
                                $hasil = $deluxe * $durasi;
                                $hasil;
                            }else if($type =="superior"){
                                $hasil = $superior * $durasi;
                                $hasil;
                            }
            
                            if($hasil > 2000000){
                                $diskon = (20/100)*$hasil;
                                $total = $hasil-$diskon;
                                echo "&nbsp potongan diskon 20%";
            
                            }else if($hasil > 1500000){
                                $diskon = (10/100)*$hasil;
                                $total = $hasil-$diskon;
                                echo "&nbsp potongan diskon 10%";
            
                            }else{
                                echo "&nbsp anda tidak berhak menadpa potongan diskon ";
                            }
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><?= "&nbsp total bayar"?></td>
                    <td><?= "&nbsp"?></td>
                    <td>
                        <?php
                        if($type){
                            if($durasi == ""){
                                echo "durasi belum diisi";
                            }elseif($type == "1"){
                                $hasil = $deluxe * $durasi;
                                $hasil;
                            }else if($type == "2"){
                                $hasil = $superior * $durasi;
                                $hasil;
                            }

                            if($hasil > 2000000){
                                $diskon = (20/100)*$hasil;
                                $total = $hasil-$diskon;
                                echo "&nbsp Rp.".$total;
            
                            }else if($hasil > 1500000){
                                $diskon = (10/100)*$hasil;
                                $total = $hasil-$diskon;
                                echo "&nbsp Rp.".$total;
                            }else{
                                echo "&nbsp Rp.". $hasil;
                            }
                        }
                        ?>
                    </td>
                </tr>

            </table>
            <?php 
         
        }
    

}
?>

<html>
    <form method="POST" action="" name="formpost">
        <table width = "500" border="1" cellpadding = "1" cellspacing ="1" align="center">
            <tr>
                <th><h2>Form Pemesanan hotel Skanida</h2></th>
            </tr>
            <tr>
                <td>
                    <table width="500" border="0" cellpadding = "1" cellspacing = "1" align="center">
                        <tr height = "40">
                            <td width = "200" valign="center">Tanggal Booking</td>
                            <td width = "10" valign = "center" > : </td>
                            <td><input type="date" name="tanggal" id="tanggal"></td>
                        </tr>
                        <tr height = "30">
                            <td width = "200" valign="center">Nama Customer</td>
                            <td width = "10" valign = "center" > : </td>
                            <td><input type="text" size="10" name="namcus[]"></td>
                        </tr>
                      
                        <tr height = "30">
                            <td width = "200" valign="center">No identitas</td>
                            <td width = "10" valign = "center" > : </td>
                            <td><input type="text" size="40" name="noId[]"></td>
                        </tr>
                        <tr height = "30">
                            <td width = "200" valign="center">Tipe kamar</td>
                            <td width = "10" valign = "center" > : </td>
                            <td><select name="type" id="">
                                <option value="-" name="-" hidden>-</option>
                                <option value="deluxe" name="deluxe">Deluxe</option>
                                <option value="superior" names="superior">Superior</option>

                            </select></td>
                        </td>
                        </tr>
                        <tr>
                            <td width = "200" valign="center">Durasi menginap</td>
                            <td width = "10" valign = "center" > : </td>
                            <td><input type="text" size="40" name="durasi">malam</td>

                        </tr>
                        <tr>
                            <td align="right" colspan="2" >
                                <input type="submit" value="Simpan" name="btnOk">
                            </td>
                            <td>
                                <input type="reset" value="cancel" name="btnCancel">
                            </td>
                        </tr>

                    </table>
        </table>
        <br>
        <br>
        <table width="500" border="0" cellpadding="0" cellspacing = "0" align="center">
            <tr>
                <td>
                    <?php 
                        if(isset($_POST["btnOk"])){
                            hasil();
                        }
                    ?>
                </td>
            </tr>
        </table>
    </form
</html>