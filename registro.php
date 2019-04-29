<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shorcut icon" href="assets/nome.png" type="img/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="registro.css">

    <title>Xadrezuny.top | Cadastre-se |</title>
  </head>
  <body style="background-color: #000;">
    <nav class="navbar navbar-dark navbar-expand-lg" style="background-color:#252525">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="assets/nomen.png" height="50" width="60" onMouseOver="this.src='assets/nome.png'" onMouseOut="this.src='assets/nomen.png'" class="img-fluid d-inline-block align-left" alt="Xadrezuny.top">Cadastre-se</a>
      </div>
    </nav>
    <center>
   <form class="formulario" method="post" action="page_principal.php" enctype="multpart/form-data" style="width: 60%;"> 
  <div class="form-row mt-3 text-white">
    <div class="col-md-4 mb-3">
      <label for="validationServer01"></label>
      <input style="border: solid white;" type="text" name="nome" class="form-control is-valid" id="validationServer01" placeholder="Nome" required>
      <div class="valid-feedback">
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServer02"></label>
      <input style="border: solid white;" type="text" name="sobrenome" class="form-control is-valid" id="validationServer02" placeholder="Sobrenome" required>
      <div class="valid-feedback">
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServerUsername"></label>
      <div class="input-group">
        <div class="input-group-prepend"> 
        </div>
        <input style="border-radius: 7px; border: solid white;" type="text" name="nome_do_usuario" class="form-control is-invalid" id="validationServerUsername" placeholder="Nome de usuário" aria-describedby="inputGroupPrepend3" required>
        <div class="invalid-feedback">
        </div>
      </div>
    </div>
  </div>
  <div class="form-row text-white">
    <div class="col-md-6 mb-3">
      <label for="validationServer03"></label>
      <input style="border: solid white; " type="Email" name="email" class="form-control is-invalid" id="validationServer03" placeholder="Email" required>
      <div class="invalid-feedback">
      </div>
    </div>
    <div class="col-md-3 mb-4">
      <label for="validationServer04"></label>
      <input style="border: solid white;" type="password" name="senha" class="form-control is-invalid" id="validationServer04" placeholder="Senha" required>
      <div class="invalid-feedback">
      </div>
    </div>
    <div class="col-md-3 mb-4">
      <label for="validationServer05"></label>
      <input style="border: solid white;" type="password" name="c_senha" class="form-control is-invalid" id="validationServer05" placeholder="Confirmar senha" required>
      <div class="invalid-feedback">
      </div>
    </div>
    <p style="margin-right: 20px;">&nbsp;&nbsp;&nbsp;Sexo</p>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="sexo" id="exampleRadios1" placeholder="M" value="M" required>
  <label class="form-check-label" for="exampleRadios1">
   <a>Masculino</a>&nbsp;&nbsp;&nbsp;
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio"  name="sexo" id="exampleRadios2" placeholder="F" value="F" required>
  <label class="form-check-label" for="exampleRadios2">
    <a>Feminino</a>
  </label>
</div>
  </div>
  
  <div class="col-md-4">
      <label for="validationServerUsername"></label>
      <div class="input-group">
        <div class="input-group-prepend"> 
        </div>
       </div>
       <br>
       <br>
        <img class="img-fluid" src="assets/digital.png" height="150" width="150" style="position:absolute; margin-top: -105px; margin-left: -77px;" >
        <input style="border-radius: 7px; border: solid white;" type="file" name="foto" class="form-control is-invalid mb-2" id="validationServerfoto" aria-describedby="inputGroupPrepend3">
        <div class="invalid-feedback"> 
        </div>
      </div>
    </div>
  </div>
  <a class="text-white">Nascimento</a>
  <div class="radio">
   
  <input style="border:solid white;border-radius: 7px;" type="date" name="nascimento" class="from-control is-invalid mb-2" required>

</div>
  <button class="btn btn-dark mt-2 mb-2" type="submit">Cadastrar</button>
</form><p class="text-white">Essas informações são sigilosas.</p>
</center>
  </body>
  </html>