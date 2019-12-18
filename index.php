<?php 
    session_start();
    require_once('conteudo-fixo/header.php');
    require_once('conteudo-fixo/header.php');
?>

    <section>
        <div class="container-fluid">
            <h2 class="titulo">Cadastro de Pessoas</h2>
            <form action="models/insert.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="campo">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" id="nome" required>
                        </div>
                        <div class="campo">
                            <label for="cpf">CPF</label>
                            <input type="text" name="cpf" id="cpf" required>
                        </div>
                        <?php
                            if(isset($_SESSION['msg'])){
                                echo $_SESSION['msg'];
                                unset($_SESSION['msg']);
                            }
                        ?>
                    </div>
                    <div class="col-md-6">
                        <table class="table text-center table-striped">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Telefone</th>
                                    <th scope="col">Descrição Telefone</th>
                                </tr>
                            </thead>
                            <tbody class="tbl">
                                <tr>
                                    <td><input type="tel" name="telefone[]" class="telefone-contato" placeholder="Digite um telefone aqui"></td>
                                    <td><input type="text" name="tipo[]" class="tipo-telefone" placeholder="Digite o tipo do telefone"></td>
                                </tr>
                                <tr>
                                    <td><input type="tel" name="telefone[]" class="telefone-contato" placeholder="Digite um telefone aqui"></td>
                                    <td><input type="text" name="tipo[]" class="tipo-telefone" placeholder="Digite o tipo do telefone"></td>
                                </tr>
                                <tr>
                                    <td><input type="tel" name="telefone[]" class="telefone-contato" placeholder="Digite um telefone aqui"></td>
                                    <td><input type="text" name="tipo[]" class="tipo-telefone" placeholder="Digite o tipo do telefone"></td>
                                </tr>
                                <tr>
                                    <td><input type="tel" name="telefone[]" class="telefone-contato" placeholder="Digite um telefone aqui"></td>
                                    <td><input type="text" name="tipo[]" class="tipo-telefone" placeholder="Digite o tipo do telefone"></td>
                                </tr>
                                <tr>
                                    <td><input type="tel" name="telefone[]" class="telefone-contato" placeholder="Digite um telefone aqui"></td>
                                    <td><input type="text" name="tipo[]" class="tipo-telefone" placeholder="Digite o tipo do telefone"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <input type="submit" class="btnSubmit" value="Gravar">
            </form>
            <hr>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <h2 class="titulo">Dados Gravados</h2>
            <div class="row">
                <div class="col-md-6">
                    <table class="table text-center table-striped">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">CPF</th>
                                <th scope="col">Telefone - Descrição</th>
                            </tr>
                        </thead>
                        <tbody id="tabela"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
     

<?php require_once('Conteudo-fixo/footer.php')?>