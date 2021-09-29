<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

    if(isset($_POST['submit']))
  {
  	$bid=$_GET['bookid'];
  	
 $name=$_POST['name'];
  $mobnum=$_POST['mobnum'];
 $email=$_POST['email'];
 $edate=$_POST['edate'];
 $est=$_POST['est'];
  $eetime=$_POST['eetime'];
 $vaddress=$_POST['vaddress'];
 $eventtype=$_POST['eventtype'];
 $addinfo=$_POST['addinfo'];
 $bookingid=mt_rand(100000000, 999999999);
$sql="insert into tblbooking(BookingID,ServiceID,Name,MobileNumber,Email,EventDate,EventStartingtime,EventEndingtime,VenueAddress,EventType,AdditionalInformation)values(:bookingid,:bid,:name,:mobnum,:email,:edate,:est,:eetime,:vaddress,:eventtype,:addinfo)";
$query=$dbh->prepare($sql);
$query->bindParam(':bookingid',$bookingid,PDO::PARAM_STR);
$query->bindParam(':bid',$bid,PDO::PARAM_STR);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':mobnum',$mobnum,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':edate',$edate,PDO::PARAM_STR);
$query->bindParam(':est',$est,PDO::PARAM_STR);
$query->bindParam(':eetime',$eetime,PDO::PARAM_STR);
$query->bindParam(':vaddress',$vaddress,PDO::PARAM_STR);
$query->bindParam(':eventtype',$eventtype,PDO::PARAM_STR);
$query->bindParam(':addinfo',$addinfo,PDO::PARAM_STR);

 $query->execute();
   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    echo '<script>alert("Your Booking Request Has Been Sent. We Will Contact You Soon")</script>';
echo "<script>window.location.href ='cart.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

}

?>

<!DOCTYPE html>
<html>
<head>
<title>Assist || Appointment Form</title>
<link href="css/bootstrap2.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<!---//End-css-style-switecher----->
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
		<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
	   <script type="text/javascript">
			$(document).ready(function() {
				/*
				 *  Simple image gallery. Uses default settings
				 */

				$('.fancybox').fancybox();

			});
		</script>

</head>
<body></body>
<?php include('header.php');?>
<div class="contact content">
	 <div class="container"> 		 
		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Appointment Form</li>	  
		 </ol>
		 <br>
		 <br>
		 <br>
			 <div class="contact-grids">
				 <div class="col-md-6 contact-left">
					 <p>Please fill out the form below with your details.</p>
					 <form method="post">
					 	
						 <ul>
							 <li class="text-info">Name: </li>
							 <li><input type="text" class="form-control" name="name" required="true"></li>
						 </ul>					 				 
						 <ul>
							 <li class="text-info">Email: </li>
							 <li><input type="email" class="form-control" name="email" required="true"></li>
						 </ul>
						 <ul>
						 	 <ul>
							 <li class="text-info">Mobile Number: </li>
							 <li><input type="text" class="text" name="mobnum" required="true" maxlength="10" pattern="[0-9]+"></li>
						 </ul>
							 <li class="text-info">Date: </li>
							 <li><input type="date" id="serviceDate" class="form-control" min="" onfocus="this.min=new Date().toISOString().split('T')[0]"></li>
						 </ul>					 
						 <ul>
							 <li class="text-info">Time:</li>
							 <li><select type="text" class="form-control" name="est" required="true">
							 	<option value="">Select Time</option>
							 	<option value="8 a.m">8 a.m</option>
							 	<option value="9 a.m">9 a.m</option>
							 	<option value="10 a.m">10 a.m</option>
							 	<option value="11 a.m">11 a.m</option>
							 	<option value="12 p.m">12 p.m</option>
							 	<option value="1 p.m">1 p.m</option>
							 	<option value="2 p.m">2 p.m</option>
							 	<option value="3 p.m">3 p.m</option>
							 	<option value="4 p.m">4 p.m</option>
							 	<option value="5 p.m">5 p.m</option>
							 </select></li>
						 </ul>
						 <!-- <ul>
							 <li class="text-info">Event Finish Time:</li>
							 <li><select type="text" class="form-control" name="eetime" required="true">
							 	<option value="">Select Finish Time</option>
							 	<option value="9 a.m">9 a.m</option>
							 	<option value="10 a.m">10 a.m</option>
							 	<option value="11 a.m">11 a.m</option>
							 	<option value="12 p.m">12 a.m</option>
							 	<option value="1 p.m">1 p.m</option>
							 	<option value="2 p.m">2 p.m</option>
							 	<option value="3 p.m">3 p.m</option>
							 	<option value="4 p.m">4 p.m</option>
							 	<option value="5 p.m">5 p.m</option>
							 	<option value="6 p.m">6 p.m</option>
							 </select></li>
						 </ul> -->
						 <ul>
							 <li class="text-info">Address:</li>
							 <li><textarea type="text" class="form-control" name="vaddress" required="true" ></textarea></li>
						 </ul>
						 <!-- <ul>
							 <li class="text-info">Type of Event:</li>
							 <li><select type="text" class="form-control" name="eventtype" required="true" >
							 	<option value="">Choose Event Type</option> -->
							 	<!-- <?php 

$sql2 = "SELECT * from   tbleventtype ";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$result2=$query2->fetchAll(PDO::FETCH_OBJ);

foreach($result2 as $row)
{          
    ?>  
<option value="<?php echo htmlentities($row->EventType);?>"><?php echo htmlentities($row->EventType);?></option>
 <?php } ?> -->
							 <!-- </select></li>
						 </ul>	 -->
						 <ul>
							 <li class="text-info">Additional Information:</li>
							 <li><textarea type="text" class="form-control" name="addinfo" required="true"></textarea></li>
						 </ul>					
						 <input type="submit" name="submit" value="Book">					 
					 </form>
				 </div>
				 <div class="col-md-6 contact-right">
					 	<div class="contact-map">
						<img src="assets/images/431429.jpg" class="img-responsive" height="900" width="500" alt=""/>
						</div>
				 </div>
				 <div class="clearfix"></div>
			 </div>
		 </div>
		 <br>
		 <br>
		<?php include_once('footer.php');?>
	 </div>
</div>
<!---->

<!---->
</body>
</html>