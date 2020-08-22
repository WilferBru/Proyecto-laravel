 <!DOCTYPE html>
 <html lang="es">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.6">
  <link rel="stylesheet" href="./bootstrap/css/bootstrap2.min.css">
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="favicon/site.webmanifest">
  <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="favicon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  <script src="./bootstrap/js/jquery2.min.js"></script>
  <script src="./bootstrap/js/bootstrap2.min.js"></script>
  <style type="text/css">
  #regiration_form fieldset:not(:first-of-type) {
    display: none;
  }
  </style>
  <title>Institucion Señora del Carmen</title>
</head>
<body>
<div class="container">
<center><img style="margin-top: 30px;" src="img/señoraDelCarmen.jpg" width="200" height="200"></center>
<h1 style="text-align: center;">INSTITUCION EDUCATIVA NUESTRA SEÑORA DEL CAMEN</h1>
<h2 style="margin-top: 50px; text-align: center;">Su solicitud a sido enviada correctamente</h2>

{{-- <a href="{{'/home'}}">Listos</a> --}}


<footer style="margin-top: 100px;">
  <div class='alert alert-info' role='alert'><center><p style="text-align: center;"><b>Nota:</b> Este formulario solo puede ser realizado una sola vez, ¡Gracias!</p></center></div>
</footer>
</div>
</body><br><br>
</html>
<script type="text/javascript">
$(document).ready(function(){
  var current = 1,current_step,next_step,steps;
  steps = $("fieldset").length;
  $(".next").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().next();
    next_step.show();
    current_step.hide();
    setProgressBar(++current);
  });
  $(".previous").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().prev();
    next_step.show();
    current_step.hide();
    setProgressBar(--current);
  });
  setProgressBar(current);
  // Change progress bar action
  function setProgressBar(curStep){
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
      .css("width",percent+"%")
      .html(percent+"%");   
  }
});
</script>