function signup()
	{
		var uname = document.getElementById("email").value;
		var pwd = document.getElementById("password").value;
		var cpwd = document.getElementById("confirmPassword").value;

		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

		if(uname =='')
		{
			alert("Please Enter Email ID");
		}
		 if(pwd=='')
		{
        	alert("Enter The Password");
		}
		 if(!filter.test(uname))
		{
			alert("Enter valid email id.");
		}
		 if(pwd.length < 8 || pwd.length > 8)
		{
			alert("Password min and max length is 8.");
		}
		if(pwd!=cpwd)
		{
			alert("Passwords Do Not Match......TRY AGAIN!!")
		}
		if(uname!='' && pwd!='' && pwd==cpwd && pwd.length==8)
		{
		//window.location.href = "http://127.0.0.1:3000/PROJECT(WP)/SignUpandLogin.html";
			window.location.href = "http://localhost/tours/login.php";
		alert("Thank You for Signing Up.......You are Being Redirecting Back to www.hermes.com...Please Login Again");
			}
			else {
				window.location.href = "http://localhost/tours/register.php";
			alert("TRY AGAIN");
			}
	}

function login()
{
	var uname1 = document.getElementById("email1").value;
	var pwd1 = document.getElementById("pass").value;
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(uname1 =='')
	{
		alert("Please Enter Email ID");
	}

	 if(!filter.test(uname1))
	{
		alert("Enter valid email id.");
	}
	 if(pwd1.length < 8 || pwd1.length > 8)
	{
		alert("Password min and max length is 8.");
	}


}

function redirect()
{
	var uname1 = document.getElementById("email1").value;
	var pwd1 = document.getElementById("pass").value;
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(filter.test(uname1) && pwd1!='' && uname1!='')
	{
		window.location.href="http://localhost/tours/t1.php";
		alert(" Login Succesful........You are Being Redirecting to www.hermes.com");
		}
}
	function clearFunc()
	{
		document.getElementById("email").value="";
		document.getElementById("password").value="";
	}

	/*function logout()
	{
		if(signup()&&login()==true)
		{
			window.location.href="http://127.0.0.1:3000/PROJECT(WP)/front.html";
		}
	}*/
