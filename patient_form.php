<?php
error_reporting(0);                    // while debugging keep it off  //
include("connection_pform.php");
?>












<html>
<head> <title> Sign IN Form </title> </head>
<body  background="blog.jpg" >

<!-- using css to style teh content -->
<style type="text/css">

table{
   /*//margin-top: 100px;
*/  color :white;
    background-color: black;
    border-radius: 22px;
     }
/*
input{
   
   border-radius: 5px;
   border: 2px solid white ;
   font-size: 20px;
}
*/

#btn
{
      background-color: green;
   color: white;
   height: 40px;
   width: 100px;
   border-radius: 0px 25px;
}
#btn:hover
{
   background-color: blue;
}


#btn1
{
      background-color:lightgreen;
   color: white;
   height: 40px;
   width: 100px;
   border-radius: 10px 10px;
}
span{
   color: red;
   font-size: 15px;
}
.heading
{ margin:auto ;
   width: 450px;
   background-color: grey;
text-align: center;
color: white;
font-size: 30px;
}


</style> 


<br><br><br><br>
<div class ="heading">
REGISTRATION FORM
</div>
<br><br>

<form action="#" method="POST" autocomplete="off"  onsubmit="return validation()" >

   <table align ="center" border="0" cellspacing="7" >
<tr>
   <td> First Name  <td> <input type="text" name="firstname"  id="user" placeholder="Name" size="33"   > <br> <span id="userr"> </span>  </td> </tr>  
<!-- <tr><td> 
Last Name  <td> <input type="text" id="userl"  placeholder="Surname" size="33" > <br> <span id="userrl"> </span>   </td> </tr>   -->


<tr><td>
Aadhar No.<td> 
   <input type="text"  name="cardnum" id="card" placeholder="card no(only 12 digits allowed)"  size="33" > <br> <span id="cardd"> <span id="cardd"> </span> </td> </tr>  




<tr><td>
Email Address  <td> <input type="email" name="email" id="email" placeholder="example123@yahoo.com" size="33"  >  <br> <span id="emaill"> </span> </td> </tr>  
<tr><td>
Password  <td> <input type="text"   name="password" id="pass" placeholder="Password"  size="33"  >  <br> <span id="passs"> </span>  </td> </tr>  
<tr><td>
Confirm Password  <td> <input type="text"  name="confirmpassword"  id="conpass"  placeholder=" Confirm Password" size="33" >  <br> <span id="conpasss"> </span> 
</td> </tr>  
<tr><td>
Gender<td> <input type="radio"  name="gender"  value="male" checked="">Male 
<input type="radio" name ="gender" value="female"  > Female
</td> </tr>


<tr><td>Country<td>
   <select name="country">
      <option>Country</option>
      <option>INDIA</option>
      <option>NEPAL</option>
      <option>SRI LANKA</option>
      
   </select>

</td> </tr>

<tr><td>

MOB NO<td> <input type="text"  name="mobilenumber"  id="mobile" placeholder="mobile(only 10 digits)"  size="15" > <br> <span id="mobilee"></span> 
</td> </tr>



<tr>
   <td>D.o.B</td>
   <td>
      <select name ="birthdate[]"> 
         <option>DAY</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>
      </select>

            <select name ="birthdate[]"> 
         <option>MONTH</option><option>JAN</option><option>FEB</option><option>MAR</option><option>APR</option><option>MAY</option><option>JUN</option><option>JUlY</option><option>AUG</option><option>SEP</option><option>OCT</option><option>NOV</option><option>DEC</option>
      </select>

            <select name ="birthdate[]"> 
         <option>YEAR</option><option>2010</option><option>2011</option><option>2012</option>
      </select>
</td>
</tr>

<tr>  
   <td>Languages known</td>
   <td> 
   <input type="checkbox" value="HINDI" name ="language[]">HINDI
   <input type="checkbox"value="ENGLISH" name ="language[]">ENGLISH
  <br> <input type="checkbox" value="MARATHI " name ="language[]">MARATHI 
   <input type="checkbox" value="PUNJABI" name ="language[]">PUNJABI
   </td>
</tr>

<tr>
   <td>Address</td>
   <td>
      <textarea name="address" rows="5" cols="30"></textarea>
   </td>

</tr>

<!--  //to store the checkbox data use the array -->





<tr><td align ="center" colspan="2"   > <!--  //to unite two column and make button at center -->
   <input type="submit" name="submit" id="btn" > </td> </tr>  
 


<tr><td align ="center" colspan=""   > 
   <!-- <input type="home" name="home" id="btn" >
 -->
  <button id="btn1"> <a href="random.php">Go to Home</a></button>

    </td> 
 
<td align ="right" colspan="2"   > 
   <!-- <input type="home" name="home" id="btn" >
 -->
  <button id="btn1"> <a href="login.php">Registed User</a></button>

    </td>  
 
</tr>  







</table>
</form>

<!-- ///////////////////////////////////////////////////////////////////////////////// -->

<script type="text/javascript">
function validation()
{
      var user  = document.getElementById('user').value;
      var email  = document.getElementById('email').value;
      var pass  = document.getElementById('pass').value;
      var conpass  = document.getElementById('conpass').value;
      var mobile  = document.getElementById('mobile').value;
      var card= document.getElementById('card').value;
//////////////////////////
   if(user == "")
     {
      document.getElementById('userr').innerHTML="**Please write username";      
     return false;
     }
       if(user.length<2)
        {
               document.getElementById('userr').innerHTML="**Please write username with atleast 2 char";       
     return false;
        }
     //    if(!isNaN(user))   // to stop numbers 
     //    {
     //           document.getElementById('userr').innerHTML="** digits  are not allowed";      
     // return false;
     //    }

        else 
        {  // all conditions are passed
               document.getElementById('userr').innerHTML="";     
        }




/////////////////////////
 

    if(card == "")
    {
      document.getElementById('cardd').innerHTML="**Please enter Card No";      
     return false;
    }

 if(isNaN(card))   // to stop numbers 
        {
               document.getElementById('cardd').innerHTML="**Only digits";     
         return false;
        }
if(card.length!=12)   // 13 so include 91+ country code also 
{
               document.getElementById('cardd').innerHTML="*Enter valid no(12 digits)";       
     return false;
   
}

else {  // now mobile is correct ,so go ahead no need to print anythind
   document.getElementById('cardd').innerHTML=""; 
}

////////////////////////

////////////////////////////////


       if(email == "")
    {
      document.getElementById('emaill').innerHTML="**Please write email id";     
     return false;
    }


   if(email.indexOf('@')==0)     // with starting @ not allowed
    {
      document.getElementById('emaill').innerHTML="**Not a valid pos of @ ";     
     return false;
    }
                 //shivamrai@small.com.in
   if(email.charAt(email.length - 4)!='.'  &&  email.charAt(email.length-3)!='.')     
    {
    // . is allowed only after having2 or  3 char after it. 
      document.getElementById('emaill').innerHTML="**Not valid pos of .";     
     return false;
    }
  else
    {
      document.getElementById('emaill').innerHTML="";       
  
    }
















///////////////////////////////////
    if(pass == "")
    {
      document.getElementById('passs').innerHTML="**Please write PAssword";      
     return false;
    }
   if(pass.length < 8)
    {
      document.getElementById('passs').innerHTML="**Enter valid at least 8 char()";       
     return false;
    }
   if(pass.search(/[0-9]/)==-1)
    {
      document.getElementById('passs').innerHTML="**Please include 1 no ";       
     return false;
    }
  if(pass.search(/[A-Z]/)==-1)
    {
      document.getElementById('passs').innerHTML="**Enter an uppercase ";     
     return false;
    }
   if(pass.search(/[a-z]/)==-1)
    {
      document.getElementById('passs').innerHTML="**Enter an lowercase";      
     return false;
    }
   if(pass.search(/[!\@\#\$\%\^\&\+\-\)\(\)\=<\>\.\,\;]/)==-1)
    {
      document.getElementById('passs').innerHTML="**Please provide one special character";      
     return false;
    }
    else
    {      // all condition are met
            document.getElementById('passs').innerHTML="";   

    }



////////////////////////////////////

    if(conpass !=pass)
    {
      document.getElementById('conpasss').innerHTML="**Password Not MAtch";      
     return false;
    }

/////////////////////////
    if(mobile == "")
    {
      document.getElementById('mobilee').innerHTML="**Please enter mob no";      
     return false;
    }

 if(isNaN(mobile))   // to stop numbers 
        {
               document.getElementById('mobilee').innerHTML="**Only digits";     
     return false;
        }
//if(mobile.length<10  || mobile.length>13 )   // 13 so include 91+ country code also 
if(mobile.length!=10) 
{
               document.getElementById('mobilee').innerHTML="*Enter valid no(10 digits)";       
     return false;
   
}

else {  // now mobile is correct ,so go ahead no need to print anythind
   document.getElementById('mobilee').innerHTML=""; 
}
/////////////////////////////////////
///

}
</script>







</body>
</html>




<?php

if(isset($_POST['submit']))
{
$fn=        $_POST['firstname'];
$cardno=    $_POST['cardnum'];
$em=        $_POST['email'];
$pwd=       $_POST['password'];
$conpwd=    $_POST['confirmpassword'];
$gen=       $_POST['gender'];
$country=   $_POST['country'];
$dob=       $_POST['birthdate'];
$lan=       $_POST['language'];

$dobstr=implode("-",$dob);
$chkstr= implode(",",$lan);
// check box data is a array so use implode func


// $mob=       $_GET['mobilenumber'];
// $add=       $_GET['address'];


// echo "$fn";
// echo "$em";
// echo "$pwd";
// echo "$conpwd";
// echo "$gen";
// echo "$mob";
// echo "$add";

if($fn!="" && $cardno!="" && $em!="" && $pwd!="" && $conpwd!="" && $gen!="" && $country!="" && $dobstr!=""  && $chkstr!=""  )
{

        $query="INSERT INTO student VALUES ('$fn','$cardno','$em','$pwd','$conpwd','$gen','$country','$dobstr','$chkstr')";
        $data=mysqli_query($conn,$query);


        if($data)
        {
          echo "<text align :center>data inserted successfully into databse";
        }

}
        else 
        {
         echo "Fialed to insert data";
        }

}
?>








































