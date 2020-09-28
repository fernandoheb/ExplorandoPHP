<!Doctype html>
<html>
<head lang="pt-br">        
       <?php
            include 'cabecalho.php';
        ?>
        <meta charset="UTF-8">
            <title>Operadores PhP</title>

    <style>
    
        
    </style>
</head>
<body>
      <div class="floater">
        <button class="btn btn-dark btn-sm" onclick=CollapseAll()> Contrair Todos
                   <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle-fill" 
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                       <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 
                         16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105
                         1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 
                         5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                   </svg>
        </button> 
        <button class="btn btn-dark btn-sm" onclick=ShowAll()>  Mostrar todos
                   <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle-fill" 
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                       <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 
                         16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105
                         1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 
                         5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                   </svg>
        </button> 
       
    </div>

<div class="container">
    <div class="row">
        <h1> Operadores </h1>

        <p> Operadores são símbols que dizem para o compilador ou interpretador <br>
                para realizar uma operação Matemática, Lógica ou Relacional 
                a fim de alcançar um determinado resultado
        </p>
    </div>
    <div class="row">
        <div>
            <h2> Operadores Aritiméticos 
                <button class="btn btn-dark btn-sm" onclick=toggleAri()>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 
                              16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 
                              1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 
                              0-2 1 1 0 0 0 0 2z"/>
                    </svg>
                </button>
            </h2>
            <div id="opAri">    
                <table class="table thead-dark  table-striped table-hover">
                    <thead class="">
                        <tr>
                            <th class="firstcol"> Operador </th>
                            <th> Operação </th>
                            <th> Exemplo </th>
                            <th> Resultado </th>
                            <th> Demo: </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="firstcol"> ** </td>
                            <td> exponenciação </td>
                            <td>$x ** $y</td>
                            <td>Resultado de elevar $x por $y</td>
                            <td>
                                $x =3 $y=2 <br>
                                $x ** $y = 
                                <?php
                                    $x = 3;
                                    $y = 2;                                    
                                    var_dump($x ** $y);
                                    $a = $b = true;
                                    var_dump(!(($a and $b) xor (!$a || $b)));
                                   
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="firstcol"> % </td>
                            <td> Módulo </td>
                            <td>$x % $y</td>
                            <td>Resulta no resto da divisão de $x por $y</td>
                            <td>
                                $x =3 $y=2 <br>
                                $x % $y = 
                                <?php
                                    $x = 3;
                                    $y = 2;
                                    echo $x % $y;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="firstcol"> * </td>
                            <td> multiplicação </td>
                            <td>$x * $y</td>
                            <td>Produto de $x por $y</td>
                            <td>
                                $x =3 $y=2 <br>
                                $x * $y = 
                                <?php
                                    $x = 3;
                                    $y = 2;
                                    echo $x * $y;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="firstcol"> / </td>
                            <td> divisão </td>
                            <td>$x / $y</td>
                            <td>Produto de $x por $y</td>
                            <td>
                                $x =3 $y=2 <br>
                                $x / $y = 
                                <?php
                                    $x = 3;
                                    $y = 2;
                                    echo $x / $y;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="firstcol"> + </td>
                            <td> Soma </td>
                            <td>$x + $y</td>
                            <td>Soma de $x por $y</td>
                            <td>
                                $x =3 $y=2 <br>
                                $x + $y = 
                                <?php
                                    $x = 3;
                                    $y = 2;
                                    echo $x + $y;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="firstcol"> - </td>
                            <td> Subtração </td>
                            <td>$x - $y</td>
                            <td>Subtração de $x por $y</td>
                            <td>
                                $x =3 $y=2 <br>
                                $x - $y = 
                                <?php
                                    $x = 3;
                                    $y = 2;
                                    echo $x - $y;
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>    
    </div>

    <div class="row">
        <h2> Operadores Lógicos
            <button class="btn btn-dark btn-sm" onclick=toggleLog()>
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 
                          16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105
                          1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 
                          6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg>
            </button>
        </h2>
        <div id="opLog">
            <table class="table thead-dark  table-striped table-hover">
                <tbody>
                    <tr>
                        <th class="firstcol"> Operador </th>
                        <th> Operação </th>
                        <th> Exemplo </th>
                        <th> Resultado </th>
                        <th> Demo: </th>
                    </tr>
                    <tr>
                        <td class="firstcol">and</td>
                        <td>E</td>
                        <td>$x and $y</td>
                        <td>Verdadeiro se ambos $x e $y forem verdadeiros</td>
                        <td> $x = true; $y=false; <br>
                            <?php
                                $x = true;
                                $y = false;
                                
                                if ($x and $y) {
                                    $r = "verdadeiro";
                                } else {
                                    $r = "falso";
                                }
                                
                                echo '$x and $y = ' . $r
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="firstcol">or</td>
                        <td>Ou</td>
                        <td>$x or $y</td>
                        <td>Verdadeiro se $x ou $y forem verdadeiros</td>
                        <td> $x = true; $y=false; <br>
                            <?php
                                $x = true;
                                $y = false;
                                if ($x or $y) {
                                    $r = "verdadeiro";
                                } else {
                                    $r = "falso";
                                }
                                echo '$x or $y = ' . $r
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="firstcol">xor</td>
                        <td>Xor<br> ou exclusivo </td>
                        <td>$x xor $y</td>
                        <td>Verdadeiro se  $x ou $y for verdadeiro, mas não ambos</td>
                        <td>
                            $x = true; $y=false;
                            <br>
                            <?php
                                $x = true;
                                $y = false;
                                if ($x xor $y) {
                                    $r = "verdadeiro";
                                } else {
                                    $r = "falso";
                                }
                                echo '$x xor $y = ' . $r
                            ?>
                            <hr>
                            $x = true; $y=true;
                            <br>
                            <?php
                                $x = true;
                                $y = true;
                                if ($x xor $y) {
                                    $r = "verdadeiro";                                    
                                } else {
                                    $r = "falso";
                                }
                                echo '$x xor $y = ' . $r
                            ?> 
                        </td>
                    </tr>
                    <tr>
                        <td class="firstcol">&amp;&amp;</td>
                        <td>And</td>
                        <td>$x &amp;&amp; $y</td>
                        <td>Verdadeiro se ambos $x e $y são verdadeiros</td>
                        <td> $x = true; $y=false; <br>
                            <?php
                                $x = true;
                                $y = false;
                                
                                $r = ($x && $y ? "verdadeiro" : "falso");  
                                
                                echo '$x && $y = ' . $r
                            ?></td>
                    </tr>
                    <tr>
                        <td class="firstcol">||  <small>(alt 124)</small> </td>
                        <td>Or</td>
                        <td>$x || $y</td>
                        <td>Verdadeiro se $x ou $y são verdadeiros</td>
                        <td> 
                            <?php
                                $x = true;
                                $y = false;
                                $r = ($x || $y ? "verdadeiro" : "falso");
                                echo '$x || $y = ' . $r
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="firstcol">!</td>
                        <td>Não</td>
                        <td>!$x</td>
                        <td>Verdadeiro se $x não é verdadeiro</td>
                        <td> $x = true; $y=false; <br>
                            <?php
                            
                                $x = true;
                                $y = false;
                                $r = (!$x ?  "verdadeiro" : "falso");
                                echo '!$x = ' . $r;
                                echo "<br>";
                                $r = (!$y ? "verdadeiro" : "falso");
                                echo '!$y = ' . $r;
                                
                            ?>                                                        
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <h2> Operadores de Comparação   
            <button class="btn btn-dark btn-sm" onclick=toggleComp()>
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle-fill" 
                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 
                          16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105
                          1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 
                          5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg>
            </button>
        </h2>
        <div id="opComp">   
            <table class="table thead-dark  table-striped table-hover">
                <tbody>
                    <tr>
                        <th class="firstcol"> Operador </th>
                        <th> Operação </th>
                        <th> Exemplo </th>
                        <th> Resultado </th>
                        <th> Demo: </th>
                    </tr>                
                    <tr>
                        <td class="firstcol">==</td>
                        <td>Igual</td>
                        <td>$x == $y</td>
                        <td>Retorna verdadeiro se $x é igual a $y</td>
                        <td>
                            $x = 100;<br>
                            $y = "100";<br>
                            Resultado
                            <?php
                                $x = 100;   
                                $y = "100";
                                echo "<br>";
                                var_dump($x );
                                var_dump( $y);
                                var_dump($x == $y);                                
                            ?>  
                        </td>
                    </tr>
                    <tr>
                        <td class="firstcol">===</td>
                        <td>Identico</td>
                        <td>$x === $y</td>
                        <td>
                            Returna verdadeiro se $x é igual a $y e ambos são do mesmo tipo                        
                        </td>
                        <td> $x = 100;<br>
                             $y = "100";<br>
                            Resultado
                            <strong>
                                <?php
                                $x = 100;
                                $y = "100";
                                var_dump($x === $y);
                                ?>
                            </strong>
                        </td>
                    </tr>
                    <tr>
                        <td class="firstcol">!=</td>
                        <td>Diferente</td>
                        <td>$x != $y</td>
                        <td>Retorna verdadeiro se $x não igual a $y</td>
                        <td>
                            $x = 10;<br>
                            $y = "100";<br>
                            Resultado
                            <strong>                                    
                                <?php
                                $x = 10;
                                $y = "100";
                                var_dump($x != $y);
                                ?> 
                            </strong>
                        </td>
                    </tr>
                    <tr>
                        <td class="firstcol">&lt;&gt;</td>
                        <td>Diferente</td>
                        <td>$x &lt;&gt; $y</td>
                        <td>Retorna verdadeiro se $x não é igual a $y</td>
                        <td>
                            $x = 10;<br>
                            $y = 10;<br>
                            Resultado
                            <strong>                                    
                            <?php
                                $x = 10;
                                $y = 10;
                                var_dump($x <> $y);
                            ?> 
                            </strong>
                        </td>
                    </tr>
                    <tr>
                        <td class="firstcol">!==</td>
                        <td>Não identico</td>
                        <td>$x !== $y</td>
                        <td>Retorna verdadeiro se $x não é igual a $y ou se eles não forem do mesmo tipo </td>
                        <td>
                            $x = 10;<br>
                            $y = 10;<br>
                            Resultado
                            <strong>                                    
                                <?php
                                $x = 10;
                                $y = 10;
                                var_dump($x !== $y);
                                ?> 
                            </strong>
                            <hr>
                            $x = 10;<br>
                            $y = "10";<br>
                            Resultado
                            <strong>                                    
                                <?php
                                $x = 10;
                                $y = "10";
                                var_dump($x !== $y);
                                ?> 
                            </strong>
                        </td>
                    </tr>
                    <tr>
                        <td class="firstcol">&gt;</td>
                        <td>Maior que</td>
                        <td>$x &gt; $y</td>
                        <td>Retorna verdadeiro se $x é maior que $y</td>
                        <td>                                                                            
                            $x = 10;    
                            <br>
                            $y = 100;
                            <br>
                            Resultado
                            <strong>
                                <?php
                                $x = 10;
                                $y = 100;
                                var_dump($x > $y);
                                ?>     
                            </strong>   
                        </td>
                    </tr>
                    <tr>
                        <td class="firstcol">&lt;</td>
                        <td>Menor que</td>
                        <td>$x &lt; $y</td>
                        <td>Retorna verdadeiro se $x é menor que $y</td>
                        <td>
                            $x = 10;<br>
                            $y = 100;<br>
                            Resultado
                            <strong>
                            <?php
                                $x = 10;
                                $y = 100;
                                var_dump($x < $y);
                            ?>     
                            </strong> 
                        </td>
                    </tr>
                    <tr>
                        <td class="firstcol">&gt;=</td>
                        <td>Maior ou igual a</td>
                        <td>$x &gt;= $y</td>
                        <td>Retorna verdadeiro se $x é maior ou igual a $y</td>
                        <td>
                        $x = 10;<br>
                        $y = 100;<br>
                        Resultado
                        <strong>
                            <?php
                            $x = 10;
                            $y = 100;
                            var_dump($x >= $y);
                            ?>     
                        </strong> 
                        </td>
                    </tr>
                    <tr>
                        <td class="firstcol">&lt;=</td>
                        <td>Menor ou igual a</td>
                        <td>$x &lt;= $y</td>
                        <td>Retorna verdadeiro se $x é menor ou igual a $y</td>
                        <td>
                        $x = 100;<br>
                        $y = "100";<br>
                        Resultado
                        <strong> 
                            <?php
                                $x = 100;
                                $y = "100";
                                var_dump($x <= $y);
                            ?>   
                        </strong> 
                        </td>
                    </tr>
                    <tr>
                        <td class="firstcol">&lt;=&gt;</td>
                        <td>Spaceship</td>
                        <td>$x &lt;=&gt; $y</td>
                        <td>
                        Retorna um inteiro entre -1,0 e 1, dependendo se $x é menor que, igual a, ou maior que $y.
                        <em>Valido a partir da versão PHP 7</em>.</td>
                        <td>
                            $x = 10;<br>
                            $y = 100;<br>
                            Resultado
                            <strong>
                                <?php
                                    $x = 10;
                                    $y = 100;
                                    echo '$x < $y =';
                                    var_dump($x <=> $y);
                                ?>     
                            </strong> 
                            <hr>                           
                            $x = 100;<br>
                            $y = 100;<br>
                            Resultado
                            <strong> 
                                <?php
                                    $x = 100;
                                    $y = 100;
                                    echo '$x == $y =';
                                    var_dump($x <=> $y);
                                ?> 
                            </strong> 
                            <hr>
                            $x = 100;<br>
                            $y = 10;<br>
                            Resultado
                            <strong> 
                                <?php
                                    $x = 100;
                                    $y = 10;
                                    echo '$x > $y =';
                                    var_dump($x <=> $y);
                                ?>  
                            </strong> 
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
      <div class="row">
        <h2> Operadores de Atribuição   
            <button class="btn btn-dark btn-sm" onclick=toggleAtrib()>
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle-fill" 
                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 
                          16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105
                          1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 
                          5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg>
            </button>
        </h2>
        <div id="opAtrib">   
            <table class="table thead-dark  table-striped table-hover">
                <tbody>
                    <tr>
                        <th class="firstcol"> Operador </th>
                        <th> Operação </th>
                        <th> Correspondência </th>
                        <th> Resultado </th>
                        <th> Demo: </th>
                    </tr>                
                    <tr>
                        <td class="firstcol">=</td>
                        <td>Atribuição Simples</td>
                        <td>$x = $y </td>
                        <td>O Operando a esquerda ($x) recebe o valor da expressão a direita ($y + 1)</td>
                        <td>
                            $x = 0;<br>
                            $y = "100";<br>
                            Resultado<br>
                            <?php
                                $x = 0;   
                                $y = 100;
                                echo "<br>";
                                var_dump($x);
                                var_dump($y);
                                var_dump($x = $y);                                
                            ?>  
                        </td>
                    </tr>
                    <tr>
                        <td class="firstcol">+=</td>
                        <td>Adição</td>
                        <td>$x = $x + $y</td>
                        <td>
                            Adiciona o valor do operando a direita ($y) ao operando à esquerda ($x)                     
                        </td>
                        <td> $x = 1;<br>
                             $y = 1;<br>
                            Resultado<br>
                            <strong>
                                <?php
                                $x = 1;
                                $y = 1;
                                var_dump($x += $y);
                                ?>
                            </strong>
                        </td>
                    </tr>
                    <tr>
                        <td class="firstcol">-=</td>
                        <td>Subtração</td>
                        <td>$x = $x - $y</td>
                        <td>
                            Subtrai o valor do operando a direita ($y) ao operando à esquerda ($x)                     
                        </td>
                        <td> $x = 1;<br>
                             $y = 1;<br>
                            Resultado<br>
                            <strong>
                                <?php
                                $x = 1;
                                $y = 1;
                                var_dump($x -= $y);
                                ?>
                            </strong>
                        </td>
                    </tr>
                    <tr>
                        <td class="firstcol">*=</td>
                        <td>Multiplicação</td>
                        <td>$x = $x * $y</td>
                        <td>
                            Multiplica o valor do operando à esquerda ($x) pel valor do operando a direita ($y)                    
                        </td>
                        <td> $x = 10;<br>
                             $y = 2;<br>
                            Resultado<br>
                            <strong>
                                <?php
                                $x = 10;
                                $y = 2;
                                var_dump($x *= $y);
                                ?>
                            </strong>
                        </td>
                    </tr>
                   <tr>
                        <td class="firstcol">/=</td>
                        <td>Divisão</td>
                        <td>$x = $x / $y</td>
                        <td>
                            Divide o valor do operando à esquerda ($x) pel valor do operando a direita ($y)                    
                        </td>
                        <td> $x = 10;<br>
                             $y = 2;<br>
                            Resultado<br>
                            <strong>
                                <?php
                                $x = 10;
                                $y = 2;
                                var_dump($x /= $y);
                                ?>
                            </strong>
                        </td>
                    </tr>
                    <tr>
                        <td class="firstcol">%=</td>
                        <td>Módulo</td>
                        <td>$x = $x % $y</td>
                        <td>
                            Atribui a variável o Resto da divisão do operando à esquerda ($x) pelo valor do operando a direita ($y)                    
                        </td>
                        <td> $x = 10;<br>
                             $y = 3;<br>
                            Resultado<br>
                            <strong>
                                <?php
                                $x = 10;
                                $y = 3;
                                var_dump($x %= $y);
                                ?>
                            </strong>
                        </td>
                    </tr>   
                    <tr>
                        <td class="firstcol">.=</td>
                        <td>Concatenação</td>
                        <td>$string1 = $string1 . $string2</td>
                        <td>
                            Atribui a variável o Resto da divisão do operando à esquerda ($x) pelo valor do operando a direita ($y)                    
                        </td>
                        <td> $string1 = 'Hello';<br>
                             $string2 = '_World';<br>
                             $string1 .= $string2; <br>
                            Resultado <br>
                            <strong>
                                <?php
                                    $string1 = 'Hello';
                                    $string2 = '_World';                                    
                                    var_dump($string1 .= $string2);
                                ?>
                            </strong>
                        </td>
                    </tr>  
                </tbody>
            </table>
        </div>
    </div>
    
      <div class="row">
        <h2> Operadores de auto incremento  
            <button class="btn btn-dark btn-sm" onclick=toggleAutoInc()>
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle-fill" 
                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 
                          16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105
                          1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 
                          5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg>
            </button>
        </h2>
        <div id="opAutoInc">   
            <table class="table thead-dark  table-striped table-hover">
                <tbody>
                    <tr>
                        <th class="firstcol"> Operador </th>
                        <th> Operação </th>
                        <th> Correspondência </th>
                        <th> Resultado </th>
                        <th> Demo: </th>
                    </tr>                
                    <tr>
                        <td class="firstcol" rowspan="2">--</td>
                        
                        <td>pré-decremento</td>
                        <td>--$x <hr>
                        $x = $x -1 </td>
                        <td>Decresce o valor de $x em 1 e então retorna $x </td>
                        <td>
                            $x = 0;<br>
                            var_dump(--$x);<br>  
                            <?php
                                $x = 0;                                   
                                var_dump(--$x);  
                            ?>  
                        </td>
                    </tr>
                    <tr>
                        <td>pós-incremento</td>
                        <td>$x--<hr>
                        $x = $x - 1 </td>
                        <td>Retorna o valor de $x e depois o decresce seu valor em 1</td>
                        <td>
                            $x = 0;<br>
                            var_dump($x--)<br>                                                       
                            <?php
                                $x = 0;                                   
                                var_dump($x--);  
                            ?>  
                            <br>echo($x)<br>
                            <?php                                                                
                                echo($x);  
                            ?> 
                        </td>
                    </tr>
                    
                     <tr>
                        <td class="firstcol" rowspan="2">++</td>
                        
                        <td>pré-incremento</td>
                        <td>++$x <hr>
                        $x = $x +1 </td>
                        <td>Incrementa o valor de $x em 1 e então retorna $x </td>
                        <td>
                            $x = 0;<br>
                            var_dump(++$x);<br>  
                            <?php
                                $x = 0;                                   
                                var_dump(++$x);  
                            ?>  
                        </td>
                    </tr>
                    <tr>
                        <td>pós-incremento</td>
                        <td>$x++ <hr>
                        $x = $x +1 </td>
                        <td>Retorna o valor de $x e depois o incrementa em 1</td>
                        <td>
                            $x = 0;<br>
                            var_dump($x++)<br>                                                       
                            <?php
                                $x = 0;                                   
                                var_dump($x++);  
                            ?>  
                            <br>echo($x)<br>
                            <?php                                                                
                                echo($x);  
                            ?> 
                        </td>
                    </tr>            
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="row">
    <footer>       
           <h1> Saiba mais 
               <button class="btn btn-dark btn-sm" onclick=toggleMore()>
                   <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle-fill" 
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                       <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 
                         16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105
                         1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 
                         5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                   </svg>
               </button> 
           </h1>
           <?php
               echo "<div id='more'>";
               echo "<a class='btn btn-dark .btn-lg btn-block' href='https://www.php.net/manual/pt_BR/language.operators.php' target='_blank'> ";
               echo"Documentação Php.net";
               echo "</a> <br>";
               echo "<a class='btn btn-dark .btn-lg btn-block' href='https://www.w3schools.com/php/php_operators.asp' target='_blank'> ";
               echo "Tutoriais W3Schools";
               echo "</a>";
               echo "</div>";
           ?>       
    </footer>        
    </div>
    
</div>
  
        <script>
            function docReady(fn) {
                // see if DOM is already available
                if (document.readyState === "complete" || document.readyState === "interactive") {
                    // call on next available tick
                    setTimeout(fn, 1);
                } else {
                    document.addEventListener("DOMContentLoaded", fn);
                }
            }
            docReady(function () {
                CollapseAll();
            });
            function CollapseAll() {
                var x = document.getElementById("opAri");
                x.style.display = "none";
                x = document.getElementById("opLog");
                x.style.display = "none";
                x = document.getElementById("opComp");
                x.style.display = "none";
                x = document.getElementById("opAtrib");
                x.style.display = "none";
                x = document.getElementById("opAutoInc");
                x.style.display = "none";
                x = document.getElementById("more");
                x.style.display = "none";
                
            }
            function ShowAll() {
                var x = document.getElementById("opAri");
                x.style.display = "block";
                x = document.getElementById("opLog");
                x.style.display = "block";
                ;
                x = document.getElementById("opComp");
                x.style.display = "block";
                x = document.getElementById("opAtrib");
                x.style.display = "block";
                x = document.getElementById("opAutoInc");
                x.style.display = "block";
                x = document.getElementById("more");
                x.style.display = "block";
                
            }

            function toggleAri() {
                var x = document.getElementById("opAri");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
            function toggleLog() {
                var x = document.getElementById("opLog");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
            function toggleComp() {
                var x = document.getElementById("opComp");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
            function toggleMore() {
                var x = document.getElementById("more");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
            function toggleAutoInc(){
                var x = document.getElementById("opAutoInc");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
            
           function toggleAtrib(){
                var x = document.getElementById("opAtrib");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
        </script> 
    </body>
</html>
