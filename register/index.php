<?php

  
if(isset($_POST['fsubmit']))
{	   
       $errorMessage = "";
	   
	   if(empty($_POST['name']))
	{
		$errorMessage .= "<li>You forgot to enter your name!</li>";
	}
	   if(empty($_POST['branch']))
	{
		
		$errorMessage .= "<li>You forgot to enter your branch!</li>";
	}
	
	   if(empty($_POST['year']))
	{
		$errorMessage .= "<li>You forgot to enter your year!</li>";
	}
	
	   if(empty($_POST['sno']))
	{
		$errorMessage .= "<li>You forgot to enter your Student Number!</li>";
	}
	
	   if(empty($_POST['number']))
	{
		$errorMessage .= "<li>You forgot to enter your phone number!</li>";
	}
	
	$varname= $_POST['name'];
	$varbranch= $_POST['branch'];
	$varyear= $_POST['year'];
	$varstdno= $_POST['sno'];
	$varphno= $_POST['number'];
	
	if(empty($errorMessage))
	{   
        $fp=file("list.csv");
        $count=count($fp);
		$unqid=$count+1;
		$fs = fopen("list.csv","a");
		fwrite($fs,$unqid . "," . $varname . "," . $varbranch . "," . $varyear . "," . $varstdno . "," . $varphno . "\n");
		fclose($fs);
		
		echo "<script language='javascript' type='text/javascript'>";
        echo "alert('Your registration is successsful and your ID is ROU$unqid');
		      window.location = '../index.html';
		      ";
        echo "</script>";
		
		
		
		
	}
}
?>




<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register</title>
        
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assetsr/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assetsr/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assetsr/css/form-elements.css">
        <link rel="stylesheet" href="assetsr/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assetsr/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assetsr/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assetsr/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assetsr/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body background="1.jpg">

		<?php
		if(!empty($errorMessage)) 
		{
			echo("<p>There was an error with your form:</p>\n");
			echo("<ul>" . $errorMessage . "</ul>\n");
		} 
	?>
		

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 text">
                            
                            <div class="description">
                            	
                            </div>
                           
                        </div>
                        <div class="col-sm-5 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Get Registered</h3>
                            		<p>Fill in the form below to get registered:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-pencil"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="index.php" method="post" class="registration-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="name">Name</label>
			                        	<input type="text" name="name" placeholder="Name..." class="form-first-name form-control" id="form-first-name">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="branch">Branch</label>
			                        	<input type="text" name="branch" placeholder="Branch..." class="form-last-name form-control" id="form-last-name">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="year">Year</label>
			                        	<input type="text" name="year" placeholder="Year..." class="form-email form-control" id="form-email">
			                        </div>
									<div class="form-group">
			                        	<label class="sr-only" for="sno">Student No.</label>
			                        	<input type="text" name="sno" placeholder="Student Number..." class="form-email form-control" id="form-email">
			                        </div>
									<div class="form-group">
			                        	<label class="sr-only" for="number">Phone No.</label>
			                        	<input type='tel' name="number" placeholder="Phone Number..." class="form-email form-control" id="form-email">
			                        </div>
			                        
			                        <input type="submit" name="fsubmit" value="Submit" />
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assetsr/js/jquery-1.11.1.min.js"></script>
        <script src="assetsr/bootstrap/js/bootstrap.min.js"></script>
        <script src="assetsr/js/jquery.backstretch.min.js"></script>
        <script src="assetsr/js/retina-1.1.0.min.js"></script>
        <script src="assetsr/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assetsr/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>