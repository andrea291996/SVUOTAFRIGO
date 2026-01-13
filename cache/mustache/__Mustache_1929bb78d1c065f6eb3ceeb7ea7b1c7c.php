<?php

class __Mustache_1929bb78d1c065f6eb3ceeb7ea7b1c7c extends \Mustache\Template
{
    protected $strictCallables = true;
    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<h1>registrati</h1>
';
        $buffer .= $indent . 'Nome:<input name="nome">
';
        $buffer .= $indent . 'Cognome:<input name="email" type="email">
';
        $buffer .= $indent . 'Password:<input name="password" type="password">';

        return $buffer;
    }
}
