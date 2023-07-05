<?php
    require_once 'conn.php';

// Buscar os itens da tabela bordas
$stmt = $conn->query("SELECT * FROM bordas");
$bordas = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Buscar os itens da tabela massas
$stmt = $conn->query("SELECT * FROM massas");
$massas = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Buscar os itens da tabela sabores
$stmt = $conn->query("SELECT * FROM sabores");
$sabores = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Verificar se foi submetido um formulário de atualização das bordas
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     // Verificar se foi submetido um formulário de inserção de borda
    if (isset($_POST['add_borda'])) {
        $tipo = $_POST['borda_tipo'];

        // Inserir a nova borda no banco de dados
        $stmt = $conn->prepare("INSERT INTO bordas (tipo) VALUES (:tipo)");
        $stmt->bindParam(':tipo', $tipo);
        $stmt->execute();

        // Exibir mensagem de sucesso
        $_SESSION["msg"] = "Borda inserida com sucesso";
        $_SESSION["status"] = "success";

        // Redirecionar para evitar o reenvio do formulário
        header("Location: general.php");
        exit();
    }

    // Verificar se foi submetido um formulário de inserção de massa
    if (isset($_POST['add_massa'])) {
        $tipo = $_POST['massa_tipo'];

        // Inserir a nova massa no banco de dados
        $stmt = $conn->prepare("INSERT INTO massas (tipo) VALUES (:tipo)");
        $stmt->bindParam(':tipo', $tipo);
        $stmt->execute();

        // Exibir mensagem de sucesso
        $_SESSION["msg"] = "Massa inserida  com sucesso";
        $_SESSION["status"] = "success";


        // Redirecionar para evitar o reenvio do formulário
        header("Location: general.php");
        exit();
    }

    // Verificar se foi submetido um formulário de inserção de sabor
    if (isset($_POST['add_sabor'])) {
        $nome = $_POST['sabor_nome'];

        // Inserir o novo sabor no banco de dados
        $stmt = $conn->prepare("INSERT INTO sabores (nome) VALUES (:nome)");
        $stmt->bindParam(':nome', $nome);
        $stmt->execute();

        // Exibir mensagem de sucesso
        $_SESSION["msg"] = "Sabor inserido com sucesso";
        $_SESSION["status"] = "success";


        // Redirecionar para evitar o reenvio do formulário
        header("Location: general.php");
        exit();
    }

    // Verificar se foi submetido um formulário de atualização das bordas
    if (isset($_POST['update_borda'])) {
        $id = $_POST['borda_id'];
        $tipo = $_POST['borda_tipo'];

        // Atualizar a borda no banco de dados
        $stmt = $conn->prepare("UPDATE bordas SET tipo = :tipo WHERE id = :id");
        $stmt->bindParam(':tipo', $tipo);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        // Exibir mensagem de sucesso
        $_SESSION["msg"] = "item atualizado com sucesso";
        $_SESSION["status"] = "success";

        // Redirecionar para evitar o reenvio do formulário
        header("Location: general.php");
        exit();
    }

    // Verificar se foi submetido um formulário de atualização das massas
    if (isset($_POST['update_massa'])) {
        $id = $_POST['massa_id'];
        $tipo = $_POST['massa_tipo'];

        // Atualizar a massa no banco de dados
        $stmt = $conn->prepare("UPDATE massas SET tipo = :tipo WHERE id = :id");
        $stmt->bindParam(':tipo', $tipo);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        // Exibir mensagem de sucesso
        $_SESSION["msg"] = "item atualizado com sucesso";
        $_SESSION["status"] = "success";

        // Redirecionar para evitar o reenvio do formulário
        header("Location: general.php");
        exit();
    }

    // Verificar se foi submetido um formulário de atualização dos sabores
    if (isset($_POST['update_sabor'])) {
        $id = $_POST['sabor_id'];
        $nome = $_POST['sabor_nome'];

        // Atualizar o sabor no banco de dados
        $stmt = $conn->prepare("UPDATE sabores SET nome = :nome WHERE id = :id");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        // Exibir mensagem de sucesso
        $_SESSION["msg"] = "item atualizado com sucesso";
        $_SESSION["status"] = "success";

        // Redirecionar para evitar o reenvio do formulário
        header("Location: general.php");
        exit();
    }

     // Verificar se foi submetido um formulário de deleção das bordas
    if (isset($_POST['delete_borda'])) {
        $id = $_POST['borda_id'];

        // Deletar a borda do banco de dados
        $stmt = $conn->prepare("DELETE FROM bordas WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

         // Exibir mensagem de sucesso
        $_SESSION["msg"] = "item deletado com sucesso";
        $_SESSION["status"] = "success";

        // Redirecionar para evitar o reenvio do formulário
        header("Location: general.php");
        exit();
    }


    // Verificar se foi submetido um formulário de deleção das massas
    if (isset($_POST['delete_massa'])) {
        $id = $_POST['massa_id'];

        // Deletar a massa do banco de dados
        $stmt = $conn->prepare("DELETE FROM massas WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        // Exibir mensagem de sucesso
        $_SESSION["msg"] = "item deletado com sucesso";
        $_SESSION["status"] = "success";

        // Redirecionar para evitar o reenvio do formulário
        header("Location: general.php");
        exit();
    }

    // Verificar se foi submetido um formulário de deleção dos sabores
    if (isset($_POST['delete_sabor'])) {
        $id = $_POST['sabor_id'];

        // Deletar o sabor do banco de dados
        $stmt = $conn->prepare("DELETE FROM sabores WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        // Exibir mensagem de sucesso
        $_SESSION["msg"] = "item deletado com sucesso";
        $_SESSION["status"] = "success";

        // Redirecionar para evitar o reenvio do formulário
        header("Location: general.php");
        exit();
      }
}
?>
