<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nome']) && isset($_POST['salario']) && isset($_POST['vendas'])) {

        $nome = $_POST['nome'];
        $salarioBase = floatval($_POST['salario']);
        $valorVendas = floatval($_POST['vendas']);

        $comissao = $valorVendas * 0.04;

        $salarioFinal = $salarioBase + $comissao;

        echo "<p>Nome do Funcionário: $nome</p>";
        echo "<p>Comissão (4% das vendas): R$ $comissao</p>";
        echo "<p>Salário Final: R$ $salarioFinal</p>";
    } else {
        echo "<p>Por favor, preencha todos os campos do formulário.</p>";
    }
}
?>
