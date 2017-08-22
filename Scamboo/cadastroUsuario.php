<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
        <form method="POST" action="Uteis/insereUsuario.php">
            <center><table align="center">
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
                    <td align="right"><br/><input type="submit" value="Salvar"></td>
                </tr></center>
            </table>
        </form>
    </body>
</html>