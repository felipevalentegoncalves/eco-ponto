<?php
  include_once("templates/header.php");
?>
  <div class="container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Editar Ecoponto</h1>
    <form id="create-form" action="<?= $BASE_URL ?>process.php" method="POST">
      <input type="hidden" name="type" value="edit">
      <input type="hidden" name="id" value="<?= $ecopontos['id'] ?>">
      <div class="form-group">
        <label for="nome">Nome do Ecoponto:</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome" value="<?= $ecopontos['nome'] ?>" required>
      </div>
      <div class="form-group">
        <label for="endereco">Endereço:</label>
        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o endereço" value="<?= $ecopontos['endereco'] ?>" required>
      </div>
      <div class="form-group">
        <label for="telefone">Bairro:</label>
        <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite o bairro" value="<?= $ecopontos['bairro'] ?>" required>
      </div>
      <div class="form-group">
        <label for="telefone">Telefone:</label>
        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o telefone" value="<?= $ecopontos['telefone'] ?>" required>
      </div>
      <div class="form-group">
        <label for="tipo">Tipo de resíduos aceitos:</label>
        <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Digite o tipo de resíduos" value="<?= $ecopontos['tipo'] ?>" required>
      </div>
      <div class="form-group">
        <label for="observacoes">Observações:</label>
        <textarea type="text" class="form-control" id="observacoes" name="observacoes" placeholder="Insira as observações" rows="3"><?= $ecopontos['observacoes'] ?></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
  </div>
<?php
  include_once("templates/footer.php");
?>