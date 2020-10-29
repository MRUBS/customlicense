<?php

global $wpdb;

// Add record
if (isset($_POST['license_submit'])) {
	$type = $_POST['cst_type'];
	$firstname = $_POST['cst_firstname'];
	$middlename = $_POST['cst_middlename'];
	$lastname = $_POST['cst_lastname'];
	$ssnfein = $_POST['cst_ssnfein'];
	$npn = $_POST['cst_npn'];
	$birthdate = $_POST['cst_birthdate'];
	$costcenter = $_POST['cst_costcenter'];
	$profileid = $_POST['cst_profileid'];
	$cestate = $_POST['cst_cestate'];
	$statelicense = $_POST['cst_statelicense'];
	$residency = $_POST['cst_residency'];
	$licensetype = $_POST['cst_licensetype'];
	$licensenumber = $_POST['cst_licensenumber'];
	$expirationdate = $_POST['cst_expirationdate'];
	$effectivedate = $_POST['cst_effectivedate'];
	$loadetail = $_POST['cst_loadetail'];
	$loaeffectivedate = $_POST['cst_loaeffectivedate'];
	$loacanceldate = $_POST['cst_loacanceldate'];
	$licensestatus = $_POST['cst_licensestatus'];
	$appointmentstatus = $_POST['cst_appointmentstatus'];
	$designatehomestate = $_POST['cst_designatehomestate'];
	$renewalflag = $_POST['cst_renewalflag'];
	$tablename = $wpdb->prefix . "customlicense";

	if ($firstname != '' && $lastname != '' && $npn != '') {
		$check_data = $wpdb->get_results("SELECT * FROM " . $tablename . " WHERE npn='" . $npn . "' ");
		if (count($check_data) == 0) {
			$insert_sql = "INSERT INTO " . $tablename . "(type,firstname,middlename,lastname,ssnfein,npn,birthdate,costcenter,profileid,cestate,statelicense,residency,licensetype,licensenumber,expirationdate,effectivedate,loadetail,loaeffectivedate,loacanceldate,licensestatus,appointmentstatus,designatehomestate,renewalflag) values('" . $type . "','" . $firstname . "','" . $middlename . "','" . $lastname . "','" . $ssnfein . "','" . $npn . "','" . $birthdate . "','" . $costcenter . "','" . $profileid . "','" . $cestate . "','" . $statelicense . "','" . $residency . "','" . $licensetype . "','" . $licensenumber . "','" . $expirationdate . "','" . $effectivedate . "','" . $loadetail . "','" . $loaeffectivedate . "','" . $loacanceldate .  "','" . $licensestatus . "','" . $appointmentstatus . "','" . $designatehomestate . "','" . $renewalflag . "') ";
			$wpdb->query($insert_sql);
			echo "Save Successfully.";
		}
	}
}

?>
<h1>Add New License</h1>
<form method='post' action=''>
	<table>
		<tr>
			<td>Type</td>
			<td><input type='text' name='cst_type'></td>
		</tr>
		<tr>
			<td>Firstname</td>
			<td><input type='text' name='cst_firstname'></td>
		</tr>
		<tr>
			<td>Middlename</td>
			<td><input type='text' name='cst_middlename'></td>
		</tr>
		<tr>
			<td>Lastname</td>
			<td><input type='text' name='cst_lastname'></td>
		</tr>
		<tr>
			<td>Ssnfein</td>
			<td><input type='text' name='cst_ssnfein'></td>
		</tr>
		<tr>
			<td>Npn</td>
			<td><input type='text' name='cst_npn'></td>
		</tr>
		<tr>
			<td>Birthdate</td>
			<td><input type='text' name='cst_birthdate'></td>
		</tr>
		<tr>
			<td>Costcenter</td>
			<td><input type='text' name='cst_costcenter'></td>
		</tr>
		<tr>
			<td>Profileid</td>
			<td><input type='text' name='cst_profileid'></td>
		</tr>
		<tr>
			<td>Cestate</td>
			<td><input type='text' name='cst_cestate'></td>
		</tr>
		<tr>
			<td>Statelicense</td>
			<td><input type='text' name='cst_statelicense'></td>
		</tr>
		<tr>
			<td>Residency</td>
			<td><input type='text' name='cst_residency'></td>
		</tr>
		<tr>
			<td>Licensetype</td>
			<td><input type='text' name='cst_licensetype'></td>
		</tr>
		<tr>
			<td>Licensenumber</td>
			<td><input type='text' name='cst_licensenumber'></td>
		</tr>
		<tr>
			<td>Expirationdate</td>
			<td><input type='text' name='cst_expirationdate'></td>
		</tr>
		<tr>
			<td>Effectivedate</td>
			<td><input type='text' name='cst_effectivedate'></td>
		</tr>
		<tr>
			<td>Loadetail</td>
			<td><input type='text' name='cst_loadetail'></td>
		</tr>
		<tr>
			<td>Loaeffectivedate</td>
			<td><input type='text' name='cst_loaeffectivedate'></td>
		</tr>
		<tr>
			<td>Loacanceldate</td>
			<td><input type='text' name='cst_loacanceldate'></td>
		</tr>
		<tr>
			<td>Licensestatus</td>
			<td><input type='text' name='cst_licensestatus'></td>
		</tr>
		<tr>
			<td>Appointmentstatus</td>
			<td><input type='text' name='cst_appointmentstatus'></td>
		</tr>
		<tr>
			<td>Designatehomestate</td>
			<td><input type='text' name='cst_designatehomestate'></td>
		</tr>
		<tr>
			<td>Renewalflag</td>
			<td><input type='text' name='cst_renewalflag'></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type='submit' name='license_submit' value='Submit'></td>
		</tr>
	</table>
</form>