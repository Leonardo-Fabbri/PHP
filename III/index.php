<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            width: 200px;
            padding: 40px;
        }
        label {
            margin-bottom: 5px;
            margin-top:10px ;
        }
    </style>
</head>
<?php 
$nome = 'Leonardo';
?>
<body>
    <h1>esempio</h1>

    <form method="POST" action="post_azione.php">
        <label for="nome"> <?php echo $nome; ?> </label>
        <input  id="nome"type="text" name="nome" placeholder="inserisci nome"></input>
        <label for="cognome">Cognome</label>
        <input  id="nome"type="text" name="cognome" placeholder="inserisci cognome"></input>
        <input type="submit" value="invia dati">


    </form>
</body>
</html>