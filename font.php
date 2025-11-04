<?php
$fdate=$_POST['fromdate'];
 $tdate=$_POST['todate'];
$rtype=$_POST['requesttype'];
$tdate=$_POST['todate'];
?>
<?php
$userid=$_SESSION['detsuid'];
$ret=mysqli_query($con,"SELECT ExpenseDate,SUM(ExpenseCost) as totaldaily FROM `tblexpense`  where (ExpenseDate BETWEEN '$fdate' and '$tdate') && (UserId='$userid') group by ExpenseDate");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>