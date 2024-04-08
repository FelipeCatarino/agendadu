<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="x-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="images/icons/icons8-manutenção-48.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">

    <title>Agendadu</title>
</head>
<body>

    <?php include_once "header.php";
    ?>
    

    <main>
        <h1>Preencha abaixo para agendar seu horário</h1>
        <hr><br>  

        <div class="atendent">

            <form action="www.google.com" method="post">

                <input class="text-box" type="text" placeholder="Nome"> <br>
               
                <input class="text-box" type="text" placeholder="Modelo moto"> <br>
                
                <input class="text-box" type="tel" telefone placeholder="Numero"> <br>

                
                <select class="text-box" name="service" id="" value="service">
                    <option value="relação">relação</option>
                    <option value="oleo">Oléo 20w50</option>
                    <option value="pneu">Pneu</option>
                    <option value="pastilha">pastilha</option>
                </select> <br>
                
                <input class="text-box" type="date"> <br>

                <div style="display: flex; justify-content: center; padding-top: 10px;">
                <input class="buttons" type="submit">
                </div>
            </form>
            <br><br>

            
        </div>

    </main>

    <?php
        include_once "footer.php"; 
    ?>




</body>
</html>