<?php
session_start();
require_once 'Classes/Token.php';

$display_messsge = "";

if(isset($_POST['username'], $_POST['csrf_token'], $_POST['password'])){

  $username = $_POST['username'];
  $csrf_token = $_POST['csrf_token'];
  $password = $_POST['password'];
			

  if(!empty($username) && !empty($password) && !empty($csrf_token))
  {
    if(Token::check($csrf_token))
    {
        echo "<script>alert('You have changed me successfully but nobody can twice');</script>";
    }
    else if(!Token::check($csrf_token))
        echo "<script>alert('Cannot be Changed dude.');</script>";
    }
  }
 if(!isset($_SESSION['username']))
{
    echo "<h2 align='center'>You Idiot. Tring to find indexes of us ?? ";
 
    echo "<a href='index.php'>Just Click Here to Login Dude</a></h2>";

    echo "<div align='center'>
    <p>WEB SECURITY PROJECT IT18211160 | chamo.wijetunga@gmail.com | C.S. Wijetunga</p>
</div>";

    echo "<img style ='margin-left:auto; margin-right:auto; display:block;' src='Pics/unnamed.gif' alt='icon' />";

}

else{
$now = time();
// checking the time now when home page starts

   if($now > $_SESSION['expire'])

   {

       session_destroy();

       echo "<h2 align='center'>Your session has expire ! <a href='index.php'>Login Here</h2></p>";

       echo "<div align='center'>
    <p>WEB SECURITY PROJECT IT18211160 | chamo.wijetunga@gmail.com | C.S. Wijetunga</p>
    </div>";

    echo "<img style ='margin-left:auto; margin-right:auto; display:block;' src='Pics/4Mi.gif' alt='icon' />";


   }

    
else
{

?>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="globle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/testlogin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">


<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <title>Destroy Session after 1 minutes </title>

</head>

<body class="welcome_home img-responsive">
    <div class="card" style="width: 40rem;">
        <div class="card-body">
            <h5 class="card-title">Welcome <?php echo $_SESSION['username']; ?>..</h5>
            <p class="card-text">
                <h7>This sets the user session to 10 Seconds. and if the user wait for 10 Seconds. for, </br> without doing
                    anything, it will
                    destroy the session.</br>Then you cannot access the index files without valid credentials. DUH !!
                </h7></br>
            </p>
            <a class="btn btn-primary">I have no purpose in my life.. :(</a>
        </div>
    </div></br></br>
    <form action="logout.php" method="GET">
        <div class="alert danger-centers alert-dark" role="alert">
            <h2 class="alert-heading">Well done!</h2>
            <h4>Aww yeah, you successfully read this important alert message. This example text is going to run a bit
                longer
                so that you can see how alert works with this kind of content.</h4>
            <hr>
            <h4 class="mb-3">if you want to logout before 10 Seconds click on logout link</h4>
            <button type="submit" class="btn btn-danger btn-lg btn-block">Log Out</button></br>
            <h4 class="mb-3">if you dont you can try to update and see how CSRF Token Works ? You got 10 Seconds and your time starts now..</h4>



                    </section>
                </section>
            </section>

        </div>
    </form>
  <section class="container-fluid" id = "scale">
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-3">
                <form method="POST" class="form-con">
                    <div class="form-group">
                       <h2>Change Me</h2>
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" name="username" type="username" class="form-control" aria-describedby="Username Help">
                       
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                       
                        <input type="password" name="password"  type="password" class="form-control" id="exampleInputPassword1"></br>
                       
                       
                        <input type="hidden" name="csrf_token" value="<?php echo Token::generate();?>">
                       
                        
                        <button type="submit" name="submit"    class="btn btn-primary btn-block">Submit</button>
                    </div> 
                </form>
            </section>
        </section>
    </section>
  </div>
</div>
        


    </form>




    <br /><br />

    <span> </span>

    </p>

    <div class="footer">
        <p>WEB SECURITY PROJECT IT18211160 ||USERNAME = snowden PASSWORD = password|| chamo.wijetunga@gmail.com | C.S.
            Wijetunga</p>
    </div>

    <?php
    }
    
}   
    ?>

</body>

</html>