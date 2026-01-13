<?php

class __Mustache_54074e1a3dec23e57abd91cfb80cf0bf extends \Mustache\Template
{
    protected $strictCallables = true;
    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<h1>registrati</h1>
';
        $buffer .= $indent . 'Nome:<input name="nome">
';
        $buffer .= $indent . 'Email:<input name="email" type="email">
';
        $buffer .= $indent . 'Password:<input name="password" type="password">';

        return $buffer;
    }
}
