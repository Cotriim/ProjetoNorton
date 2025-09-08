<?PHP
include "Usuario.php";
include "Conexao.php";
include "UsuarioDAO.php";

$msg = "";

if (!empty($_POST)){
    $objeto = new Usuario();
    $objeto->set("crm", $_POST["crm"]);
    $objeto->set("cpf", $_POST["cpf"]);
    $objeto->set("nome", $_POST["nome"]);
    $objeto->set("rua", $_POST["rua"]);
    $objeto->set("bairro", $_POST["bairro"]);
    $objeto->set("cidade", $_POST["cidade"]);
    $objeto->set("cep", $_POST["cep"]);
    
    //Percorre a Variável Global $_POST
    foreach($_POST as $chave=>$campo) {
        if($campo == "Cadastrar"){
            $msg = $objeto->cadastrar();
        }

        if($campo=="Alterar"){
            $msg = $objeto->alterar();
        }

        if($campo=="Excluir"){
            $msg = $objeto->excluir();
        }
    }
    
} 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/telaUsuario.css?v=3">
        <script src="biblioteca.js"></script>
    </head>
    <body>
        <section class="form">
        <form id="frmRota" method="post" action="" >
            CRM: <input type="text" name="crm" id="crm"><br>
            CPF: <input type="text" name="cpf" id="cpf"><br>
            Nome: <input type="text" name="nome" id="nome"><br>
            Rua: <input type="text" name="rua" id="rua"><br>
            Bairro: <input type="text" name="bairro" id="bairro"><br>
            Cidade: <input type="text" name="cidade" id="cidade"><br>
            CEP: <input type="text" name="cep" id="cep"><br>
            
            <div class="button-container">
                <input name="Cadastrar" id="Cadastrar" type="submit" value="Cadastrar">
            </div>
        </form>
        </section>

            <table id='tbl'>
                <tr>
                    <th>CRM</th>
                    <th>CPF</th>
                    <th>Nome</th>
                    <th>Rua</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>CEP</th>
                    <th><img src="assets/check.svg" alt="Alterar" width="24" height="24"></th>
                    <th><img src="assets/close.svg" alt="Excluir" width="24" height="24"></th>
                </tr>
            <?php
                $objeto2 = new Usuario();
                if ($objeto2->consultar() != null){ 
                        foreach ($objeto2->consultar() as $valor) {
                        //escreve as linhas da tabela com valor na coluna
                        echo "<tr>";
                        echo "<td>" . $valor["crm"] . "</td>";
                        echo "<td>" . $valor["cpf"]  . "</td>";
                        echo "<td>" . $valor["nome"] . "</td>";
                        echo "<td>" . $valor["rua"]  . "</td>";
                        echo "<td>" . $valor["bairro"] . "</td>";
                        echo "<td>" . $valor["cidade"]  . "</td>";
                        echo "<td>" . $valor["cep"] . "</td>";
                        echo "<th><img src='assets/check.svg' alt='alterar' width='24' height='24' onclick='editar(this)'></th>";
                        echo "<th><img src='assets/close.svg' alt='Excluir' width='24' height='24' onclick='excluir(this)'></th>";
                        echo "</tr>";
                        }
                    }  
            ?>
            </table>
    </body>
</html>
