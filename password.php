<?php
function passwordGenerator($lunghezzaPw,$special,$number,$maiuscole,$minuscole){

    $username = $_POST['fname'];
    $specialChars = '!"#$%&\'()*+,-./:;<=>?@[\\]^_`{|}~';
    $numbers = '0123456789';
    $uppercaseLetters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lowercaseLetters = 'abcdefghijklmnopqrstuvwxyz';
    $poolDiCaratteri ='';
    $pwLen = $_POST['pw_lenght'];
    $stringaVuota ="";
    if($special){
        $poolDiCaratteri = $poolDiCaratteri . $specialChars;
    }
    if($number){
        $poolDiCaratteri = $poolDiCaratteri . $numbers;
    }
    if(isset($_POST['Maiuscole'])){
        $poolDiCaratteri = $poolDiCaratteri . $uppercaseLetters;
    }
    if(isset($_POST['Minuscole'])){
        $poolDiCaratteri = $poolDiCaratteri . $lowercaseLetters;
    }
    for($i = 0; $i<$pwLen;$i = $i +1){
        $chars = str_split($poolDiCaratteri);
        $numRan = rand(0,count($chars)-1);
        $stringaVuota = $stringaVuota . $chars[$numRan];
    }

            
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
</head>
<body>
<div class="card">
  
  <div class="container">
    <h4>Ciao, <?php echo $username?> , Ecco la tua password:</h4>

    
    <p><?php echo $stringaVuota?></p>
    <button type="button"> <a href ="index.php"> Torna indietro </a></button> 
   
  </div>
</div>
    
</body>
<style>

body {
    width: 100vw;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #f4f4f4; 
    margin: 0;
}
.container {
    background: #ffffff;
    padding: 20px;
    padding-top:5px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 60vh;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    transition: transform 0.8s ease, box-shadow 0.3s ease; 
    
}
.container>h4,p{
    font-size : 25px;
    font-weight: bold;
}
.conainter>h4{
    margin-top:1px;
}

button{
    
    background: chocolate;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  border-radius : 10px;
  transition: transform 0.3s ease, box-shadow 0.3s ease; 
  margin-top:10px;
  
} 
button:hover{
    
    transform:scale(1.02); 
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15); 
    background: rgb(243, 162, 105);
   
}


a{
    text-decoration : none;
    
}
a:visited { text-decoration: none; color:white; }
a:hover { text-decoration: none; color:white; }
a:focus { text-decoration: none; color:white; }
a:hover, a:active { text-decoration: none; color:white }
h4,p{
    font-size:14px;
    font-family: system-ui;
}
    </style>
</html>