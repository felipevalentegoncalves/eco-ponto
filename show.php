<?php include_once("templates/header.php") ?>
  <div class="container" id="view-contact-container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title"><?= $ecopontos["nome"] ?></h1>

    <p><strong>Endereço: </strong><?= $ecopontos["endereco"] ?></p>

    <p><strong>Bairro: </strong><?= $ecopontos["bairro"] ?></p>

    <p><strong>Complemento: </strong><?= $ecopontos["complemento"] ?></p>

    <p><strong>Regional: </strong><?= $ecopontos["regional"] ?></p>

    <p><strong>Tipo de Resíduos aceitos: </strong><?= $ecopontos["tipo"] ?></p>

    <p><strong>Período de Funcionamento: </strong><?= $ecopontos["periodo_funcionamento"] ?></p>

    <p><strong>Telefone: </strong><?= $ecopontos["telefone"] ?></p>

    <p><strong>E-mail: </strong><?= $ecopontos["email"] ?></p>

    <p><strong>Observações: </strong><?= $ecopontos["observacoes"] ?></p>
  </div>
<?php include_once("templates/footer.php") ?>