<?php
function adicionar(string $nome, null|string $matricula = null, ?int $idade = null, ?string $email = null): array
{
    return [
    'nome' => $nome,
    'email' => $email,
    'idade' => $idade,
    'matricula' => $matricula,
    ];
}
adicionar('Chiquim', '123456', 34, 'chiquim@email.com');
adicionar('Maria');
adicionar('Zezim', null, 29);
adicionar('Luiza', email:'luiza@email.com');