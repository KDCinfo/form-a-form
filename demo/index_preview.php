<table width="700" border="0" cellspacing="0" cellpadding="0" align="center"><tr><td>
	That's it ... or <a href="#" onclick="window.close(); return false;">close this window</a> to get back to form-a-form ...
	<hr color="Maroon" size="3"><br>
</td></tr></table>
<?	echo "<table width=\"700\" border=\"".$_POST["pborder"]."\" cellspacing=\"0\" cellpadding=\"3\" align=\"".$_POST["palign"]."\">";
	if ($_POST["pcol"] == "4") { ?>

<!-- BEGIN CODE -->
			<?	$pcolcnt = 0;
				echo "\n";
				for ($pnumi = 1; $pnumi <= $_POST["pnum"]; $pnumi++)
				{	if ($pcolcnt == 1) $pcolcnt = 2; else $pcolcnt = 1;
					if (($pcolcnt == 1)&&($_POST{"pftypes_".$pnumi}!="Hidden")) echo "<tr>\n";
						if (($_POST{"pftypes_".$pnumi}!="Hidden")&&($_POST{"pftypes_".$pnumi}!="Separator")&&($_POST{"pftypes_".$pnumi}!="Image"))
						{	echo "\t<td>".$_POST{"pfnames_".$pnumi}."</td>\n";	}
						if ($_POST{"pftypes_".$pnumi}=="Text")
						{	if (isset($_POST{"pf1i_".$pnumi})) { $pf1i = " disabled"; } else { $pf1i = ""; }
							if (isset($_POST{"pf1j_".$pnumi})) { $pf1j = " readonly"; } else { $pf1j = ""; }
							echo "\t<td><input type=\"Text\" name=\"".$_POST{"pfnames_".$pnumi}."\" value=\"".$_POST{"pf1a_".$pnumi}."\" maxlength=\"".$_POST{"pf1b_".$pnumi}."\" size=\"".$_POST{"pf1c_".$pnumi}."\"".$pf1i.$pf1j."></td>\n";	}
						elseif ($_POST{"pftypes_".$pnumi}=="Hidden")
						{	if (isset($_POST{"pf1i_".$pnumi})) { $pf1i = " disabled"; } else { $pf1i = ""; }
							echo "\t<input type=\"Hidden\" name=\"".$_POST{"pfnames_".$pnumi}."\" value=\"".$_POST{"pf1a_".$pnumi}."\"".$pf1i.">\n";
							$pcolcnt = $pcolcnt - 1;	}
						elseif ($_POST{"pftypes_".$pnumi}=="TextArea")
						{	if (isset($_POST{"pf1i_".$pnumi})) { $pf1i = " disabled"; } else { $pf1i = ""; }
							if (isset($_POST{"pf1j_".$pnumi})) { $pf1j = " readonly"; } else { $pf1j = ""; }
							echo "\t<td><textarea name=\"".$_POST{"pfnames_".$pnumi}."\" cols=\"".$_POST{"pf1d_".$pnumi}."\" rows=\"".$_POST{"pf1e_".$pnumi}."\"".$pf1i.$pf1j.">".$_POST{"pf1a_".$pnumi}."</textarea></td>\n";	}
						elseif ($_POST{"pftypes_".$pnumi}=="Radio")
						{	echo "\t<td>";
							for ($pf1hc = 1; $pf1hc <= $_POST{"pf1h_".$pnumi}; $pf1hc++)
							{	echo "<input type=\"Radio\" name=\"".$_POST{"pfnames_".$pnumi}."\" value=\"".$_POST{"pf1a_".$pnumi}."\"> ".$_POST{"pf1a_".$pnumi}."<br>";	}
							echo "</td>\n";	}
						elseif ($_POST{"pftypes_".$pnumi}=="Checkbox")
						{	echo "\t<td>";
							for ($pf1hc = 1; $pf1hc <= $_POST{"pf1h_".$pnumi}; $pf1hc++)
							{	echo "<input type=\"Checkbox\" name=\"".$_POST{"pfnames_".$pnumi}."\" value=\"".$_POST{"pf1a_".$pnumi}."\"> ".$_POST{"pf1a_".$pnumi}."<br>";	}
							echo "</td>\n";	}
						elseif ($_POST{"pftypes_".$pnumi}=="Select")
						{	if (isset($_POST{"pf1i_".$pnumi})) { $pf1i = " disabled"; } else { $pf1i = ""; }
							if (isset($_POST{"pf1k_".$pnumi})) { $pf1k = " multiple"; } else { $pf1k = ""; }
							echo "\t<td><select name=\"".$_POST{"pfnames_".$pnumi}."\" value=\"".$_POST{"pf1a_".$pnumi}."\" size=\"".$_POST{"pf1c_".$pnumi}."\"".$pf1i.$pf1k.">";
							for ($pf1hc = 1; $pf1hc <= $_POST{"pf1h_".$pnumi}; $pf1hc++)
							{	echo "<option value=\"".$_POST{"pf1a_".$pnumi}."\"> ".$_POST{"pf1a_".$pnumi}."</option>";	}
							echo "</select></td>\n";	}
						elseif ($_POST{"pftypes_".$pnumi}=="Button")
						{	if (isset($_POST{"pf1i_".$pnumi})) { $pf1i = " disabled"; } else { $pf1i = ""; }
							echo "\t<td><button type=\"".$_POST{"pf1f_".$pnumi}."\" name=\"".$_POST{"pfnames_".$pnumi}."\"".$pf1i.">".stripslashes($_POST{"pf1g_".$pnumi})."</button></td>\n";	}
						elseif ($_POST{"pftypes_".$pnumi}=="Submit")
						{	if (isset($_POST{"pf1i_".$pnumi})) { $pf1i = " disabled"; } else { $pf1i = ""; }
							echo "\t<td><input type=\"Submit\" name=\"".$_POST{"pfnames_".$pnumi}."\" value=\"".$_POST{"pf1a_".$pnumi}."\"".$pf1i."></td>\n";	}
						elseif ($_POST{"pftypes_".$pnumi}=="Reset")
						{	if (isset($_POST{"pf1i_".$pnumi})) { $pf1i = " disabled"; } else { $pf1i = ""; }
							echo "\t<td><input type=\"Reset\" name=\"".$_POST{"pfnames_".$pnumi}."\" value=\"".$_POST{"pf1a_".$pnumi}."\"".$pf1i."></td>\n";	}
						elseif ($_POST{"pftypes_".$pnumi}=="Separator")
						{	echo "\t<td colspan=\"2\"><hr size=\"".$_POST{"pf1c_".$pnumi}."\" color=\"".$_POST{"pf1m_".$pnumi}."\" width=\"".$_POST{"pf1n_".$pnumi}."\" noshade></td>\n";	}
						elseif ($_POST{"pftypes_".$pnumi}=="Image")
						{	if ($_POST{"pf1n_".$pnumi} == "") { $pf1n = ""; } else { $pf1n = "width= ".$_POST{"pf1n_".$pnumi}; }
							if ($_POST{"pf1o_".$pnumi} == "") { $pf1o = ""; } else { $pf1o = "height= ".$_POST{"pf1o_".$pnumi}; }
							echo "\t<td colspan=\"2\"><img src=\"".$_POST{"pf1g_".$pnumi}."\" $pf1n $pf1o alt=\"".$_POST{"pf1p_".$pnumi}."\" border=\"".$_POST{"pf1q_".$pnumi}."\" align=\"".$_POST{"pf1r_".$pnumi}."\"></td>\n";	}
						else
						{	echo "\t<td>&nbsp;</td>\n";	}
					if ($pcolcnt == 2) echo "</tr>\n";
				}
				if ($pcolcnt == 1) echo "\t<td colspan=\"2\">&nbsp;</td>\n</tr>\n";
?>

<!-- END CODE -->
	<?	} else { ?>

<!-- BEGIN CODE -->
<?		echo "\n";
		for ($pnumi = 1; $pnumi <= $_POST["pnum"]; $pnumi++)
		{	if (($_POST{"pftypes_".$pnumi}!="Hidden")&&($_POST{"pftypes_".$pnumi}!="Separator")&&($_POST{"pftypes_".$pnumi}!="Image"))
			{	echo "<tr>\n\t<td>".$_POST{"pfnames_".$pnumi}."</td>\n";	}
			if ($_POST{"pftypes_".$pnumi}=="Text")
			{	if (isset($_POST{"pf1i_".$pnumi})) { $pf1i = " disabled"; } else { $pf1i = ""; }
				if (isset($_POST{"pf1j_".$pnumi})) { $pf1j = " readonly"; } else { $pf1j = ""; }
				echo "\t<td><input type=\"Text\" name=\"".$_POST{"pfnames_".$pnumi}."\" value=\"".$_POST{"pf1a_".$pnumi}."\" maxlength=\"".$_POST{"pf1b_".$pnumi}."\" size=\"".$_POST{"pf1c_".$pnumi}."\"".$pf1i.$pf1j."></td>\n";	}
			elseif ($_POST{"pftypes_".$pnumi}=="Hidden")
			{	if (isset($_POST{"pf1i_".$pnumi})) { $pf1i = " disabled"; } else { $pf1i = ""; }
				echo "\t<input type=\"Hidden\" name=\"".$_POST{"pfnames_".$pnumi}."\" value=\"".$_POST{"pf1a_".$pnumi}."\"".$pf1i.">\n";	}
			elseif ($_POST{"pftypes_".$pnumi}=="TextArea")
			{	if (isset($_POST{"pf1i_".$pnumi})) { $pf1i = " disabled"; } else { $pf1i = ""; }
				if (isset($_POST{"pf1j_".$pnumi})) { $pf1j = " readonly"; } else { $pf1j = ""; }
				echo "\t<td><textarea name=\"".$_POST{"pfnames_".$pnumi}."\" cols=\"".$_POST{"pf1d_".$pnumi}."\" rows=\"".$_POST{"pf1e_".$pnumi}."\"".$pf1i.$pf1j.">".$_POST{"pf1a_".$pnumi}."</textarea></td>\n";	}
			elseif ($_POST{"pftypes_".$pnumi}=="Radio")
			{	echo "\t<td>";
				for ($pf1hc = 1; $pf1hc <= $_POST{"pf1h_".$pnumi}; $pf1hc++)
				{	echo "<input type=\"Radio\" name=\"".$_POST{"pfnames_".$pnumi}."\" value=\"".$_POST{"pf1a_".$pnumi}."\"> ".$_POST{"pf1a_".$pnumi}."<br>";	}
				echo "</td>\n";	}
			elseif ($_POST{"pftypes_".$pnumi}=="Checkbox")
			{	echo "\t<td>";
				for ($pf1hc = 1; $pf1hc <= $_POST{"pf1h_".$pnumi}; $pf1hc++)
				{	echo "<input type=\"Checkbox\" name=\"".$_POST{"pfnames_".$pnumi}."\" value=\"".$_POST{"pf1a_".$pnumi}."\"> ".$_POST{"pf1a_".$pnumi}."<br>";	}
				echo "</td>\n";	}
			elseif ($_POST{"pftypes_".$pnumi}=="Select")
			{	if (isset($_POST{"pf1i_".$pnumi})) { $pf1i = " disabled"; } else { $pf1i = ""; }
				if (isset($_POST{"pf1k_".$pnumi})) { $pf1k = " multiple"; } else { $pf1k = ""; }
				echo "\t<td><select name=\"".$_POST{"pfnames_".$pnumi}."\" value=\"".$_POST{"pf1a_".$pnumi}."\" size=\"".$_POST{"pf1c_".$pnumi}."\"".$pf1i.$pf1k.">";
				for ($pf1hc = 1; $pf1hc <= $_POST{"pf1h_".$pnumi}; $pf1hc++)
				{	echo "<option value=\"".$_POST{"pf1a_".$pnumi}."\"> ".$_POST{"pf1a_".$pnumi}."</option>";	}
				echo "</select></td>\n";	}
			elseif ($_POST{"pftypes_".$pnumi}=="Button")
			{	if (isset($_POST{"pf1i_".$pnumi})) { $pf1i = " disabled"; } else { $pf1i = ""; }
				echo "\t<td><button type=\"".$_POST{"pf1f_".$pnumi}."\" disabled name=\"".$_POST{"pf1a_".$pnumi}."\"".$pf1i.">".stripslashes($_POST{"pf1g_".$pnumi})."</button></td>\n";	}
// htmlentities($_POST{"pf1g_".$pnumi},ENT_COMPAT)
			elseif ($_POST{"pftypes_".$pnumi}=="Submit")
			{	if (isset($_POST{"pf1i_".$pnumi})) { $pf1i = " disabled"; } else { $pf1i = ""; }
				echo "\t<td><input type=\"Submit\" disabled name=\"".$_POST{"pfnames_".$pnumi}."\" value=\"".$_POST{"pf1a_".$pnumi}."\"".$pf1i."></td>\n";	}
			elseif ($_POST{"pftypes_".$pnumi}=="Reset")
			{	if (isset($_POST{"pf1i_".$pnumi})) { $pf1i = " disabled"; } else { $pf1i = ""; }
				echo "\t<td><input type=\"Reset\" name=\"".$_POST{"pfnames_".$pnumi}."\" value=\"".$_POST{"pf1a_".$pnumi}."\"".$pf1i."></td>\n";	}
			elseif ($_POST{"pftypes_".$pnumi}=="Separator")
			{	echo "<tr>\n\t<td colspan=\"2\"><hr size=\"".$_POST{"pf1c_".$pnumi}."\" color=\"".$_POST{"pf1m_".$pnumi}."\" width=\"".$_POST{"pf1n_".$pnumi}."\" noshade></td>\n</tr>\n";	}
			elseif ($_POST{"pftypes_".$pnumi}=="Image")
			{	if ($_POST{"pf1n_".$pnumi} == "") { $pf1n = ""; } else { $pf1n = "width= ".$_POST{"pf1n_".$pnumi}; }
				if ($_POST{"pf1o_".$pnumi} == "") { $pf1o = ""; } else { $pf1o = "height= ".$_POST{"pf1o_".$pnumi}; }
				echo "<tr>\n\t<td colspan=\"2\"><img src=\"".stripslashes($_POST{"pf1g_".$pnumi})."\" $pf1n $pf1o alt=\"".$_POST{"pf1p_".$pnumi}."\" border=\"".$_POST{"pf1q_".$pnumi}."\" align=\"".$_POST{"pf1r_".$pnumi}."\"></td>\n</tr>\n";	}
// htmlentities($_POST{"pf1g_".$pnumi},ENT_COMPAT)
			else
			{	echo "\t<td>&nbsp;</td>\n";	}
			if (($_POST{"pftypes_".$pnumi}!="Hidden")&&($_POST{"pftypes_".$pnumi}!="Separator")&&($_POST{"pftypes_".$pnumi}!="Image"))
			{	echo "</tr>\n";	}
		}
		echo "\n";
?>
<!-- END CODE -->
<?	}	?>
	</table>
