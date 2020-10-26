<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php
        include 'cabecalho.php';
        ?>
        <meta charset="UTF-8">
        <title>Estruturas de Decisão</title>
    </head>
    <body>
    <div class="container">
    
        <div class = "row">
            <h1>Estruturas de Decisão</h1>
        </div>
        <div class="row">
            <div>
                <h2> if simples </h2>
                <h4> Executa apenas uma condição </h4>
            </div>
            <div>
<pre>
    if(condição==verdadeiro){
        Código caso seja verdadeiro
    }                
</pre>
<pre>
<code>
    $x= rand(0, 1000);
    echo($x);
    if($x%2==0){
        echo("$x é Par!");
    }               
</code>
</pre>
                    <div class="code">
                        PHP: <br> 
                        <?php 
                            $x= rand(0, 1000);
                            echo("$x <br>");
                            if($x%2==0){
                                echo("$x é Par!");
                            }
                        ?>
                    </div>
                </div>       
            </div>
            <div class="row">
                <div>
                    <h2> if composto </h2>
                    <h4> Executa código para duas condições </h4>
                </div>
                <div>
<pre>
    if(condição==verdadeiro){
        Código caso a condição seja verdadeira
    } else {
        Código caso a condição seja falsa
    }                
</pre>
<pre>
<code>
    $x= rand(0, 1000);
    if($x%2==0){
        echo("$x é Par!");
    }  else {
        echo("$x é Impar!");
    }                         
</code>
</pre>
                    <div class="code">
                        PHP: <br>
                        <?php 
                            $x= rand(0, 1000);
                            if($x%2==0){
                                echo("$x é Par!");
                            } else {
                                echo("$x é Impar!");
                            }  
                        ?>
                    </div>
                </div>       
            </div>

     
         <div class="row">
                <div>
                    <h2> Decisão composta e aninhada </h2>
                    <h4> Executa código para mais de duas condições </h4>
                </div>
                <div>
<pre>
    if(condição1 ==verdadeiro){
        Código caso a condição seja verdadeira
        if(outra_condição){
            Código caso a outra_condição seja verdadeira
        }
    } elseif(condição2==verdadeira) {
        Código caso a condição1 seja falsa <b>E</b> Condição2 seja verdadeira
    } else {
        Código caso todas as condições sejam falsas
    }                
</pre>
<pre>
<code>
    $x= rand(0, 1000);
    if($x%3==0){
        if($x >500){ # estrutura aninhada
            echo("$x é múltiplo de 3 e maior que quinhentos ");
        } else {
          echo("$x é múltiplo de 3 e menor que quinhentos ");  
        }
    } elseif($x%2==0) { # estrutura encadeada
        echo("$x é Par!");
    }  else {
        echo("$x é Impar e não divisível por 3");
    }                           
</code>
</pre>
                    <div class="code">
                        PHP: <br>
<?php 
    $x= rand(0, 1000);
    if($x%3==0){
        
        if($x > 500){ # estrutura aninhada
            echo("$x é múltiplo de 3 e maior que quinhentos ");
        } else {
          echo("$x é múltiplo de 3 e menor que quinhentos ");  
        }
        
    } elseif($x%2==0) { # estrutura encadeada
        echo("$x é Par!");
    }  else {
        echo("$x é Impar e não divisível por 3");
    }   
?>
                    </div>
                </div>       
            </div>
        
        
        
         <div class="row">
                <div>
                    <h2> Switch Case - Seleção </h2>
                    <h4> Seleciona uma opção entre vários blocos de código </h4>
                </div>
                <div>
<pre>
switch(x) {
    case valor1:
        código a ser executado <b> if (x==valor1) </b>;
        break;
    case valor2:
        código a ser executado <b> if (x==valor2) </b>;
        break;
    default:
        código a ser executado caso <b>x</b>  corresponda a um <b>case</b> não previsto;
}            
</pre>
<pre>
<code>
$x= rand(0, 1000);
$y = $x % 5;

switch($y){        
    case 1: echo ("$x / 5 possui resto um");
            break;
    case 2: echo ("$x / 5 possui resto dois");
            break;
    case 3: echo ("$x / 5 possui resto três");
            break;
    case 4: echo ("$x / 5 possui resto quatro");
            break;
    default: echo($x.' é múltiplo de 5 -> $x/5 = '.$x/5); 
} 
    
</code>
</pre>
                    <div class="code">
                        PHP: <br>
<?php 
$x= rand(0, 1000);
$y = $x % 5;

switch($y){        
    case 1: echo ("$x / 5 possui resto um");
            break;
    case 2: echo ("$x / 5 possui resto dois");
            break;
    case 3: echo ("$x / 5 possui resto três");
            break;
    case 4: echo ("$x / 5 possui resto quatro");
            break;
    default: echo($x.' é múltiplo de 5 -> $x/5 = '.$x/5);             
}  
   
?>
                    </div>
                </div>       
            </div>

    </div>    
    </body>
</html>
