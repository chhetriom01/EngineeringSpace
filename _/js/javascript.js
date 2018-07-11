function validate123()
{
	//alert('sjhdhfjs');
		var password=document.getElementById('pass');
		var repassword=document.getElementById('repass');
		if(password.value != repassword.value)
		{
				alert('Two password does not match!!!');
				return false;
		}
}
function checkycstd(a)
	{
		if(a == "student"){
			alert('safasf');
			document.getElementById("req").style.visibility = "visible";
			document.getElementById("reqyear").style.visibility = "hidden";
			//document.getElementById("reqyearyc").required = false;
		}else{
			document.getElementById("req").style.visibility = "hidden";
			document.getElementById("reqyear").style.display = "inline";
			document.getElementById("reqyear").style.visibility = "visible";
			//document.getElementById("reqbatch").required = false;
			//document.getElementById("reqyearstd").required = false;
			//document.getElementById("reqsection").required = false;
			//document.getElementById("reqroll").required = false;
			
		}
	}
/*function validateform(){  
int x;
var firstpassword=document.login-form.password.value;  
var secondpassword=document.login-form.rpwd.value;  
	if(firstpassword!=secondpassword){  
		x=0;  
	} 
 

var dob=document.login-form.dob.value;
	if(dob>getFullYear()-17){
		x=1;
	}	
	
var	email=document.login-form.email.value;
var atposition=email.indexOf("@");  
var dotposition=email.lastIndexOf(".");  
	if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
		x=2;  
	}  
//student of same batch with same faculty and same roll no should not exits
 
	switch(x){
		case 0:
			alert("Password must be same!");  
			return false;
		case 1:
			alert("Please enter a valid death of birth");
			return false;
		case 2:
			alert("Please enter a valid e-mail address");		
			return false;
		default:
			return true;
}  

}  
</script>  
	//batch automatically defines student's running year
// function populate(s1,s2){
// 	var mydate = new Date();
//     	var year = mydate.getFullYear();
//     	var batch=year+57;
// 	var s1 = document.getElementById(s1);
// 	var s2 = document.getElementById(s2);
// 	s2.innerHTML = "";
// 	if(s1.value == batch-1){
// 		var optionArray = ["1|1"];
// 	} else if(s1.value == batch-2){
// 		var optionArray = ["2|2"];
// 	} else if(s1.value == batch-3){
// 		var optionArray = ["3|3"];
// 	}
// 	 else if(s1.value == batch-4){
// 		var optionArray = ["4|4"];
// 	 }
// 	 else if(s1.value == batch){
// 		 var optionArray = ["|comming soon..."];
// 	 }
// 	 else
// 	 { 
// 	 var optionArray = ["|Passed out"];
// 	 document.getElementById("roll").required = false;
// 	 }
	 
// 	for(var option in optionArray){
// 		var pair = optionArray[option].split("|");
// 		var newOption = document.createElement("option");
// 		newOption.value = pair[0];
// 		newOption.innerHTML = pair[1];
// 		s2.options.add(newOption);
// 	}
// }*/