function rvalidateForm() {

    let fname    = document.getElementById("fname").value;
    let lname    = document.getElementById("lname").value;
    let name     = document.getElementById("uname").value;
    let phone    = document.getElementById("phone").value;
    let email    = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let confpass = document.getElementById("confpass").value;
    let type1    = document.getElementById("domain1").checked;
    let type2    = document.getElementById("domain2").checked;
    let type3    = document.getElementById("domain3").checked;
    let type4    = document.getElementById("domain4").checked;
    let condition= document.getElementById("condition").checked;
    
	
    if (fname.length>2) {
        document.getElementById("fnamem").innerHTML="";
        if (lname.length>2) {
            document.getElementById("lnamem").innerHTML="";
            if (name.length>2 && ((name.charAt(0) >= 'A' && name.charAt(0)<= 'Z') || (name.charAt(0) >= 'a' && name.charAt(0)<= 'z'))){
                document.getElementById("unamem").innerHTML="";
                if (phone.length>8) {
                    document.getElementById("phonem").innerHTML="";
                    if (password.length>5) {
                        document.getElementById("passwordm").innerHTML="";
                        if (confpass == password) {
                            document.getElementById("confpassm").innerHTML="";
                            if (email != "") {
                                document.getElementById("emailm").innerHTML="";
                                if (type1 !="" || type2 !="" || type3 !="" || type4 !="") {
                                    document.getElementById("typem").innerHTML="";
                                    if (condition !="") {
                                        document.getElementById("conditionm").innerHTML="";
                                        
                                        return true;
                                        

                                    }else{

                                        document.getElementById("conditionm").innerHTML="* Please check the terms and conditions!!";
                                        return false;
                                    }
                                     
                                }else{

                                    document.getElementById("typem").innerHTML="* Atleast one domain must be selected!!";
                                    return false;
                                }
        
                            }else{

                                document.getElementById("emailm").innerHTML="* Email filled cannot be Empty!!";
                                return false;
                            }
                        }else{

                            document.getElementById("confpassm").innerHTML="* Password and Confirm Password must be matched!!";
                            return false;
                        }
                    }else{

                        document.getElementById("passwordm").innerHTML="* Password must be 6 leter!!";
                        return false;
                    }
                }else{

                    document.getElementById("phonem").innerHTML="* Please enter a valid phone number!!";
                    return false;
                }
            }else{

                document.getElementById("unamem").innerHTML="* User Name must be more than 2 letter and start with letter only!!";
                return false;
            }  
        }else{

            document.getElementById("lnamem").innerHTML="* Last Name must be more than 2 letter.";
            return false;
        }
    }else{

        document.getElementById("fnamem").innerHTML="* First Name must be more than 2 letter.";
        return false;
    }

}

function evalidateForm() {

    let firstname     = document.getElementById("firstname").value;
    let lname     = document.getElementById("lname").value;
    let name     = document.getElementById("uname").value;
    let phone     = document.getElementById("phone").value;
    let email    = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let confpass = document.getElementById("confpass").value;

    if (firstname.length>2) {
        document.getElementById("fnamem").innerHTML="";
        if (lname.length>2) {
           document.getElementById("message").innerHTML="";
            if (name.length>2 && ((name.charAt(0) >= 'A' && name.charAt(0)<= 'Z') || (name.charAt(0) >= 'a' && name.charAt(0)<= 'z'))){
                document.getElementById("unamem").innerHTML="";
                if (phone.length>8) {
                    document.getElementById("phonem").innerHTML="";
                    if (password.length>5) {
                        document.getElementById("passwordm").innerHTML="";
                        if (confpass == password) {
                            document.getElementById("confpassm").innerHTML="";
                            if (email != "") {

                                return true;
                            }else{

                                document.getElementById("emailm").innerHTML="* Email filled cannot be Empty!!";
                                return false;
                            }
                        }else{

                            document.getElementById("confpassm").innerHTML="* Password and Confirm Password must be matched!!";
                            return false;
                        }
                    }else{

                        document.getElementById("passwordm").innerHTML="* Password must be 6 leter!!";
                        return false;
                    }
                }else{

                    document.getElementById("phonem").innerHTML="* Please enter a valid phone number!!";
                    return false;
                }
            }else{

                document.getElementById("unamem").innerHTML="* Username must be more than 2 letter and start with letter only!!";
                return false;
            }  
       }else{

            document.getElementById("lnamem").innerHTML="* Last Name must be more than 2 character.";
            return false;
        }

    }else{

        document.getElementById("fnamem").innerHTML="* Fast Name must be more than 2 character.";
        return false;
    }
}

function lvalidateForm() {

    let name     = document.getElementById("name").value;
    let password = document.getElementById("password").value;

    if (name.length>2 && ((name.charAt(0) >= 'A' && name.charAt(0)<= 'Z') || (name.charAt(0) >= 'a' && name.charAt(0)<= 'z'))){
        if (password.length>5) {
             return true;
    
        }else{

            document.getElementById("message").innerHTML="* Password must be 6 leter!!";
            return false;
        }
    }else{

        document.getElementById("message").innerHTML="* Username can be more than 2 letter and start with latter only!!";
        return false;
    }  
}

function dvalidateForm() {

    let name     = document.getElementById("name").value;

    if (name.length>2 && ((name.charAt(0) >= 'A' && name.charAt(0)<= 'Z') || (name.charAt(0) >= 'a' && name.charAt(0)<= 'z'))){
        return true;
    }else{

        document.getElementById("message").innerHTML="* Username can be more than 2 letter and start with latter only!!";
        return false;
    }  
}

function search(){
	let name = document.getElementById('name').value;
	let xhttp = new XMLHttpRequest();

	xhttp.open('POST', 'search.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('name='+name);
	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('div1').innerHTML = this.responseText;
		}
	}
}

function ajax(){
	let uname = document.getElementById('uname').value;
	let phone = document.getElementById('phone').value;
	let email = document.getElementById('email').value;

	let json = {
		'uname' : uname,
		'phone'	: phone,
		'email'	: email
	}

	let myjson = JSON.stringify(json);

	let xhttp = new XMLHttpRequest();

	xhttp.open('POST', 'emailValidate.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('data='+myjson);
	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
            
			document.getElementById('message').innerHTML = this.responseText;
		}
	}
}

function image() {

    let image     = document.getElementById("image").value;
    let result = image.slice(12);
    document.getElementById("src").src = result;

    //document.getElementById('message').innerHTML= image;
}