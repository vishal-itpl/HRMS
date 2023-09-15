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
<?php
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="number" name='basic' placeholder="Basic Salary">
    <input type="number" name='mDays' placeholder="Days in Month">
    <input type="number" name='holidays' placeholder="Holidays">
    <input type="number" name='leaves' placeholder="Leaves Taken">
    <button type="submit" name="submit">Calculate Salary</button>
</form>

<?php if (isset($_POST['basic'])) {
    $td = $_POST['mDays'];
    $hd = $_POST['holidays'];
    $wd = $td - $hd;
    $lv = $_POST['leaves'];
    $sal = $_POST['basic'];
    $da = $sal * 0.45;
    $ta = $sal * 0.15;
    $hra = $sal * 0.5;
    $pf = $sal * 0.12;
    $pftax=200;
    $ts = $sal - $pftax + $da + $hra + $ta + $pf;

    $lamt = round($ts / $wd * $lv);
    $ns = $ts - $lamt;?>
    <hr>
    <table>
        <tr>
            <th>Days in Month</th>
            <td>
                <?php echo $td; ?>
            </td>
        </tr>
        <tr>
            <th>Holidays</th>
            <td>
                <?php echo $hd; ?>
            </td>
        </tr>
        <tr>
            <th>Working Days</th>
            <td>
                <?php echo $wd; ?>
            </td>
        </tr>
        <tr>
            <th>Basic Salary</th>
            <td>
                <?php echo $sal; ?>
            </td>
        </tr>
        <tr>
            <th>Professional Tax</th>
            <td>
                <?php echo $pftax; ?>
            </td>
        </tr>
        <tr>
            <th>D.A. @ 45%</th>
            <td>
                <?php echo $da; ?>
            </td>
        </tr>
        <tr>
            <th>H.R.A. @ 50%</th>
            <td>
                <?php echo $hra; ?>
            </td>
        </tr>
        <tr>
            <th>T.A. @ 15%</th>
            <td>
                <?php echo $ta; ?>
            </td>
        </tr>
        <tr>
            <th>P.F.(Provident Fund) @ 12%</th>
            <td>
                <?php echo $pf; ?>
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

