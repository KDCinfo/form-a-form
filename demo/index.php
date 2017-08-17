<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<script language="php">
		if ((isset($_POST["steps"])) && ($_POST["steps"] == "PartPreview")) {
			echo "\t<title>Form Preview as End User would see it (disabled here).</title>\n";
			echo "\t<meta name=\"description\" content=\"".$_POST["pname"]."\">\n";
			echo "\t<meta name=\"keywords\" content=\"form generator, form creator, form designer, form design, form layout.\">\n";
		} elseif ((isset($_POST["steps"])) && ($_POST["steps"] == "PartCode")) {
			echo "\t<title>Form Code for End User usage - data collection and storage</title>\n";
			echo "\t<meta name=\"description\" content=\"".$_POST["pname"]."\">\n";
			echo "\t<meta name=\"keywords\" content=\"form generator, form creator, form designer, form design, form layout.\">\n";
		} elseif ((isset($_POST["steps"])) && ($_POST["steps"] == "PartForm")) {
			echo "\t<title>Form Code for Admin usage - data retrieval and modification</title>\n";
			echo "\t<meta name=\"description\" content=\"".$_POST["pname"]."\">\n";
			echo "\t<meta name=\"keywords\" content=\"form generator, form creator, form designer, form design, form layout.\">\n";
		} else {
			echo "\t<title>Form-a-Form - Quick and Simple Form Creator by Keith D Commiskey</title>\n";
			echo "\t<meta name=\"description\" content=\"Welcome to the quick and simple form creator! This form will allow you to create a form that you can use as a template.\">\n";
			echo "\t<meta name=\"keywords\" content=\"form generator, form creator, form designer, form design, form layout.\">\n";
		}
	</script>
	<script language="JavaScript" src="form-a-form.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="form-a-form.css">
</head>
<script language="php">
if (isset($_POST["steps"]))
{	if (($_POST["steps"] == "PartOne")||($_POST["steps"] == "PartTwo")) { echo "<body onload=\"PartFormForm.pname.focus();\">"; }
	elseif (($_POST["steps"] == "PartPreview")||($_POST["steps"] == "PartCode")||($_POST["steps"] == "PartForm")) { echo "<body onload=\"this.focus();\">"; }
}	else { echo "<body>"; }
</script>

<?php if (strpos($_SERVER['HTTP_HOST'], 'kdcinfo') !== false) { ?>
<script src="https://www.google-analytics.com/urchin.js" type="text/javascript"></script>
<script type="text/javascript">
_uacct = "UA-1872941-1";
urchinTracker();
</script>
<?php } ?>

<script language="php">
if ((isset($_POST["steps"])) && ($_POST["steps"] == "PartOne")) {
	echo "<table width=\"700\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tr><td><h1>Quick and Simple Form Creator</h1><h2>Form Overhead Data</h2></td><td><a href=\"".$_SERVER['PHP_SELF']."\">Start Over</a></td></tr><tr><td colspan=\"2\"><hr color=\"Maroon\" size=\"3\"></td></tr></table>";
} elseif ((isset($_POST["pparamhold"])) && (($_POST["pparamhold"]=="") || ($_POST["pparamhold"]=="1") || ($_POST["pparamhold"]=="5"))) {
	echo "<table width=\"700\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tr><td><h1>Quick and Simple Form Creator</h1><h2>Field Parameters</h2></td><td><a href=\"".$_SERVER['PHP_SELF']."\">Start Over</a></td></tr><tr><td colspan=\"2\"><hr color=\"Maroon\" size=\"3\"></td></tr></table>";
} elseif ((isset($_POST["steps"])) && ($_POST["steps"] == "PartTwo")) {
	echo "<table width=\"700\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tr><td><h1>Quick and Simple Form Creator</h1><h2>Field Data Collection</h2></td><td><a href=\"".$_SERVER['PHP_SELF']."\">Start Over</a></td></tr><tr><td colspan=\"2\"><hr color=\"Maroon\" size=\"3\"></td></tr></table>";
} else {
	echo "<table width=\"700\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tr><td><h1>Quick and Simple Form Creator</h1><h2>by Keith D Commiskey</h2></td></tr><tr><td><hr color=\"Maroon\" size=\"3\"></td></tr></table>";
}
</script>

<script language="php">
if ((isset($_POST["steps"])) && ($_POST["steps"] == "PartOne")) {
</script>
	<form action="<? echo $_SERVER['PHP_SELF']; ?>" name="PartFormForm" method="POST" onSubmit="return isReady(this);">
	<table width="700" border="0" cellspacing="0" cellpadding="3" align="center">
		<tr><td valign="top"><strong>Display Name</strong>: (page title)<br><input type="text" name="pname" id="pname" size="50" maxlength="100"></td>
			<td valign="top"><strong>Border</strong><br><input type="text" name="pborder" id="pborder" value="0" size="5" onblur="return isNum(this);"></td>
			<td valign="top"><strong>Number of fields</strong> to add:<br><input type="text" name="pnum" id="pnum" size="5" maxlength="3" onblur="return isNum(this);"></td>
		</tr>
		<tr>
			<td valign="top"><strong>Technical Name</strong>: (code reference)<br><input type="text" name="tname" id="tname" value="" size="50" maxlength="20" onblur="return isAlpha(this);"><br><small>(max 20 characters, no spaces, only alphanumeric)</small></td>
			<td valign="top"><strong>Align</strong><br><select name="palign" id="palign" size="1">
				<option value="center">Center</option>
				<option value="left">Left</option>
				<option value="right">Right</option>
			</select></td>
			<td valign="top"><strong>Number of columns</strong><br>(one for label, one for data field)<br><input type="radio" name="pcol" id="pcol" value="2" checked> 2&nbsp;or&nbsp;<input type="radio" name="pcol" id="pcol" value="4"> 4</td>
		</tr>
		<tr><td colspan="3"><br><input type="hidden" name="steps" id="steps" value="PartTwo"><button name="LetsGo" id="LetsGo" value="PartTwo" type="submit">Let's get more specific, shall we?</button></td></tr>
		<tr><td colspan="3"><hr color="Maroon" size="1"></td></tr>
		<tr><td align="right" colspan="3">
			<small class="xg">Keith D Commiskey (2005; 2017) | <a href="http://kdcinfo.com" target="GFY_Pops">http://kdcinfo.com</a></small>
		</td></tr>
	</table>
	</form>
<script language="php">
} elseif ((isset($_POST["steps"])) && ($_POST["steps"] == "PartTwo")) {
</script>
	<form action="<? echo $_SERVER['PHP_SELF']; ?>" name="PartFormForm" method="post" target="_top" onSubmit="return isReadyTwo(this);">
	<table width="700" border="0" cellspacing="0" cellpadding="1" align="center">
		<!-- <tr><td width="15%">&nbsp;</td><td width="55%">&nbsp;</td><td width="15%">&nbsp;</td><td>&nbsp;</td></tr> -->
		<tr>
			<td valign="top"><strong>Display Name</strong>: (page title)<br><input type="text" name="pname" id="pname" size="50" maxlength="100" value="<? echo $_POST["pname"]; ?>"></td>
			<td valign="top"><strong>Border</strong><br><input type="text" name="pborder" id="pborder" size="5" value="<? echo $_POST["pborder"]; ?>" onblur="return isNum(this);"></td>
			<td valign="top"><strong>Number of fields</strong> to add:<br><input type="text" name="pnum" id="pnum" size="5" maxlength="3" value="<? echo $_POST["pnum"]; ?>" onblur="return isNum(this);"></td>
		</tr>
		<tr>
			<td valign="top"><strong>Technical Name</strong>: (code reference)<br><input type="text" name="tname" id="tname" size="50" maxlength="20" value="<? echo $_POST["tname"]; ?>" onblur="return isAlpha(this);"><br><small>(max 20 characters, no spaces, only alphanumeric)</small></td>
			<td valign="top"><strong>Align</strong><br><select name="palign" id="palign" size="1">
				<? if($_POST["palign"]=="center"){ ?><option value="center" selected>Center</option><? } else { ?><option value="center">Center</option><? } ?>
				<? if($_POST["palign"]=="left"){ ?><option value="left" selected>Left</option><? } else { ?><option value="left">Left</option><? } ?>
				<? if($_POST["palign"]=="right"){ ?><option value="right" selected>Right</option><? } else { ?><option value="right">Right</option><? } ?>
			</select></td>
			<td valign="top"><strong>Number of columns</strong><br>(one for label, one for data field)<br>
				<? if($_POST["pcol"]=="2"){ ?><input type="radio" name="pcol" id="pcol" value="2" onClick="document.PartFormForm.pcoltemp.value=this.value;" checked> 2&nbsp;or&nbsp;<input type="radio" name="pcol" id="pcol" value="4" onClick="document.PartFormForm.pcoltemp.value=this.value;"> 4
				<? } else { ?><input type="radio" name="pcol" id="pcol" value="2" onClick="document.PartFormForm.pcoltemp.value=this.value;"> 2&nbsp;or&nbsp;<input type="radio" name="pcol" id="pcol" value="4" onClick="document.PartFormForm.pcoltemp.value=this.value;" checked> 4
				<? } ?>
				<input type="hidden" name="pcoltemp" value="<? echo $_POST["pcol"]; ?>">
			</td>
		</tr>
	</table>
	<table width="700" border="0" cellspacing="0" cellpadding="1" align="center">
		<tr><td colspan="2"><hr color="Maroon" size="2"></td></tr>
			<? for ($pnumi = 1; $pnumi <= $_POST["pnum"]; $pnumi++) { ?>
			<tr>
<?
				$caseme = "0";
				echo "\n<td valign=\"top\"><strong style=\"color:#0000AA;\">Type and Name # ".$pnumi."</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
// Select Field Type
					if (isset($_POST["pparamhold"]))
					{	echo "\n<select name=\"pftypes_".$pnumi."\" id=\"pftypes_".$pnumi."\" size=\"1\" onChange=\"pparamhold.value='1';\">";	}
					else
					{	echo "\n<select name=\"pftypes_".$pnumi."\" id=\"pftypes_".$pnumi."\" size=\"1\" onChange=\"pparamhold.value='';\">";	}
							if ($_POST{"pftypes_".$pnumi}=="Text")
									{ echo "\n\t<option value=\"Text\" selected>Text</option>"; $caseme = "1"; }
							else	{ echo "\n\t<option value=\"Text\">Text</option>"; }
							if ($_POST{"pftypes_".$pnumi}=="Hidden")
									{ echo "\n\t<option value=\"Hidden\" selected>Hidden</option>"; $caseme = "2"; }
							else	{ echo "\n\t<option value=\"Hidden\">Hidden</option>"; }
							if ($_POST{"pftypes_".$pnumi}=="TextArea")
									{ echo "\n\t<option value=\"TextArea\" selected>Text Area</option>"; $caseme = "3"; }
							else	{ echo "\n\t<option value=\"TextArea\">Text Area</option>"; }
							if ($_POST{"pftypes_".$pnumi}=="Radio")
									{ echo "\n\t<option value=\"Radio\" selected>Radio</option>"; $caseme = "4"; }
							else	{ echo "\n\t<option value=\"Radio\">Radio</option>"; }
							if ($_POST{"pftypes_".$pnumi}=="Checkbox")
									{ echo "\n\t<option value=\"Checkbox\" selected>Checkbox</option>"; $caseme = "5"; }
							else	{ echo "\n\t<option value=\"Checkbox\">Checkbox</option>"; }
							if ($_POST{"pftypes_".$pnumi}=="Select")
									{ echo "\n\t<option value=\"Select\" selected>Select ComboList</option>"; $caseme = "6"; }
							else	{ echo "\n\t<option value=\"Select\">Select ComboList</option>"; }
							if ($_POST{"pftypes_".$pnumi}=="Button")
									{ echo "\n\t<option value=\"Button\" selected>Button</option>"; $caseme = "7"; }
							else	{ echo "\n\t<option value=\"Button\">Button</option>"; }
							if ($_POST{"pftypes_".$pnumi}=="Submit")
									{ echo "\n\t<option value=\"Submit\" selected>Submit</option>"; $caseme = "8"; }
							else	{ echo "\n\t<option value=\"Submit\">Submit</option>"; }
							if ($_POST{"pftypes_".$pnumi}=="Reset")
									{ echo "\n\t<option value=\"Reset\" selected>Reset</option>"; $caseme = "9"; }
							else	{ echo "\n\t<option value=\"Reset\">Reset</option>"; }
							if ($_POST{"pftypes_".$pnumi}=="Separator")
									{ echo "\n\t<option value=\"Separator\" selected>Separator</option>"; $caseme = "10"; }
							else	{ echo "\n\t<option value=\"Separator\">Separator</option>"; }
							if ($_POST{"pftypes_".$pnumi}=="Image")
									{ echo "\n\t<option value=\"Image\" selected>Image</option>"; $caseme = "11"; }
							else	{ echo "\n\t<option value=\"Image\">Image</option>"; }
						echo "\n</select><br>";
// Field Name
					if (isset($_POST{"pfnames_".$pnumi}))
					{	echo "\n<input type=\"text\" name=\"pfnames_".$pnumi."\" id=\"pfnames_".$pnumi."\" size=\"50\" maxlength=\"100\" value=\"".$_POST{"pfnames_".$pnumi}."\">";
					}	else	{
						echo "\n<input type=\"text\" name=\"pfnames_".$pnumi."\" id=\"pfnames_".$pnumi."\" size=\"50\" maxlength=\"100\" value=\"\">";
					}
// Is field database-able?
					if (isset($_POST["pparamhold"]))
					{	if (isset($_POST{"pftypes_".$pnumi}))
						{
							if (($_POST{"pftypes_".$pnumi}=="Text")||($_POST{"pftypes_".$pnumi}=="Radio")||($_POST{"pftypes_".$pnumi}=="Checkbox")||($_POST{"pftypes_".$pnumi}=="Select"))
							{	echo "\n<br><small class=\"s\" style=\"color:Maroon;\">This field's data can be stored and retrieved. This name<br>should be exactly the same as the database field name.</small>";	}
							elseif ($_POST{"pftypes_".$pnumi}=="TextArea")
							{	echo "\n<br><small class=\"s\" style=\"color:Maroon;\">This field's data can be stored and retrieved. This name<br>should be exactly the same as the database field name.<br>This field should also be of a 'blob' type in your database.</small>";	}
							elseif (($_POST{"pftypes_".$pnumi}=="Button")||($_POST{"pftypes_".$pnumi}=="Submit")||($_POST{"pftypes_".$pnumi}=="Reset"))
							{	echo "\n<br><small class=\"s\" style=\"color:Maroon;\">&nbsp;</small>";	}
							// This field is typically for form <strong>navigation</strong>.
							elseif (($_POST{"pftypes_".$pnumi}=="Separator")||($_POST{"pftypes_".$pnumi}=="Image"))
							{	echo "\n<br><small class=\"s\" style=\"color:Maroon;\">&nbsp;</small>";	}
							// This field is typically for form <strong>aesthetics</strong>.
							elseif ($_POST{"pftypes_".$pnumi}=="Hidden")
							{	echo "\n<br><small class=\"s\" style=\"color:Maroon;\">&nbsp;</small>";	}
							// This field is is typically for behind-the-scenes <strong>form control</strong>.
							else
							{	echo "\n<br><small class=\"s\" style=\"color:Red;\"><strong>What field type is this?</strong></small>";	}
						} else
						{	echo "\n<br><small class=\"s\" style=\"color:Maroon;\">This field's data can be stored and retrieved. This name<br>should be exactly the same as the database field name.</small>";	}
					}
				echo "\n</td>";
				echo "\n<td valign=\"top\">\n\t";
// Display parameters for each field name
					if (isset($_POST["pparamhold"]))
					{	echo "<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n";
						switch ($caseme) {
							case "0": // Text
								echo "\n<tr><td colspan=\"3\"><strong>Text Parameters</strong></td></tr>\n";
								echo "<input type=\"hidden\" name=\"pftype_".$pnumi."\" value=\"text\">\n";
								echo "<input type=\"hidden\" name=\"pfcnt_".$pnumi."\" value=\"5\">\n";
								// The above tag is simply just the number of if/then lines below - Yes, it's hard coded, but saves from having to do a loop/count across all the resulting pages
								if (isset($_POST{"pf1a_".$pnumi}))	{	echo "<tr><td>Default value</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1a_".$pnumi."\" size=\"20\" value=\"".$_POST{"pf1a_".$pnumi}."\"></td></tr>\n";	}
									else							{	echo "<tr><td>Default value</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1a_".$pnumi."\" size=\"20\" value=\"\"></td></tr>\n";	}
								if (isset($_POST{"pf1i_".$pnumi}))	{	echo "<tr><td>Disabled</td><td>&nbsp;</td><td><input type=\"checkbox\" name=\"pf1i_".$pnumi."\" value=\"disabled\" checked></td></tr>";	}
									else							{	echo "<tr><td>Disabled</td><td>&nbsp;</td><td><input type=\"checkbox\" name=\"pf1i_".$pnumi."\" value=\"disabled\"></td></tr>";	}
								if (isset($_POST{"pf1j_".$pnumi}))	{	echo "<tr><td>Readonly</td><td>&nbsp;</td><td><input type=\"checkbox\" name=\"pf1j_".$pnumi."\" value=\"readonly\" checked></td></tr>";	}
									else							{	echo "<tr><td>Readonly</td><td>&nbsp;</td><td><input type=\"checkbox\" name=\"pf1j_".$pnumi."\" value=\"readonly\"></td></tr>";	}
								if (isset($_POST{"pf1b_".$pnumi}))	{	echo "<tr><td>Maxlength</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1b_".$pnumi."\" size=\"5\" value=\"".$_POST{"pf1b_".$pnumi}."\"></td></tr>\n";	}
									else							{	echo "<tr><td>Maxlength</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1b_".$pnumi."\" size=\"5\" value=\"\"></td></tr>\n";	}
								if (isset($_POST{"pf1c_".$pnumi}))	{	echo "<tr><td>Size</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1c_".$pnumi."\" size=\"5\" value=\"".$_POST{"pf1c_".$pnumi}."\"></td></tr>\n";	}
									else							{	echo "<tr><td>Size</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1c_".$pnumi."\" size=\"5\" value=\"\"></td></tr>\n";	}
						    break;
							case "1": // Text
								echo "<tr><td colspan=\"3\"><strong>Text Parameters</strong></td></tr>";
								echo "<input type=\"hidden\" name=\"pftype_".$pnumi."\" value=\"text\">\n";
								echo "<input type=\"hidden\" name=\"pfcnt_".$pnumi."\" value=\"5\">\n";
								if (isset($_POST{"pf1a_".$pnumi}))	{	echo "<tr><td>Default value</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1a_".$pnumi."\" size=\"20\" value=\"".$_POST{"pf1a_".$pnumi}."\"></td></tr>\n";	}
									else							{	echo "<tr><td>Default value</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1a_".$pnumi."\" size=\"20\" value=\"\"></td></tr>\n";	}
								if (isset($_POST{"pf1i_".$pnumi}))	{	echo "<tr><td>Disabled</td><td>&nbsp;</td><td><input type=\"checkbox\" name=\"pf1i_".$pnumi."\" value=\"disabled\" checked></td></tr>";	}
									else							{	echo "<tr><td>Disabled</td><td>&nbsp;</td><td><input type=\"checkbox\" name=\"pf1i_".$pnumi."\" value=\"disabled\"></td></tr>";	}
								if (isset($_POST{"pf1j_".$pnumi}))	{	echo "<tr><td>Readonly</td><td>&nbsp;</td><td><input type=\"checkbox\" name=\"pf1j_".$pnumi."\" value=\"readonly\" checked></td></tr>";	}
									else							{	echo "<tr><td>Readonly</td><td>&nbsp;</td><td><input type=\"checkbox\" name=\"pf1j_".$pnumi."\" value=\"readonly\"></td></tr>";	}
								if (isset($_POST{"pf1b_".$pnumi}))	{	echo "<tr><td>Maxlength</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1b_".$pnumi."\" size=\"5\" value=\"".$_POST{"pf1b_".$pnumi}."\"></td></tr>\n";	}
									else							{	echo "<tr><td>Maxlength</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1b_".$pnumi."\" size=\"5\" value=\"\"></td></tr>\n";	}
								if (isset($_POST{"pf1c_".$pnumi}))	{	echo "<tr><td>Size</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1c_".$pnumi."\" size=\"5\" value=\"".$_POST{"pf1c_".$pnumi}."\" onChange=\"checkSize(this.form, this);\"></td></tr>\n";	}
									else							{	echo "<tr><td>Size</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1c_".$pnumi."\" size=\"5\" value=\"\" onChange=\"checkSize(this.form, this);\"></td></tr>\n";	}
								break;
							case "2": // Hidden
								echo "<tr><td colspan=\"3\"><strong>Hidden Parameters</strong></td></tr>";
								echo "<input type=\"hidden\" name=\"pftype_".$pnumi."\" value=\"hidden\">\n";
								echo "<input type=\"hidden\" name=\"pfcnt_".$pnumi."\" value=\"2\">\n";
								if (isset($_POST{"pf1a_".$pnumi}))	{	echo "<tr><td>Default value</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1a_".$pnumi."\" size=\"20\" value=\"".$_POST{"pf1a_".$pnumi}."\"></td></tr>\n";	}
									else							{	echo "<tr><td>Default value</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1a_".$pnumi."\" size=\"20\" value=\"\"></td></tr>\n";	}
								if (isset($_POST{"pf1i_".$pnumi}))	{	echo "<tr><td>Disabled</td><td>&nbsp;</td><td><input type=\"checkbox\" name=\"pf1i_".$pnumi."\" value=\"disabled\" checked></td></tr>";	}
									else							{	echo "<tr><td>Disabled</td><td>&nbsp;</td><td><input type=\"checkbox\" name=\"pf1i_".$pnumi."\" value=\"disabled\"></td></tr>";	}
								break;
							case "3": // TextArea
								echo "<tr><td colspan=\"3\"><strong>TextArea Parameters</strong></td></tr>";
								echo "<input type=\"hidden\" name=\"pftype_".$pnumi."\" value=\"textarea\">\n";
								echo "<input type=\"hidden\" name=\"pfcnt_".$pnumi."\" value=\"5\">\n";
								if (isset($_POST{"pf1i_".$pnumi}))	{	echo "<tr><td>Disabled</td><td>&nbsp;</td><td><input type=\"checkbox\" name=\"pf1i_".$pnumi."\" value=\"disabled\" checked></td></tr>";	}
									else							{	echo "<tr><td>Disabled</td><td>&nbsp;</td><td><input type=\"checkbox\" name=\"pf1i_".$pnumi."\" value=\"disabled\"></td></tr>";	}
								if (isset($_POST{"pf1j_".$pnumi}))	{	echo "<tr><td>Readonly</td><td>&nbsp;</td><td><input type=\"checkbox\" name=\"pf1j_".$pnumi."\" value=\"readonly\" checked></td></tr>";	}
									else							{	echo "<tr><td>Readonly</td><td>&nbsp;</td><td><input type=\"checkbox\" name=\"pf1j_".$pnumi."\" value=\"readonly\"></td></tr>";	} // checkSize
								if (isset($_POST{"pf1d_".$pnumi}))	{	echo "<tr><td>Columns</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1d_".$pnumi."\" size=\"5\" value=\"".$_POST{"pf1d_".$pnumi}."\" onChange=\"checkSize(this.form, this);\"></td></tr>\n";	}
									else							{	echo "<tr><td>Columns</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1d_".$pnumi."\" size=\"5\" value=\"\" onChange=\"checkSize(this.form, this);\"></td></tr>\n";	}
								if (isset($_POST{"pf1e_".$pnumi}))	{	echo "<tr><td>Rows</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1e_".$pnumi."\" size=\"5\" value=\"".$_POST{"pf1e_".$pnumi}."\"></td></tr>\n";	}
									else							{	echo "<tr><td>Rows</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1e_".$pnumi."\" size=\"5\" value=\"\"></td></tr>\n";	}
								if (isset($_POST{"pf1a_".$pnumi}))	{	echo "<tr><td>Content</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1a_".$pnumi."\" size=\"20\" value=\"".$_POST{"pf1a_".$pnumi}."\"></td></tr>\n";	}
									else							{	echo "<tr><td>Content</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1a_".$pnumi."\" size=\"20\" value=\"\"></td></tr>\n";	}
								break;
							case "4": // Radio
								echo "<tr><td colspan=\"3\"><strong>Radio Parameters</strong></td></tr>";
								echo "<input type=\"hidden\" name=\"pftype_".$pnumi."\" value=\"radio\">\n";
								echo "<input type=\"hidden\" name=\"pfcnt_".$pnumi."\" value=\"3\">\n";
								if (isset($_POST{"pf1a_".$pnumi}))	{	echo "<tr><td>Base value</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1a_".$pnumi."\" size=\"20\" value=\"".$_POST{"pf1a_".$pnumi}."\"></td></tr>\n";	}
									else							{	echo "<tr><td>Base value</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1a_".$pnumi."\" size=\"20\" value=\"\"></td></tr>\n";	}
								if (isset($_POST{"pf1h_".$pnumi}))	{	echo "<tr><td>Number of Options</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1h_".$pnumi."\" size=\"5\" value=\"".$_POST{"pf1h_".$pnumi}."\"></td></tr>\n";	}
									else							{	echo "<tr><td>Number of Options</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1h_".$pnumi."\" size=\"5\" value=\"\"></td></tr>\n";	}
								break;
							case "5": // Checkbox
								echo "<tr><td colspan=\"3\"><strong>Checkbox Parameters</strong></td></tr>";
								echo "<input type=\"hidden\" name=\"pftype_".$pnumi."\" value=\"checkbox\">\n";
								echo "<input type=\"hidden\" name=\"pfcnt_".$pnumi."\" value=\"3\">\n";
								if (isset($_POST{"pf1a_".$pnumi}))	{	echo "<tr><td>Base value</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1a_".$pnumi."\" size=\"20\" value=\"".$_POST{"pf1a_".$pnumi}."\"></td></tr>\n";	}
									else							{	echo "<tr><td>Base value</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1a_".$pnumi."\" size=\"20\" value=\"\"></td></tr>\n";	}
								if (isset($_POST{"pf1h_".$pnumi}))	{	echo "<tr><td>Number of Options</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1h_".$pnumi."\" size=\"5\" value=\"".$_POST{"pf1h_".$pnumi}."\"></td></tr>\n";	}
									else							{	echo "<tr><td>Number of Options</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1h_".$pnumi."\" size=\"5\" value=\"\"></td></tr>\n";	}
								break;
							case "6": // Select
								echo "<tr><td colspan=\"3\"><strong>Select Parameters</strong></td></tr>";
								echo "<input type=\"hidden\" name=\"pftype_".$pnumi."\" value=\"select\">\n";
								echo "<input type=\"hidden\" name=\"pfcnt_".$pnumi."\" value=\"5\">\n";
								if (isset($_POST{"pf1a_".$pnumi}))	{	echo "<tr><td>Default value</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1a_".$pnumi."\" size=\"20\" value=\"".$_POST{"pf1a_".$pnumi}."\"></td></tr>\n";	}
									else							{	echo "<tr><td>Default value</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1a_".$pnumi."\" size=\"20\" value=\"\"></td></tr>\n";	}
								if (isset($_POST{"pf1c_".$pnumi}))	{	echo "<tr><td>Size (Height)</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1c_".$pnumi."\" size=\"5\" value=\"".$_POST{"pf1c_".$pnumi}."\"></td></tr>\n";	}
									else							{	echo "<tr><td>Size (Height)</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1c_".$pnumi."\" size=\"5\" value=\"\"></td></tr>\n";	}
								if (isset($_POST{"pf1h_".$pnumi}))	{	echo "<tr><td>Number of Options</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1h_".$pnumi."\" size=\"5\" value=\"".$_POST{"pf1h_".$pnumi}."\"></td></tr>\n";	}
									else							{	echo "<tr><td>Number of Options</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1h_".$pnumi."\" size=\"5\" value=\"\"></td></tr>\n";	}
								if (isset($_POST{"pf1k_".$pnumi}))	{	echo "<tr><td>Multiple</td><td>&nbsp;</td><td><input type=\"checkbox\" name=\"pf1k_".$pnumi."\" value=\"multiple\" checked></td></tr>";	}
									else							{	echo "<tr><td>Multiple</td><td>&nbsp;</td><td><input type=\"checkbox\" name=\"pf1k_".$pnumi."\" value=\"multiple\"></td></tr>";	}
								break;
							case "7": // Button
								echo "<tr><td colspan=\"3\"><strong>Button Parameters</strong></td></tr>";
								echo "<input type=\"hidden\" name=\"pftype_".$pnumi."\" value=\"button\">\n";
								echo "<input type=\"hidden\" name=\"pfcnt_".$pnumi."\" value=\"4\">\n";
								if (isset($_POST{"pf1a_".$pnumi}))	{	echo "<tr><td>Default value</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1a_".$pnumi."\" size=\"20\" value=\"".$_POST{"pf1a_".$pnumi}."\"></td></tr>\n";	}
									else							{	echo "<tr><td>Default value</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1a_".$pnumi."\" size=\"20\" value=\"\"></td></tr>\n";	}
								if (isset($_POST{"pf1i_".$pnumi}))	{	echo "<tr><td>Disabled</td><td>&nbsp;</td><td><input type=\"checkbox\" name=\"pf1i_".$pnumi."\" value=\"disabled\" checked></td></tr>";	}
									else							{	echo "<tr><td>Disabled</td><td>&nbsp;</td><td><input type=\"checkbox\" name=\"pf1i_".$pnumi."\" value=\"disabled\"></td></tr>";	}
																		echo "<tr><td>Type</td><td>&nbsp;</td><td><select name=\"pf1f_".$pnumi."\" size=\"1\">";
								if ((isset($_POST{"pf1f_".$pnumi}))&&($_POST{"pf1f_".$pnumi}=="Button"))
																	{	echo "<option value=\"Button\" SELECTED>Button</option>"; } else { echo "<option value=\"Button\">Button</option>"; }
								if ((isset($_POST{"pf1f_".$pnumi}))&&($_POST{"pf1f_".$pnumi}=="Submit"))
																	{	echo "<option value=\"Submit\" SELECTED>Submit</option>"; } else { echo "<option value=\"Submit\">Submit</option>"; }
								if ((isset($_POST{"pf1f_".$pnumi}))&&($_POST{"pf1f_".$pnumi}=="Reset"))
																	{	echo "<option value=\"Reset\" SELECTED>Reset</option>"; } else { echo "<option value=\"Reset\">Reset</option>"; }
																		echo "</select></td></tr>";
								if (isset($_POST{"pf1g_".$pnumi}))	{	echo "<tr><td>Image Src/Value</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1g_".$pnumi."\" size=\"20\" value=\"".stripslashes(str_replace("\"", "'", $_POST{"pf1g_".$pnumi}))."\"></td></tr>\n";	}
									else							{	echo "<tr><td>Image Src/Value</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1g_".$pnumi."\" size=\"20\" value=\"&lt;img src=&quot;&quot;&gt;\"></td></tr>\n";	}
								break;
							case "8": // Submit
								echo "<tr><td colspan=\"3\"><strong>Submit Parameters</strong></td></tr>";
								echo "<input type=\"hidden\" name=\"pftype_".$pnumi."\" value=\"submit\">\n";
								echo "<input type=\"hidden\" name=\"pfcnt_".$pnumi."\" value=\"2\">\n";
								if (isset($_POST{"pf1a_".$pnumi}))	{	echo "<tr><td>Default value</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1a_".$pnumi."\" size=\"20\" value=\"".$_POST{"pf1a_".$pnumi}."\"></td></tr>\n";	}
									else							{	echo "<tr><td>Default value</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1a_".$pnumi."\" size=\"20\" value=\"\"></td></tr>\n";	}
								if (isset($_POST{"pf1i_".$pnumi}))	{	echo "<tr><td>Disabled</td><td>&nbsp;</td><td><input type=\"checkbox\" name=\"pf1i_".$pnumi."\" value=\"disabled\" checked></td></tr>";	}
									else							{	echo "<tr><td>Disabled</td><td>&nbsp;</td><td><input type=\"checkbox\" name=\"pf1i_".$pnumi."\" value=\"disabled\"></td></tr>";	}
								break;
							case "9": // Reset
								echo "<tr><td colspan=\"3\"><strong>Reset Parameters</strong></td></tr>";
								echo "<input type=\"hidden\" name=\"pftype_".$pnumi."\" value=\"reset\">\n";
								echo "<input type=\"hidden\" name=\"pfcnt_".$pnumi."\" value=\"2\">\n";
								if (isset($_POST{"pf1a_".$pnumi}))	{	echo "<tr><td>Default value</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1a_".$pnumi."\" size=\"20\" value=\"".$_POST{"pf1a_".$pnumi}."\"></td></tr>\n";	}
									else							{	echo "<tr><td>Default value</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1a_".$pnumi."\" size=\"20\" value=\"\"></td></tr>\n";	}
								if (isset($_POST{"pf1i_".$pnumi}))	{	echo "<tr><td>Disabled</td><td>&nbsp;</td><td><input type=\"checkbox\" name=\"pf1i_".$pnumi."\" value=\"disabled\" checked></td></tr>";	}
									else							{	echo "<tr><td>Disabled</td><td>&nbsp;</td><td><input type=\"checkbox\" name=\"pf1i_".$pnumi."\" value=\"disabled\"></td></tr>";	}
								break;
							case "10": // Separator
								echo "<tr><td colspan=\"3\"><strong>Separator Parameters</strong></td></tr>";
								echo "<input type=\"hidden\" name=\"pftype_".$pnumi."\" value=\"separator\">\n";
								echo "<input type=\"hidden\" name=\"pfcnt_".$pnumi."\" value=\"3\">\n";
								if (isset($_POST{"pf1c_".$pnumi}))	{	echo "<tr><td>Size (Height)</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1c_".$pnumi."\" size=\"5\" value=\"".$_POST{"pf1c_".$pnumi}."\"></td></tr>\n";	}
									else							{	echo "<tr><td>Size (Height)</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1c_".$pnumi."\" size=\"5\" value=\"2\"></td></tr>\n";	}
								if (isset($_POST{"pf1n_".$pnumi}))	{	echo "<tr><td>Width</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1n_".$pnumi."\" size=\"5\" value=\"".$_POST{"pf1n_".$pnumi}."\"></td></tr>\n";	}
									else							{	echo "<tr><td>Width</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1n_".$pnumi."\" size=\"5\" value=\"100%\"></td></tr>\n";	}
								if (isset($_POST{"pf1m_".$pnumi}))	{	echo "<tr><td>Color</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1m_".$pnumi."\" size=\"10\" value=\"".$_POST{"pf1m_".$pnumi}."\"></td></tr>\n";	}
									else							{	echo "<tr><td>Color</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1m_".$pnumi."\" size=\"10\" value=\"Maroon\"></td></tr>\n";	}
								break;
							case "11": // Image
								echo "<tr><td colspan=\"3\"><strong>Image Parameters</strong></td></tr>";
								echo "<input type=\"hidden\" name=\"pftype_".$pnumi."\" value=\"image\">\n";
								echo "<input type=\"hidden\" name=\"pfcnt_".$pnumi."\" value=\"1\">\n";
								if (isset($_POST{"pf1g_".$pnumi}))	{	echo "<tr><td>Image Src</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1g_".$pnumi."\" size=\"20\" value=\"".stripslashes(str_replace("\"", "'", $_POST{"pf1g_".$pnumi}))."\"></td></tr>\n";	}
									else							{	echo "<tr><td>Image Src</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1g_".$pnumi."\" size=\"20\" value=\"/img/icon.gif\"></td></tr>\n";	}
								if (isset($_POST{"pf1n_".$pnumi}))	{	echo "<tr><td>Width</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1n_".$pnumi."\" size=\"5\" value=\"".$_POST{"pf1n_".$pnumi}."\"></td></tr>\n";	}
									else							{	echo "<tr><td>Width</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1n_".$pnumi."\" size=\"5\" value=\"\"></td></tr>\n";	}
								if (isset($_POST{"pf1o_".$pnumi}))	{	echo "<tr><td>Height</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1o_".$pnumi."\" size=\"5\" value=\"".$_POST{"pf1o_".$pnumi}."\"></td></tr>\n";	}
									else							{	echo "<tr><td>Height</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1o_".$pnumi."\" size=\"5\" value=\"\"></td></tr>\n";	}
								if (isset($_POST{"pf1p_".$pnumi}))	{	echo "<tr><td>Alt Text</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1p_".$pnumi."\" size=\"20\" value=\"".$_POST{"pf1p_".$pnumi}."\"></td></tr>\n";	}
									else							{	echo "<tr><td>Alt Text</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1p_".$pnumi."\" size=\"20\" value=\"\"></td></tr>\n";	}
								if (isset($_POST{"pf1q_".$pnumi}))	{	echo "<tr><td>Border</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1q_".$pnumi."\" size=\"5\" value=\"".$_POST{"pf1q_".$pnumi}."\"></td></tr>\n";	}
									else							{	echo "<tr><td>Border</td><td>&nbsp;</td><td><input type=\"text\" name=\"pf1q_".$pnumi."\" size=\"5\" value=\"0\"></td></tr>\n";	}
																		echo "<tr><td>Align</td><td>&nbsp;</td><td><select name=\"pf1r_".$pnumi."\" size=\"1\">";
								if ((isset($_POST{"pf1r_".$pnumi}))&&($_POST{"pf1r_".$pnumi}=="left")) { echo "<option value=\"left\" SELECTED>Left</option>"; } else { echo "<option value=\"left\">Left</option>"; }
								if ((isset($_POST{"pf1r_".$pnumi}))&&($_POST{"pf1r_".$pnumi}=="right")) { echo "<option value=\"right\" SELECTED>Right</option>"; } else { echo "<option value=\"right\">Right</option>"; }
								if ((isset($_POST{"pf1r_".$pnumi}))&&($_POST{"pf1r_".$pnumi}=="top")) { echo "<option value=\"top\" SELECTED>Top</option>"; } else { echo "<option value=\"top\">Top</option>"; }
								if ((isset($_POST{"pf1r_".$pnumi}))&&($_POST{"pf1r_".$pnumi}=="texttop")) { echo "<option value=\"texttop\" SELECTED>TextTop</option>"; } else { echo "<option value=\"texttop\">TextTop</option>"; }
								if ((isset($_POST{"pf1r_".$pnumi}))&&($_POST{"pf1r_".$pnumi}=="middle")) { echo "<option value=\"middle\" SELECTED>Middle</option>"; } else { echo "<option value=\"middle\">Middle</option>"; }
								if ((isset($_POST{"pf1r_".$pnumi}))&&($_POST{"pf1r_".$pnumi}=="absmiddle")) { echo "<option value=\"absmiddle\" SELECTED>AbsMiddle</option>"; } else { echo "<option value=\"absmiddle\">AbsMiddle</option>"; }
								if ((isset($_POST{"pf1r_".$pnumi}))&&($_POST{"pf1r_".$pnumi}=="bottom")) { echo "<option value=\"bottom\" SELECTED>Bottom</option>"; } else { echo "<option value=\"bottom\">Bottom</option>"; }
								if ((isset($_POST{"pf1r_".$pnumi}))&&($_POST{"pf1r_".$pnumi}=="absbottom")) { echo "<option value=\"absbottom\" SELECTED>AbsBottom</option>"; } else { echo "<option value=\"absbottom\">AbsBottom</option>"; }
								if ((isset($_POST{"pf1r_".$pnumi}))&&($_POST{"pf1r_".$pnumi}=="baseline")) { echo "<option value=\"baseline\" SELECTED>Baseline</option>"; } else { echo "<option value=\"baseline\">Baseline</option>"; }
																		echo "</select></td></tr>";
								break;
				        } // end switch
						echo "</table>";
					}	else	{
// No parameters to display yet - too early
						echo "&nbsp;";
					}
				echo "</td>\n";
?>
			</tr>
			<tr><td colspan="2"><hr color="Maroon" size="1"></td></tr>
			<? } ?>
		<tr><td colspan="2">
			<input type="hidden" name="steps" id="steps" value="PartTwo">
			<input type="hidden" name="pnumhold" id="pnumhold" value="<? echo $_POST["pnum"]; ?>">
			<input type="hidden" name="pcolhold" id="pcolhold" value="<? echo $_POST["pcol"]; ?>">
<?
// This all determines what data to show based on how many pages deep we are (into the same page)
	if (isset($_POST["pparamhold"]))
			{	echo "<input type=\"hidden\" name=\"pparamhold\" id=\"pparamhold\" value=\"2\">";	}
	else	{	echo "<input type=\"hidden\" name=\"pparamhold\" id=\"pparamhold\" value=\"\">";	}
	if (!isset($_POST["pparamhold"]))
			{	echo "<button name=\"LetsGo\" id=\"LetsGo\" value=\"PartPreview\" type=\"submit\" onClick=\"pparamhold.value='';\">Proceed to Field Parameters</button>";	}
	elseif ((isset($_POST["pparamhold"]))&&($_POST["pparamhold"]==""))
			{	echo "<button name=\"LetsGo\" id=\"LetsGo\" value=\"PartPreview\" type=\"submit\" onClick=\"pparamhold.value='5';\">Update Field Parameters</button>";	}
	else	{	echo "<button name=\"LetsGo\" id=\"LetsGo\" value=\"PartPreview\" type=\"submit\" onClick=\"if (pparamhold.value!='1'){pparamhold.value='2';}\">Regen Data / Form Preview</button>";	}
	if ((isset($_POST["pparamhold"]))&&($_POST["pparamhold"]!=""))
	{	echo "&nbsp;<button name=\"LetsGo\" id=\"LetsGo\" value=\"PartCode\" type=\"submit\" onClick=\"if (pparamhold.value!='1'){pparamhold.value='3';}\">Form Code - End User</button>";
		echo "&nbsp;<button name=\"LetsGo\" id=\"LetsGo\" type=\"button\" onClick=\"openNewWindow('http://db-rse.sourceforge.net/');\">Database Record Editor</button>";
	}
	echo "</td></tr>";
		echo "<tr><td colspan=\"2\"><hr color=\"Maroon\" size=\"1\"></td></tr><tr><td align=\"right\" colspan=\"2\">";
		echo "<small class=\"xg\">Keith D Commiskey (2005; 2017) | <a href=\"http://kdcinfo.com\" target=\"GFY_Pops\">http://kdcinfo.com</a></small>";
		echo "</td></tr>";
	echo "</table></form>";
// End of main table

	} elseif ((isset($_POST["steps"])) && ($_POST["steps"] == "PartPreview")) {
		include("index_preview.php");
	} elseif ((isset($_POST["steps"])) && ($_POST["steps"] == "PartCode")) {
		include("index_code.php");
	} elseif ((isset($_POST["steps"])) && ($_POST["steps"] == "PartForm")) {
		echo "&nnbsp;";
	} else {
?>
	<table width="700" border="0" cellspacing="0" cellpadding="3" align="center">
		<tr><td colspan="2">
				<p><h3>Welcome to the quick and simple Form-a-Form creator!</h3></p>
				<ul>
					<li>Clicking the button below will take you to "Step 1".</li>
					<li>The subsequent 2 page loads (Steps 2 and 3) will alert you that your form data is being generated.</li>
					<li>On that final page load, you will be presented with 2 new buttons;
						<ul>
							<li>One button to preview your form, and</li>
							<li>a 2nd button to see your form's code.</li>
						</ul>
					</li>
				</ul>
		</td></tr>
		<tr><td colspan="2"><hr color="Maroon" size="1"></td></tr>
		<form action="<? echo $_SERVER['PHP_SELF']; ?>" method="POST" name="PartFormForm">
			<tr><td colspan="2" align="right">
					<input type="hidden" name="steps" id="steps" value="PartOne">
					<button name="LetsGo" id="LetsGo" type="submit" onClick="document.PartFormForm.steps.value='PartOne';">Thank you for using form-a-form... Let's build your form!</button>
			</td></tr>
		</form>
		<tr><td colspan="2"><hr color="Maroon" size="1"></td></tr>
		<tr><td align="left"><a href="../">Home Page</a></td>
			<td align="right"><small class="xg">Keith D Commiskey (2005; 2017) | <a href="http://kdcinfo.com" target="GFY_Pops">http://kdcinfo.com</a></small></td>
		</tr>
	</table>
<script language="php"> } </script>
</body>
</html>
