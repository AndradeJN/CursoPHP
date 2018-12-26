
<?php 

	$hierarquia = array(
		array(
			//Inicio CEO
			'nome_cargo' => 'CEO',
			'subordinados' => array(
			//Inicio Diretor Comercial!
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinados'=> array(
					//Inicio gerente de vendas
					array(
					'nome_cargo'=>'Gerente de Vendas'
					)
					//Termino Gerente de vendas!
				)
				
			),
			//Termino do diretor Comercial!
			//Inicio: Diretor Financeiro
			array(
				'nome_cargo'=>'Diretor Financeiro',
				'subordinados'=>array(
					//Inicio Gerente de contas
					array('nome_cargo'=>'Gerente de Contas',
					'subordinados'=>array(
					//Inicio Supervisor de pagamentos 
						array(
						'nome_cargo'=>'Supervisor de Pagamentos'
						)
						//Termino Supervisor de pagamentos
					)
					
				),
				//Termino Gerente de contas
				//Inicio gerente de compras
				array(
					'nome_cargo'=>'Gerente de Compras',
					'subordinados'=>array(
						//Inicio Supervisor de Suprimentos
						array(
						'nome_cargo'=>'Supervisor de Suprimentos'

								) //Termino do Supervisor de Suprimentos
							)

						) // Termino gerente de compras
				
					)//Termino do Gerente de contas
			
				)//Termino do Diretor Financeiro!

			) //Termino do diretor Comercial!

		)//Termino do CEO	
	);

	function exibe($cargos){
		$html = '<ul>';
			foreach ($cargos as $cargo) {

				$html .= "<li>";

				$html .= $cargo['nome_cargo'];

				if (isset($cargo['subordinados']) && count($cargo['subordinados'])>0){
						$html .= exibe($cargo['subordinados']);
				}

				$html .= "</li>";

			}
		$html .= "</ul>";
		return $html;
	}

	echo exibe($hierarquia);

?>