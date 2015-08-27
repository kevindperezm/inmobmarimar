<!DOCTYPE html>
<html>
<head>
  <style>
  .container, .message {
    color: #666;
    padding: 1em;
    border-radius: 3px;
  '}

  container {
    width: 95%;
    margin: 0 auto;
    border: 1px solid #AAA;
    box-shadow: 0 2px 2px 1px #AAA;
  }

  message {
    font-family: serif;
    border: 1px solid #EEE;
  }
  </style>
</head>
<body>
  <div class="container">';
  <h1>Nueva solicitud de contacto</h1>
  <p>
    Alguien ha enviado un mensaje usando el
    formulario de contacto de
    <a href="http://www.inmobiliariamarimar.com">Inmobiliaria Marimar</a>.
    Puede responder a este mensaje para contestar a <?= $contact['name'] ?>.
  </p>
  <p>
    <b>Enviado en: </b><?= date('d/m/Y H:i:s') ?><br>
    <b>Nombre: </b><?= $contact['name'] ?><br>
    <b>Telefono: </b><?= $contact['telefono'] ?>}<br>
    <b>Email: </b>
    <a href="mailto:<?= $contact['email'] ?>"><?= $contact['email'] ?></a><br>
  </p>
  <p>
    <b>Mensaje: </b>
  </p>
  <p class="message">
    <?= $contact['text'] ?>
  </p>
  </div>
</body>
</html>

