<?php 

$con=mysqli_connect("localhost","Vikram","rohit123","erisdbnew");
	
$jobOccupation="SELECT * FROM Occupation ;";

	$resultOccupation = $con->query($jobOccupation);

$jobIndustry="SELECT * FROM Industry ;";
	
	$resultIndustry = $con->query($jobIndustry);

$jobLocation="SELECT * FROM Location ;";

	$resultLocation = $con->query($jobLocation);
	
	

  mysqli_close($con);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja-JP"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>
	<title>Job Post Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="/include/common.css">
	<link rel="stylesheet" type="text/css" href="/include/efo.css">
	<link rel="stylesheet" type="text/css" href="/include/reset.css">
	<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
</head>
<body>

	<div class="boxwrap" id="entry">
    <p class="headline">Job Post Form</p>
	<div class="box">

    <form  name="jobPostForm" action="jobPost.php?action=infoLoad" method="post" enctype="multipart/form-data" onsubmit="validateForm()">
		<table class="general"cellspacing="1" style="table-layout: auto;">
		<tbody>
			<tr>
				<th colspan="2"></th>
			</tr>
			<tr>
				<th>Title<span class="req"> *</span></th>
				<td><input type="text" name="job_title" id="job_title" value="" maxlength="100" class="txtL" required></td>
			</tr> 
			<tr>
				<th>Occupation<span class="req"> *</span></th>
				<td>
					<select name="o_job_occupation" id="job_occupation" required>
					<option value="">--------</option>
					<?php
						if ($resultOccupation->num_rows > 0) {
									// output data of each row
							while($row = $resultOccupation->fetch_assoc()) {
							
					?>							
								<option value="<?php echo $row["Occupation_id"] ; ?>"><?php echo $row["Type_Of_Occupation"] ; ?></option>
					<?php
							}
						}
					?>
					</select>
				</td>
			</tr>
			<tr>
				<th>Industry<span class="req"> *</span></th>
				<td>
					<select name="o_job_industry" id="job_industry" required>
					<option value="">--------</option>
					<?php
						if ($resultIndustry->num_rows > 0) {
									// output data of each row
							while($row = $resultIndustry->fetch_assoc()) {
							
					?>							
								<option value="<?php echo $row["Industry_Id"] ; ?>"><?php echo $row["Type_Of_Industry"] ; ?></option>
					<?php
							}
						}
					?>
					</select>
				</td>
			</tr>
			<tr>
				<th>Location<span class="req"> *</span></th>
				<td>
					<select name="o_job_location" id="job_location" required>
					<option value="">--------</option>
					<?php
						if ($resultLocation->num_rows > 0) {
									// output data of each row
							while($row = $resultLocation->fetch_assoc()) {
							
					?>							
								<option value="<?php echo $row["Location_Id"] ; ?>"><?php echo $row["Location"] ; ?></option>
					<?php
							}
						}
					?>
					</select>
				</td>
			</tr>
			<tr>
			<th>Description<span class="req"> *</span></th>
			<td><textarea name="job_description" id="job_description" value="" required></textarea></td>
			</tr>
			<script type="text/javascript">
				CKEDITOR.replace( 'job_description' );
			</script>
			<tr>
			<th>Required Experience</th>
			<td><input name="job_required_experience" id="job_required_experience" type="text" value="" class="txtL"></td>
			</tr>
			<tr>
			<th>Salary</th>
			<td><input name="job_salary" type="text" value="" class="txtL"></td>
			</tr>
			<tr>
			<th>Salary Comment</th>
			<td><input name="job_salary_comment" type="text" value="" class="txtL"></td>
			</tr>
			<tr>
			<th>Benefits</th>
			<td><input name="job_benefits" type="text" value="" class="txtL"></td>
			</tr>
			<tr>
			<th>Message From Consultant</th>
			<td><input name="job_message_from_consultant" value="" type="text"class="txtL"td>
			</tr>
			<tr>
			<th>Business</th>
			<td><input name="business" type="text" value="" class="txtL"></td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center;">
					<input name="submit" type="submit" value="Submit" />
				</td> 
			</tr>
		</tbody>
		</table>
	</form>
	</div>
	</div>
	
<script>
function validateForm() {
    
  } 

</script>
</body>
</html>