function validate()
	  {
		 var username=document.getElementById('userName');
		 var password=document.getElementById('Password');
		 if(userName.value=="" || Password.value=="")
		 {
			 alert('Username or password cannot be empty');
			 return false;
		 }
		 else
			 return true;
	  }