<!DOCTYPE html>
<html>
<!-- CÓDIGO DA PÁGINA HTML: -->
<head>
	<meta charset="utf-8">
		<title>Login conectado ao banco de dados - Leandro Lacorte | Info 2B</title>
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
						<td colspan="5">
							<a href="">
								<img src="https://i.ibb.co/2NcHq4K/Cabe-alho.jpg">
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
							<a href="#CADASTRO">
								<button type="button" name="CADASTRO" 
									style=
									"background-color: transparent; 
									height: 30px; 
									width: 120px;
									border-color: transparent; 
									cursor: pointer">
										<FONT 
											style=
											"font-family: Arial Narrow, Arial; 
											color: white; 
											font-size: 12pt;">
												<center><b>CADASTRO</b></center>
										</FONT>
								</button>
							</a>
					</td>
					<td colspan="2" width="15" 
						style=
						"border: solid 1px; 
						border-color: black">
							<a href="#LOGIN">
								<button type="button" name="LOGIN" 
									style=
									"background-color: transparent; 
									height: 30px; 
									width: 128px; 
									border-color: transparent; 
									cursor: pointer"> 
										<FONT 
											style=
											"font-family: Arial Narrow, Arial; 
											color: white; 
											font-size: 12pt;">
												<center><b>LOGIN</b></center>
										</FONT>
								</button>
							</a>
					</td>
<!-- ALGORITMO DO HORÁRIO ATUALIZADO EM TEMPO REAL: -->
					<td width="761" 
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
<!-- FORMULÁRIO DE CADASTRO: -->
<section id="CADASTRO">
	<table border = 4px align='center' style="background-color: red; border-color: black; border-style: solid;">
    	<form name='Cadastro' method="GET" action='Realizar cadastro.php'>
			<tr>
				<td colspan=2>
					<center><b>CADASTRO</b></center>
				</td>
			</tr>
			<tr>
         	   <td>
                Nome:
         	   </td>
         		<td>
               		<input id='nome' name='nome' type='text' maxlength="20" required>
        	    </td>
				<!-- PERMITIR APENAS LETRAS, ACENTOS E ESPAÇOS: -->
					<script type="text/javascript">
					$("#nome").on("input", function(){
					var letras_e_acentos = /[^a-zA-Záàâãéèêíïóôõöúçñ ]/g;
				  	if(this.value.match(letras_e_acentos)){
					$(this).val(this.value.replace(letras_e_acentos,''));
				  	}
					});
					</script>
        	</tr>
			<tr>
            	<td>
                Sobrenome:
            	</td>
            	<td>
                	<input id='sobrenome' name='sobrenome' type='text' maxlength="20" required>
				<!-- PERMITIR APENAS LETRAS, ACENTOS E ESPAÇOS: -->
						<script type="text/javascript">
						$("#sobrenome").on("input", function(){
						var letras_e_acentos = /[^a-zA-Záàâãéèêíïóôõöúçñ ]/g;
						if(this.value.match(letras_e_acentos)){
						$(this).val(this.value.replace(letras_e_acentos,''));
						}
						});
						</script>
         	   </td>
       		</tr>
			<tr>
           		<td>
                Data de nascimento:
            	</td>
            	<td>
               		<input name='nascimento' type='date' style="width: 170px;" required>
            	</td>
        	</tr>
			<tr>
           		<td>
                Sexo:
            	</td>
            	<td>
					<input type="radio" name='sexo' value='Masculino' required> Masculino </input>
					<input type="radio" name='sexo' value='Feminino'required> Feminino </input>
            	</td>
        	</tr>
			<tr>
            	<td>
                E-mail:
            	</td>
            	<td>
                	<input id='email' name='email' type='email' maxlength="30" required>
				<!-- PERMITIR APENAS CARACTERES DE E-MAIL: -->
						<script type="text/javascript">
						$("#email").on("input", function(){
						var caracteres_email = /[^0-9a-zA-Z!#$%&'*+-/=?^_`{|}~@. (),:;<>[\]]/g;
						if(this.value.match(caracteres_email)){
						$(this).val(this.value.replace(caracteres_email,''));
					  	}
						});
						</script>
            	</td>
			<tr>
           		<td>
                Número de celular (opcional):
            	</td>
            	<td>
               		<input id="celular" class="celular" name='celular' type='tel' placeholder="(??) 9 ????-????" pattern="(\([0-9]{2}\))\s([9]{1})\s([0-9]{4})-([0-9]{4})" title="Número de telefone precisa ser exatamente no formato (??) 9 ????-????." maxlength="16">
            	</td>
			<tr>
				<td>
				Cor preferida (opcional):
				</td>
				<td>
					<input name='cor' type='color' style="width: 170px;">
				</td>
        	</tr>
        	</tr>
        	<tr>
           		<td>
                Usuário:
            	</td>
            	<td>
              		<input name='usuario' type='text' maxlength="15" pattern="[a-zA-Z0-9_]+$" title="Digite apenas letras, números e underlines." required> 
            	</td>
        </tr>
        <tr>
            <td>
                Senha:
            </td>
            <td>
                <input name='senha' type='password' maxlength="10" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Tem que ter no mínimo 8 caracteres, um número, uma letra maiúscula e uma letra minúscula." required>
            </td>
        </tr>
		<tr>
			<td colspan=2>
				<center>
					<input type="submit" style="cursor: pointer; background-color:rgb(224, 146, 0); color: BLACK; border-color: rgb(104, 47, 0)" value="CADASTRAR">
				</center>
		</tr>
    </form>
</table>
<br>
<br>
</section>
<!-- FORMULÁRIO DE LOGIN: -->
<section id="LOGIN">
	<table border = 4px align='center' style="background-color: rgb(0, 17, 255); border-color: black; border-style: solid;">
    	<form name='Login' method="GET" action='Realizar login.php'>
			<tr>
				<td colspan=2>
					<center><b>LOGIN</b></center>
				</td>
			</tr>
       		<tr>
            	<td>
                Usuário:
            	</td>
           		<td>
                	<input name='usuario' type='text' maxlength="40">
           		</td>
        	</tr>
        	<tr>
            	<td>
                Senha:
            	</td>
            	<td>
               		<input name='senha' type='password' maxlength="10">
            	</td>
        	</tr>
			<tr>
				<td colspan=2>
					<center>
						<input type="submit" style="cursor: pointer; background-color: green; color: white; border-color: rgb(4, 48, 0)" value="LOGAR">
					</center>
				</td>
			</tr>
    	</form>
	</table>
</section>
<br>
<br>
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
						width: 1100px">
							<FONT
								style=
								"font-family: Arial Narrow, Arial; 
								color: white; 
								font-size: 12pt">
									<n>Login conectado ao banco de dados | Leandro Lacorte - Info 2B | (55) 9 9694 9865 | Copyright © 2021 - IFFar - Campus Júlio de Castilhos - Curso Técnico Integrado em Informática - v1.0</n>
					</td>
				</tr>
</body>
</html>