<?php
	namespace App\Mvc;

	use \PDO;

	class Model {

		private $connection;
		private $stmt;
    
    	// Conexão com o Banco
	    public function __construct(PDO $connection = null)
	    {
	        $this->connection = $connection;
	        if ($this->connection === null) {
	            $this->connection = new PDO(
	                    'mysql:host=localhost:3307;dbname=sistema', 
	                    'root', 
	                    'usbw'
	                );
	            $this->connection->setAttribute(
	                PDO::ATTR_ERRMODE, 
	                PDO::ERRMODE_EXCEPTION
	            );
	        }
	    }


	    //Pegar todos os Clientes registrados
		public function listarClientes(){
	        $stmt = $this->connection->prepare('SELECT * FROM tb_cliente');
	        $stmt->execute();
	        $stmt->fetch(PDO::FETCH_ASSOC);
	        
	       	while($clientes = $stmt->fetch(PDO::FETCH_ASSOC)){
	       	?>
	       		<tr>
					<td><?php echo $clientes['cd_cliente']; ?></td>
					<td><?php echo $clientes['nm_cliente']; ?></td>
					<td><?php echo $clientes['email_cliente']; ?></td>
					<td><?php echo $clientes['cpf_cliente']; ?></td>
	       		</tr>
	       	<?php
	       	}
      	}

      	//Registrar Cliente
      	public function registrarCliente(){
      		
      		if (!empty($_POST)):

      		extract($_POST);//Extraindo as variaveis do POST

      		$stmt = $this->connection->prepare('INSERT INTO tb_cliente(
      										nm_cliente,
											cpf_cliente,
											rg_cliente,
											cep_cliente,
											cel_cliente,
											email_cliente)

											VALUES (:NOME,
													:CPF,
													:RG,
													:CEP,
													:TEL,
													:EMAIL)');
      		$stmt->bindValue(':NOME', $NOME);
      		$stmt->bindValue(':CPF', $CPF);
      		$stmt->bindValue(':RG', $RG);
      		$stmt->bindValue(':CEP', $CEP);
      		$stmt->bindValue(':TEL', $TEL);
      		$stmt->bindValue(':EMAIL', $EMAIL);

      		return $stmt->execute();
      		else:
      			echo "vai na fé";
      		endif;
      	}
	}