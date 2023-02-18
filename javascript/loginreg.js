function signup(){
	// document.querySelector(".signup-btn").style.display='none';
	// document.querySelector("#login-signup-slide").style.left='128px';
	document.querySelector("#login-signup-slide").style.left='32px';
	document.querySelector("#snlog").innerHTML='Sign up';
	// document.querySelector("#snlog").style.left='25px';
	document.querySelector("#snlog").style.left='16px';
	document.querySelector("#loginid").style.display ='none';
	document.querySelector(".login-header").innerHTML='Login';
	document.querySelector("#details").innerHTML='<b> Please fill out the form below</b>';
	document.querySelector(".login-header").style.marginLeft='-23px';
	// document.querySelector(".form-header-cont").style.left='25px';
	document.querySelector(".form-header-cont").style.left='128px';
	document.querySelector(".form-header-cont").style.width='112px';
	document.querySelector(".registration-div").style.display='block';
	document.querySelector(".form-header-cont").style.transition='0.6s';
	document.querySelector("#login-signup-slide").style.transition='0.6s';
	document.querySelector("#loginid").style.transition='1.6s';
	// document.querySelector(".form-header-cont").setAttribute("onclick","login()")
}

function login(){
	// document.querySelector("#login-signup-slide").style.left='30px';
	document.querySelector("#login-signup-slide").style.left='128px';
	document.querySelector("#snlog").innerHTML='Sign up';
	document.querySelector("#snlog").style.left='25px';
	document.querySelector("#loginid").style.display ='block';
	document.querySelector(".login-header").innerHTML='Login';
	document.querySelector("#details").innerHTML='<b>Enter correct details to login</b>';
	// document.querySelector(".login-header").style.marginLeft='10px';
	// document.querySelector(".form-header-cont").style.left='128px';
	document.querySelector(".form-header-cont").style.left='25px';
	// document.querySelector(".form-header-cont").style.width='125px';
	document.querySelector(".registration-div").style.display='none';
	document.querySelector(".form-header-cont").style.transition='0.6s';
	document.querySelector("#login-signup-slide").style.transition='0.6s';
	document.querySelector("#loginid").style.transition='1.6s';
	//document.querySelector(".form-header-cont").setAttribute("onclick","signup()")
}