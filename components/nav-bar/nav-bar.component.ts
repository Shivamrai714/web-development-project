import { Component, OnInit } from '@angular/core';
import { LoginService } from 'src/app/services/login.service';

@Component({
  selector: 'app-nav-bar',
  templateUrl: './nav-bar.component.html',
  styleUrls: ['./nav-bar.component.css']
})
export class NavBarComponent implements OnInit {


public loggedIn=false;          //to give functionality of  logout

  constructor(private loginService:LoginService) 
  {
    
  }

  ngOnInit(): void {
    this.loggedIn=this.loginService.isLoggedIn();
  }

  //adding functionality of logout button

  logoutUser()
  {
    this.loginService.logout();
    location.reload();           //for automatic reload , after the reload
  }



}
