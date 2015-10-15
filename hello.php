<?php
function fooor($month,$year)
{
    $days = array('Mon', 'Tue', 'Wed', 'Thu','Fri','Sat','Sun');
    $time=strtotime($year."-".$month."-1");
    echo $year."  ".date("F",$time);
    echo "<table border =2>";
    echo "<tr>";
    for ($i = 0; $i <7; $i++) {
        echo "<td>";
        echo $days[$i];
        echo "</td>";
    }  
    echo "</tr>";
    echo "<tr>";
   
    $weekday=date('w',$time)-1;
    for ($i = 0; $i <$weekday; $i++)
    {
        echo "<td>";
    echo "</td>";
    }
    $number = date('t',$time);
    for ($i = 1; $i <=$number; $i++)
    {
        echo "<td>";
        echo $i;
        echo "</td>";
     if(($i+$weekday)%7==0)
     {
         echo "<tr>";
    echo "</tr>";}
    }echo "</table>";
    
   
    
    
}
function localdate($month,$year)
{
    echo "<br/>";
   $number = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    echo $number;
}
?>
<html>
	<head>
		<title>PHP</title>
	</head>
	<body>
		<?php echo '<p>Привет, мир!</p>'; ?>
        <form>
                <input type="text" name="year" value="<?php echo $_GET["year"];?>">
                <select name="month">
                    <?php for($i = 1; $i <=12; $i++){
                    echo "<option value=".$i.">".$i."</option>";}
                    ?>
                </select>
            <input type="submit" >
        </form>
        <?php fooor($_GET["month"],$_GET["year"]);?>
	</body>
</html>