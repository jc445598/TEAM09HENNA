<?php
$page='contact';
include 'header.php';
$posted = false;
if(isset($_REQUEST['contact_us']))
 {
  
 $username = $_REQUEST['userName'];
 $lastName = $_REQUEST['lastName'];
 $usermail = $_REQUEST['userEmail'];
 $phone = $_REQUEST['userPhone'];
 $message = $_REQUEST['message'];
  $sql = "insert into Contact(First_Name,Last_Name,Contact_no,Email,Message)values('".$username."','".$lastName."','".$phone."','".$usermail."','".$message."')";   
 $inserted = $conn->query($sql);
 if($inserted){
 $posted = true;
 $msg= 'Successfully Added!!';
 } 
 }

?>
		<!-- /inner_content -->
	<div class="banner-bottom">
		<div class="container">
			<div class="inner_sec_info_agileits_w3">
              <h2 class="heading-agileinfo">Mail Us<span>We offer extensive Services.</span></h2>
				<div class="contact-form">
				<?php if( $posted ) {?>
				<span class="msg"><?php if($msg){ echo $msg; } ?></span><?php }?> 
					     <form method="post">
							 <div class="left_form">
					    	<div>
						    	<span><label>First Name</label></span>
						    	<span><input name="userName" type="text" class="textbox" required="required"></span>
						    </div>
							<div>
						    	<span><label>Last Name</label></span>
						    	<span><input name="lastName" type="text" class="textbox" required="required"></span>
						    </div>
							<div>
						     	<span><label>Phone No.</label></span>
						    	<span><input name="userPhone" type="text" class="textbox" required="required"></span>
						    </div>
						    
						   
					    </div>
					    <div class="right_form">
						 <div>
						    	<span><label>E-mail</label></span>
						    	<span><input name="userEmail" type="email" class="textbox" required="required"></span>
						    </div>
								<div>					    	
									<span><label>Message</label></span>
									<span><textarea name="message" required="required"> </textarea></span>
								</div>
									<div>
									<span><input type="submit" name="contact_us" value="Submit" class="myButton"></span>
							  </div>
					    </div>
													   
					    <div class="clearfix"></div>
						</form>
						
				  </div>
			</div>
		

		</div>
	</div>
		<!-- /map -->
			<div class="map_w3layouts_agile">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3537.4448751061946!2d153.10646881505866!3d-27.548700482857836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915b5f8171dbd7%3A0x6730f1e29f316fdd!2s2+Redpath+St%2C+Wishart+QLD+4122!5e0!3m2!1sen!2sau!4v1522061617571" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
				
			</div>
		<!-- //map -->
<?php
include 'footer.php'?>