<?php
include 'header.php';
 if(isset($_REQUEST['book']))
 {

 $username = $_REQUEST['userName'];
 $lastName = $_REQUEST['lastName'];
 $usermail = $_REQUEST['userEmail'];
 $phone = $_REQUEST['userPhone'];
 $book_date = $_REQUEST['bookingdate'];
 $booking_service = $_REQUEST['bookingservice'];
 $message = $_REQUEST['message'];
 $sql = "insert into Bookings(First_Name,Last_Name,Contact_No,Email,Booking_Date,Booking_Service,Message)values('".$username."','".$lastName."','".$usermail."','".$phone."','".$book_date."','".$booking_service."','".$message."')";   
 $inserted = $conn->query($sql);
 if($inserted){
   $posted = true;
 $msg= 'Successfully Booked!!';
 }
 }
?>
		<!-- /inner_content -->
	<div class="banner-bottom">
		<div class="container">
			<div class="inner_sec_info_agileits_w3">
              <h2 class="heading-agileinfo">Booking Form<span>We offer extensive Services.</span></h2>
				<div class="contact-form">
				<?php if( $posted ) {
				if($msg){
				?>
				<span class="msg"><?php  echo $msg; ?></span><?php } }?>
					      <form method="post">
							 <div class="left_form">
					    	<div>
						    	<span><label>First Name</label></span>
						    	<span><input name="userName" id="userName" type="text" class="textbox" ></span>
								<span class="err fname-err"></span>
						    </div>
							<div>
						    	<span><label>Last Name</label></span>
						    	<span><input name="lastName" id="lastName" type="text" class="textbox" ></span>
								<span class="err lname-err"></span>
						    </div>
							<div>
						    	<span><label>Booking Date</label></span>
						    	<span><input name="bookingdate" id="bookingdate" type="text" class="textbox" ></span>
								<span class="err bdate-err"></span>
						    </div>
							<div>
						    	<span><label>Booking Service</label></span>
						    	<span><input name="bookingservice" id="bookingservice" type="text" class="textbox"></span>
								<span class="err bsrvc-err"></span>
						    </div>
					    </div>
					    <div class="right_form">
						 <div>
						    	<span><label>E-mail</label></span>
						    	<span><input name="userEmail" id="useremail" type="email" class="textbox" ></span>
								<span class="err email-err"></span>
						    </div>
						    <div>
						     	<span><label>Phone No.</label></span>
						    	<span><input name="userPhone" id="mobileno" type="text" class="textbox" ></span>
								<span class="err mobile-err"></span>
						    </div>
								<div>					    	
									<span><label>Message</label></span>
									<span><textarea name="message" id="message"> </textarea></span>
								    <span class="err msg-err"></span>
								</div>
								<div>
									<span><input type="submit" name="book" value="Book Now" class="myButton"></span>
							  </div>
					    </div>
													   
					    <div class="clearfix"></div>
						</form>
						
				  </div>
			</div>
		

		</div>
	</div>
		
<?php
include 'footer.php'?>
	<script>
	$(document).ready(function(){
	   $("form").submit(function(){
	var username = $("#userName").val();
	var lastName = $("#lastName").val();
	var bookingdate = $("#bookingdate").val();
	var bookingservice = $("#bookingservice").val();
	var useremail = $("#useremail").val();
	var mobileno = $("#mobileno").val();
	var message = $("#message").val();
	var pattern=/^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
	var numericReg = /^\d*[0-9](|.\d*[0-9]|,\d*[0-9])?$/;
	
	if(username==''){
			$(".fname-err").text("Please enter First name.");
			jQuery("#userName").focus();
			return false;
		}
		else{
			$(".fname-err").text("");
		}
	if(lastName==''){
			$(".lname-err").text("Please enter Last name.");
			jQuery("#lastName").focus();
			return false;
		}
		else{
			$(".lname-err").text("");
		}
    if(bookingdate=='')
	{
			$(".bdate-err").text("Please enter your Booking Date.");
			jQuery("#bookingdate").focus();
			return false;
	}
		else
	{
			$(".bdate-err").text("");
	}
	if(bookingservice==''){
			$(".bsrvc-err").text("Please enter Service name.");
			jQuery("#bookingservice").focus();
			return false;
		}
		else{
			$(".bsrvc-err").text("");
		}
		
	if(useremail==''){
		$(".email-err").text("Please enter your  Email.");
		$("#useremail").focus();
		return false;
		}
	else if(!pattern.test(useremail))
	{
	  $(".email-err").text('Please enter valid e-mail address');
	 $("#useremail").focus();
		return false;
	}
	else
	{
		$(".email-err").text("");
	}
		
    if(mobileno=='')
	{
			$(".mobile-err").text("Please enter your Phone Number.");
			jQuery("#mobileno").focus();
			return false;
	}
	else if(!numericReg.test(mobileno))
	{
		$(".mobile-err").text("Please enter your Valid Phone Number.");
			jQuery("#mobileno").focus();
			return false;
	}	
	else
	{
			$(".mobile-err").text("");
	}
	
	   });
	});
</script>