<?php
  include_once("templates/header.php");
?>
  <div class="container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Adicionar Ecoponto</h1>
    <form id="create-form" action="<?= $BASE_URL ?>process.php" method="POST">
      <input type="hidden" name="type" value="create">
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome" required>
      </div>
      <div class="form-group">
        <label for="endereco">Endereço:</label>
        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o endereço" required>
      </div>
      <div class="form-group">
        <label for="bairro">Bairro:</label>
        <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite o bairro" required>
      </div>
      <div class="form-group">
        <label for="telefone">Telefone:</label>
        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o telefone" required>
      </div>
      <div class="form-group">
        <label for="tipo">Tipo de resíduo:</label>
        <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Digite o tipo de resíduo aceito" required>
      </div>
      <div class="form-group">
        <label for="observacao">Observações:</label>
        <textarea type="text" class="form-control" id="observacoes" name="observacoes" placeholder="Insira as observações" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
  </div>
<?php
  include_once("templates/footer.php");
?>