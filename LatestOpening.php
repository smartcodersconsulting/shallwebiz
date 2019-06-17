<?php 
	$con=mysqli_connect("localhost","Vikram","rohit123","erisdbnew");
	 
	$ssql = "SELECT * FROM jobInfo where convert(jobPostDate,date) between DATE_ADD(current_date(), INTERVAL -1 month) and current_date() and jobArchive='active' ;";
	$result = $con->query($ssql);
	 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    <link href="dataTable/datatable.css" rel="stylesheet" />
    <style type="text/css">
        div.dataTables_wrapper {
            width: 100%;
            margin: 0 auto;
        }
    </style>
    
    <script src="dataTable/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#example').DataTable({
                "scrollY": 200,
                "scrollX": true
            });
        });
    </script>
</head>
<body>
    <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Job ID</th>
                <th>Job Title</th>
                <th>Location</th>
            </tr>
        </thead>
        <tbody>
		<?php
				$count=0;
				if ($result->num_rows > 0) {
									// output data of each row
					while($row = $result->fetch_assoc()) {
						
						$location='';
						$occupation='';
						$industry='';
						
						$jobLocation = "SELECT Location FROM Location where Location_Id=".$row["jobLocation"].";";
						$resultLocation = $con->query($jobLocation);
						
						$jobOccupation = "SELECT Type_Of_Occupation FROM Occupation where Occupation_Id=".$row["jobOccupation"].";";
						$resultOccupation = $con->query($jobOccupation);
						
						$jobIndustry = "SELECT Type_Of_Industry FROM Industry where Industry_Id=".$row["jobIndustry"].";";
						$resultIndustry= $con->query($jobIndustry);
						
						
						while($locationId = $resultLocation->fetch_assoc()) {							
								$location=$locationId["Location"];
						}
						
						while($occupationId = $resultOccupation->fetch_assoc()) {							
								$occupation=$occupationId["Type_Of_Occupation"];
						}
						
						while($industryId = $resultIndustry->fetch_assoc()) {							
								$industry=$industryId["Type_Of_Industry"];
						}
			?>
            <tr class="table-row" data-href="index.php">
                <td><?php echo $row["jobPostDate"];?></td>
                <td><?php echo $row["jobTitle"];?></td>
                <td><?php echo $location;?></td>
            </tr>
			
			<?php
					$count=$count+1;
					}
				}
			?>
        </tbody>
    </table>
</body>
</html>