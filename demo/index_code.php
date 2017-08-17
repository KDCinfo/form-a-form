<table width="700" border="0" cellspacing="0" cellpadding="0" align="center"><tr><td>
	That's it</button> ... or <a href="#" onclick="window.close(); return false;">hide this window</a> to get back to form-a-form ...
	<hr color="Maroon" size="3"><br>
</td></tr></table>
	<table width="700" border="0" cellspacing="0" cellpadding="3" align="center">
<?
$printthedbcode = "&lt;script language=\"php\"&gt;\n";
$printthedbcode .= "\t// Change the following variables to fit your database:\n";
$printthedbcode .= "\t\$databasename = \"\";\n";
$printthedbcode .= "\t\$dbusername = \"\";\n";
$printthedbcode .= "\t\$dbpassword = \"\";\n";
$printthedbcode .= "\t\$connectstring = mysql_connect(\"localhost\", \$dbusername, \$dbpassword) or die(\"&lt;br&gt;&lt;strong&gt;Could not connect to server.&lt;/strong&gt;&lt;br&gt;\".mysql_error());\n";
$printthedbcode .= "\tmysql_select_db(\$databasename, \$connectstring) or die(\"&lt;br&gt;&lt;strong&gt;Could not connect to database.&lt;/strong&gt;&lt;br&gt;\".mysql_error());\n";
$printthedbcode .= "&lt;/script&gt;\n";

$printthecode = "&lt;script language=\"php\"&gt;\n";
$printthecode .= "include(\"dbconnect.php\");\n";
$printthecode .= "\t// Tip: Rename file above (rename dbconnect.php to your own filename)\n";
$printthecode .= "\t//\t...then, put the file somewhere safe\n";
$printthecode .= "\t//\t...then, modify above 'include' to point to new path and filename\n";
$printthecode .= "if (isset(\$_POST[\"".$_POST["tname"]."_SaveIt\"]))\n{";
$printthecode .= "\t\$insertquery = \"INSERT INTO tablename \"; // Rename 'tablename' to your database table name\n";
$printthecode .= "\t\$insertquery .= \"(";
	$forit1 = 0;
	for ($pnumi = 1; $pnumi <= $_POST["pnum"]; $pnumi++)
	{
		if (($_POST{"pftype_".$pnumi} != "hidden")&&($_POST{"pftype_".$pnumi} != "button")&&($_POST{"pftype_".$pnumi} != "submit")&&($_POST{"pftype_".$pnumi} != "reset")&&($_POST{"pftype_".$pnumi} != "separator")&&($_POST{"pftype_".$pnumi} != "image"))
		{	$printthecode .= "`".ereg_replace("[^a-z,A-Z,0-9,_,-]", "_", $_POST{"pfnames_".$pnumi})."`, "; $forit1 = 1;	}
	}
	if ($forit1 == 1)
			{	$printthecode = substr($printthecode, 0, strlen($printthecode)-2);	}
	else	{	$printthecode .= "There aren't any fields to insert into the database.";	}
$printthecode .= ")\";\n";
$printthecode .= "\t\$insertquery .= \" VALUES \";\n";
$printthecode .= "\t\$insertquery .= \"(";
	$forit2 = 0;
	for ($pnumi = 1; $pnumi <= $_POST["pnum"]; $pnumi++)
	{
		if (($_POST{"pftype_".$pnumi} != "hidden")&&($_POST{"pftype_".$pnumi} != "button")&&($_POST{"pftype_".$pnumi} != "submit")&&($_POST{"pftype_".$pnumi} != "reset")&&($_POST{"pftype_".$pnumi} != "separator")&&($_POST{"pftype_".$pnumi} != "image"))
		{	$printthecode .= "'\".\$_POST{\"".ereg_replace("[^a-z,A-Z,0-9,_,-]", "_", $_POST{"pfnames_".$pnumi})."\"}.\"', "; $forit2 = 1;	}
	}
	if ($forit2 == 1)
			{	$printthecode = substr($printthecode, 0, strlen($printthecode)-2);	}
	else	{	$printthecode .= "There aren't any fields to insert into the database.";	}
$printthecode .= ")\";\n";

$printthecode .= "\tmysql_query(\$insertquery) or die (\"Unable to save data. Please try again later.&lt;br&gt;\".mysql_error());\n";
$printthecode .= "\t\$goodtogo = \"<font face='Arial' size='+1' color='Blue'><strong>\";\n";
$printthecode .= "\t\$goodtogo .= \"Data has been saved - Thank you!\";\n";
$printthecode .= "\t\$goodtogo .= \"</strong></font><br><br>\";\n";
$printthecode .= "}\n&lt;/script&gt;\n";

	$printthecode .= "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">\n<html>\n<head>\n";
	$printthecode .= "\t<title>".$_POST["pname"]."</title>\n";
	$printthecode .= "\t<meta name=\"description\" content=\"".$_POST["pname"]."\">\n";
	$printthecode .= "</head>\n<body>\n";

$printthecode .= "&lt;script language=\"php\"&gt;";
$printthecode .= "if (isset(\$goodtogo)) { echo \$goodtogo; exit; }";
$printthecode .= "&lt;/script&gt;\n";

?>	<table width="700" border="0" cellspacing="0" cellpadding="3" align="center">
		<tr>
			<td><strong>Display Name</strong></td>		<td width="50"><? echo $_POST["pname"]; ?></td>
			<td><strong>Number of Fields</strong></td>	<td width="50"><? echo $_POST["pnum"]; ?></td>
		</tr>
		<tr>
			<td><strong>Technical Name</strong></td>	<td width="50"><? echo $_POST["tname"]; ?></td>
			<td><strong>Number of Columns</strong></td>	<td width="50"><? echo $_POST["pcol"]; ?></td>
		</tr>
		<tr><td colspan="4"><hr color="Maroon" size="1"></td></tr>
	</table>
<?
	$printthecode .= "\n<form name=\"".ereg_replace("[^a-z,A-Z,0-9,_,-]", "_", $_POST["tname"])."\" action=\"".$_POST["tname"].".php\" method=\"POST\">";
	$printthecode .= "\n<table width=\"700\" border=\"0\" cellspacing=\"0\" cellpadding=\"3\" align=\"center\">\n";
	if ($_POST["pcol"] == "4") { ?>

<!-- BEGIN CODE -->
			<?	$pcolcnt = 0;
				for ($pnumi = 1; $pnumi <= $_POST["pnum"]; $pnumi++)
				{	if ($pcolcnt == 1) $pcolcnt = 2; else $pcolcnt = 1;
					if (($pcolcnt == 1)&&($_POST{"pftypes_".$pnumi}!="Hidden")) $printthecode .= "<tr>\n";
						if (($_POST{"pftypes_".$pnumi}!="Hidden")&&($_POST{"pftypes_".$pnumi}!="Separator")&&($_POST{"pftypes_".$pnumi}!="Image"))
						{	$printthecode .= "\t<td>".$_POST{"pfnames_".$pnumi}."</td>\n";	}
						if ($_POST{"pftypes_".$pnumi}=="Text")
						{	if (isset($_POST{"pf1i_".$pnumi})) { $pf1i = " disabled"; } else { $pf1i = ""; }
							if (isset($_POST{"pf1j_".$pnumi})) { $pf1j = " readonly"; } else { $pf1j = ""; }
							$printthecode .= "\t<td><input type=\"Text\" name=\"".ereg_replace("[^a-z,A-Z,0-9,_,-]", "_", $_POST{"pfnames_".$pnumi})."\" value=\"".$_POST{"pf1a_".$pnumi}."\" maxlength=\"".$_POST{"pf1b_".$pnumi}."\" size=\"".$_POST{"pf1c_".$pnumi}."\"".$pf1i.$pf1j."></td>\n";	}
						elseif ($_POST{"pftypes_".$pnumi}=="Hidden")
						{	if (isset($_POST{"pf1i_".$pnumi})) { $pf1i = " disabled"; } else { $pf1i = ""; }
							$printthecode .= "\t<input type=\"Hidden\" name=\"".ereg_replace("[^a-z,A-Z,0-9,_,-]", "_", $_POST{"pfnames_".$pnumi})."\" value=\"".$_POST{"pf1a_".$pnumi}."\"".$pf1i.">\n";
							$pcolcnt = $pcolcnt - 1;	}
						elseif ($_POST{"pftypes_".$pnumi}=="TextArea")
						{	if (isset($_POST{"pf1i_".$pnumi})) { $pf1i = " disabled"; } else { $pf1i = ""; }
							if (isset($_POST{"pf1j_".$pnumi})) { $pf1j = " readonly"; } else { $pf1j = ""; }
							$printthecode .= "\t<td><textarea name=\"".ereg_replace("[^a-z,A-Z,0-9,_,-]", "_", $_POST{"pfnames_".$pnumi})."\" cols=\"".$_POST{"pf1d_".$pnumi}."\" rows=\"".$_POST{"pf1e_".$pnumi}."\"".$pf1i.$pf1j.">".$_POST{"pf1a_".$pnumi}."&lt;/textarea></td>\n";	}
						elseif ($_POST{"pftypes_".$pnumi}=="Radio")
						{	$printthecode .= "\t<td>\n";
							if ($_POST{"pf1h_".$pnumi}>1) { $pf1ht = $_POST{"pf1h_".$pnumi}; } else { $pf1ht = 1; }
							for ($pf1hc = 1; $pf1hc <= $pf1ht; $pf1hc++)
							{	$printthecode .= "\t\t<input type=\"Radio\" name=\"".ereg_replace("[^a-z,A-Z,0-9,_,-]", "_", $_POST{"pfnames_".$pnumi})."\" value=\"".$_POST{"pf1a_".$pnumi}."\"> ".$_POST{"pf1a_".$pnumi}."<br>\n";	}
							$printthecode .= "\t</td>\n";	}
						elseif ($_POST{"pftypes_".$pnumi}=="Checkbox")
						{	$printthecode .= "\t<td>\n";
							if ($_POST{"pf1h_".$pnumi}>1) { $pf1ht = $_POST{"pf1h_".$pnumi}; } else { $pf1ht = 1; }
							for ($pf1hc = 1; $pf1hc <= $pf1ht; $pf1hc++)
							{	$printthecode .= "\t\t<input type=\"Checkbox\" name=\"".ereg_replace("[^a-z,A-Z,0-9,_,-]", "_", $_POST{"pfnames_".$pnumi})."\" value=\"".$_POST{"pf1a_".$pnumi}."\"> ".$_POST{"pf1a_".$pnumi}."<br>\n";	}
							$printthecode .= "\t</td>\n";	}
						elseif ($_POST{"pftypes_".$pnumi}=="Select")
						{	if (isset($_POST{"pf1i_".$pnumi})) { $pf1i = " disabled"; } else { $pf1i = ""; }
							if (isset($_POST{"pf1k_".$pnumi})) { $pf1k = " multiple"; } else { $pf1k = ""; }
							$printthecode .= "\t<td><select name=\"".ereg_replace("[^a-z,A-Z,0-9,_,-]", "_", $_POST{"pfnames_".$pnumi})."\" value=\"".$_POST{"pf1a_".$pnumi}."\" size=\"".$_POST{"pf1c_".$pnumi}."\"".$pf1i.$pf1k.">\n";
							if ($_POST{"pf1h_".$pnumi}>1) { $pf1ht = $_POST{"pf1h_".$pnumi}; } else { $pf1ht = 1; }
							for ($pf1hc = 1; $pf1hc <= $pf1ht; $pf1hc++)
							{	$printthecode .= "\t\t<option value=\"".$_POST{"pf1a_".$pnumi}."\"> ".$_POST{"pf1a_".$pnumi}."</option>\n";	}
							$printthecode .= "\t</select></td>\n";	}
						elseif ($_POST{"pftypes_".$pnumi}=="Button")
						{	if (isset($_POST{"pf1i_".$pnumi})) { $pf1i = " disabled"; } else { $pf1i = ""; }
							$printthecode .= "\t<td><button type=\"".$_POST{"pf1f_".$pnumi}."\" name=\"".ereg_replace("[^a-z,A-Z,0-9,_,-]", "_", $_POST{"pfnames_".$pnumi})."\"".$pf1i.">".stripslashes($_POST{"pf1g_".$pnumi})."</button></td>\n";	}
						elseif ($_POST{"pftypes_".$pnumi}=="Submit")
						{	if (isset($_POST{"pf1i_".$pnumi})) { $pf1i = " disabled"; } else { $pf1i = ""; }
							$printthecode .= "\t<td><input type=\"Submit\" name=\"".ereg_replace("[^a-z,A-Z,0-9,_,-]", "_", $_POST{"pfnames_".$pnumi})."\" value=\"".$_POST{"pf1a_".$pnumi}."\"".$pf1i."></td>\n";	}
						elseif ($_POST{"pftypes_".$pnumi}=="Reset")
						{	if (isset($_POST{"pf1i_".$pnumi})) { $pf1i = " disabled"; } else { $pf1i = ""; }
							$printthecode .= "\t<td><input type=\"Reset\" name=\"".ereg_replace("[^a-z,A-Z,0-9,_,-]", "_", $_POST{"pfnames_".$pnumi})."\" value=\"".$_POST{"pf1a_".$pnumi}."\"".$pf1i."></td>\n";	}
						elseif ($_POST{"pftypes_".$pnumi}=="Separator")
						{	$printthecode .= "\t<td colspan=\"2\"><hr size=\"".$_POST{"pf1c_".$pnumi}."\" width=\"".$_POST{"pf1n_".$pnumi}."\" color=\"".$_POST{"pf1m_".$pnumi}."\"></td>\n";	}
						elseif ($_POST{"pftypes_".$pnumi}=="Image")
						{	$printthecode .= "\t<td colspan=\"2\"><img src=\"".$_POST{"pf1g_".$pnumi}."\" width=\"".$_POST{"pf1n_".$pnumi}."\" height=\"".$_POST{"pf1o_".$pnumi}."\" alt=\"".$_POST{"pf1p_".$pnumi}."\" border=\"".$_POST{"pf1q_".$pnumi}."\" align=\"".$_POST{"pf1r_".$pnumi}."\"></td>\n";	}
						else
						{	$printthecode .= "\t<td>&amp;nbsp;</td>\n";	}
					if ($pcolcnt == 2) $printthecode .= "</tr>\n";
				}
				if ($pcolcnt == 1) $printthecode .= "\t<td colspan=\"2\">&amp;nbsp;</td>\n</tr>\n";
?>

<!-- END CODE -->
	<?
				echo "\n<tr><td colspan=\"4\">\n";
	} else { ?>

<!-- BEGIN CODE -->
<?		for ($pnumi = 1; $pnumi <= $_POST["pnum"]; $pnumi++)
		{	if (($_POST{"pftypes_".$pnumi}!="Hidden")&&($_POST{"pftypes_".$pnumi}!="Separator")&&($_POST{"pftypes_".$pnumi}!="Image"))
			{	$printthecode .= "<tr>\n\t<td>".$_POST{"pfnames_".$pnumi}."</td>\n";	}
			if ($_POST{"pftypes_".$pnumi}=="Text")
			{	if (isset($_POST{"pf1i_".$pnumi})) { $pf1i = " disabled"; } else { $pf1i = ""; }
				if (isset($_POST{"pf1j_".$pnumi})) { $pf1j = " readonly"; } else { $pf1j = ""; }
				$printthecode .= "\t<td><input type=\"Text\" name=\"".ereg_replace("[^a-z,A-Z,0-9,_,-]", "_", $_POST{"pfnames_".$pnumi})."\" value=\"".$_POST{"pf1a_".$pnumi}."\" maxlength=\"".$_POST{"pf1b_".$pnumi}."\" size=\"".$_POST{"pf1c_".$pnumi}."\"".$pf1i.$pf1j."></td>\n";	}
			elseif ($_POST{"pftypes_".$pnumi}=="Hidden")
			{	if (isset($_POST{"pf1i_".$pnumi})) { $pf1i = " disabled"; } else { $pf1i = ""; }
				$printthecode .= "\t<input type=\"Hidden\" name=\"".ereg_replace("[^a-z,A-Z,0-9,_,-]", "_", $_POST{"pfnames_".$pnumi})."\" value=\"".$_POST{"pf1a_".$pnumi}."\"".$pf1i.">\n";	}
			elseif ($_POST{"pftypes_".$pnumi}=="TextArea")
			{	if (isset($_POST{"pf1i_".$pnumi})) { $pf1i = " disabled"; } else { $pf1i = ""; }
				if (isset($_POST{"pf1j_".$pnumi})) { $pf1j = " readonly"; } else { $pf1j = ""; }
				$printthecode .= "\t<td><textarea name=\"".ereg_replace("[^a-z,A-Z,0-9,_,-]", "_", $_POST{"pfnames_".$pnumi})."\" cols=\"".$_POST{"pf1d_".$pnumi}."\" rows=\"".$_POST{"pf1e_".$pnumi}."\"".$pf1i.$pf1j.">".$_POST{"pf1a_".$pnumi}."&lt;/textarea></td>\n";	}
			elseif ($_POST{"pftypes_".$pnumi}=="Radio")
			{	$printthecode .= "\t<td>\n";
				if ($_POST{"pf1h_".$pnumi}>1) { $pf1ht = $_POST{"pf1h_".$pnumi}; } else { $pf1ht = 1; }
				for ($pf1hc = 1; $pf1hc <= $pf1ht; $pf1hc++)
				{	$printthecode .= "\t\t<input type=\"Radio\" name=\"".ereg_replace("[^a-z,A-Z,0-9,_,-]", "_", $_POST{"pfnames_".$pnumi})."\" value=\"".$_POST{"pf1a_".$pnumi}."\"> ".$_POST{"pf1a_".$pnumi}."<br>\n";	}
				$printthecode .= "\t</td>\n";	}
			elseif ($_POST{"pftypes_".$pnumi}=="Checkbox")
			{	$printthecode .= "\t<td>\n";
				if ($_POST{"pf1h_".$pnumi}>1) { $pf1ht = $_POST{"pf1h_".$pnumi}; } else { $pf1ht = 1; }
				for ($pf1hc = 1; $pf1hc <= $pf1ht; $pf1hc++)
				{	$printthecode .= "\t\t<input type=\"Checkbox\" name=\"".ereg_replace("[^a-z,A-Z,0-9,_,-]", "_", $_POST{"pfnames_".$pnumi})."\" value=\"".$_POST{"pf1a_".$pnumi}."\"> ".$_POST{"pf1a_".$pnumi}."<br>\n";	}
				$printthecode .= "\t</td>\n";	}
			elseif ($_POST{"pftypes_".$pnumi}=="Select")
			{	if (isset($_POST{"pf1i_".$pnumi})) { $pf1i = " disabled"; } else { $pf1i = ""; }
				if (isset($_POST{"pf1k_".$pnumi})) { $pf1k = " multiple"; } else { $pf1k = ""; }
				$printthecode .= "\t<td><select name=\"".ereg_replace("[^a-z,A-Z,0-9,_,-]", "_", $_POST{"pfnames_".$pnumi})."\" value=\"".$_POST{"pf1a_".$pnumi}."\" size=\"".$_POST{"pf1c_".$pnumi}."\"".$pf1i.$pf1k.">\n";
				if ($_POST{"pf1h_".$pnumi}>1) { $pf1ht = $_POST{"pf1h_".$pnumi}; } else { $pf1ht = 1; }
				for ($pf1hc = 1; $pf1hc <= $pf1ht; $pf1hc++)
				{	$printthecode .= "\t\t<option value=\"".$_POST{"pf1a_".$pnumi}."\"> ".$_POST{"pf1a_".$pnumi}."</option>\n";	}
				$printthecode .= "\t</select></td>\n";	}
			elseif ($_POST{"pftypes_".$pnumi}=="Button")
			{	if (isset($_POST{"pf1i_".$pnumi})) { $pf1i = " disabled"; } else { $pf1i = ""; }
				$printthecode .= "\t<td><button type=\"".$_POST{"pf1f_".$pnumi}."\" disabled name=\"".ereg_replace("[^a-z,A-Z,0-9,_,-]", "_", $_POST{"pf1a_".$pnumi})."\"".$pf1i.">".stripslashes($_POST{"pf1g_".$pnumi})."</button></td>\n";	}
			elseif ($_POST{"pftypes_".$pnumi}=="Submit")
			{	if (isset($_POST{"pf1i_".$pnumi})) { $pf1i = " disabled"; } else { $pf1i = ""; }
				$printthecode .= "\t<td><input type=\"Submit\" disabled name=\"".ereg_replace("[^a-z,A-Z,0-9,_,-]", "_", $_POST{"pfnames_".$pnumi})."\" value=\"".$_POST{"pf1a_".$pnumi}."\"".$pf1i."></td>\n";	}
			elseif ($_POST{"pftypes_".$pnumi}=="Reset")
			{	if (isset($_POST{"pf1i_".$pnumi})) { $pf1i = " disabled"; } else { $pf1i = ""; }
				$printthecode .= "\t<td><input type=\"Reset\" name=\"".ereg_replace("[^a-z,A-Z,0-9,_,-]", "_", $_POST{"pfnames_".$pnumi})."\" value=\"".$_POST{"pf1a_".$pnumi}."\"".$pf1i."></td>\n";	}
			elseif ($_POST{"pftypes_".$pnumi}=="Separator")
			{	$printthecode .= "<tr>\n\t<td colspan=\"2\"><hr size=\"".$_POST{"pf1c_".$pnumi}."\"></td>\n</tr>\n";	}
			elseif ($_POST{"pftypes_".$pnumi}=="Image")
			{	$printthecode .= "<tr>\n\t<td colspan=\"2\"><img src=\"".$_POST{"pf1g_".$pnumi}."\" width=\"".$_POST{"pf1n_".$pnumi}."\" height=\"".$_POST{"pf1o_".$pnumi}."\" alt=\"".$_POST{"pf1p_".$pnumi}."\" border=\"".$_POST{"pf1q_".$pnumi}."\" align=\"".$_POST{"pf1r_".$pnumi}."\"></td>\n</tr>\n";	}
			else
			{	$printthecode .= "\t<td>&nbsp;</td>\n";	}
			if (($_POST{"pftypes_".$pnumi}!="Hidden")&&($_POST{"pftypes_".$pnumi}!="Separator")&&($_POST{"pftypes_".$pnumi}!="Image"))
			{	$printthecode .= "</tr>\n";	}
		}
?>
<!-- END CODE -->
<?		echo "\n\t\t<tr><td colspan=\"2\">";
	}
	if ($_POST["pcol"] == "4")
	{	$printthecode .= "\t<tr><td colspan=\"4\">\n\t\t<input type=\"submit\" name=\"".ereg_replace("[^a-z,A-Z,0-9,_,-]", "_", $_POST["tname"])."_SaveIt\" id=\"".ereg_replace("[^a-z,A-Z,0-9,_,-]", "_", $_POST["tname"])."_SaveIt\" value=\"Save this Data\">\n\t</td></tr>";	}
	else
	{	$printthecode .= "\t<tr><td colspan=\"2\">\n\t\t<input type=\"submit\" name=\"".ereg_replace("[^a-z,A-Z,0-9,_,-]", "_", $_POST["tname"])."_SaveIt\" id=\"".ereg_replace("[^a-z,A-Z,0-9,_,-]", "_", $_POST["tname"])."_SaveIt\" value=\"Save this Data\">\n\t</td></tr>";	}
	$printthecode .= "\n</table>";
	$printthecode .= "\n</form>\n";
	$printthecode .= "\n</body>\n</html>\n";
?>
	<table width="700" border="0" cellspacing="0" cellpadding="3" align="center">
		<tr><td colspan="4">
			<hr color="Maroon" size="3"><br>
			<h5><strong>dbconnect.php</strong> contents</h5>
			<textarea cols="85" rows="11" name="printthedbcode" id="printthedbcode"><? echo $printthedbcode; ?></textarea>
			<hr color="Maroon" size="3"><br>
			<h5><strong>Form Code</strong></h5>
			<textarea cols="85" rows="19" name="printthecode" id="printthecode"><? echo $printthecode; ?></textarea>
		</td></tr>
	</table>
