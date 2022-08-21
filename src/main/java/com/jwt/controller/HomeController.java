package com.jwt.controller;

import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.ResponseBody;
import org.springframework.web.bind.annotation.RestController;

@RestController
//@CrossOrigin(origins = "*")           //only for the Angular running , purpose , remove it when running vai port of springboot 
public class HomeController 
{

	@RequestMapping("/welcome")
	@ResponseBody
	public String welcome()
	{
		String text="This is private page ---->  ";
		text+= "  AND NOT ALLOWED TO THE UNAUTHENTICATED USERS ";
		return text;
	}

	
	@RequestMapping("/secondtest")
	@ResponseBody
	public String testToken()
	{
		String text="  I was successfull in completing the AWT AUthentication : Thanks to God ";
		return text;
	}
	

	//Just for trying the angular working.
	
	@RequestMapping("/getusers")
	@ResponseBody
	public String getUser()
	{
     return "{\"name\":\"Durgesh\"}";		
	}
	
	
	
	
}
