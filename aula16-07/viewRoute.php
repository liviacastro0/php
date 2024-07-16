
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    include_once ("route.php");
    if (!empty($_POST['form_submit'])) {
        rotas($_POST['acao']);
    }
    ?>

<!DOCTYPE html>
    <html lang="en">

    <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                <title>Document</title>
</head >
                <body>
                    <form action="viewRoute.php" method="post">
                        <input TYPE="hidden" NAME="form_submit" VALUE="OK">
                            <div class='col-sm-4'>
                                <button type="submit" name="acao" value="cadastrar/0" class="btn btn-outline-primary">
                                    <b>Cadastrar</b> </button>
                            </div>
                            <div class='col-sm-4'>
                                <button type="submit" name="acao" value="alterar/1" class="btn btn-success
btn-block">
                                    <b>Alterar</b> </button>
                            </div>
                            <div class='col-sm-4'>
                                <button type="submit" name="acao" value="remover/2" class="btn btn-danger
btn-block">
                                    <b>Remover</b> </button>
                            </div>
                    </form>
                </body>
</html >
</body >
</html >