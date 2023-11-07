<?php
session_start();
$eid = $_SESSION['eid'];
$erole = $_SESSION['emp_role'];
$id = $_GET['id'];
if (!isset($_SESSION['is_login'])) {
    header('Location:login1.php');
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once './css/style.php'; ?>
</head>

<body>
<?php
    include 'connections.php';
    $row = [];
    if (isset($_GET['id'])) {
        if ($erole == "Admin"){
        $sql = "SELECT 
        payroll.actual_salary, payroll.basic_sal, payroll.hra, payroll.others, 
        payroll.provident_fund, payroll.esi, payroll.ptax, payroll.leave_days, 
        payroll.leave_amount, payroll.net_salary,payroll.working_days,payroll.total_days, emp_info.emp_id, emp_info.emp_name, 
        emp_info.emp_salary 
    FROM 
        payroll
    JOIN 
        emp_info ON payroll.emp_id = emp_info.emp_id 
    WHERE 
        payroll.emp_id =$id";
        } else if ($erole == "Employee"){
            $sql = "SELECT 
            payroll.actual_salary, payroll.basic_sal, payroll.hra, payroll.others, 
            payroll.provident_fund, payroll.esi, payroll.ptax, payroll.leave_days, 
            payroll.leave_amount, payroll.net_salary,payroll.working_days,payroll.total_days, emp_info.emp_id, emp_info.emp_name, 
            emp_info.emp_salary 
        FROM 
            payroll
        JOIN 
            emp_info ON payroll.emp_id = emp_info.emp_id 
        WHERE 
            payroll.emp_id =$eid";
        }

        $result = mysqli_query($con, $sql);
  
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $actual = $row['actual_salary'];
            $basic = $row['basic_sal'];
            $wdays = $row['working_days'];
            $tdays = $row['total_days'];
            $hra = $row['hra'];
            $others = $row['others'];
            $pf = $row['provident_fund'];
            $esi = $row['esi'];
            $ptax = $row['ptax'];
            $ldays = $row['leave_days'];
            $lvamount = $row['leave_amount'];
            $net = $row['net_salary'];
        } else {
            echo "Error: " . mysqli_error($con);
        }
        mysqli_close($con);
    } else {
        echo "Employee ID not provided.";
    }
    ?>
    
<div class="wrapper">
        <?php include 'nav-bar.php'; ?>
        <?php include 'side-bar.php'; ?>
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Payroll Details</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Payroll Details</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <section class="content">
                <div class="col-12">
                    <div>
                        <a class="btn btn-primary float-right" href="payroll.php" role="button"><i class="fa-solid fa-backward"></i></a>
                    </div>
                    <br>
                    <br>
                    <div class="card">
                        <div class="card-header text-center">
                            <h3 class="card-title">Payroll Details</h3>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                    <?php
                                    // echo "<pre>";
                                    // print_r($row);
                                    // echo "</pre>";
                                    ?>
                                    <tr>
                                        <th style="width: 100px;">Actual Salary</th>
                                        <td>
                                            <?php echo $actual; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Basic Salary</th>
                                        <td>
                                            <?php echo $basic; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Working Days</th>
                                        <td>
                                            <?php echo $wdays; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Days in Month</th>
                                        <td>
                                            <?php echo $tdays; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>HRA</th>
                                        <td>
                                            <?php echo $hra; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Others</th>
                                        <td>
                                            <?php echo $others; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Provident Fund</th>
                                        <td>
                                            <?php echo $pf; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>ESI</th>
                                        <td>
                                            <?php echo $esi; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Professional Tax</th>
                                        <td>
                                            <?php echo $ptax; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Leave Days</th>
                                        <td>
                                            <?php echo $ldays; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Leave Amount</th>
                                        <td>
                                            <?php echo $lvamount; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Net Salary</th>
                                        <td>
                                            <?php echo $net; ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php include './js/js.php'; ?>
</body>

</html>