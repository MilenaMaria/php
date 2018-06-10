<?php
// aula 35 - Funções recursivas

$hierarquia = array(
  array(
    'nome_Cargo' => 'CEO',
    'subordinados' =>array(
      // inicio:Diretor Comercial
      array(
        'nome_Cargo' => 'Diretor Comercial',
        'subordinados' => array(
          // Inicio gerente de vendas
          array(
            'nome_Cargo'=>'Gerente de Vendas'
          )
          // termino gerente de vendas
        )
      ),
      // inicio:Diretor Comercial
      // Inicio diretor financeiro
      array(
          'nome_Cargo' => 'Diretor Financeiro',
          'subordinados'=>array(
            // inicio gerente de contas a pagar
            array(
              'nome_Cargo' => 'gerente de contas a pagar',
              'subordinados' => array(
                // inicio supervisor
                array(
                  'nome_Cargo' => 'supervisor de pagamentos',
                )
                // termino supervisor
              )
            ),
            // termino de gerente e contas a pagar
            // inicio gerente de contas
            array(
              'nome_Cargo' => 'gerente de compras',
              'subordinados'=>array(
                // Inicio supervisor de suprimentos
                array(
                  'nome_Cargo' => 'Supervisor de Suprimentos',
                  'subordinados'=> array(
                    // inicio funcionario
                    array(
                      'nome_Cargo'=>'Funcionario'
                    )
                    // Fim funcionario
                  )
                )
                // termino supervisor de suprimentos
              )
            )
            // termino gerente de contas
          )
      )
      // termnino diretor financeiro
      )
)
);

function exibe($cargos){
  $html = '<ul>';
  foreach ($cargos as $cargo) {
    $html .= '<li>';
    $html .= $cargo['nome_Cargo'];
    if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
      $html .= exibe($cargo['subordinados']);
    }
    $html .= '</li>';
  }

  $html .= '</ul>';

  return $html;
}

echo exibe($hierarquia);
?>
