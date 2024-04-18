<?php

/* Crie uma função que receba uma array associativa como a abaixo, e se a data de pagamento for menor que 02/02/2024, mude o campo pago para true, senão, mude para false. MOSTRE NO TERMINAL O ARRAY COM AS ALTERAÇÕES.: -->
*/
$produto =  [
        "produto" => "Camisa DnD - Tamanho M",
        "data_pagamento" => "01/02/2024",
        "pago" => false
];
    
function verificacao($produto){
    if ($produto["data_pagamento"] < "02/02/2024"){
        $produto["pago"] = true;
        
        var_dump($produto);
    } else {
        $produto["pago"] = false;
        
        var_dump($produto);
    }

}
verificacao($produto);
///////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Crie uma função que recebe uma array associativa como a abaixo e faça a MÉDIA das notas e mostre no terminal.

$aluno = [
    "nome" => "João",
    "notas" => [
        "prova1" => 8,
        "prova2" => 7,
        "prova3" => 6,
        "prova4" => 9
    ]
    ];

function mediaDosAlunos ($aluno){
$soma = 0;
$i = 0;
$media = 0;
foreach($aluno["notas"] as $nota){
    $soma += $nota;
    $i++;
    }
$media = $soma/$i;
return $media;
}
echo (mediaDosAlunos ($aluno));
///////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Crie uma função que receba uma array de arrays associativos, e mostre, o nome e a idade de cada aluno

$alunos = [
        [
            "nome" => "João",
            "idade" => 20
        ],
        [
            "nome" => "Maria",
            "idade" => 22
        ],
        [
            "nome" => "José",
            "idade" => 21
        ]
        ];
function alunosDump($alunos){
    return var_dump($alunos);
}

echo(alunosDump($alunos));
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*Crie uma função que verifique um cadastro de usuário onde você deve verificar:
    Se o nome do usuário é maior que 3 caracteres
    Se a idade é maior que 18
    Se o email tem mais que 10 caracteres
    Se a senha tem mais que 8 caracteres
    Se ele já não está cadastrado (se o email existe na array de usuários) E se a validação estiver correta, insira na array de usuários, senão, mostre no terminal com erro.*/
    
    <?php
   <?php


$usuarios = array();


function verificarCadastro($nome, $idade, $email, $senha, &$usuarios) {
    if (strlen($nome) <= 3) {
        echo "Erro: O nome deve ter mais de 3 caracteres.\n";
        return false;
    }
    if ($idade <= 18) {
        echo "Erro: A idade deve ser maior que 18.\n";
        return false;
    }
    if (strlen($email) <= 10) {
        echo "Erro: O email deve ter mais de 10 caracteres.\n";
        return false;
    }
    if (strlen($senha) <= 8) {
        echo "Erro: A senha deve ter mais de 8 caracteres.\n";
        return false;
    }
    foreach ($usuarios as $usuario) {
        if ($usuario['email'] == $email) {
            echo "Erro: Este email já está cadastrado.\n";
            return false;
        }
    }
    $novoUsuario = array(
        'nome' => $nome,
        'idade' => $idade,
        'email' => $email,
        'senha' => $senha
    );
    $usuarios[] = $novoUsuario;
    echo "Usuário cadastrado com sucesso!\n";
    return true;
}


verificarCadastro("perdo", 12, "ursovstitanvhs2010@example.com", "supermario123", $usuarios);
verificarCadastro("Maria", 21, "recebaseudoce@example.com", "senhainovadora1234", $usuarios);

    ?>
?>
