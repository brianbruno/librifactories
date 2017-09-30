<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="source/empresa/style.css" media="screen,projection" />
    <title>Libri Factories</title>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <!-- CABEÇALHO -->
    <? require('source/templates/header.php'); ?>
    <!-- FIM DO CABEÇALHO -->
    <div id="corpo" class="container">    
            <h1>Realizar login</h1>
            <div class="row">
                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="icon_prefix" type="email" class="validate">
                      <label for="icon_prefix">Email</label>
                    </div>
                    <div class="input-field col s12">
                      <i class="material-icons prefix">vpn_key</i>
                      <input id="icon_telephone" type="password" class="validate">
                      <label for="icon_telephone">Senha</label>
                    </div>
                  </div>
                    <a class="waves-effect waves-light teal darken-4 btn-large">Login</a>
                </form>
              </div>
    </div>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script> 

</body>
</html>
