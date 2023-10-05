<style>
    body {
        background-color: crimson;
        color: white;
    }

    th {
        text-align: left;
        padding: 5px;
    }

    td {
        padding-left: 10px;
        font-size: 1.2em;
    }
</style>

<h1>Salary Calculation</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="number" name='actual' placeholder="actual Salary">
    <input type="number" name='mDays' placeholder="Days in Month">
    <!-- <input type="number" name='holidays' placeholder="Holidays"> -->
    <input type="number" name='leaves' placeholder="Leaves Taken">
    <button type="submit" name="submit">Calculate Salary</button>
</form>

<?php if (isset($_POST['actual'])) {
    $td = $_POST['mDays'];
    // $hd = $_POST['holidays'];
    $wd = $td;
    $lv = $_POST['leaves'];
    $sal = $_POST['actual'];
    $basic=$sal * 0.5;
    $hra = $basic * 0.4;
    $others = $basic * 0.6;
    $pf = $basic * 0.12;
    $pt = 200;
    $esi = $sal * 0.015;
    $allowances= $hra + $others;
    $deductions = $pf + $pt + $esi;
    $ts = $basic + $allowances - $deductions;
    $lamt = round($ts / $wd * $lv);
    $ns = $ts - $lamt;
?>
    <hr>
    <table>
        <tr>
            <th>Days in Month</th>
            <td>
                <?php echo $td; ?>
            </td>
        </tr>
        <!-- <tr>
            <th>Holidays</th>
            <td>
                <?php ?>
            </td>
        </tr> -->
        <tr>
            <th>Working Days</th>
            <td>
                <?php echo $wd; ?>
            </td>
        </tr>
        <tr>
            <th>Actual Salary</th>
            <td>
                <?php echo $sal; ?>
            </td>
        </tr>
        <tr>
            <th>Basic Salary</th>
            <td>
                <?php echo $basic; ?>
            </td>
        </tr>
        <tr>
            <th>HRA @50% </th>
            <td>
                <?php echo $hra; ?>
            </td>
        </tr>
        <tr>
            <th>Others @50% </th>
            <td>
                <?php echo $others; ?>
            </td>
        </tr>
        <tr>
            <th>Provident Fund @12% </th>
            <td>
                <?php echo $pf; ?>
            </td>
        </tr>
        <tr>
            <th>ESI @1.5%</th>
            <td>
                <?php echo $esi; ?>
            </td>
        </tr>
        <tr>
            <th>Professional Tax </th>
            <td>
                <?php echo $pt; ?>
            </td>
        </tr>
        <tr>
            <th>Allowances </th>
            <td>
                <?php echo $allowances; ?>
            </td>
        </tr>
        <tr>
            <th>Deductions </th>
            <td>
                <?php echo $deductions; ?>
            </td>
        </tr>
        <tr>
            <th>Total Salary</th>
            <td>
                <?php echo $ts; ?>
            </td>
        </tr>
        <tr>
            <th>LWP Amount</th>
            <td>
                <?php echo $lamt . " for " . $lv . ' Days leave.'; ?>
            </td>
        </tr>
        <tr>
            <th>Nett Salary</th>
            <td>
                <?php echo $ns; ?>
            </td>
        </tr>
    </table>
<?php
}
?>