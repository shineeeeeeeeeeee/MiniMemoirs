<?php

require 'func.php';

?>


<DOCTYPE html> 
    <html lang="en"> 
        <head> 
        <link rel="stylesheet" href= 
    "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
        /> 
    
        <style> 
            /* Add a background color and 
            some padding around the form */ 
            .container { 
            /* Make width to 100% for 
                full screen size form*/ 
            width: 50%; 
            border-radius: 5px; 
            background-color: #f2f2f2; /*rgb(242, 242, 242) hsl(0, 0%, 95%)*/ 
            padding: 20px; 
            } 
        </style> 
        </head> 
    
        <body> 
        <div class="container"> 
            <form> 
            <div class="form-group"> 
                <label for="InputName">First name</label> 
                <input
                name="name"
                type="text"
                class="form-control"
                id="InputName"
                placeholder="Enter name"
                /> 
            </div> 
            <div class="form-group"> 
                <label for="InputName">Last name</label> 
                <input
                name="lname"
                type="text"
                class="form-control"
                id="InputName"
                placeholder="Enter name"
                /> 
            </div> 
    
            <div class="form-group"> 
                <label for="InputEmail">Email</label> 
                <input
                name="email"
                type="email"
                class="form-control"
                id="InputEmail"
                placeholder="Enter email"
                /> 
            </div> 
    
            <div class="form-group"> 
                <label for="InputPhoneNumber">Phone Number</label> 
                <input
                type="tel"
                name="phone"
                class="form-control"
                id="InputPhoneNumber"
                placeholder="Enter phone number"
                /> 
            </div> 
        
    
            <div class="form-group"> 
                <label for="InputPassword">Password</label> 
                <input
                type="password"
                class="form-control"
                id="InputPassword"
                placeholder="Enter password"
                /> 
            </div> 
        
    
            <div class="form-group"> 
                <label for="InputSubject">Subject</label> 
                <textarea
                name="msg"
                class="form-control"
                id="InputSubject"
                placeholder="Write something...."
                style="height: 100px"
                > 
                </textarea> 
            </div> 
    
            <button type="submit"
                    class="btn btn-primary">Submit</button> 
            </form> 

            <?php
            if(isset($_POST['ok'])){
                include_once 'func.php';
                $obj=new Contact();
                $res=$obj->contact_us($_POST);
                if($res==true){
                    echo "<script>alert('hello')</script>";
                }else{
                    echo "<script>alert('nope')</script>";
                }
            }

            
            ?>
        </div> 
        </body> 
    </html>
    