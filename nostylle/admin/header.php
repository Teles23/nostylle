
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 text-white bg-dark pt-3">
                <h2 >Olá <?php echo $_SESSION['nome']; ?></h2>
                <p><a href="?sair">Deslogar</a></p>
                <ul class="nav flex-column">
                  <!--   <li class="nav-item">
                        <a href="" class="nav-item">Dashboard</a>
                    </li> -->
                    <li class="nav-item">
                        <a href="insert.php" class="nav-item">Inserir</a>
                    </li>
                </ul>
            </nav>
    </div>
</div>
</body>
</html>