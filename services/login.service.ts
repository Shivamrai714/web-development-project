import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class LoginService {


  url="http://localhost:8080"

  constructor(private http:HttpClient) { }

//  func to get the token  : by making the request.
generateToken(credentials:any)
{
  return this.http.post(`${this.url}/token` , credentials);
}


getToken()
{
  return  localStorage.getItem("token");
}




                                      //Idea is when the user is logged in , the token item in localstorage will  be present
                   //to set the token for current user.

loginUser(token: string)                       //here error came in token so we have clicked the bulb its has put its type string automatically.
{
  localStorage.setItem("token",token);
  return true;
}




// To check user is logged in or not.

isLoggedIn()
{
      let token = localStorage.getItem("token");
     
      if(token == undefined  || token=='' || token==null )
      {
        return false;
      }
      else
      {
        return true;
      }


}

// to logout the user.

logout()
{
  localStorage.removeItem('token');
  return true;
  
}




}
