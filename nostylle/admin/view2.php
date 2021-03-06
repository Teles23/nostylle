<?php
    include('../config/connection.php');
    include('session.php');
    $stmt = $conectar->prepare("SELECT * FROM posts  ORDER BY id");

    $stmt->execute();

    $results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
	<title>Visualizar Posts</title>
</head>
<body>
	<?php include 'header.php'?>

	<main class="col-md-9 col-lg-10">
	            <div class="container">
	                <h1 id="main-title">Cadastros</h1>
	                <table class="table" id="contacts-table">
	                        <thead>
	                            <tr>
	                                <th scope="col">Nome</th>
	                                <th scope="col">Estabelecimento</th>
	                                <th scope="col">Data de Contratação</th>
	                                <th scope="col">Ações</th>
								</tr>
							</thead>
							<tbody >
								<?php foreach($results as $post): ?>
									<tr>
										<td scope="row"><?= $post["title"] ?></td>
										<td scope="row"><?= $post["description"] ?></td>
										<td scope="row"><?= $post["data"] ?></td>
										<td class="actions">
											<a href="viewBlog.php?id=<?= $post["id"] ?>" alt="Ver">
												<i class="fas fa-eye check-icon"></i>
											</a>
											<a href="editar.php?id=<?= $post["id"] ?>">
												<i class="fa-solid fa-pencil"></i>
											</a>
											<a href="delete.php?id=<?= $post["id"] ?>">
												<i class="fa-solid fa-trash-can"></i>
											</a>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
	</main>
</body>
</html>

