<!DOCTYPE html>
<html>
	<head>
		<title>calendário</title>
		<meta charset="utf-8"/>
		<style type="text/css">
			table, th, td {
				border: 1px solid black;
			}
		</style>
	</head>
	<body>
		<?php
			function linha($semana){
				$linha = '<tr>';
					for($i=0; $i <=6; $i++){
						if(array_key_exists($i, $semana)){
							$linha .= "<td>{$semana[$i]}</td>";
						}else{
							$linha .= "<td></td>";
						}
					}
				$linha .= '</tr>';

				return $linha;
				/*return "
					<tr>
						<td>{$semana[0]}</td>
						<td>{$semana[1]}</td>
						<td>{$semana[2]}</td>
						<td>{$semana[3]}</td>
						<td>{$semana[4]}</td>
						<td>{$semana[5]}</td>
						<td>{$semana[6]}</td>
					</tr>
				";*/
			}
			function calendario(){
				$calendario = "";
				$dia = 1;
				$semana = [];
				//Variável $diaAtual criada para deixar em negrito o dia atual
				$diaAtual = date('j');
				
				while($dia <= 31){
					array_push($semana, $dia);
					
					if(count($semana) == 7){
						$calendario .= linha($semana);
						$semana = [];
					}
					$dia++;
				}
				
				$calendario .= linha($semana);
				
				return $calendario;
			}
		?>
		<table>
			<tr>
				<th>Dom</th>
				<th>Seg</th>
				<th>Ter</th>
				<th>Qua</th>
				<th>Qui</th>
				<th>Sex</th>
				<th>Sab</th>
			</tr>
			<?php echo calendario(); ?>
		</table>
	</body>
</html>