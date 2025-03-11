<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>

<?php include "partials/header.php"; ?>

<form action="password.php" method="POST" id="formUtente">
  <label for="fname">Nome utente:</label><br>
  <input type="text" id="fname" placeholder="Nome Utente" name="fname" required><br><br>
  <label for="pw_lenght">Lunghezza password:</label><br>
  <input type="number" id="pw_lenght" min=6 max =20 name="pw_lenght" required> <br>
  <input type="checkbox" id="Spec" name="Spec" value="True">
  <label for="Spec"> Speciali</label><br>
  <input type="checkbox" id="Numeri" name="Numeri" value="True">
  <label for="Numeri"> Numeri</label><br>
  <input type="checkbox" id="Maiuscole" name="Maiuscole" value="True">
  <label for="Maiuscole"> Maiuscole</label><br>
  <input type="checkbox" id="Minuscole" name="Minuscole" value="True">
  <label for="Minuscole"> Minuscole</label><br>
  <br>

  <input type="submit" value="genera la password"> 

</form>

<?php include "partials/footer.php"; ?>

<script>
document.getElementById("formUtente").addEventListener("submit", function(event) {
    let checkboxes = document.querySelectorAll('input[type="checkbox"]');
    let almenoUnoSelezionato = false;
   

 
    

    checkboxes.forEach(function(checkbox) {
        if (checkbox.checked) []
    });

    if (!almenoUnoSelezionato) {
        event.preventDefault(); 
        alert("Seleziona almeno un tipo di carattere per la password!");
    }
});
</script>

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

form {
    background: #ffffff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 60vh;
    position: absolute;
    left: 50%;
    top: 80%;
    transform: translate(-50%, -50%);
}
label{
    font-size:14px;
    font-family: system-ui;
}

    input[type="text"], textarea ,input[type="date"],input[type="number"]{
        width: 94%;
        padding: 10px 15px;
        margin-bottom: 15px;
        margin-right :15px;
        margin-top: 2%;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 20px;
        resize: none;
    }
    input[type="checkbox"]{
  width: 20px; 
  height: 20px; 
}
    input[type="number"]{
        width: 10%;
        padding: 10px 15px;
        margin-bottom: 15px;
        margin-right :15px;
        margin-top: 2%;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 20px;
        resize: none;
        
    }
    input[type="checkbox"]:hover{
        cursor:pointer;
    }
    textarea {
        height: 80px;
    }
    input[type="submit"] {
        background: chocolate;
        color: #fff;
        border: none;
        padding: 10px 15px;
        border-radius: 4px;
        font-size: 14px;
        cursor: pointer;
        width: 100%;
        transition: transform 0.3s ease, box-shadow 0.3s ease; 
    }
    input[type="submit"]:hover {
        background: rgb(243, 162, 105);
        transform: scale(1.02);
    }
    </style>
    
</body>
</html>