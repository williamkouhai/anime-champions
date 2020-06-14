     <?php//CONTROLE DE SESSÃO PRA VER SE ESTÁ LOGADO
          session_start();
      include 'verificar_login.php';
     ?>
<!DOCTYPE html>
<!-- saved from url=(0052)https://colorlib.com/etc/regform/colorlib-regform-6/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Colorlib Templates">
<meta name="author" content="Colorlib">
<meta name="keywords" content="Colorlib Templates">

<title>form</title>

<link href="./form_files/css" rel="stylesheet">

<link href="./form_files/main.css" rel="stylesheet" media="all">
</head>
<body>
<div class="page-wrapper bg-dark p-t-100 p-b-50">
<div class="wrapper wrapper--w900">
<div class="card card-6">
<div class="card-heading">
<h2 class="title">Votação de Lutador</h2>
</div>

<div class="card-body">

  <form action="./votar_lutador.php" method="POST">
<div class="form-row">
<div id="nome" class="name">Nome do Lutador</div>
<div class="value">
<input class="input--style-6" type="text" name="nome" autocomplete="off" required>
</div>
</div>



<div class="form-row">
  <div class="name">Nota</div> 
  <div class="value">
  <div class="input-group">
    <input class="input--style-6" type="number" name="nota" min="0" max="10" autocomplete="off" required> 
  </div>
  </div>
  </div>

  <div class="form-row">
    <div class="name">Semestre</div> 
    <div class="value">
    <div class="input-group">
      <input class="input--style-6" type="number" name="mes" min="1" max="2" autocomplete="off" required> 
    </div>
    </div>
    </div>
    
</div>
<div class="card-footer">
<button class="btn btn--radius-2 btn--blue-2" type="submit" name="submit">Votar</button>

</form>

</div>
</div>
</div>
</div>

<script type="text/javascript" async="" src="./form_files/analytics.js.download"></script><script src="./form_files/jquery.min.js.download" type="text/javascript"></script>

<script src="./form_files/global.js.download" type="text/javascript"></script>

<script async="" src="./form_files/js" type="text/javascript"></script>
<script type="text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>


<style>.GSm1yl5YohaAR5tByUDB { color:#2e2e2e !important; } 
.GSm1yl5YohaAR5tByUDB.ba-outline { outline-color:#2e2e2e } 
.GSm1yl5YohaAR5tByUDB.Iehc4j0Dhyuy:hover, .GSm1yl5YohaAR5tByUDB.Iehc4j0Dhyuy.active { color:#6e2424 !important; }
.jWjoLE1IyCTaAQ3JsQ { background-color:#2e2e2e !important; }
.jWjoLE1IyCTaAQ3JsQ.Iehc4j0Dhyuy:hover, .jWjoLE1IyCTaAQ3JsQ.Iehc4j0Dhyuy.active { background:#6e2424 !important; }
.ba-border-primary { border-color:#6e2424 !important }
.c00tqofrnwA1D9jWco { background:#6e2424 !important; color:white !important; }
.c00tqofrnwA1D9jWco.Iehc4j0Dhyuy:hover, .c00tqofrnwA1D9jWco.Iehc4j0Dhyuy.active { background:#6e2424 !important; }
.ba-color-secondary { color:#6e2424 !important;  }
.ba-color-secondary.Iehc4j0Dhyuy:hover, .ba-color-secondary.Iehc4j0Dhyuy.active { color:#6e2424 !important; }
.ba-color-tertiary { color:#b32222 !important }
.ba-color-tertiary.Iehc4j0Dhyuy:hover, .ba-color-tertiary.Iehc4j0Dhyuy.active { color:#420f0f !important }
.yHefS0vxHyCEs6i { background:#b32222 !important }
.ba-bg-tertiary.Iehc4j0Dhyuy:hover, .ba-bg-tertiary.Iehc4j0Dhyuy.active { background:#420f0f !important }</style></body><evlist></evlist></html>