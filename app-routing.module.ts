import { Component, NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { HomeComponent } from './components/home/home.component';
import { LoginComponent } from './components/login/login.component';
import { NavBarComponent } from './components/nav-bar/nav-bar.component';
import { DashboardComponent } from './components/dashboard/dashboard.component';
import { AuthGuard } from './services/auth.guard';

// Adding various components which we want to show to users when related url are fired..


const routes: Routes = [

{
path:'',
component:HomeComponent,
pathMatch:'full'

},

//localhost:4200/login         -is fired

{
  path:'login',
  component:LoginComponent,
  pathMatch:'full'
},

{
  path:'dashboard',
  component:DashboardComponent,
  pathMatch:'full',
  canActivate:[AuthGuard]
}




];










@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }