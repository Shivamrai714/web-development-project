package com.jwt.config;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;
import org.springframework.security.authentication.AuthenticationManager;
import org.springframework.security.config.annotation.authentication.builders.AuthenticationManagerBuilder;
import org.springframework.security.config.annotation.web.builders.HttpSecurity;
import org.springframework.security.config.annotation.web.configuration.EnableWebSecurity;
import org.springframework.security.config.annotation.web.configuration.WebSecurityConfigurerAdapter;
import org.springframework.security.config.http.SessionCreationPolicy;
import org.springframework.security.crypto.password.NoOpPasswordEncoder;
import org.springframework.security.crypto.password.PasswordEncoder;
import org.springframework.security.web.authentication.UsernamePasswordAuthenticationFilter;

import com.jwt.services.CustomUserDetailsService;

@Configuration
@EnableWebSecurity
public class MySecurityConfig  extends WebSecurityConfigurerAdapter
{
	@Autowired
	private JwtAuthenticationEntryPoint entryPoint;
	
	@Autowired
	private CustomUserDetailsService customUserDetailsService;
	
	@Autowired
	private JwtAuthenticationFilter jwtFilter;

	
	
	//STEP 1  :it tells which authentication system to use, UserDetailsService , in memory , etc : ie validation on which method.
	@Override
	protected void configure(AuthenticationManagerBuilder auth) throws Exception {	
		auth.userDetailsService(customUserDetailsService);	        	
	}



	//STEP 3  :    it allows url to be authorized and permitted .
		@Override
		protected void configure(HttpSecurity http) throws Exception {
	
		http
			.csrf()                            //its is type of attack, google it cross site request forgery attack.
			.disable()
			.cors()
			.disable()
			.authorizeRequests()
			.antMatchers("/token").permitAll()              //ant matcher is used to allow url publicly and rest need to be validated
			.anyRequest().authenticated()
			.and()
			.sessionManagement().sessionCreationPolicy(SessionCreationPolicy.STATELESS)         
        	.and()
        	.exceptionHandling().authenticationEntryPoint(entryPoint);
			;
		
		           // to all the other reequests filter will be applied.
		
		http.addFilterBefore(jwtFilter, UsernamePasswordAuthenticationFilter.class);        //STEP 13 : to enable the handling of the Filtering method. On based of token generated. 
			
		}
		
		
		//STEP 4 : delare the bea for the password Encoder.
		
		
		@Bean
		public PasswordEncoder passwordEncoder()
		{
			return NoOpPasswordEncoder.getInstance();          //use Bcrypotpassencoder when working with the databases.
		}
		
		
		//STEP (STEP 8 -(b)) :
				
		//In new verions we need to configure the AuthenticationManager as BEan
		//to validate the request with the generated token.
	
		@Bean
		public AuthenticationManager authenticationManagerBean() throws Exception
		{
			return super.authenticationManagerBean();
		}
		
	
}
