<?php
ob_start();
session_start();
include("session/adminSession.php");
error_reporting(E_ALL ^ E_NOTICE);
?>
<?php
header("Content-Type: application/vnd.ms-excel");
header('Content-Disposition: attachment; filename="happy.xls"'); #ชื่อไฟล์
?>

<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40">

<HTML>

<HEAD>

    <meta charset="UTF-8">

</HEAD>

<BODY>

    <TABLE x:str BORDER="1">

        <TR>

            <td>ลำดับที่</td>
            <td>เพศ</td>
            <td>อายุ</td>
            <td>q3</td>
            <td>q3t</td>
            <td>q4</td>
            <td>q4_1</td>
            <td>q4_1t</td>
            <td>q4_2</td>
            <td>q4_2t</td>
            <td>q4_2_1</td>
            <td>weight</td>
            <td>height</td>
            <td>waist</td>
            <td>q6</td>
            <td>q7</td>
            <td>q8</td>
            <td>q9</td>
            <td>q10</td>
            <td>q11</td>
            <td>q12</td>
            <td>q13</td>
            <td>q14</td>
            <td>q15</td>
            <td>q16</td>
            <td>q17</td>
            <td>q18</td>
            <td>q19</td>
            <td>q20</td>
            <td>q21</td>
            <td>date_time</td>

            <td>code</td>


        </TR>

        <?php
        include("config/connect.php");
        $se = $coon->prepare(" SELECT* FROM data_all ");
        $se->execute();
        while ($num = $se->fetch(PDO::FETCH_ASSOC)) {

        ?>

            <TR>

                <td><?= $num["data_id"] ?></td>
                <td><?= $num["sex"] ?></td>
                <td><?= $num["age"] ?></td>
                <td><?= $num["q3"] ?></td>
                <td><?= $num["q3t"] ?></td>
                <td><?= $num["q4"] ?></td>
                <td><?= $num["q4_1"] ?></td>
                <td><?= $num["q4_1t"] ?></td>
                <td><?= $num["q4_2"] ?></td>
                <td><?= $num["q4_2t"] ?></td>
                <td><?= $num["q4_2_1"] ?></td>
                <td><?= $num["weights"] ?></td>
                <td><?= $num["height"] ?></td>
                <td><?= $num["waist"] ?></td>
                <td><?= $num["q6"] ?></td>
                <td><?= $num["q7"] ?></td>
                <td><?= $num["q8"] ?></td>
                <td><?= $num["q9"] ?></td>
                <td><?= $num["q10"] ?></td>
                <td><?= $num["q11"] ?></td>
                <td><?= $num["q12"] ?></td>
                <td><?= $num["q13"] ?></td>
                <td><?= $num["q14"] ?></td>
                <td><?= $num["q15"] ?></td>
                <td><?= $num["q16"] ?></td>
                <td><?= $num["q17"] ?></td>
                <td><?= $num["q18"] ?></td>
                <td><?= $num["q19"] ?></td>
                <td><?= $num["q20"] ?></td>
                <td><?= $num["q21"] ?></td>
                <td><?= $num["date_time"] ?></td>
                <td><?= $num["code"] ?></td>




            </TR>

        <?php
        }
        ?>

    </TABLE>
</BODY>

</HTML>