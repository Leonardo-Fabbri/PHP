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
$saluto = 'Buongiorno, Compila il test per conoscere il tuo collega virtuale';
$nome = 'Nome';
?>
<body>
    <h1 style="text-align: center;"><?php echo $saluto; ?> </h1>
    <h1 style="text-align: center;"><?php echo $saluto; ?> </h1>

    <form method="POST" action="codice.php">
        <label> <?php echo $nome; ?> </label>
        <input  name="nome" type="text"  placeholder="inserisci nome"></input>
        <label>Cognome</label>
        <input   name="cognome" type="text" placeholder="inserisci cognome"></input>
        <input type="submit" value="invia dati">


    </form>
</body>
</html>