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
        <title>Estrutura de Repetição</title>
    </head>
    <body>
        <div class = "container">
            <div class = "row">
                <h1>Estruturas de Repetição</h1>
            </div>
              <!--  While Do -->
            <div class = "row">
                <div>
                    <h2> While Do - Enquanto Faça</h2>
                    <h4> Executa um laço de repetição
                         Enquanto Determinada Condição
                         é verdadeira </h4>   
                    <?php
                    
                    $nota = 0;
                    $cont = 0;
                    while($nota < 6){
                        $nota = rand(0,10);
                        echo("faça a prova <br>");
                        echo("valor nota: $nota <br>");                        
                        ++$cont;                        
                    }
                    echo("numero de tentativas $cont <br>");
                    echo("nota final $nota <br>");                                        
                    ?>                                      
                </div>
            </div>
              
              <!-- Do While  -->
            <div class = "row">
                <div>
                    <h2> Do While - Faça Enquanto </h2>
                    <h4> Executa um bloco de código uma vez e repete 
                        Enquanto Determinada Condição é verdadeira </h4>                            
                    <?php
                    $cont = 0;

                    do {
                        $nota = rand(0,10);

                        if($nota%2==0){

                          echo("$nota é par <br> ");
                          $nota =0;                         
                          continue;
                        }
                        
                        echo("valor nota: $nota <br>");
                        ++$cont; 
                       
                        if($cont == 3){
                           echo ("Número máximo de chances!!! <br>");
                           break;
                        } 
                                                
                    } while($nota < 6);
                    
                     echo("numero de tentativas $cont <br>");
                     echo("nota final $nota <br>");  
                    ?>                   
                </div>
            </div>
              
               <!-- For  -->
            <div class = "row">
                <div>
                    <h2> For - Para  </h2>
        <h4> Executa um laço de repetição para uma 
                            determinada quantidade conhecida de Iterações </h4>                            
                    <ol>
                    <?php
                        $item_feira = array("Alface","Tomate","Cebola","Pepino");
                        
                        $qtd_repeticoes = count($item_feira);
                       
                        for($contador = 0; $contador < $qtd_repeticoes; $contador++){                           
                            echo "<li> $item_feira[$contador]  </li>";                                                       
                        }                                            
                    ?>
                    </ol>
                </div>
            </div>
               
                  <!-- Foreach  -->
            <div class = "row">
                <div>
                    <h2> Foreach - Para cada </h2>
                    <h4> Executa um laço de repetição para cada item existente em um objeto array  </h4>                            
                    <ul>
                    <?php
                        $item_feira = array("Alface","Tomate","Cebola","Pepino");
                        foreach($item_feira as $item){
                            echo "<li> $item </li>";
                        }
                    ?>
                    </ul>
                </div>
            </div>
                  
                  <div class = "row">
                <div>
                    <h2> Foreach - Para cada </h2>
                    <h4> Exemplo Select  </h4>                            
                    <form>
                        <select name="Lista_feira">    
                    <?php
                        $item_feira = array("Alface","Tomate","Cebola","Pepino");
                        foreach($item_feira as $item){
                            echo "<option value=$item> $item </option>";
                        }
                    ?>
                        </select>
                    </form>
                </div>
                      
                      
            </div>
                   <div class = "row">
                <div>
                    <h2> Foreach - Para cada </h2>
                    <h4> Exemplo tabela  </h4>                            
                    <table class="table thead-dark  table-striped table-hover"> 
                        <tr>
                            <th> Produto</th>   
                            <th> Preco</th>   
                        </tr>
                    <?php
                        $item_feira =    $item_feira["Alface"]
                        array("Alface"=>"3.00",  
                            "Tomate"=>"5.00",
                            "Cebola"=>"4.00",
                            "Pepino"=>"3.00");
                        $nelemento =3;
                        $cont=0;
                        foreach($item_feira as $produto=>$preco) {                           
                            ++$cont;
                            //linha
                            echo "<tr>";
                                //coluna 1
                                echo "<td>";
                                echo "<input type='checkbox' value=$cont name=".'ckb_'.$cont.">";
                                echo "</td>";
                                //coluna 1
                                echo "<td>";
                                echo $produto;
                                echo "</td>";
                                //coluna2
                                echo "<td>";
                                echo $preco;
                                echo "</td>";
                            echo "</tr>";
                            
                            if($cont == $nelemento) break;
                        }
                    ?>
                    </table>
                </div>
              
        </div>
    </body>
</html>
