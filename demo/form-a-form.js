function isReady(form)
{	if (form.pname.value == "" || form.pname.value == null)
	{	alert("Display Name field is empty."); form.pname.focus(); return false;	}
	if (form.pnum.value == "" || form.pnum.value == null)
	{	alert("How many fields would you like to add?"); form.pnum.focus(); return false;	}
	if (form.tname.value == "" || form.tname.value == null)
	{	alert("Technical Name field is empty.\n\nA 'no space' / 'no special character' code name is necessary\nfor the program to use while it works to create your form."); form.tname.focus(); return false;	}
	return true;
}
function isReadyTwo(form)
{	if (form.pname.value == "" || form.pname.value == null)
	{	alert("Display Name field is empty."); form.pname.focus(); return false;	}
	if (form.pnum.value == "" || form.pnum.value == null)
	{	alert("How many fields would you like to add?"); form.pnum.focus(); return false;	}
	if (form.tname.value == "" || form.tname.value == null)
	{	alert("Technical Name field is empty.\n\nA 'no space' / 'no special character' code name is necessary\nfor the program to use while it works to create your form."); form.tname.focus(); return false;	}
	arrlst = ",";
	for (ic=1; ic<=form.pnumhold.value; ic++)
	{	if (form.elements["pfnames_".concat(ic)].value == "")
		{	alert("All fields must be labelled.\n\nField "+ic+" is empty"); form.elements["pfnames_".concat(ic)].focus(); return false;	}
		if (arrlst.indexOf(","+form.elements["pfnames_".concat(ic)].value+",")>=0)
		{	alert ("Names of fields should be different.\n\nField " + ic + " duplicates a previous field's name.");
			form.elements["pfnames_".concat(ic)].focus();
			return false;
		}
		else
		{	arrlst = arrlst + form.elements["pfnames_".concat(ic)].value + ",";	}
	}
	if (form.pnum.value != form.pnumhold.value)
	{	alert("Number of fields submitted are now different.\n\nReloading this page so fields can be reviewed.");
		form.target = "_top";
		form.steps.value = "PartTwo";
		return true;
	}
	else if (form.pparamhold.value == "")
	{	alert("First pass page reload.\n\nPage will reload so you can set parameters for each field.");
		form.target = "_top";
		form.steps.value = "PartTwo";
		return true;	}
	else if (form.pparamhold.value == "1")
	{	alert("A field type was changed.\n\nReloading this page so field parameters can be reviewed.");
		form.target = "_top";
		form.steps.value = "PartTwo";
		return true;	}
	else if (form.pparamhold.value == "5")
	{	alert("First parameter pass.\n\nUpdating field parameters.");
		form.target = "_top";
		form.steps.value = "PartTwo";
		return true;	}
	else if (form.pparamhold.value == "3")
	{	form.target = "FormAFormPreview";
		form.steps.value = "PartCode";
		form.pparamhold.value == "2"
		return true;
	}
	else if (form.pparamhold.value == "4")
	{	form.target = "FormAFormPreview";
		form.steps.value = "PartForm";
		form.pparamhold.value == "2"
		return true;
	}
	else // pparamhold = 2; ready for form preview
	{	form.target = "FormAFormPreview";
		form.steps.value = "PartPreview";
		form.pparamhold.value == "2"
		return true;
	}
}
function checkSize (form, formit)
{	if (form.pcoltemp.value=='2')
	{	if ((formit.name.substr(0,5)=="pf1c_")&&(formit.value>80))
		{	alert('For 2 column layouts, a size value of less than 80 is recommended for Text fields.');	}
		if ((formit.name.substr(0,5)=="pf1d_")&&(formit.value>60))
		{	alert('For 2 column layouts, a column value of less than 60 is recommended for TextArea fields.');	}
	}
	else
	{	if ((formit.name.substr(0,5)=="pf1c_")&&(formit.value>40))
		{	alert('For 4 column layouts, a size value of less than 40 is recommended for Text fields.');	}
		if ((formit.name.substr(0,5)=="pf1d_")&&(formit.value>30))
		{	alert('For 4 column layouts, a column value of less than 30 is recommended for TextArea fields.');	}
}	}
function isAlpha (item)
{	if (!areAllAlphas(item.value)) { alert('Only AlphaNumeric characters allowed.'); item.focus();} else { return true; } }
	function areAllAlphas (item)
	{	for (j=0; j<item.length; j++) { if (!isAlph (item.charAt (j))) { return false; } } return true; }
	function isAlph (item)
	{	numeric = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-"; for (var i=0; i<numeric.length; i++) { if (item == numeric.charAt (i)) { return true; } } return false; }
function isNum (item)
	{	if (!areAllNumbers(item.value)) { alert('Only Numeric characters allowed.'); item.focus();} else { return true; } }
function areAllNumbers (item)
	{	for (j=0; j<item.length; j++) { if (!isNumber (item.charAt (j))) {return false} } return true; }
function isNumber (item)
	{	numeric = "0123456789-"; for (var i=0; i<numeric.length; i++) { if (item == numeric.charAt (i)) {return true} } return false }
function openNewWindow (URLtoOpen)
	{	newWindow=window.open(URLtoOpen);
		newWindow.focus();	}
