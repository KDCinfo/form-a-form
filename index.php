<?php
	$createFormText = 'Create Your Form!';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Form-a-Form - Quick and Simple Form Creator for PHP by Keith D Commiskey</title>
	<meta name="description" content="Welcome to the quick and simple form creator for PHP! This form will allow you to create a form that you can use as a template.">
	<meta name="keywords" content="form generator, form creator, form designer, form design, form layout.">
	<link rel="stylesheet" type="text/css" href="demo/form-a-form.css">
	<script language="JavaScript" src="form-a-form.js" type="text/javascript"></script>
	<script language="JavaScript" type="text/javascript">
		var codeI=Math.round(Math.random()*(3));if(codeI==1){codeIV="GIFTS";}else if(codeI==2){codeIV="CRYSTAL";}else{codeIV="NICE";}
	</script>
</head>
<body>
	<table width="750" border="0" cellspacing="0" cellpadding="0" align="center">
		<tr>
			<td width="600">
				<h1>Quick and Simple Form Creator for PHP</h1>
				<h2>by Keith D Commiskey</h2>
			</td>
			<td width="150" align="right" valign="top">
				<?php /* <a class="hidden" href="https://www.sendearnings.com/?r=ref3133093"><img src="https://www.sendearnings.com/graphics/creative/banners/234x60/banner_animated_234x60_02.gif" border="0" /></a> */ ?>
				<a class="kdc-logo-a" href="https://kdcinfo.com"><img src="https://kdcinfo.com/iconads/KDC_110x110_a.jpg"></a>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr color="Maroon" size="3">
			</td>
		</tr>
	</table>

	<table width="750" border="0" cellspacing="0" cellpadding="3" align="center">
		<tr>
			<td colspan="3">
				<p><h3>Welcome to the quick and simple Form-a-Form creator for PHP!</h3></p>
				<p>The form-a-form will allow you to create a form that you can use as a template, or rather, as a really great start for your forms.
					It not only generates the HTML code for the form, but generates the PHP query aspects of the form as well.
					It is quite simply to get you started, and get all the monotonous and boring form tags setup stuff out of the way up front,
					allowing you to concentrate more on the analytical design concept and form tweaking instead.</p>
				<p>What this form does is ask for some information that will help layout your form, then provide the html code for you to use.</p>
				<p>Although you don't have to use the database storage and retrieval functionality that form-a-form provides, if you do, form-a-form currently only supports <a href="https://www.php.net" target="_blank">PHP</a> and <a href="https://www.mysql.com" target="_blank">MySQL</a> database integration. However, as form-a-form is intended as only a get-you-started application anyway, you can (and most likely will) tweak the final code to your liking and needs anyway.</p>
				<ol><h4>Form-a-form will provide the code for:</h4>
					<li>The initial form <strong>(form preview)</strong>, as a user would see it when they first arrived,</li>
					<li>The form as it would be if the form were posted back to itself <strong>(end user)</strong>, and</li>
					<li>A link to my Database Record Selector and Editor (<a href="http://db-rse.sourceforge.net/">DB-RSE</a>) which allows for editing of recorded data <strong>(admin)</strong>.</li>
				</ol>
			</td>
		</tr>
		<tr><td colspan="3"><hr color="Maroon" size="1"></td></tr>
			<form action="demo/" method="POST" name="PartFormForm">
			<tr>
				<td colspan="3" align="left">
					<button name="LetsGoDemo" id="LetsGoDemo" type="button" onClick="window.location.href='demo/'; return false;"><?= $createFormText ?></button>&nbsp;&nbsp;&nbsp;
					<button name="LetsGo1" id="LetsGo1" value="PartScreen" type="button" onClick="openNewWindow('screenshots.php');">Screenshots</button>&nbsp;&nbsp;&nbsp;
					<button disabled="" name="LetsGoSource" id="LetsGoSource" value="PartSource" type="button" onClick="alert('Coming soon (like, tomorrow even... maybe.)'); return false;">Source Code (on GitHub) (coming soon)</button>&nbsp;&nbsp;&nbsp;
				</td>
			</tr>
			</form>
		<tr><td colspan="3"><hr color="Maroon" size="1"></td></tr>
		<tr><td valign="top">
			<p><h3>Cost for the use of Form-a-Form:</h3>
				<?
					if ((strtotime("2005-08-01") - strtotime(date("Y-m-d"))) / (60 * 60 * 24) == 1)
					{ $daysleft = "1 day"; } else { $daysleft = (strtotime("2005-08-01") - strtotime(date("Y-m-d"))) / (60 * 60 * 24) . " days"; }
				?>
				<table cellpadding="0" cellspacing="0" border="0">
					<tr>
						<td valign="top" colspan="3">
							<p>I am looking to open-source this code on GitHub. Please stay tuned... (looking to have it up before end of August 2017.)</p>
							<p>Additionally, I have opened up this online form generator to the general public (effective August 17, 2017).</p>
							<p><b>Click the `<?= $createFormText ?>` button above to begin generating your own form.</b></p>
							<p>Thanks,<br/>
								Keith D Commiskey<br/>
								<a href="https://kdcinfo.com">https://kdcinfo.com</a></p>
						</td>
					</tr>
				</table>
			</p>
		</td><td width="20" valign="bottom"><img src="/kdc-icons/clear_dot.gif" width="15" height="30" border="0" align="middle" alt=""><br></td><form action="" method="POST" id="sendItForm"><td width="180">
			<img src="/kdc-icons/clear_dot.gif" width="1" height="15" border="0" align="middle" alt=""><br>
				<input type=hidden name="recipient" value="1">
				<input type=hidden name="subject" value="Form-a-Form - Comment-Suggestion-Question: 2008">
				<input type=hidden name="required" value="Comments">
					<input type=hidden name="title" value="The Form-a-Form - Thanks You">
					<input type=hidden name="return_link_url" value="//kdcinfo.com/db/form-a-form/">
					<input type=hidden name="return_link_title" value="Back to the Form-a-Form Page">
				Comments&nbsp;/&nbsp;Suggestions&nbsp;/&nbsp;Questions<br>
				<textarea cols="35" rows="4" name="Comments" id="Comments"></textarea><br>
				Your E-mail Address <small class="x">(optional)</small><br>
				<input type="text" name="email" size="44" maxlength="75"><br>
					Enter Code: <script language="JavaScript" type="text/javascript">document.write (codeIV);</script><br>
					<input type="text" id="code" name="code" size="10" maxlength="15"><br>
					<button name="Action" id="Action" value="Notify Form-a-Form Author" type="submit" onClick="return submitIt();">Notify Form-a-Form Author</button>
					<div id="codeErrD2" style="color:Maroon; font-weight:bold; display:none;">Sorry. The entry code was not correct.</div>
			<br><img src="/kdc-icons/clear_dot.gif" width="1" height="10" border="0" align="middle" alt="Graduation Gifts, Mothers Day Gifts, Christmas Gifts, Birthday Gift Ideas, Golf Gifts and other great gift ideas from GiftsForYou.BIZ">
		</td></form></tr>
		<tr><td colspan="3"><hr color="Maroon" size="1"></td></tr>
		<tr><td colspan="3">
			<p><b>KDC SYSTEMS</b></p>
			<table border="0" class="table-links">
				<tr>
					<td width="22%">KDC-Info</td>
					<td colspan="3">[ <a href="//kdcinfo.com/">Home Page</a> ]</td>
				</tr>
				<tr>
					<td>Done (for now)</td>
					<td width="20%">[ <a href="https://kdcinfo.com/app/done-for-now/">Demo</a> ]&nbsp;[ <a href="https://github.com/KDCinfo/done-for-now">Source</a> ]</td>
					<td width="18%">[<code>React w/ TypeScript</code>]</td>
					<td width="40%">A multi-timer with snooze and countdowns.</td>
				</tr>
				<tr>
					<td>Track Your Cash</td>
					<td>[ <a href="https://kdcinfo.com/app/register/">Demo</a> ]&nbsp;[ <a href="https://github.com/KDCinfo/track-your-cash">Source</a> ]</td>
					<td>[<code>React w/ Redux</code>]</td>
					<td>An online checking register.</td>
				</tr>
				<tr>
					<td>Native Date Input Component</td>
					<td>[ <a href="https://kdcinfo.github.io/react-form-input-date-native/">Demo</a> ]&nbsp;[ <a href="https://github.com/KDCinfo/react-form-input-date-native">Source</a> ]</td>
					<td>[<code>React</code>]</td>
					<td>An HTML5 native date input component with non-native fallback support.</td>
				</tr>
				<tr>
					<td>Guess Right</td>
					<td>[ <a href="https://kdcinfo.com/guessright/">Game</a> ]&nbsp;[ <a href="https://github.com/KDCinfo/guess-right">Source</a> ]</td>
					<td>[<code>Vue w/ Vuex</code>]</td>
					<td>A SPA game I created using Vue.js, vuex, vue-router, Gulp, webpack, Laravel, and MySQL.</td>
				</tr>
				<tr>
					<td>Keep Track</td>
					<td>[ <a href="https://kdcinfo.com/keeptrack/">Home Page</a> ]</td>
					<td>[<code>Laravel w/ Blade</code>]</td>
					<td>An online personal inventory manager.</td>
				</tr>
				<tr>
					<td>Pick-a-Meal</td>
					<td>[ <a href="https://kdcinfo.com/pickameal/">Home Page</a> ]</td>
					<td>[<code>Laravel w/ Blade</code>]</td>
					<td>A custom random meal and eating location picker.</td>
				</tr>
				<tr>
					<td>Database Record Selector and Editor</td>
					<td colspan="2"><a href="//db-rse.sourceforge.net/">Source Code</a></td>
					<td>DB-RSE is a PHP-based MySQL record selector and editor.</td>
				</tr>
				<tr>
					<td>Guess-a-Number Game</td>
					<td colspan="2"><a href="//guess-a-number.sourceforge.net">Source Code</a></td>
					<td>For web developers: Add a guessing game on your site to attract visitors by giving away prizes.</td>
				</tr>
			</table>
		</td></tr>
		<tr><td colspan="3"><hr color="Maroon" size="1"></td></tr>
		<tr><td colspan="3" align="right">
			<small class="xg">Keith D Commiskey (2005; 2017) | <a href="//kdcinfo.com">https://kdcinfo.com</a></small>
		</td></tr>
	</table>
<script src="https://www.google-analytics.com/urchin.js" type="text/javascript"></script>
<script type="text/javascript">
_uacct = "UA-1872941-1";
urchinTracker();
function submitIt(){var codeV=document.getElementById('code').value;if(codeV.toUpperCase()==codeIV){document.getElementById('codeErrD2').style.display="none";document.getElementById('sendItForm').action='/cgi-bin/FormMail.pl';return true;}else{document.getElementById('codeErrD2').style.display="block";document.getElementById('sendItForm').action='';return false;}}
</script>
</body>
</html>
