<?php
define('db_name', 'november2022');
define('host_name', 'localhost');
define('password', 'Jamocity2003$');
define('db_user', 'jamiu');
  

try{
   $dbconn=new mysqli(host_name,db_user,password,db_name);
   mysqli_set_charset($dbconn, 'utf-8');
   

}
catch(Exception $e){
  print"sorry we could not communicate with the server an exception occur :" .$e->getMessge();
   

}
catch(Error $e){
  print"sorry an error occur" . $e->getMessage();
}

 
?>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet"
          href=
"bootstrap-5.0.0-dist/css/bootstrap.css">
  <link rel="stylesheet"
          href=
"bootstrap-5.0.0-dist/js/bootstrap.css">
 <link rel="stylesheet"
          href=
"userpage.css">
<style>
  div{
    margin-top: 30px;
  }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  
</head>
<body >
<div sytle="margin-top:0px" class="jumbotron jumbotron-fluid text-light bg-dark sticky-top">
    <div class="container row">
    <div class="col-sm-2 bg-light text-dark text-justify" width="150px" height="50px">Add logo
    </div>
        <h1 class="display-3 col-sm-10 text-center">Gentle Bee</h1>
        <p class="lead">welcome to Gentle bee kindly register on our website to enjoy our services</p>
        <hr class="my-2">
        <div class="float-end">
        <nav class="navbar navbar-expand-sm">
             <ul class="nav nav-tabs" style="font-size:15px;   font-weight:bold; color:ghostwhite; border-radius:0%;"  id="lab1" >
               <li class="nav-item">
                 <a class="nav-link text-light" href="#" style="text-decoration:none" class="text-light">Register</a>
               </li>
             </ul>
              <ul class="nav nav-tabs dropdown" style="font-size:15px;  font-weight:bold; color:ghostwhite; border-radius:0%;"  id="lab2" >
               <li class="nav-item">
                 <a class="nav-link text-light" href="#" class="text-light">view users</a>
               </li>
             </ul>
              <ul class="nav nav-tabs" style="font-size:15px;  font-weight:bold; color:ghostwhite; border-radius:0%;"  id="lab3" >
               <li class="nav-item">
                 <a class="nav-link text-light" href="#" class="text-light">new password</a>
               </li>
             </ul> 
       

             <ul class="nav nav-tabs " style="font-size:15px;  font-weight:bold; color:ghostwhite; border-radius:0%;"  id="lab4" >
               <li class="nav-item">
                 <a class="nav-link text-dark" href="#" style="text-decoration:none" class="text-light"><i class="fa fa-hacker-news" aria-hidden="true">News</i></a>
               </li>
             </ul>
             
          
           
          </nav>
     </div>   
    </div>
</div>
    <div class="container row">
    <div class="col-sm-10">
    <form   class="form-group container row" method="post" action="membersignuppage.php">
  <h2>Registration form</h2>
  <datafield class="container">
  <div class="row">
  <label class="col-sm 3" for="firstname">first name</label>
  <div class="container row">
  <input type="text"  placeholder="first name" name="firstname" id="Fname" required  value="<?php if (isset($_POST['firstname'])) echo $_POST['firstname']; ?>">
   </div> </div><br>


 <div class="row">
  <label class="col-sm 3" for="firstname">second name</label>
  <div class="container row"> 
  <input type="text"  placeholder="second name" name="secondname" id="Sname" required value="<?php if (isset($_POST['secondname'])) echo $_POST['secondname']; ?>">
 </div></div><br>


 <div class="row">
  <label class="col-sm 3" for="firstname">E-mail</label>
  <div class="container row" >
  <input type="text"  placeholder="email" name="email" id="email" required value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
   </div> </div><br>


 <div class="row">
  <label class="col-sm 3" for="firstname">password</label>
  <div class="container row" >
  <input type="text"  placeholder="password" name="password" id="pass" required value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>">
 </div></div><br>

 <div class="row">
  <label class="col-sm 3" for="firstname">confirm password</label>
  <div class="container row">
  <input type="text"  placeholder="password" name="password2" id="pass2" required value="<?php if (isset($_POST['password2'])) echo $_POST['password2']; ?>">
  </div></div><br>
  <span id ="message"></span>
  <div class="container">
 <input type="submit" class="col-sm-4 float-end btn btn-primary" value="submit">
  </div>
  </datafield>
    
    </div><br>
    <input type="button" class="col-sm-4 float-end btn btn-primary" onclick="f1()" value="submit">
    <div class="col-sm-2">
    <li>this is the information bar </li>
    <strong>
     <i>this app was developed by jjthomson & sir james</i>
     </strong>
    </div>
    </div>
    <footer>
      <?php
      include('footer.php');
      ?>
     </footer>
  <script>  
   
   function f1(){
     if(pass.value == pass2.value){

       document.getElementById('message').innerText='password matched';
        document.getElementById('message').style.color="green";
     }
     else{
       document.getElementById('message').innerText='password does not match';
        document.getElementById('message').style.color='red';
     }
}
</script>  
</body>

</html>