package com.email.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;

import com.email.Model.EmailRequest;
import com.email.Model.EmailResponse;
import com.email.service.EmailService;

@RestController
@CrossOrigin                 //attacted for angulare forntend.
public class EmailController {

	@Autowired
	private EmailService emailService;
	
	@RequestMapping("/welcome")
	public String welcome()
	{
		return " Namaste ! this is my email.api ";
	}
	
	//  HAndler to send Email
	@RequestMapping(value="/sendemail" ,method=RequestMethod.POST)
	public ResponseEntity<?> sendEmail(@RequestBody EmailRequest request)
	{
       		
		
		System.out.println(request);
	
		boolean results=this.emailService.sendEmail(request.getSubject(),request.getMessage(),request.getTo());
		
		if(results) {
		return ResponseEntity.ok(new EmailResponse("Email is sent successfully... :: "));     //we have been using the angular fronted , so to send the data in json format we have used the EmailService 
		}
		else {
			return ResponseEntity.status(HttpStatus.INTERNAL_SERVER_ERROR).body(new EmailResponse("Email not sent"));
		}
		
		
		//System.out.println(request);
		//return ResponseEntity.ok("dOne :: ");
		//rdgjwaxsbwejxsiz
		
	}
	
}
