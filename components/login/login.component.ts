import { Component, OnInit } from '@angular/core';
import { LoginService } from 'src/app/services/login.service';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  //STEP : 11
  //makking the object to handle the form submission.
  credentials={
    username:'',
    password:''
  }
  

//STEP : 15 take the obj variable of LoginService and call the generateToken method
  constructor(private loginService : LoginService) { }

  ngOnInit(): void {
  }

onSubmit()
{
console.log("Submit function is working");

if((this.credentials.username!='' && this.credentials.password!='' ) && (this.credentials.username!=null && this.credentials.password!=null ))
{
console.log("WE have to submit the form");
  
//generate the token  for the client 
//START THE SPRING boot project of JWT authentication
//STEP : 12 : with respect to our JWt Project : we need to fire http:localhost:8080/token


//Now after the step 13 : making the login service and declring its obj in constructor .

this.loginService.generateToken(this.credentials).subscribe(
(response:any)=>{
  console.log(response.token);

//now call login user funtion  : 
this.loginService.loginUser(response.token);
//no after saving token in the localstorage : redirect to userdashboard 

window.location.href="/dashboard"

},
error=>{
  console.log(error);
}


);

//STEP :" 15  "   Check the working with Form : Since we had already connected out application with the database, so we are using the MQSQL client to check the username ,and password, 
//Upon submission , a token is generated on console.
 
}

else
{
console.log("Field are empty !! ");
}

}



}



