<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
    //Auto refresh na pagina sem a sensação de atualizar.
    $(document).ready(function(){
        setInterval(function(){
            $("#count").load('#count')
        }, 10000);
    });
</script>
<?php
    $var = false;
    //Consumindo as APIs
    $urlUsers = "http://191.252.93.122/users.php";
    $resultadoUrlUsers = json_decode(file_get_contents($urlUsers), true);

    $urlAgenda = "http://191.252.93.122/addressbook.php";
    $resultadoUrlAgenda = json_decode(file_get_contents($urlAgenda));

    $urlUsersOnline = "http://191.252.93.122/usersonline.php";
    $resultadoUrlUsersOnline = json_decode(file_get_contents($urlUsersOnline));

    foreach ($resultadoUrlUsers as $atorUser):
        //foreach($resultadoUrlUsersOnline as $atorUsersOnline):

                $cinza = 'bg-grey';
                /*if(strcmp("Available", $atorUser->status) == 0){
                    $color = 'bg-green';
                }else{
                    $color = 'bg-grey';
                }*/
                ?>
                <div class="col-sm col-aling-ramal">
                    <span class="badge rounded-pill border-span bg-green span-format-info font-color-black">
                        <?php
                            //echo substr($atorUser->name, 0, 4);
                            $ids = substr($atorUser['name'],0,4);
                            echo $ids;
                        ?>
                    </span>
                </div>
                <br>
            <?php
        endforeach;
   //endforeach;
            ?>
