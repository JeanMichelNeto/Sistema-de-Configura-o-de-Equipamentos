<?php
include("conexao.php");

    $RotaID = $_GET['edit'];
    $query = " select * from rota where idrota='".$RotaID."'";
    $result = mysqli_query($conexao,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $RotaID = $row['idrota'];
        $Descr = $row['descricao'];
        $Pinicial = $row['pontoini'];
        $Pfinal = $row['pontofim'];
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <link rel="icon" href="img/logo.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>



        <title>Administrativo - NeoTech</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <link href="css/theme.css" rel="stylesheet">
        <script src="js/ie-emulation-modes-warning.js"></script>
        <style>
      #mapa {
        height:800px;
        width:1200px;
      }
    </style>
    </head>
    <body role="document">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="img/logo.png" width="100" id="dashboard">
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Usuários<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                            <li><a href="cadastro.php">Novo</a></li>
                            <li><a href="edit_user.php">Gerenciar</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Rotas<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                            <li><a href="rotas.php">Novo</a></li>
                            <li><a href="edit_rota.php">Gerenciar</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Equipamentos<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="equipamentos.php">Novo</a></li>
                            <li><a href="edit_equip.php">Gerenciar</a></li>
                        </ul>
                        <li><a href="configuracao.php">Configuração</a></li>
                        <li><a href="logout.php">Sair</a></li>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
         <body class="bg-dark">

        <div class="container">
            <div class="row"	>
                <div class="m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Editar Rotas</h3>
                        </div>
                        <div class="card-body">

                            <form action="update_rota.php?ID=<?php echo $RotaID ?>" method="post">
                                <label>Descrição</label>
                                <input type="text" class="form-control mb-2" placeholder=" Descrição " name="descricao" value="<?php echo $Descr ?>">
                                <label>Ponto Inicial</label>
                                <input type="text" class="form-control mb-2" placeholder=" Ponto Inicial " name="pontoini" value="<?php echo $Pinicial ?>">
                                <label>Ponto Final</label>
                                <input type="text" class="form-control mb-2" placeholder=" PontoFinal " name="pontofim" value="<?php echo $Pfinal ?>">
                                <br>
                                <button class="btn btn-primary" name="update">Editar</button>
                                <input type="button" class="btn btn-primary" value="Voltar" onClick="history.go(-1)"> 
                            </form>
                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>