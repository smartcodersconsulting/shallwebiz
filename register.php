<?php 

$con=mysqli_connect("localhost","Vikram","rohit123","erisdbnew");

$jobNationality="SELECT * FROM Nationality ;";

	$resultNationality = $con->query($jobNationality);

$jobState="SELECT * FROM State  ;";
	
	$resultState = $con->query($jobState);

$jobLangSkill="SELECT * FROM LanguageSkill  ;";

	$resultLanguageConverstationSkill= $con->query($jobLangSkill);
	$resultLanguageReadingSkill= $con->query($jobLangSkill);
	$resultLanguageWritingSkill= $con->query($jobLangSkill);
	$resultJapeneseConverstationSkill= $con->query($jobLangSkill);
	$resultJapeneseReadingSkill= $con->query($jobLangSkill);
	$resultJapeneseWritingSkill= $con->query($jobLangSkill);

$jobJLPT="SELECT * FROM JLPT ;";

	$resultJLPT = $con->query($jobJLPT);

$jobIndianLang="SELECT * FROM IndianLanguage ;";
	
	$resultIndianLang1 = $con->query($jobIndianLang);
	$resultIndianLang2 = $con->query($jobIndianLang);
	$resultIndianLang3 = $con->query($jobIndianLang);

$jobOtherLanguage="SELECT * FROM OtherLanguage  ;";

	$resultOtherLanguage1 = $con->query($jobOtherLanguage);
	$resultOtherLanguage2 = $con->query($jobOtherLanguage);
	
$jobDesireLoca="SELECT * FROM DesiredLocation ;";
	
	$resultDesireLocation1 = $con->query($jobDesireLoca);
	$resultDesireLocation2 = $con->query($jobDesireLoca);

$jobExpectedSalary="SELECT * FROM ExpectedSalary ;";

	$resultExpectedSalary= $con->query($jobExpectedSalary);
	
$jobDesireStart="SELECT * FROM DesiredStart ;";

	$resultDesireStartY= $con->query($jobDesireStart);
	$resultDesireStartM= $con->query($jobDesireStart);
	
$jobSourceInformation="SELECT * FROM SourceOfJobInformation  ;";

	$resultSourceInformation= $con->query($jobSourceInformation);
	
$jobQualificationCategory="SELECT * FROM QualificationCategory  ;";

	$resultQualification= $con->query($jobQualificationCategory);

	
  mysqli_close($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="/include/efo.css">
</head>
<body style="background-color:#006097">		

<div class="container " style="padding-top:20px;">
    <div class="row ">
        <div class="col-sm-12 boxed ">

	<nav class="navbar navbar-expand-lg navbar-light " style="margin:10px 0px 10px 0px; !important">
                <div class="container-fluid ">
                        <span style="padding-left:450px;color:white;font-size:large">Registration</span>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    
                </div>
            </nav>
	
	<form  name="registrationForm" action="registration.php?action=infoLoad" method="post" enctype="multipart/form-data" >
		<table class="general" cellspacing="1" style="table-layout: auto;">
		<tbody>
			<tr>
				<th colspan="2"></th>
			</tr>
			<tr>
			<th>User Name<span class="req"> *</span></th>
			<td><input type="text" name="entryUserName" id="entryUserName" value="" placeholder="Please enter email id" maxlength="60" class="txtL" required>&nbsp;&nbsp;<span> User Name must be Email ID</span></td>
			</tr> 
			<tr>
			<th>Password<span class="req"> *</span></th>
			<td><input type="password" name="password" id="password" value="" maxlength="60" class="txtL" required></td>
			</tr>
			<tr>
			<th>Confirm Password<span class="req"> *</span></th>
			<td><input type="password" name="confirmpassword" id="confirmpassword" value="" maxlength="60" class="txtL" required>&nbsp;&nbsp;<span id="message"></span></td>
			</tr> 
			<script>
				$('#password,#confirmpassword').on('keyup',function() {
					if($('#password').val().length > 0 && $('#confirmpassword').val().length > 0 && $('#password').val() == $('#confirmpassword').val()) {
						$('#message').html('Matching').css('color','green');
					} else if($('#password').val().length > 0 && $('#confirmpassword').val().length) {
						$('#message').html('Not Matching').css('color','red');
						}
				});
	</script>
			<tr>
				<th colspan="2"><center>Personal Details</center></th>
			</tr>
			<tr>
			<th>Name<span class="req"> *</span></th>
			<td><input type="text" name="entryName" id="entryName" value="" maxlength="60" class="txtL" required></td>
			</tr> 
			<tr>
			<th>Birth Date(AD)<span class="req"> *</span></th>
			<td><input name="Date_Of_Birth" type="date" required></td>
			</tr>
			<tr>
			<th>Sex</th>
			<td><input type="radio" class="rc" name="entrySex" value="Male" id="sex01" ><label for="sex01">Male</label>
			&nbsp;&nbsp;&nbsp;
			<input type="radio" class="rc" name="entrySex" value="Female" id="sex02" ><label for="sex02">Female</label></td>
			</tr>
			<tr>
			<th><span>Nationality</span><span class="req"> *</span></th>
			<td>
				<select name="o_entryNATIONALITY_ID" id="entryNATIONALITY_ID" required>
					<option value="">-----</option>
					<?php
						if ($resultNationality->num_rows > 0) {
									// output data of each row
							while($row = $resultNationality->fetch_assoc()) {
							
					?>							
								<option value="<?php echo $row["NationalityId"] ; ?>"><?php echo $row["Nation"] ; ?></option>
					<?php
							}
						}
					?>
				</select>
			</td>
			</tr>
			<tr>
			<th>Address</th>
			<td>
				<table>
					<tr>
						<td>Address</td>
						<td>
							<input type="text" style="width:100%" name="entryAdd" id="entryAdd" value="" maxlength="200">
						</td>
					</tr>
					<tr>
						<td>State</td>
						<td>
							<select name="o_entryPref" id="entryPref">
							<option value="">-----</option>
								<?php
										if ($resultState->num_rows > 0) {
									// output data of each row
											while($row = $resultState->fetch_assoc()) {
							
								?>							
											<option value="<?php echo $row["StateId"] ; ?>"><?php echo $row["State"] ; ?></option>
								<?php
											}
										}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td style="width:6em">Zip Code</td>
						<td>
							<input type="text" size="11" style="ime-mode:disabled;" name="entryZip" id="entryZip" value="" maxlength="11">
						</td>
					</tr>
				</table>
			</tr>
			<tr>
				<th>Phone Number<span class="req"> *</span></th>
				<td><input type="text" size="20" style="ime-mode:disabled;" name="entryTel" id="entryTel" value="" maxlength="12" required></td>
			</tr>
			<tr>
				<th>Driving License</th>
				<td>
				    <input type="radio" class="rc" name="entryDrivingLicense" value="Yes" id="entryDrivingLicense1" >
					<label for="entryDrivingLicense1">Yes</label>
					&nbsp;&nbsp;&nbsp;
					<input type="radio" class="rc" name="entryDrivingLicense" value="No" id="entryDrivingLicense2" >
					<label for="entryDrivingLicense2">No</label>
				</td>
			</tr>
			<tr>
				<th colspan="2">Academic Details</th>
			</tr>
			<tr>
				<th>Highest Educational Qualification</th>
				<td>
					<select name="o_entryGrad" id="entryGrad">
						<option value="">-----</option>
						<?php
							if ($resultQualification->num_rows > 0) {
									// output data of each row
								while($row = $resultQualification->fetch_assoc()) {
							
						?>							
									<option value="<?php echo $row["QualificationId"] ; ?>"><?php echo $row["Qualification"] ; ?></option>
						<?php
								}
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<th>School/University Name</th>
				<td>
					<input type="text" class="txtM" name="entrySchool" id="entrySchool" value="" maxlength="70">
				</td>
			</tr>
			<tr>
				<th>Term/Period</th>
				<td>
				Start&nbsp;&nbsp;
				<input name="Term_Start" type="date" style="width: 100px">
				<br><br class="narrow">
				End  &nbsp;&nbsp;&nbsp;
				<input name="Term_End" type="date" style="width: 100px">
				<br><br class="narrow">
				<input type="radio" class="rc" name="entryGradStatus" value="Graduate" id="entryGradStatus1" >
				<label for="entryGradStatus1">Graduate</label>
				&nbsp;&nbsp;&nbsp;
				<input type="radio" class="rc" name="entryGradStatus" value="Drop Out" id="entryGradStatus2" >
				<label for="entryGradStatus2">Drop Out</label>
				</td>
			</tr>
			<tr>
				<th>Work Status</th>
				<td>
					<input type="radio" class="rc" name="entryJobStatus" value="Employed" id="wkstatus01" >
					<label for="wkstatus01">Employed</label>
					&nbsp;&nbsp;&nbsp;
					<input type="radio" class="rc" name="entryJobStatus" value="Employed" id="wkstatus02" >
					<label for="wkstatus02">Unemployed</label>
				</td>
			</tr>
			<tr>
				<th colspan="2">Attached File<br>
				&nbsp;&nbsp;&nbsp;- Word, Excel, PowerPoint, PDF,Html,Text file is able to upload.<br>
<!-- &nbsp;&nbsp;&nbsp;- Volume of each file must be under 500KB. -->
				&nbsp;&nbsp;&nbsp;- Volume of each file must be under 1MB. 
				</th>
			</tr>
			<tr>
					<!--2013/4/28 ???? -->
				<th>Resume<span class="req"> *</span></th>
				<td>
					<input type="file" name="userFile" id="userFile" required>
					<input type="hidden" name="entryFile1View" id="entryFile1View" value="">
					<input type="hidden" name="entryFile1hid" id="entryFile1hid" value="">
				</td>
			</tr>
			<tr>
				<th>Career History</th>
				<td>
					<input type="file" name="entryFile2" id="entryFile2">
					<input type="hidden" name="entryFile2View" id="entryFile2View" value="">
					<input type="hidden" name="entryFile2hid" id="entryFile2hid" value="">
				</td>
			</tr>
				<!--
				<tr>
					<th>Resume in English</th>
					<td>
												<input type="file" name="entryFile3" id="entryFile3">
						<input type="hidden" name="entryFile3View" id="entryFile3View" value="">
						<input type="hidden" name="entryFile3hid" id="entryFile3hid" value="">
					</td>
				</tr>
				-->
			<tr>
				<th>Others</th>
				<td>
					<input type="file" name="entryFile4" id="entryFile4">
					<input type="hidden" name="entryFile4View" id="entryFile4View" value="">
					<input type="hidden" name="entryFile4hid" id="entryFile4hid" value="">
				</td>
			</tr>
			<tr>
				<th colspan="2">Language Skills</th>
			</tr>
			<tr>
				<th>English Skill</th>
				<td>
					Conversation
					<select name="o_entryEngTalk" id="entryEngTalk">
						<option value="">-----</option>
						<?php
							if ($resultLanguageConverstationSkill->num_rows > 0) {
									// output data of each row
								while($row = $resultLanguageConverstationSkill->fetch_assoc()) {
							
						?>							
									<option value="<?php echo $row["LanguageId"] ; ?>"><?php echo $row["Conversation"] ; ?></option>
						<?php
								}
							}
						?>
					</select>
					&nbsp;&nbsp;&nbsp;
					Reading
					<select name="o_entryEngRead" id="entryEngRead">
						<option value="">-----</option>
						<?php
							if ($resultLanguageReadingSkill->num_rows > 0) {
									// output data of each row
								while($row = $resultLanguageReadingSkill->fetch_assoc()) {
							
						?>							
									<option value="<?php echo $row["LanguageId"] ; ?>"><?php echo $row["Reading"] ; ?></option>
						<?php
								}
							}
						?>
					</select>
					&nbsp;&nbsp;&nbsp;
					Writing
					<select name="o_entryEngWrite" id="entryEngWrite">
						<option value="">-----</option>
						<?php
							if ($resultLanguageWritingSkill->num_rows > 0) {
									// output data of each row
								while($row = $resultLanguageWritingSkill->fetch_assoc()) {
							
						?>							
									<option value="<?php echo $row["LanguageId"] ; ?>"><?php echo $row["Writing"] ; ?></option>
						<?php
								}
							}
						?>
					</select>
					<br><br class="narrow">
					TOEIC&nbsp;<input type="text" size="4" style="ime-mode:disabled;" name="entryToeic" id="entryToeic" value="" maxlength="4">&nbsp;
					&nbsp;&nbsp;&nbsp;
					TOEFL&nbsp;<input type="text" size="4" style="ime-mode:disabled;" name="entryToefl" id="entryToefl" value="" maxlength="4">&nbsp;
					<br><br class="narrow">
					<p><B>Note: </B>User needs to be provide marks in above mention test</p>
				</td>
			</tr>
<!-- START #2796 2014-05-20 Shibata -->
			<tr>
				<th>Japanese Skill</th>
				<td>
					Conversation
					<select name="o_entryJpnTalk" id="entryJpnTalk">
						<option value="">-----</option>
						<?php
							if ($resultJapeneseConverstationSkill->num_rows > 0) {
									// output data of each row
								while($row = $resultJapeneseConverstationSkill->fetch_assoc()) {
							
						?>							
									<option value="<?php echo $row["LanguageId"] ; ?>"><?php echo $row["Conversation"] ; ?></option>
						<?php
								}
							}
						?>
					</select>
					&nbsp;&nbsp;&nbsp;
					Reading
					<select name="o_entryJpnRead" id="entryJpnRead">
						<option value="">-----</option>
						<?php
							if ($resultJapeneseReadingSkill->num_rows > 0) {
									// output data of each row
								while($row = $resultJapeneseReadingSkill->fetch_assoc()) {
							
						?>							
									<option value="<?php echo $row["LanguageId"] ; ?>"><?php echo $row["Reading"] ; ?></option>
						<?php
								}
							}
						?>
					</select>
					&nbsp;&nbsp;&nbsp;
					Writing
					<select name="o_entryJpnWrite" id="entryJpnWrite">
						<option value="">-----</option>
						<?php
							if ($resultJapeneseWritingSkill->num_rows > 0) {
									// output data of each row
								while($row = $resultJapeneseWritingSkill->fetch_assoc()) {
							
						?>							
									<option value="<?php echo $row["LanguageId"] ; ?>"><?php echo $row["Writing"] ; ?></option>
						<?php
								}
							}
						?>
					</select>
					<br><br class="narrow">
					&nbsp;&nbsp;&nbsp;
					JLPT
					<select name="o_entryJLPT" id="entryJLPT">
						<option value="">-----</option>
						<?php
							if ($resultJLPT->num_rows > 0) {
									// output data of each row
								while($row = $resultJLPT->fetch_assoc()) {
							
						?>							
									<option value="<?php echo $row["JLPTLevel"] ; ?>"><?php echo $row["JLPTLevel"] ; ?></option>
						<?php
								}
							}
						?>
					</select>
				</td>
			</tr>
<!-- END #2796 2014-05-20 Shibata -->

			<tr>
				<th>Indian Languages</th>
				<td>
<!-- 2013/08/19 oda -->
					Indian Nationality candidates are required to choose<br>
<!--						<span class="req">*</span>1&nbsp; -->
					1&nbsp;
<!-- 2013/08/19 oda -->
					<select name="o_entryIndianLng1" id="entryIndianLng1">
						<option value="">-----</option>
						<?php
							if ($resultIndianLang1->num_rows > 0) {
									// output data of each row
								while($row = $resultIndianLang1->fetch_assoc()) {
							
						?>							
									<option value="<?php echo $row["IndianLangId"] ; ?>"><?php echo $row["LnaguageName"] ; ?></option>
						<?php
								}
							}
						?>
					</select>
					<br><br class="narrow">
<!-- 2013/08/19 oda -->
<!-- 						&nbsp;&nbsp;2&nbsp; -->
					2&nbsp;
<!-- 2013/08/19 oda -->
					<select name="o_entryIndianLng2" id="entryIndianLng2">
						<option value="">-----</option>
						<?php
							if ($resultIndianLang2->num_rows > 0) {
									// output data of each row
								while($row = $resultIndianLang2->fetch_assoc()) {
							
						?>							
									<option value="<?php echo $row["IndianLangId"] ; ?>"><?php echo $row["LnaguageName"] ; ?></option>
						<?php
								}
							}
						?>
					</select>
					<br><br class="narrow">
<!-- 2013/08/19 oda -->
<!--						&nbsp;&nbsp;3&nbsp; -->
					3&nbsp;
<!-- 2013/08/19 oda -->
					<select name="o_entryIndianLng3" id="entryIndianLng3">
							<option value="">-----</option>
						<?php
							if ($resultIndianLang3->num_rows > 0) {
									// output data of each row
								while($row = $resultIndianLang3->fetch_assoc()) {
							
						?>							
									<option value="<?php echo $row["IndianLangId"] ; ?>"><?php echo $row["LnaguageName"] ; ?></option>
						<?php
								}
							}
						?>
					</select>
				</td>
			</tr>
			<script>
			var lastSel1 = $("#entryIndianLng1 option:selected");
			var lastSel2 = $("#entryIndianLng2 option:selected");
			var lastSel3 = $("#entryIndianLng3 option:selected");
			$('#entryIndianLng1,#entryIndianLng2,#entryIndianLng3').change(function() {
					if($('#entryIndianLng1').val().length > 0 && $('#entryIndianLng2').val().length > 0 && $('#entryIndianLng1').val() == $('#entryIndianLng2').val()) {
						alert('Please choose other language');
						lastSel2.attr("selected", true);
					} else if($('#entryIndianLng2').val().length > 0 && $('#entryIndianLng3').val().length > 0 && $('#entryIndianLng2').val() == $('#entryIndianLng3').val()) {
						alert('Please choose other language');
						lastSel3.attr("selected", true);
					} else if($('#entryIndianLng1').val().length > 0 && $('#entryIndianLng3').val().length > 0 && $('#entryIndianLng1').val() == $('#entryIndianLng3').val()) {
						alert('Please choose other language');
						lastSel3.attr("selected", true);
					}
				});
			</script>
			<tr>
				<th>Other Languages</th>
				<td>
					1&nbsp;
					<select name="o_entryOtherLng1" id="entryOtherLng1">
						<option value="">-----</option>
						<?php
							if ($resultOtherLanguage1->num_rows > 0) {
									// output data of each row
								while($row = $resultOtherLanguage1->fetch_assoc()) {
							
						?>							
									<option value="<?php echo $row["OtherLangId"] ; ?>"><?php echo $row["OtherLangauge"] ; ?></option>
						<?php
								}
							}
						?>
					</select>
					<br><br class="narrow">
					2&nbsp;
					<select name="o_entryOtherLng2" id="entryOtherLng2">
						<option value="">-----</option>
						<?php
							if ($resultOtherLanguage2->num_rows > 0) {
									// output data of each row
								while($row = $resultOtherLanguage2->fetch_assoc()) {
							
						?>							
									<option value="<?php echo $row["OtherLangId"] ; ?>"><?php echo $row["OtherLangauge"] ; ?></option>
						<?php
								}
							}
						?>
					</select>
				</td>
			</tr>
			<script>
			var lastSel1 = $("#entryOtherLng2 option:selected");
			$('#entryOtherLng1,#entryOtherLng2').on('change',function() {
					if($('#entryOtherLng1').val().length > 0 && $('#entryOtherLng2').val().length > 0 && $('#entryOtherLng1').val() == $('#entryOtherLng2').val()) {
						alert('Please choose other language');
						lastSel2.attr("selected", true);
					}
				});
			</script>
			<tr>
				<th colspan="2">Desire/Others</th>
			</tr>
			<tr>
				<th>Desired Location</th>
				<td>
					<span class="req">*</span>1&nbsp;
					<select name="o_entryWishArea1" id="entryWishArea1" required>
							<option value="">Please select-----</option>
						<?php
							if ($resultDesireLocation1->num_rows > 0) {
									// output data of each row
								while($row = $resultDesireLocation1->fetch_assoc()) {
							
						?>							
									<option value="<?php echo $row["LocationId"] ; ?>"><?php echo $row["Location"] ; ?></option>
						<?php
								}
							}
						?>
					</select>
						<!--
						<input type="text" style="ime-mode:disabled;" name="entryWishArea1" id="entryWishArea1" value="">
						<br><br class="narrow">
						-->
					<br><br class="narrow">
					&nbsp;&nbsp;2&nbsp;
					<select name="o_entryWishArea2" id="entryWishArea2">
						<option value="">Please select-----</option>
						<?php
							if ($resultDesireLocation2->num_rows > 0) {
									// output data of each row
								while($row = $resultDesireLocation2->fetch_assoc()) {
							
						?>							
									<option value="<?php echo $row["LocationId"] ; ?>"><?php echo $row["Location"] ; ?></option>
						<?php
								}
							}
						?>
					</select>
				</td>
				</tr>
				<script>
				var lastSel2 = $("#entryWishArea2 option:selected");
					$('#entryWishArea1,#entryWishArea2').on('change',function() {
					if($('#entryWishArea1').val().length > 0 && $('#entryWishArea2').val().length > 0 && $('#entryWishArea1').val() == $('#entryWishArea2').val()) {
						alert('Please choose other location');
						lastSel2.attr("selected", true);
					}
				});
			</script>
			<tr>
				<th>Expected Salary<span class="req"> * </span></th>
				<td>
					<select name="o_entryExpectedSalary" id="entryExpectedSalary" required>
						<option value="">Please select-----</option>
						<?php
							if ($resultExpectedSalary->num_rows > 0) {
									// output data of each row
								while($row = $resultExpectedSalary->fetch_assoc()) {
							
						?>							
									<option value="<?php echo $row["SalaryId"] ; ?>"><?php echo $row["SalaryOptions"] ; ?></option>
						<?php
								}
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<th>Desired Salary<span class="req"> *</span></th>
				<td>
					<input type="text" style="ime-mode:disabled;" size="10" name="entryWishIncome" id="entryWishIncome" value="" maxlength="10"> Rs
				</td>
				<input type="hidden" name="hdn_Desired Salary" value="" >
			</tr>
			<tr>
				<th>Desired Start</th>
				<td>
					<select name="o_entryWishStartY" id="entryWishStartY">
					<option value="">--</option>
						<?php
							if ($resultDesireStartY->num_rows > 0) {
									// output data of each row
								while($row = $resultDesireStartY->fetch_assoc()) {
							
						?>							
									<option value="<?php echo $row["StartId"] ; ?>"><?php echo $row["StartYear"] ; ?></option>
						<?php
								}
							}
						?>
					</select>&nbsp;/
					<select name="o_entryWishStartM" id="entryWishStartM">
						<option value="">--</option>
						<?php
							if ($resultDesireStartM->num_rows > 0) {
									// output data of each row
								while($row = $resultDesireStartM->fetch_assoc()) {
							
						?>							
									<option value="<?php echo $row["StartId"] ; ?>"><?php echo $row["StartMonth"] ; ?></option>
						<?php
								}
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<th>Other Notes to <br> Consultant</th>
				<td>
					<textarea name="entryOther" maxlength="500"></textarea>
				</td>
				<input type="hidden" name="hdn_Other Notes to Consultant" value="" >
			</tr>
			<tr>
				<th>How did you know<br> our company?<span class="req"> *</span></th>
				<td>
					<select name="o_entryMedia" id="entryMedia" required>
						<option value="">Please select-----</option>
						<?php
							if ($resultSourceInformation->num_rows > 0) {
									// output data of each row
								while($row = $resultSourceInformation->fetch_assoc()) {
							
						?>							
									<option value="<?php echo $row["SourceId"] ; ?>"><?php echo $row["SourceInformation"] ; ?></option>
						<?php
								}
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<th colspan="2" style="text-align: center;"><input name="submit" type="submit" value="Register" /></th>
			</tr>
		</tbody>
		</table>
	</form>
</div>
    </div>
</div>
</body>
</html>