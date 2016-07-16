<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <link href='https://fonts.googleapis.com/css?family=Slabo+27px|Montserrat' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.css"> 
        <link rel="stylesheet" type="text/css" href="form1style.css"/>
    </head>
<body>

    
<?php
//define variables and set to empty values    
$name = $email = $pno = $password = $intr = $city = $nws ="";
    
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $pno = test_input($_POST["pno"]);
    $password = test_input($_POST["password"]);
    $intr = test_input($_POST["intr"]);
    $city = test_input($_POST["city"]);
    $nws = test_input($_POST["nws"]);
}
    
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
    
<?php
    $nameErr = $emailErr = $pnoErr = $passwordErr = $intrErr = $cityErr = $nwsErr ="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["pno"])) {
    $pnoErr = "No. is required";
  } else {
    $pno = test_input($_POST["pno"]);
  }

  if (empty($_POST["password"])) {
    $passwordErr = "Password is reqired";
  } else {
    $password = test_input($_POST["password"]);
  }

  if (empty($_POST["nws"])) {
    $nwsErr = "Subscription is required";
  } else {
    $nws = test_input($_POST["nws"]);
  }

  if (empty($_POST["city"])) {
    $nwsErr = "Subscription is required";
  } else {
    $city = test_input($_POST["city"]);
  }        
    
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

?>
    
    
<form class="123"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<div class=" col-sm-12 col-md-8 col-lg-4 form-group">
    <label for="ExampleInputName">Name:</label>
    <input type=text  class="form-control" name=name placeholder=name />
</div>
    
<div class="col-sm-12 col-md-8 col-lg-4 form-group">
    <label for="ExampleInputName">email:</label>
     <input type=email class="form-control" name=email placeholder=email />
</div>
    
<div class="col-sm-12 col-md-8 col-lg-4">
	<label for="ExampleInputName">phone:</label>
	<input type=text class="form-control" name=pno maxlength="10" placeholder=phone />
</div>
    
<div class=" col-sm-12 col-md-8 col-lg-4">
    <label for="ExampleInputName">password:</label>
	<input type=password class="form-control" name=password placeholder=password />
</div>
    
<div class="col-sm-12 col-md-8 col-lg-4">
    <label for="ExampleInputName">interest:</label>
    <input type="checkbox" class="form-control" name="intr" value="tech">technical
    <input type="checkbox" class="form-control" name="intr" value="mgmt">management
</div>    
    
    
<div class="col-sm-12 col-md-8 col-lg-4">
	<label for="ExampleInputName">newsletter subscription:</label>
    <input type="radio" class="form-control" name="nws" value="yes">yes
    <input type="radio" class="form-control" name="nws" value="no">No
</div>

<div class=" col-sm-12 col-md-8 col-lg-4">
    <label for="ExampleInputName">city:</label>
	<select  class="form-control"name=city multiple>
        <option>mumbai</option>
        <option>delhi</option>
        <option selected>pune</option>
        <option>punjab</option>
    </select>        
</div>
    
<div class="col-sm-12 col-md-8 col-lg-4"  >      
    <input type=submit onmouseover="change('lightblue')" class="form-control" value=submit>
    <input type=reset class="form-control" value=reset>
</div>
</form>  
<?php    
    echo "<h2>YOUR INPUT:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $pno;
    echo "<br>";
    echo $password;
    echo "<br>";
    echo $intr;
    echo "<br>";
    echo $city;
    echo "<br>";
    echo $nws;
    echo "<br>";
    
?>    

</body>
</html>