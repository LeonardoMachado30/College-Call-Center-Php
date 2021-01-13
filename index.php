<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>CALL CENTER</title>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script>
        //Auto refresh na pagina sem a sensação de atualizar.
        /*$(document).ready(function(){                                          
        setInterval(function(e){    
        e.preventDefault();
        $("#chat").load("index.php #chat");
                                                                    
        }, 3000);
    });       
    </script>
</head>
<body>
    <!--Uso do bootstrap
        GRID
    -->
    <div class="container-fluid" id="count">
        <div class="row row-top">
            CALL CENTER DASHBOARD   
        </div>
        <div class="row row-custom-status">
            <div class="col-md col-status">
                <h3><strong>Ramais</strong><h3>
            </div>
            <div class="col-md col-status">
                <span class="badge rounded-pill bg-green span-aling border-span-status">Online</span>
            </div>
            <div class="col-md col-status">
                <span class="badge rounded-pill bg-grey span-aling border-span-status">Oflline</span>
            </div>
            <div class="col-md col-status">
                <span class="badge rounded-pill bg-red span-aling border-span-status">Ocupado</span>
            </div>
            <div class="col-md col-status">
                <span class="badge rounded-pill bg-yellow span-aling border-span-status">Chamando</span>
            </div>
        </div>
        <div class="row row row-cols-2 row-cols-lg-10 g-2 g-lg-3 row-aling-ramal" id="chat">
            <?php
            //função que direciona para o arquivo config.php
                include('config.php');
            ?>
        </div>
    </div>

<script src="script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
<html>