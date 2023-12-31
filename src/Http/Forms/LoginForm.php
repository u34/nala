<?php

namespace Src\Http\Forms;

class LoginForm extends Form
{
    private array $fields = [
        'u' => 'username',
        'p' => 'password',
        's' => 'submit'
    ];
    public int $errorCode = 401;

    public function isCorrect(): bool
    {
        return $this->validatePostForm(array_keys($this->fields));
    }
}