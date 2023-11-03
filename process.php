<?php


session_start();

include_once("connection.php");
include_once("config/url.php");

  $data = $_POST;

  if(!empty($data)) {

    // Adicionar ecoponto
    if($data["type"] === "create") {

      $nome = $data["nome"];
      $endereco = $data["endereco"];
      $bairro = $data["bairro"];
      $telefone = $data["telefone"];
      $tipo = $data["tipo"];
      $observacao = $data["observacoes"];

      $query = "INSERT INTO ecopontos (nome, endereco, bairro, telefone, tipo, observacoes) VALUES (:nome, :endereco, :bairro, :telefone, :tipo, :observacoes)";

      $stmt = $conexao->prepare($query);

      $stmt->bindParam(":nome", $nome);
      $stmt->bindParam(":endereco", $endereco);
      $stmt->bindParam(":bairro", $bairro);
      $stmt->bindParam(":telefone", $telefone);
      $stmt->bindParam(":tipo", $tipo);
      $stmt->bindParam(":observacoes", $observacao);

      try {

        $stmt->execute();
        $_SESSION["msg"] = "Ecoponto cadastrado com sucesso!";
    
      } catch(PDOException $e) {
        $error = $e->getMessage();
        echo "Erro: $error";

      }
      //Atualizar ecoponto
    } else if($data["type"] === "edit") {

      $nome = $data["nome"];
      $endereco = $data["endereco"];
      $bairro = $data["bairro"];
      $telefone = $data["telefone"];
      $tipo = $data["tipo"];
      $observacao = $data["observacoes"];
      $id = $data["id"];

      $query = "UPDATE ecopontos 
                SET nome = :nome, endereco = :endereco, bairro = :bairro, telefone = :telefone, tipo = :tipo, observacoes = :observacoes 
                WHERE id = :id";

      $stmt = $conexao->prepare($query);

      $stmt->bindParam(":nome", $nome);
      $stmt->bindParam(":endereco", $endereco);
      $stmt->bindParam(":bairro", $bairro);
      $stmt->bindParam(":telefone", $telefone);
      $stmt->bindParam(":tipo", $tipo);
      $stmt->bindParam(":observacoes", $observacao);
      $stmt->bindParam(":id", $id);

      try {

        $stmt->execute();
        $_SESSION["msg"] = "Ecoponto atualizado com sucesso!";
    
      } catch(PDOException $e) {
        $error = $e->getMessage();
        echo "Erro: $error";
      }
      //Excluir ecoponto
    } else if($data["type"] === "delete") {

      $id = $data["id"];

      $query = "UPDATE ecopontos SET status_exclusao = 'excluido' WHERE id = :id";

      $stmt = $conexao->prepare($query);
      $stmt->bindParam(":id", $id);
      
      try {

        $stmt->execute();
        $_SESSION["msg"] = "Ecoponto removido com sucesso!";
    
      } catch(PDOException $e) {
        $error = $e->getMessage();
        echo "Erro: $error";
      }

    }

    // Redirect HOME
    header("Location:" . $BASE_URL . "index.php");

  // Exibe detalhes do ecoponto
  } else {
    
    $id;

    if(!empty($_GET)) {
      $id = $_GET["id"];
    }

    if(!empty($id)) {

      $query = "SELECT * FROM ecopontos WHERE id = :id";

      $stmt = $conexao->prepare($query);

      $stmt->bindParam(":id", $id);
      $stmt->execute();

      $ecopontos = $stmt->fetch();

      // Retorna todos os ecopontos ativos
    } else {

      $ecopontos = [];

      $query = "SELECT * FROM ecopontos WHERE status_exclusao = 'ativo'";

      $stmt = $conexao->prepare($query);
      $stmt->execute();
      
      $ecopontos = $stmt->fetchAll();

    }

  }

  // Fecha a conexão
  $conexao = null;
