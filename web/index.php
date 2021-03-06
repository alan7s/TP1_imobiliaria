<?php
session_start();
?>
<!doctype html>
<html lang="pt-br">
  <head>

    <title>Formulário - cadastro imóveis</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="style.css">

    <script type="text/javascript">
        function salvar()
        {
            var opcao = document.getElementById('opcao').value;
            var tipoimovel = document.getElementById('tipoimovel').value;
            var quartos = document.getElementById('quartos').value;
            var suites = document.getElementById('suites').value;
            var vagas = document.getElementById('vagas').value;
            var area = document.getElementById('area').value;
            var armario = document.getElementById('armario').value;
            var rua = document.getElementById('rua').value;
            var numero = document.getElementById('numero').value;
            var complemento = document.getElementById('complemento').value;
            var bairro = document.getElementById('bairro').value;
            var aluguel = document.getElementById('aluguel').value;
            var data = document.getElementById('data').value;
            var hora = document.getElementById('hora').value;
            var mensagem = document.getElementById('mensagem').value;
            var salas = document.getElementById('salas').value;
            var andar = document.getElementById('andar').value;
            var condominio = document.getElementById('condominio').value;
            var portaria = document.getElementById('portaria').value;
            var imovelid = document.getElementById('imovelid').value;
            
        }
    </script>

  </head>

  <body >
    
   <!--<img src="imagem-fundo.jpg" id="imagem" alt="">-->
   
    <form class="containers col-lg-4" method="POST" action="processa.php" onsubmit="salvar()" >
        <div class="form-group">
            <label for="opcao">Selecione a opção de cadastro ou visualização</label>
            <select class="form-control " name= "opcao" id="opcao" onChange="selectopcao()">
                <option selected disabled hidden style='display: none' value=''></option> 
                <option  value="cadastro">Cadastrar imóvel</option>
                <option  value="visualizar">Visualizar imóveis cadastrados</option>
                <option value="agendar">Agendamento de visita</option>
                <option value="visitas_agendadas">Visualizar visitas agendadas</option>
            </select>
        
            <div id="cadastrar" style="display:none" class="form-group"> 
                <div class="form-group">
                    <label for="tipoimovel">Selecione o tipo do imóvel</label>
                    <select class="form-control " name="tipoimovel" id="tipoimovel" onChange="funcao()">
                        <option value="Apartamento">Apartamento</option>
                        <option value="Casa">Casa</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="quartos">Quantos quartos?</label>
                    <input class="form-control mr-2" name="quartos" id="quartos" required type="number"  min="0" max="100" placeholder="Digite quantidade de quartos">
                </div>
                <div class="form-group">
                    <label for="suites">Quantas suítes?</label>
                    <input class="form-control mr-2" name="suites" id="suites" required type="number" min="0" max="100" placeholder="Digite quantidade de suítes">
                </div>
                <div class="form-group">
                    <label for="vagas">Quantas vagas na garagem?</label>
                    <input class="form-control mr-2" name="vagas" id="vagas" type="number" required min="0" max="100" placeholder="Digite quantidade de vagas na garagem">
                </div>
                <div class="form-group">
                    <label for="area">Área total?</label>
                    <input class="form-control mr-2" name="area" id="area" type="number" required min="0" placeholder="Digite área em metros quadrados">
                </div>
                <div class="form-group">
                    <label for="armario">Possui armário embutido?</label>
                    <select class="form-control" name="armario" id="armario">
                          <option value="S">Sim</option>
                          <option value="N">Não</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="salas">Quantas salas?</label>
                    <input class="form-control mr-2" name="salas" id="salas" required type="number" min="0" max="100" placeholder="Digite quantidade de salas">
                </div>
        
        
                <div id="imovelAp" style="display:block" class="form-group"> 
                      <!--<form class="form-inline">-->
                      <div class="form-group">
                            <label for="andar">Qual o andar?</label>
                            <input class="form-control mr-2" name="andar" id="andar" required type="number" min="0" max="100" value="0" placeholder="Informe o andar do apartamento">
                      </div>
                      <div class="form-group">
                            <label for="condominio">Valor do condominio?</label>
                            <input class="form-control mr-2" name="condominio" id="condominio" required type="number" min="0" value="0" placeholder="Digite o valor do condomínio">
                      </div>
                      <div class="form-group">
                        <label for="portaria">Possui portaria 24 horas?</label>
                        <select class="form-control" name="portaria" id="portaria">
                            <option selected disabled hidden style='display: none' value='N'></option> 
                            <option value="S">Sim</option>
                            <option value="N">Não</option>
                        </select>
                      </div>
                      <!--</form>-->
                </div>
                
                <!--<div id="imovelCasa" style="display:none" class="form-group">
                    
                </div>-->

                <div class="form-group">
                    <label for="rua">Informe nome da rua</label>
                    <input class="form-control mr-2" name="rua" id="rua" required type="text" placeholder="Digite o nome da rua">
                </div>
                <div class="form-group">
                    <label for="numero">Informe número da residência</label>
                    <input class="form-control mr-2" name="numero" id="numero" required type="number" min="0" placeholder="Digite o número da casa">
                </div>
                <div class="form-group">
                    <label for = "complemento">Informe o complemento para o endereço</label>
                    <input class="form-control mr-2" name="complemento" id="complemento" required type="text" placeholder="Informe o complemento">
                </div>
                <div class="form-group">
                    <label for="bairro">Informe o bairro</label>
                    <select class="form-control" name="bairro" id="bairro">
                        <option value="Vitoria">Vitória</option>
                        <option value="Goania">Goiania</option>
                        <option value="Horto">Horto</option>
                        <option value="SantaTereza">Santa Tereza</option>
                        <option value="Floresta">Floresta</option>
                        <option value="VilaDaLuz">Vila Da Luz</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="aluguel">Informe o valor do aluguel</label>
                    <input class="form-control mr-2" name="aluguel" id="aluguel" required type="number" min="0" placeholder="Digite o valor do aluguel">
                </div>
                <!--<div class="form-group form-inline">
                    <input class="btn btn-primary mr-2" onclick="calendario()" type="button" value="Agendar visita">
            
                    <div class="form-inline" id="calendario" style="display:none">
                        <input class="form-control mr-2" type="date" name="data" id="data">
                        <input class="form-control" type="time" name="hora" id="hora">
                    </div>        
                </div>-->
               

                <div class="form-group">
                    <label for="mensagem">Descrição do imóvel</label>
                    <textarea class="form-control" name="mensagem" id="mensagem" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Salvar">
                </div>
                <br><br>
            </div>
            <div id="visualizar" style="display:none" class="form-group">
                
                   <div class="form-group">
                        <br>
                         <input class="btn btn-primary" onclick= "salvar()" type="submit" value="Consultar">
                   </div>
                   
            </div>
            <div id="agendar" style="display:none" class="form-group">
                
                <div class="form-group">
                    <br>
                   <div class="form-group form-inline">
                       <br><br>
                        <input class="btn btn-primary" onclick= "salvar()" type="submit"   value="Agendar visita">
                        <div class="form-inline" id="calendario">
                            <input class="form-control mr-2" name="imovelid" id="imovelid" required type="number" min="1" placeholder="ID do imóvel">
                            <input class="form-control mr-2" type="date" name="data" id="data" required>
                            <input class="form-control" type="time" name="hora" id="hora" required>
                        </div>
                    </div>
                   </div>
                   
            </div>
            <div id = "vistas_agendadas" style="display:none" class="form-group">
                <div class="form-group">
                 <br>
                    <input class="btn btn-primary" onclick= "salvar()" type="submit"   value="Visualizar Visitas">   
                </div>
            </div>
            
             <script>
                    function selectopcao(){
                        var x = document.getElementById("opcao").value;
                        if(x=='visualizar'){
                            document.getElementById("visualizar").style.display  = "block";
                            document.getElementById("cadastrar").style.display  = "none";
                            document.getElementById("agendar").style.display  = "none";
                            document.getElementById("vistas_agendadas").style.display  = "none";
                            input = document.getElementById("cadastrar").getElementsByTagName('input');
                            for(i = 0; i < input.length; i++){
                                input[i].required = false;
                            }
                            input = document.getElementById("agendar").getElementsByTagName('input');
                            for(i = 0; i < input.length; i++){
                                input[i].required = false;
                            }
                        }
                        if(x=='cadastro'){
                            document.getElementById("visualizar").style.display  = "none";
                            document.getElementById("cadastrar").style.display  = "block";
                            document.getElementById("agendar").style.display  = "none";
                            document.getElementById("vistas_agendadas").style.display  = "none";
                            input = document.getElementById("cadastrar").getElementsByTagName('input');
                            for(i = 0; i < input.length; i++){
                                input[i].required = true;
                            }
                            input = document.getElementById("agendar").getElementsByTagName('input');
                            for(i = 0; i < input.length; i++){
                                input[i].required = false;
                            }
                        }
                        if(x=='agendar'){
                            document.getElementById("visualizar").style.display  = "none";
                            document.getElementById("cadastrar").style.display  = "none";
                            document.getElementById("agendar").style.display  = "block";
                            document.getElementById("vistas_agendadas").style.display  = "none";
                            input = document.getElementById("cadastrar").getElementsByTagName('input');
                            for(i = 0; i < input.length; i++){
                                input[i].required = false;
                            }
                            input = document.getElementById("agendar").getElementsByTagName('input');
                            for(i = 0; i < input.length; i++){
                                input[i].required = true;
                            }
                        }
                        if(x=='visitas_agendadas')
                        {
                            document.getElementById("visualizar").style.display  = "none";
                            document.getElementById("cadastrar").style.display  = "none";
                            document.getElementById("agendar").style.display  = "none";
                            document.getElementById("vistas_agendadas").style.display  = "block";
                            input = document.getElementById("cadastrar").getElementsByTagName('input');
                            for(i = 0; i < input.length; i++){
                                input[i].required = false;
                            }
                            input = document.getElementById("agendar").getElementsByTagName('input');
                            for(i = 0; i < input.length; i++){
                                input[i].required = false;
                            }
                        }
                    }
                    function funcao(){
                        var x = document.getElementById("tipoimovel").value;
                        if(x=='Apartamento'){
                            document.getElementById("imovelAp").style.display  = "block";
                            //document.getElementById("imovelCasa").style.display  = "none";
                        }
                        if(x=='Casa'){
                            document.getElementById("imovelAp").style.display  = "none";
                            //document.getElementById("imovelCasa").style.display  = "block";
                        }
                    }
                    function calendario(){ 
                        if(document.getElementById("calendario").style.display !== 'none')  
                            document.getElementById("calendario").style.display  = 'none';
                        else
                            document.getElementById("calendario").style.display  = 'block';
                    }   
                  
            </script>
            
           
        </div>
        <?php
            if(isset($_SESSION['msg']))
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        ?>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>