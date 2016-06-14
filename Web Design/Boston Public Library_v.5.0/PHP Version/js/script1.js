var userId=["ganesh"];
var nameGet=["Ganesh"];
var password=["Gany@1990"];
var number=1;
		
		function checkName(x) {
			var flag = 0;
			if(!/^[a-zA-Z ]+$/.test(x)) {
				document.getElementById("validateName").innerHTML = "Name cannot contain special characters or blank";
				document.getElementById("name1").style.border = "1px solid #FF0000";
				flag=1;
			}
			else {
				document.getElementById("validateName").innerHTML = "";
				document.getElementById("name1").style.border = "none";
			}
		}

		function checkName1(x) {
			if(x.length == 0 || x.startsWith(" ")) {
				document.getElementById("validateName").innerHTML = "Name cannot be blank";
				document.getElementById("name1").style.border = "1px solid #FF0000";
			}
			else {
				document.getElementById("validateName").innerHTML = "";
				document.getElementById("name1").style.border = "none";
			}
		}
		
		function checkName2() {
			document.getElementById("validateName").innerHTML = "";
			document.getElementById("name1").style.border = "none";
		}
		
		function checkUserName(x) {
			
			var flag = 0;
			
				if(!/^[a-zA-Z0-9]+$/.test(x)) {
					
					document.getElementById("validateUserName").innerHTML = "Username cannot contain special characters or blank";
					document.getElementById("username1").style.border = "1px solid #FF0000";
					flag=1;
				}
				else {
					flag = 0;
				}
				
				for(var i=0;i<userId.length;i++) {
					if(x == userId[i]) {
						document.getElementById("validateUserName").innerHTML = "Username already exists";
						document.getElementById("username1").style.border = "1px solid #FF0000";
						flag = 1;
					}
				}
				if(flag == 0) {
					document.getElementById("validateUserName").innerHTML = "";
					document.getElementById("username1").style.border = "none";
				}
		}
		
		function checkUser(x) {
			if(x.length < 5) {
				document.getElementById("validateUserName").innerHTML = "Username cannot be blank or less than 5 charcters";
				document.getElementById("username1").style.border = "1px solid #FF0000";
			}
			else {
				document.getElementById("validateName").innerHTML = "";
				document.getElementById("name1").style.border = "none";
			}
		}
		
		function checkUserName2() {
			document.getElementById("validateUserName").innerHTML = "";
			document.getElementById("username1").style.border = "none";
		}
		
		function checkPassword() {
			document.getElementById("validatePassword").innerHTML = "";
			document.getElementById("password1").style.border = "none";
		}
		
		function checkPassword2(x) {
			var regularExpression = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
			if(!regularExpression.test(x)) {
				document.getElementById("validatePassword").innerHTML = "Invalid Password. \n Password should atleast contain one uppercase one lower case one special character one digit. \n password should also be 6 to 16 characters long";
				document.getElementById("password1").style.border = "1px solid #FF0000";
			}
		}
		
		function func3() {
			
			if(document.getElementById("name1").value.length > 0 && document.getElementById("username1").value.length > 0 && document.getElementById("password1").value.length > 0 && document.getElementById("validateName").innerHTML == "" && document.getElementById("validateUserName").innerHTML == "" && document.getElementById("validatePassword").innerHTML == "")
			{
				
				var a = document.getElementById("name1");
				var b = document.getElementById("username1");
				var c = document.getElementById("password1");
				
				userId.push(b.value);
				nameGet.push(a.value);
				password.push(c.value);
				number++;
				alert("Thank you for Signing up with DUBS Music System");
				document.getElementById("btnSignUp").setAttribute('data-dismiss','modal');
				document.getElementById("btnSignUp").setAttribute('data-target','#loginModal');
				document.getElementById("btnSignUp").setAttribute('data-toggle','modal');
				document.getElementById("name1").value="";
				document.getElementById("username1").value="";
				document.getElementById("password1").value="";
			}
			else {
				alert("Could not sign up. Please provide valid inputs");
			}
		}
		
		function func25() {
			
			var userName25 = document.getElementById("name25").value;
			var pass25 = document.getElementById("password25").value;
			var flag = 0;
			
			for(var i=0;i<userId.length;i++) {
				if(userId[i] == userName25 && password[i] == pass25) {
					
					flag = 1;
					
					document.getElementById("loginInButton").setAttribute('data-dismiss','modal');				
					
					document.getElementById("logIn").style.display = "none";
					document.getElementById("logOut").style.display = "inline";
					document.getElementById("signUpId").style.display = "none";
					
					var z=nameGet[i];
					
					alert("Welcome user "+nameGet[i]);
					document.getElementById("userLoginName").innerHTML = " Welcome " +z;
					document.getElementById("name25").value = "";
					document.getElementById("password25").value = "";
					document.getElementById("userLogin123").style.display = "inline";
					document.getElementById("hideList1").style.display = "inline";
					document.getElementById("feedback").disabled = false;
					document.getElementById("playSongs").disabled = false;
				}
			}
			
			if(flag == 0) {
				alert("Invalid Credentials");
			}
		}
		
		function func26() {
			var audioPlayer = document.getElementsByTagName('audio');
			for(var i=0;i<audioPlayer.length;i++) {
				audioPlayer[i].pause();
				audioPlayer[i].currentTime = 0;	
				
			} 
			
			document.getElementById("aud125").src = "";
			document.getElementById("logIn").style.display = "inline";
			document.getElementById("logOut").style.display = "none";
			document.getElementById("signUpId").style.display = "inline";
			document.getElementById("songByName").innerHTML = "";
			document.getElementById("hideList1").style.display = "none";
			document.getElementById("userLoginName").innerHTML = "";
			document.getElementById("feedback").disabled = true;		
			document.getElementById("playSongs").disabled = true;
			document.getElementById("userLogin123").style.display = "none";
			
			document.getElementById("allSongs").style.display = "none";
			document.getElementsByClassName("caro")[0].style.display = "inline";
			document.getElementById("home").style.display = "none";
			document.getElementById("playSongs").style.display = "inline";			
		}

		function feedback() {
			alert("Thank you for your valuable feedback. \n We would always wish to serve you better based on your feedback provided.");
		}
		
		function displaySongLog() {
			document.getElementById("home").style.display = "inline";
			document.getElementById("playSongs").style.display = "none";
			document.getElementsByClassName("caro")[0].style.display = "none";
			document.getElementById("allSongs").style.display = "inline";
		}
		
		function home() {
			var audioPlayer = document.getElementsByTagName('audio');
			for(var i=0;i<audioPlayer.length;i++) {
				audioPlayer[i].pause();
				audioPlayer[i].currentTime = 0;	
				
				
			}
			
			
			document.getElementById("aud125").src = "";
			document.getElementById("songByName").innerHTML = "";	
			document.getElementById("home").style.display = "none";
			document.getElementById("playSongs").style.display = "inline";
			document.getElementsByClassName("caro")[0].style.display = "inline";
			document.getElementById("allSongs").style.display = "none";
		}