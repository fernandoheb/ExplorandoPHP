<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
           <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
       
        <meta charset="UTF-8">
        <title>Explorando PHP</title>
        
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        
        <nav>
            <ul  class="nav">
        <?php
            $links = array("Operadores"=>"operadores.php",
                     "Estruturas de Decisão"=>"decisao.php",
                            "Estruturas de Repetição"=>"repeticao.php");
            
            foreach($links as $key => $link){
                
                echo("<li class='nav-item'>"
                        . "<a class='nav-link'   href='".$link."' target='frame' > $key </a>"
                        . "</li>"); 
            }
            
        ?>
                </ul>
        </nav>
        <iframe class="responsive-iframe" name='frame'>
            
        </iframe>
    </body>
</html>
