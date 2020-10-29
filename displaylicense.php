<?php

global $wpdb;
$tablename = $wpdb->prefix . "customlicense";

// Delete record
if (isset($_GET['delid'])) {
	$delid = $_GET['delid'];
	$wpdb->query("DELETE FROM " . $tablename . " WHERE id=" . $delid);
}
?>
<h1>All Licenses</h1>

<table width='100%' border='1' style='border-collapse: collapse;'>
	<tr>
		<th>SN</th>
		<th>TYPE</th>
		<th>FIRSTNAME</th>
		<th>MIDDLENAME</th>
		<th>LASTNAME</th>
		<th>SSNFEIN</th>
		<th>NPN</th>
		<th>BIRTHDATE</th>
		<th>COSTCENTER</th>
		<th>PROFILEID</th>
		<th>CESTATE</th>
		<th>STATELICENSE</th>
		<th>RESIDENCY</th>
		<th>LICENSETYPE</th>
		<th>LICENSENUMBER</th>
		<th>EXPIRATIONDATE</th>
		<th>EFFECTIVEDATE</th>
		<th>LOADETAIL</th>
		<th>LOAEFFECTIVEDATE</th>
		<th>LOACANCELDATE</th>
		<th>LICENSESTATUS</th>
		<th>APPOINTMENTSTATUS</th>
		<th>DESIGNATEHOMESTATE</th>
		<th>RENEWALFLAG</th>
		<th>ACTION</th>
	</tr>

	<?php
	// Select records
	$licensesList = $wpdb->get_results("SELECT * FROM " . $tablename . " order by id desc");
	if (count($licensesList) > 0) {
		$count = 1;
		foreach ($licensesList as $license) {
			$id = $license->id;
			$type = $license->type;
			$firstname = $license->firstname;
			$middlename = $license->middlename;
			$lastname = $license->lastname;
			$ssnfein = $license->ssnfein;
			$npn = $license->npn;
			$birthdate = $license->birthdate;
			$costcenter = $license->costcenter;
			$profileid = $license->profileid;
			$cestate = $license->cestate;
			$statelicense = $license->statelicense;
			$residency = $license->residency;
			$licensetype = $license->licensetype;
			$licensenumber = $license->licensenumber;
			$expirationdate = $license->expirationdate;
			$effectivedate = $license->effectivedate;
			$loadetail = $license->loadetail;
			$loaeffectivedate = $license->loaeffectivedate;
			$loacanceldate = $license->loacanceldate;
			$licensestatus = $license->licensestatus;
			$appointmentstatus = $license->appointmentstatus;
			$designatehomestate = $license->designatehomestate;
			$renewalflag  = $license->renewalflag;

			echo "<tr>		
					<td>" . $count . "</td>
					<td>" . $type . "</td>
					<td>" . $firstname . "</td>
					<td>" . $middlename . "</td>
					<td>" . $lastname . "</td>
					<td>" . $ssnfein . "</td>
					<td>" . $npn . "</td>
					<td>" . $birthdate . "</td>
					<td>" . $costcenter . "</td>
					<td>" . $profileid . "</td>
					<td>" . $cestate . "</td>
					<td>" . $statelicense . "</td>
					<td>" . $residency . "</td>
					<td>" . $licensetype . "</td>
					<td>" . $licensenumber . "</td>
					<td>" . $expirationdate . "</td>
					<td>" . $effectivedate . "</td>
					<td>" . $loadetail . "</td>
					<td>" . $loaeffectivedate . "</td>
					<td>" . $loacanceldate . "</td>
					<td>" . $licensestatus . "</td>
					<td>" . $appointmentstatus . "</td>
					<td>" . $designatehomestate . "</td>
					<td>" . $renewalflag . "</td>
		    	<td><a href='?page=alllicenses&delid=" . $id . "'>Delete</a></td>
		    </tr>
		    ";
			$count++;
		}
	} else {
		echo "<tr><td colspan='5'>No record found</td></tr>";
	}

	?>
</table>