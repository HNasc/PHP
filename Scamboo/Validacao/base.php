<?php
class valBase{
	public $server='localhost'; //ou 127.0.0.1
	public $username='root';
	public $pw=''; //sem senha!
	public $dbname='scamboo';
        
    function conectaDB(){
        $connect=mysqli_connect($this ->server, $this ->username, $this ->pw);
        
        mysqli_set_charset($connect, "utf8");
        
        $selectDB=mysqli_select_db($connect, $this ->dbname);

        if (!$selectDB) die ('Erroooooo!!!'.mysqli_error($connect));
    }
        
    function resetSenha($email){
        //Variaveis
        echo $email;
        $link=mysqli_connect($this ->server, $this ->username, $this ->pw, $this ->dbname);
        $pesquisar_email=mysqli_query($link,"SELECT email 
                                                    FROM usuario 
                                                    where situacao = 'A' and email = '$email' ");

        //Validações
        while($result = mysqli_fetch_assoc($pesquisar_email))
        {
            if($result['email'] == $email)
            {
                $contemail++;
            }

        }

        if(@$contemail == 0)
        {
            echo '<br/><p><font color="red"><h3 align="center">Email não cadastrado no site!</h3></font></p>';
            header("Refresh:3; url=../index.php");
        }
        else
        {
            //Ação
            $query= mysqli_query($link,"SELECT nome, usuario, senha, email
                                        FROM usuario
                                        WHERE email = '$email'");
        while($result=mysqli_fetch_assoc($query)){
            $nome  = $result['nome'];
            $usuario = $result['usuario'];
            $email = $result['email'];
            $senha = $result['senha'];
        }
        $corpo_email  = "Ola, o procedimento de recuperar dados, foi efetuado com sucesso !\n..";
        $corpo_email .= "Seu login = ".$usuario."\n..";
        $corpo_email .= "Senha de acesso = ".$senha."\n..";
        $corpo_email .= "Seu email = ".$email."\n.. ";
        $corpo_email .= "Nao responda esse email, e-Mail automatizado";		
        mail($email,"Recuperacao de Senha",$corpo_email);
        
        echo '<br/><p><font color="green"><h3 align="center">Sua senha foi enviada com sucesso para o email:<font color="black"> '.$email.'</font></h3></font></p>';
        header("Refresh:3; url=../index.php");
        }
    }//resetSenha
}//class

?>