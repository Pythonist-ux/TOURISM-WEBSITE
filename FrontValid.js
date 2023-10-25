function login1()
	{
    var name=document.getElementById("name").value;
		var uname = document.getElementById("email").value;
    var num=document.getElementById("phone").value;

		var len=num.length;
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var letters = /^[A-Za-z]+$/;
			var f2=/^([^0-9]*)$/;
		if(name =='')
		{
			confirm("Please Enter Your Name");
		}

		 if (!f2.test(name)) {
			 alert("ONLY ALPHABETS")
		 }

		if(uname =='')
		{
			confirm("Please Enter Email ID");
		}

     if(num=='')
    {
      confirm("Please Enter Your Number");
    }


	  if(num!='' && len!=10 && letters!=true)
	 {
		 confirm("Please Enter A Valid Phone Number");
	 }

	  if(name!='' && uname!='' && num!='' && !f2.test(name)==false )
	 {
 alert("Thank You for Contacting Us We Will Reach Out to You soon At  "+uname+ "  "+"Redericting To www.hermes.com");

			window.location.href="http://localhost/tours/t1.php";
		 }


	}

	function clearFunc()
	{
		document.getElementById("name").value="";
		document.getElementById("email").value="";
	}
