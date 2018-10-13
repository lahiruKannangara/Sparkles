function validatesignup()
{
	var a = document.forms["signup"]["fname"].value;
	if( a == "" )
	{
		alert("First Name should be filled");
		return false;
	}

	var b = document.forms["signup"]["lname"];
	if( b == "")
	{
		alert("Last Name should be filled");
		return false;
	}
}