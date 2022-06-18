<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No stylle</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title></title>
    <!-- css -->
    <link rel=icon href ="img/logo.jpg" >
    <link rel="stylesheet" href="css/style.css">
    
</head>

<body>
	
	<header>
		<div class="header container">
			<a href="#">
				<img src="images/log.png"style="border-radius: 20%;" alt="logo do site" class="header-logo"></a>
			<nav class="header-nav">
				<ul class="flex-center">
					<li>
						<a href="#">Home</a>
					</li>
					<li>
						<a href="#">Segmentos</a>
					</li>
					<li>
						<a href="#">Contato</a>
					</li>
					
				</ul>
			</nav>
			<div class="header-login">
				<ul class="flex-center">
					
					<a href="#"><button type="button">Login</button></a>

					
						<a href="admin/index.php" style="margin-left: 70px;"><button class="btn btn-outline-warning">Login Administrativo</button></a>
				<a href="" style="margin-left: 80px;">	<i class="fa-solid fa-hands"></i></a>
				</ul>

			</div>
		</div>
	</header>

	<section class="video" style="margin: 40px 0;">
        <div class="banner">
            <video autoplay muted loop>
                <source src="img/video.mp4" type="video/mp4">
            </video>
            <div class="content">
				<h1>Agendamento<br> e gestão para<br>negócios de<br> beleza</h1>
				<div class="textslide">
                <p>Nós acreditamos que a relação com o cliente é o ativo mais  precioso de qualquer negócio de sucesso. Experimente No Stylle  para profissionais da beleza e aprimore a experiência dos seus clientes.</p>
                </div>
            </div>
        </div>
	</section>
	<section class="conteudo" style="padding-top: 120px;">
		<h1 style="text-align:center;">Para quem é nosso serviço</h1> <br/>
		<div class="container">
		     <div class="card-group">
		      	<div class="card">
		        	<img class="card-img-top" src="images/barber.png" alt="barber" style="width:100%">
		        	<div class="card-body">
		          		<h5 class="card-title">Barberia</h5>
		          		<p style="color: black ;" class="card-text">Aqui barba, cabelo e bigode são nossas especialidades!</p>
		          		<p class="card-text"><small class="text-muted"></small></p>
		        	</div>
		      </div>
		      <div class="card">
		        <img class="card-img-top" src="images/sal.png" alt="salao" style="width:100%">
		        <div class="card-body">
		          <h5 class="card-title">Salão de Beleza</h5>
		          <p class="card-text" style="color: black ;">Cada detalhe foi pensado para tornar sua experiência melhor!</p>
		          <p class="card-text"><small class="text-muted"></small></p>
		        </div>
		      </div>
		      <div class="card">
		        <img class="card-img-top" src="images/spa.png" alt="spa" style="width:100%">
		        <div class="card-body">
		          <h5 class="card-title">SPA</h5>
		          <p class="card-text"style="color: black" ;>Eleve sua autoestima!</p>
		          <p class="card-text"><small class="text-muted"></small></p>
		        </div>
		      </div>
		    </div>
		</div>
	</section>
	<div class="container2"> <br>
		 <h1> Inscreva-se para mais informações </h1><br>
		 <h2> obtenha mais informações e recursos <br>
		      inserindo seu e-mail aqui</h2>
		      <form>
		      	<input type="e-mail" placeholder="Digite seu e-mail">
		      	<button type="submite">Inscreva-se</button>
		      </form>
	</div>
	 <footer class="p-5">
	    <div class="container">
	      <p class="float-end mb-1">
	        <a href="#">Topo</a>
	    </p>
	      <table width="90%" >
	      	<thead>
		      	<tr>
		      		<th> No Stylle </th>
		      		<th> Segmentos </th>
		      		<th> Redes Sociais </th>
		      	</tr>
	      	</thead>

	      	<tbody >
		      	<tr >
		      		<td><a href="#">A plataforma completa para gestao de negócios de beleza!</a></td>
		      		<td><a href="#">Barbearia</a></td>
		      		<td><a href="#">Email</a></td>
		      	</tr>
		      	<tr>
		      		<td></td>
		      		<td><a href="#">Salão de Beleza</a></td>
		      		<td><a href="#">Facebook</a></td>
	      	</tr>
	      	</tbody>
	      </table>
	  </div>
	  </footer>
</body>
</html>
