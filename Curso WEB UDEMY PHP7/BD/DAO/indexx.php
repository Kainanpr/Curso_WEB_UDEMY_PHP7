
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <style>

	        body {
	        	font-family: Arial, Helvetica, sans-serif;
	        }

    	</style>

    </head>
    <body>

        <?php

		require_once "config.php";

		//Carrega um usuario
			/*$usuario = new Usuario();
			 *$usuario->loadById(7);
			 *echo $usuario;
			 */

		//Carrega uma lista de usuários
			/*$lista = Usuario::getList();
			 *echo json_encode($lista);
			 */

		//Carrega uma lista de usuarios buscando pelo nome
			/*$search = Usuario::search("jo");
			 *echo json_encode($search);
			 */

		//Carrega um usuario usando o login e a senha	
			/*$usuario = new Usuario();
			 *$usuario->login("Tiago", 1234);
			 *echo $usuario;
			 */

		//Inserindo aluno
			/*$aluno = new Usuario();
			
			*$aluno->setDeslogin("aluno");
			*$aluno->setDessenha("112233");

			*$aluno->insert();	

			*echo $aluno;
			*/

		//Inserindo aluno modo 2
			/*$aluno = new Usuario("Kainan", "343434");	

			*$aluno->insert();

			*echo $aluno;
			*/

		//Atualizando dados
			/*$usuario = new Usuario();

			 *$usuario->loadById(25);

			 *$usuario->update("kainanXD", "33682235");

			 *echo $usuario;
			 */

		//Deletando usuario
		$usuario = new Usuario();

		$usuario->loadById(25);

		$usuario->delete();

		echo $usuario;


		?>

    </body>
</html>
