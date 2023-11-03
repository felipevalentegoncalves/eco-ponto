<?php
  include_once("templates/header.php");

?>
  <div class="container">
    <?php if(isset($printMsg) && $printMsg != ''): ?>
      <p id="msg"><?= $printMsg ?></p>
    <?php endif; ?>
    <h1 id="main-title">Ecopontos Curitiba</h1>
    <?php if(count($ecopontos) > 0): ?>
      <table class="table" id="contacts-table">
        <thead>
          <tr>
            <th scope="col">Ecoponto</th>
            <th scope="col">Endereço</th>
            <th scope="col">Bairro</th>
            <th scope="col">Tipo</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($ecopontos as $ecoponto): ?>
            <tr>
              <td scope="row"><?= $ecoponto["nome"] ?></td>
              <td scope="row"><?= $ecoponto["endereco"] ?></td>
              <td scope="row"><?= $ecoponto["bairro"] ?></td>
              <td scope="row"><?= $ecoponto["tipo"] ?></td>
              <td class="actions">
                <a href="<?= $BASE_URL ?>show.php?id=<?= $ecoponto["id"] ?>"><i class="fas fa-eye check-icon"></i></a>
                <a href="<?= $BASE_URL ?>edit.php?id=<?= $ecoponto["id"] ?>"><i class="far fa-edit edit-icon"></i></a>
                <form class="delete-form" action="<?= $BASE_URL ?>/process.php" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?');">
                  <input type="hidden" name="type" value="delete">
                  <input type="hidden" name="id" value="<?= $ecoponto["id"] ?>">
                  <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                </form>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php else: ?>  
      <p id="empty-list-text">Ainda não há ecopontos cadastrados, <a href="<?php $BASE_URL ?>create.php">clique aqui para adicionar</a>.</p>
    <?php endif; ?>
  </div>
<?php
  include_once("templates/footer.php");
?>