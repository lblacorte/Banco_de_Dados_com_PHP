<!DOCTYPE html>
<html>
<!-- CÓDIGO DA PÁGINA HTML: -->
<head>
	<meta charset="iso-8859-1">
		<title>Listar dados de uma tabela de banco de dados - Leandro Lacorte | Info 2B</title>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
			<script src="http://digitalbush.com/wp-content/uploads/2014/10/jquery.maskedinput.js"></script>
</head>
<!-- CÓDIGO DO MENU E CABEÇALHO: -->
<body
	style=
	"font-family: Arial Narrow, Arial; 
	color: white; 
	font-size: 12pt; 
	background-image: url(https://i.pinimg.com/originals/16/02/b2/1602b26c05ee78120695d592a68b8912.gif); 
	background-repeat: no-repeat; 
	background-position: center fixed;    
	-webkit-background-size: cover;   
	-moz-background-size: cover;   
	-o-background-size: cover;   
	background-size: cover;" 
	bgproperties="fixed" topmargin="0">
		<form name="Cabeçalho">
			<table border="0" align=center class="cabeçalho" style="border-collapse: collapse">
				<tr>
					<style type="text/css">
						.cabeçalho{
							margin-top: 7px;
						}
					</style>
						<td colspan="7">
							<a href="">
								<img src="https://i.ibb.co/PG19X4v/Cabe-alho.jpg">
							</a>
						</td>
				</tr>
				<tr 
				style=
				"background-color: red;
				vertical-align: middle;">
					<td 
						style=
						"border: solid 1px; 
						border-color: black;" 
						width="15">
							<a href="">
								<button type="button" name="INÍCIO" 
									style=
									"background-color: transparent; 
									height: 30px; 
									border-color: transparent; 
									cursor: pointer">
										<FONT 
											style=
											"font-family: Arial Narrow, Arial; 
											color: white; 
											font-size: 12pt;">
												<center><b>INÍCIO</b></center>
										</FONT>
								</button>
							</a>
					</td>
					<td
						style=
						"border: solid 1px; 
						border-color: black" 
						width="50">
							<a href="#tabelaProcedural">
								<button type="button" name="tabelaProcedural" 
									style=
									"background-color: transparent; 
									height: 30px; 
									width: 170px;
									border-color: transparent; 
									cursor: pointer">
										<FONT 
											style=
											"font-family: Arial Narrow, Arial; 
											color: white; 
											font-size: 12pt;">
												<center><b>TABELA PROCEDURAL</b></center>
										</FONT>
								</button>
							</a>
					</td>
					<td width="15" 
						style=
						"border: solid 1px; 
						border-color: black">
							<a href="#tabelaPDO">
								<button type="button" name="tabelaPDO" 
									style=
									"background-color: transparent; 
									height: 30px; 
									width: 100px; 
									border-color: transparent; 
									cursor: pointer"> 
										<FONT 
											style=
											"font-family: Arial Narrow, Arial; 
											color: white; 
											font-size: 12pt;">
												<center><b>TABELA PDO</b></center>
										</FONT>
								</button>
							</a>
					</td>
					<td width="15" 
						style=
						"border: solid 1px; 
						border-color: black">
							<a href="#atualizarProcedural">
								<button type="button" name="editarProcedural" 
									style=
									"background-color: transparent; 
									height: 30px; 
									width: 170px; 
									border-color: transparent; 
									cursor: pointer"> 
										<FONT 
											style=
											"font-family: Arial Narrow, Arial; 
											color: white; 
											font-size: 12pt;">
												<center><b>EDITAR PROCEDURAL</b></center>
										</FONT>
								</button>
							</a>
					</td>
					<td colspan="2" width="15" 
						style=
						"border: solid 1px; 
						border-color: black">
							<a href="#atualizarPDO">
								<button type="button" name="editarPDO" 
									style=
									"background-color: transparent; 
									height: 30px; 
									width: 100px; 
									border-color: transparent; 
									cursor: pointer"> 
										<FONT 
											style=
											"font-family: Arial Narrow, Arial; 
											color: white; 
											font-size: 12pt;">
												<center><b>EDITAR PDO</b></center>
										</FONT>
								</button>
							</a>
					</td>
<!-- ALGORITMO DO HORÁRIO ATUALIZADO EM TEMPO REAL: -->
					<td width="463" 
						style=
						"border: solid 1px; 
						border-color: black; 
						text-align: right; 
						padding-right: 15px; 
						vertical-align: middle;">
							<div>
								<FONT 
									style=
									"font-family: Arial Narrow, Arial; 
									color: white; 
									font-size: 10pt;">
										Horário atualizado em tempo real:
										&nbsp;&nbsp;
								</FONT>
									<output id="data" 
										style=
											"font-family: Arial Narrow, Arial; 
											color: white; 
											font-size: 12pt; 
											font-style: italic; 
											text-align: right;">
									</output>
									&nbsp;
									<output id="hora" 
										style=
											"font-family: Arial Narrow, Arial; 
											color: white; 
											font-size: 12pt; 
											font-style: italic; 
											text-align: right;">
									</output>
							</div>
								<script>
									jQuery(window).load(function($){
										horário();
									});
										function horário(){ 
											var agora = new Date();
												var hora = agora.getHours();
												var minuto = agora.getMinutes();
												var segundo = agora.getSeconds();
												var dia = agora.getDate();
												var mês = agora.getMonth() + 1;
												var ano = agora.getFullYear();
										if (dia < 10){ 
											dia = "0" + dia;
										}
										if (mês < 10){ 
											mês = "0" + mês;
										}
										if (hora < 10){ 
											hora = "0" + hora;
										}
										if (minuto < 10){ 
											minuto = "0" + minuto;
										}
										if (segundo < 10){ 
											segundo = "0" + segundo;
										}
											formato_data = dia + "/" + mês + "/" + ano;
											formato_hora = hora + ":" + minuto + ":" + segundo;
												document.getElementById("data").innerHTML = formato_data;
												document.getElementById("hora").innerHTML = formato_hora;
													setTimeout("horário()",1000);
										}
								</script>
					</td>
				</tr>
			</table>
		</form>
		<br>
		<br>
		<?php 
		$conexao = mysqli_connect('localhost', 'root', '', 'escola');
		
		if(!$conexao){
			die("Ocorreu um erro na conexão: " . mysqli_connect_error());
		}
		else{
			//echo "Conexão realizada com sucesso";
		}
		
			if (isset($_GET['atualizarProcedural'])){
				$nome = $_GET['nomeProcedural'];
				$sigla = $_GET['siglaProcedural'];
				$carga = $_GET['cargaProcedural'];
				$id = $_GET['idProcedural'];
		
				$sql = "UPDATE disciplinas SET nomeDisciplina = '$nome', siglaDisciplina = '$sigla', cargaHoraria = '$carga' WHERE idDisciplina = " . $id;
				$atualizar = mysqli_query($conexao, $sql) or die( mysqli_error( $conexao ) );
			}
			$conexao->close();
		?>

		<?php
            try {
                $conexao = new PDO('mysql:host=localhost;dbname=escola', 'root', '');
                $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch(PDOException $e) {
                    echo 'Erro: ' . $e->getMessage();
                }

				if (isset($_GET['atualizarPDO'])){
					$nome = $_GET['nomePDO'];
					$sigla = $_GET['siglaPDO'];
					$carga = $_GET['cargaPDO'];
					$id = $_GET['idPDO'];
			
					try {
						$sql = $conexao->prepare("UPDATE disciplinas SET nomeDisciplina = :nomeDisciplina, siglaDisciplina = :siglaDisciplina, cargaHoraria = :cargaHoraria WHERE idDisciplina = :idDisciplina");
						$sql->execute(array(
										':nomeDisciplina' 	=> $nome,
										':siglaDisciplina'	=> $sigla,
										':cargaHoraria'		=> $carga,
										':idDisciplina'		=> $id
										));
					}catch (PDOException $e) {
						echo 'Erro: ' .$e->getMessage();
					}
				}

        unset($conexao); 
        
        ?>
<!-- EXIBIR TABELA 'DISCIPLINAS' COM PROCEDURAL: -->
<section id="tabelaProcedural">
	<table border = 4px align='center' style="background-color: red; border-color: black; border-style: solid;">
			<tr>
				<td colspan=4>
					<center><b>TABELA PROCEDURAL</b></center>
				</td>
			</tr>
            <tr>
				<td colspan=4>
					<center>Disciplinas</center>
				</td>
			</tr>
			<tr>
                <td>
                    <center>ID</center>
                </td>
                <td>
                    <center>Nome</center>
                </td>
                <td>
                    <center>Sigla</center>
                </td>
                <td>
                    <center>Carga horária</center>
                </td>
            </tr>

            <?php
                
            $conexao = mysqli_connect('localhost', 'root', '', 'escola');

            mysqli_query($conexao, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

            if(!$conexao){
                die("Ocorreu um erro na conexão: " . mysqli_connect_error());
            }
            else{
                //echo "Conexão realizada com sucesso";
            }

			$sql = "SELECT * FROM disciplinas";
			$consulta = mysqli_query($conexao, $sql);
			while ($linha = mysqli_fetch_array($consulta)) { 

            ?>

            <tr>
				<td> <?php echo htmlspecialchars($linha['idDisciplina']); ?> </td>
				<td> <?php echo htmlspecialchars(utf8_encode($linha['nomeDisciplina'])); ?> </td>
				<td> <?php echo htmlspecialchars($linha['siglaDisciplina']); ?> </td>
                <td> <?php echo htmlspecialchars($linha['cargaHoraria']); ?> </td>
            </tr>

            <?php
                }

                mysqli_close($conexao);
            
            ?>
</table>
<br>
<br>
</section>
<!-- ATUALIZAR TABELA 'DISCIPLINAS' COM PROCEDURAL: -->
<section id="atualizarProcedural">
	<table border = 4px align='center' style="background-color: red; border-color: black; border-style: solid;">
		<form action="#tabelaProcedural" method="GET">
		<tr>
				<td colspan=4>
					<center><b>EDITAR TABELA PROCEDURAL</b></center>
				</td>
			</tr>
            <tr>
				<td colspan=4>
					<center>Disciplinas</center>
				</td>
			</tr>
			<tr>
				<td>
                    <center>ID</center>
                <td>
                    <center>Nome</center>
                </td>
                <td>
                    <center>Sigla</center>
                </td>
                <td>
                    <center>Carga horária</center>
                </td>
            </tr>
			<tr>
				<td>
                    <input type="number" name="idProcedural">
                </td>
                <td>
                    <input type="text" name="nomeProcedural">
                </td>
                <td>
                    <input type="text" name="siglaProcedural">
                </td>
                <td>
                    <input type="number" name="cargaProcedural">
                </td>
            </tr>
			<tr>
				<td colspan="4" align="center">
					<button name="atualizarProcedural">Atualizar</button>
				</td>
			</tr>
			</form>
</table>
<br>
<br>
</section>
<!-- EXIBIR TABELA 'DISCIPLINAS' COM PDO: -->
<section id="tabelaPDO">
	<table border = 4px align='center' style="background-color: rgb(0, 17, 255); border-color: black; border-style: solid;">
        <tr>
            <td colspan=4>
                <center><b>TABELA PDO</b></center>
            </td>
        </tr>
        <tr>
            <td colspan=4>
                <center>Disciplinas</center>
            </td>
        </tr>
        <tr>
            <td>
                <center>ID</center>
            </td>
            <td>
                <center>Nome</center>
            </td>
            <td>
                <center>Sigla</center>
            </td>
            <td>
                <center>Carga horária</center>
            </td>
        </tr>

        <?php
            try {
                $conexao = new PDO('mysql:host=localhost;dbname=escola', 'root', '');
                $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch(PDOException $e) {
                    echo 'Erro: ' . $e->getMessage();
                }

            try{
                    $sql = "SELECT * FROM disciplinas";
                    $consulta = $conexao->query($sql);
                } catch (PDOException $e) {
                    echo 'Ocorreu um erro na conexão: ' . $e->getmessage();
                }
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) { 
        ?>

        <tr>
            <td> <?php echo htmlspecialchars($linha['idDisciplina']); ?> </td>
            <td> <?php echo htmlspecialchars(utf8_encode($linha['nomeDisciplina'])); ?> </td>
            <td> <?php echo htmlspecialchars($linha['siglaDisciplina']); ?> </td>
            <td> <?php echo htmlspecialchars($linha['cargaHoraria']); ?> </td>
        </tr>

        <?php }
        
        unset($conexao); 
        
        ?>

	</table>
</section>
<br>
<br>
<!-- ATUALIZAR TABELA 'DISCIPLINAS' COM PDO: -->
<section id="atualizarPDO">
	<table border = 4px align='center' style="background-color: blue; border-color: black; border-style: solid;">
		<form action="#tabelaPDO" method="GET">
		<tr>
				<td colspan=4>
					<center><b>EDITAR TABELA PDO</b></center>
				</td>
			</tr>
            <tr>
				<td colspan=4>
					<center>Disciplinas</center>
				</td>
			</tr>
			<tr>
				<td>
                    <center>ID</center>
                <td>
                    <center>Nome</center>
                </td>
                <td>
                    <center>Sigla</center>
                </td>
                <td>
                    <center>Carga horária</center>
                </td>
            </tr>
			<tr>
				<td>
                    <input type="number" name="idPDO">
                </td>
                <td>
                    <input type="text" name="nomePDO">
                </td>
                <td>
                    <input type="text" name="siglaPDO">
                </td>
                <td>
                    <input type="number" name="cargaPDO">
                </td>
            </tr>
			<tr>
				<td colspan="4" align="center">
					<button name="atualizarPDO">Atualizar</button>
				</td>
			</tr>
			</form>
</table>
<br>
<br>
</section>
<!-- CÓDIGO DO RODAPÉ: -->
			<table align="center" border="0" style="border-collapse: collapse">
				<tr>
					<td 
						style=
						"height: 5px; 
						background-color: #F3581B; 
						width: 1075px; 
						border-top-left-radius: 8px; 
						border-top-right-radius: 8px">
					</td>
				</tr>
				<tr align="center">
					<td align="center" 
						style=
						"background-color: red; 
						height: 30px; 
						width: 1010px">
							<FONT
								style=
								"font-family: Arial Narrow, Arial; 
								color: white; 
								font-size: 11pt">
									<n>Editar dados de uma tabela de banco de dados | Leandro Lacorte - Info 2B | (55) 9 9694 9865 | Copyright © 2021 - IFFar - Campus Júlio de Castilhos - Curso Técnico Integrado em Informática - v1.0</n>
					</td>
				</tr>
</body>
</html>