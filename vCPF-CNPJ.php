
<?php 


	function validarCPF($valor){
		$n[1] = substr($valor, 0,1);
		$n[2] = substr($valor, 1,1);
		$n[3] = substr($valor, 2,1);
		$n[4] = substr($valor, 3,1);
		$n[5] = substr($valor, 4,1);
		$n[6] = substr($valor, 5,1);
		$n[7] = substr($valor, 6,1);
		$n[8] = substr($valor, 7,1);
		$n[9] = substr($valor, 8,1);
		$n[10] = substr($valor, 9,1);
		$n[11] = substr($valor, 10,1);

		$soma1 = ($n[1] * 10 + 
			$n[2] * 9 + 
			$n[3] * 8 +
			$n[4] * 7 +
			$n[5] * 6 +
			$n[6] * 5 +
			$n[7] * 4 +
			$n[8] * 3 +
			$n[9] * 2 );

		$d1 = 11 - ($soma1 % 11);

		if ($d1 == 10 || $d1 == 11){
			$d1 = 0;
		}

		$soma2 = ($n[1] * 11 + 
			$n[2] * 10 + 
			$n[3] * 9 +
			$n[4] * 8 +
			$n[5] * 7 +
			$n[6] * 6 +
			$n[7] * 5 +
			$n[8] * 4 +
			$n[9] * 3 +
			$d1 * 2);

		$d2 = 11 - ($soma2 % 11);

		if ($d2 == 10 || $d2 == 11) {
			$d2 = 0;
		}

		if (($d1 <> $n[10]) or ($d2 <> $n[11])) {
			$erro = true;
		}else{
			$erro = false;
		}
		return $erro;
	}//finalizando função de validação de CPF

	function validarCNPJ($cnpj){
	$cnpj = preg_replace('/[^0-9]/', '', (string) $cnpj);
	// Valida tamanho
	if (strlen($cnpj) != 14)
		return false;
	// Valida primeiro dígito verificador
	for ($i = 0, $j = 5, $soma = 0; $i < 12; $i++)
	{
		$soma += $cnpj{$i} * $j;
		$j = ($j == 2) ? 9 : $j - 1;
	}
	$resto = $soma % 11;
	if ($cnpj{12} != ($resto < 2 ? 0 : 11 - $resto))
		return false;
	// Valida segundo dígito verificador
	for ($i = 0, $j = 6, $soma = 0; $i < 13; $i++)
	{
		$soma += $cnpj{$i} * $j;
		$j = ($j == 2) ? 9 : $j - 1;
	}
	$resto = $soma % 11;
	return $cnpj{13} == ($resto < 2 ? 0 : 11 - $resto);
	}//finalizando função de validação de CNPJ

?>