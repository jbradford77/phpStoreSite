<h2>Calculate Report for period: </h2>

<form action="displayreport.php" method="post">
<input type="hidden" name="content" value="quarterly">
<table width="100%" cellpadding="1" border="1">
<tr><td>Enter start date (m/d/y):</td>
<td><input type="text" name="startmonth" size="2">
<input type="text" name="startday" size="2">
<input type="text" name="startyear" size="2"</td></tr>

<tr><td>Enter end date (m/d/y):</td>
<td><input type="text" name="endmonth" size="2">
<input type="text" name="endday" size="2">
<input type="text" name="endyear" size="2"</td></tr>
</table>
<input type="submit" name="button" value="Get report">
</form>