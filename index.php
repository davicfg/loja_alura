<?php include("cabecalho.php"); ?>
	<?php
		if(isset($_GET['login']) && $_GET['login']==1){
			echo "<p class='alert-success'>Login efetuado com orgulho!</p>";
		}else {
			echo "<p class='alert-danger'>Deu errado!</p>";
		}
	?>			
	<h1>Bem vindo!</h1>
	<h2>Login</h2>
	<form action="login.php" method="post">
		<table class="table">
			<tr>
				<td>Email</td>
				<td><input class="form-control" type="email" name="email"></td>
			</tr>
			<tr>
				<td>Senha</td>
				<td><input class="form-control" type="password" name="senha"></td>
			</tr>
			<tr>
				<td><button type="submit" class="btn btn-primary">Login</button></td>
			</tr>
		</table>
	</form>
<?php include("rodape.php"); ?>			


