<!DOCTYPE html>
<html>
<head>
	<title>Buying</title>
	<style type="text/css">
	table{
		margin-top: 100px;
		column-span: 20px;
		border: 1px solid black;
		border-spacing: 20px;
		padding: 15px;
		box-shadow: 1px 1px 1px #999; 
}
	th{
		text-align: center;
		font-size: 20px;
	}

	input[type=submit],[type=reset]{
		padding: 8px 20px;
   		border: 1px solid #000000;
   		font-size: 15px;
   		cursor: pointer;
	}

	</style>
</head>
<body>

<form method="post" action="">

<table align="center">
	<tr>
	<th colspan="2">Book Order Form</th>
	</tr>

	<tr>
		<td>Name</td>
		<td><input type="text" name="name" size="40" maxlength="70" placeholder="Name"></td>
	</tr>

	<tr>
		<td>Contact Number</td>
		<td><input type="text" name="num" size="12" maxlength="10"placeholder="Contact Number"></td>
	</tr>

	<tr>
		<td>Card Number</td>
		<td><input type="text" name="card" size="3" maxlength="4" placeholder="XXXX">-<input type="text" name="card" size="3" maxlength="4" placeholder="XXXX">-<input type="text" name="card" size="3" maxlength="4" placeholder="XXXX">-<input type="text" name="card" size="3" maxlength="4" placeholder="XXXX"></td>
	</tr>

	<tr>
		<td>Expiry Date</td>
		<td><input type="text" name="month" size="1" maxlength="2" placeholder="MM">/<input type="text" name="year" size="1" maxlength="2" placeholder="YY"></td>
	</tr>

	<tr>
		<td>Billing Address</td>
		<td><input type=text name=street1 size="40" maxlength="70" placeholder="Street"><br/><input type=text name=street2 size="40" maxlength="70" placeholder="City"><br/><input type=text name=country size="40" maxlength="70" placeholder="Country"><br/><input type=text name=code size="10" maxlength="15" placeholder="Postal Code"></td>
	</tr>

	<tr>
		<td colspan=2 align=center>
		<input type=Submit value=Buy>
		<input type=Reset value=Cancel>
		</td>
		</tr>
		
</table>
	
</form>

</body>
</html>