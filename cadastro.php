<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Scamboo - Cadastro de usuario</title>
    </head>
    <body>
        <h1 align="center">Scamboo - Cadastro de usuário</h1>
        <?php
            if(isset($_POST['email']) &&
                isset($_POST['senha']) &&
                isset($_POST['nome']) &&
                isset($_POST['apelido']) &&
                isset($_POST['tipo_pessoa']) &&
                isset($_POST['cpf_cnpj']) &&
                isset($_POST['sexo']) &&
                isset($_POST['tipo_contato']) &&
                isset($_POST['telefone']) &&
                isset($_POST['cep']) &&
                isset($_POST['endereco']) &&
                isset($_POST['numero']) &&
                isset($_POST['complemento']) &&
                isset($_POST['estado']) &&
                isset($_POST['cidade'])){

                $con = new PDO("mysql:host=localhost;dbname=scamboo", "root", "");
                $sql = $con->prepare('
                    INSERT INTO Usuarios
                    (email,senha,nome,apelido,tipo_pessoa,cpf_cnpj,sexo,tipo_contato,telefone,cep,endereco,numero,complemento,estado,cidade) VALUES (?,SHA2(?,256),?,?,?,?,?,?,?,?,?,?,?,?,?)');
                $sql->bindParam(1, $_POST['email']);
                $sql->bindParam(2, $_POST['senha']);
                $sql->bindParam(3, $_POST['nome']);
                $sql->bindParam(4, $_POST['apelido']);
                $sql->bindParam(5, $_POST['tipo_pessoa']);
                $sql->bindParam(6, $_POST['cpf_cnpj']);
                $sql->bindParam(7, $_POST['sexo']);
                $sql->bindParam(8, $_POST['tipo_contato']);
                $sql->bindParam(9, $_POST['telefone']);
                $sql->bindParam(10, $_POST['cep']);
                $sql->bindParam(11, $_POST['endereco']);
                $sql->bindParam(12, $_POST['numero']);
                $sql->bindParam(13, $_POST['complemento']);
                $sql->bindParam(14, $_POST['estado']);
                $sql->bindParam(15, $_POST['cidade']);
                $sql->execute();
                echo('<br/><p><font color="green"><h3 align="center">Cadastro salvo com sucesso!</h3></font></p>');
                }
        ?>
        <form method="POST" action="cadastro.php">
            <table align="center">
            <!--<marquee> AMO A DHULI</marquee>-->
                <tr>
                    <td><label>E-mail: </label></td>
                    <td><input type="email" name="email" maxlength="50"/></td>
                </tr>
                <tr>
                    <td><label>Senha: </label></td>
                    <td><input type="password" name="senha"/></td>
                </tr>

                <tr>
                    <td><label>Nome Completo: </label></td>
                    <td><input type="text" name="nome" maxlength="80"/></td>
                </tr>
                <tr>
                    <td><label>Apelido: </label></td>
                    <td><input type="text" name="apelido" maxlength="15"/></td>
                </tr>
                <tr>
                    <td><label>Tipo Pessoa: </label></td>
                    <td><input type="text" name="tipo_pessoa" maxlength="1"/></td>
                    <!--<td><fieldset>
                    <legend>Tipo Pessoa</legend>
                        <input type="radio" name="tipo_pessoa" value="F"/>
                        <label>Física</label>
                        <input type="radio" name="tipo_pessoa" value="J"/>
                        <label>Jurídica</label>
                    </fieldset></td>-->
                </tr>
                <tr>
                    <td><label>CPF/CNPJ: </label></td>
                    <td><input type="text" name="cpf_cnpj" maxlength="14"/></td>
                </tr>
                <tr>
                    <td><label>Sexo: </label></td>
                    <td><input type="text" name="sexo" maxlength="1"/></td>
                    <!--<td><fieldset>
                    <legend>Sexo</legend>
                        <input type="radio" name="sexo" value="F"/>
                        <label>Femino</label>
                        <input type="radio" name="sexo" value="M"/>
                        <label>Masculino</label>
                    </fieldset></td>-->
                </tr>
                <tr>
                    <td><label>Tipo de Contato: </label></td>
                    <td><input type="text" name="tipo_contato" maxlength="1"/></td>
                    <!--<td><select>
                        <option name="tipo_contato" value="R">Residencial</option>
                        <option name="tipo_contato" value="C">Comercial</option>
                        <option name="tipo_contato" value="P">Celular</option>
                    </select></td>-->
                </tr>
                <tr>
                    <td><label>Telefone: </label></td>
                    <td><input type="text" name="telefone" maxlength="12"/></td>
                </tr>
                <tr>
                    <td><label>CEP: </label></td>
                    <td><input type="text" name="cep" maxlength="8"/></td>
                </tr>
                <tr>
                    <td><label>Endereco: </label></td>
                    <td><input type="text" name="endereco" maxlength="50"/></td>
                </tr>
                <tr>
                    <td><label>Numero: </label></td>
                    <td><input type="text" name="numero" maxlength="6"/></td>
                </tr>
                <tr>
                    <td><label>Complemento: </label></td>
                    <td><input type="text" name="complemento" maxlength="50"/></td>
                </tr>
                <tr>
                    <td><label>Estado (UF): </label></td>
                    <td><input type="text" name="estado" maxlength="2"/></td>
                </tr>
                <tr>
                    <td><label>Cidade: </label></td>
                    <td><input type="text" name="cidade" maxlength="30"/></td>
                </tr>
                <tr>
                <br/>
                    <td><br/><a href="index.php">VOLTAR</a></td>
                    <td align="right"><br/><input type="submit" value="Salvar"></td>
                </tr>
            </table>
        </form>
    </body>
</html>