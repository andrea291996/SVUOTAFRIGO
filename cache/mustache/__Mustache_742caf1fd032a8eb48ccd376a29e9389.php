<?php

class __Mustache_742caf1fd032a8eb48ccd376a29e9389 extends \Mustache\Template
{
    protected $strictCallables = true;
    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<h1>registrati</h1>
';
        $buffer .= $indent . '<form action="registrati" method="post">
';
        $buffer .= $indent . 'Nome:<input name="nome">
';
        $buffer .= $indent . 'Email:<input name="email" type="email">
';
        $buffer .= $indent . 'Password:<input name="password" type="password">
';
        $buffer .= $indent . '<button type="submit">Registrati</button>
';
        $buffer .= $indent . '</form>';

        return $buffer;
    }
}
