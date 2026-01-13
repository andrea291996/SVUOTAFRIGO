<?php

class __Mustache_790a0745268feff979caf10901ef9d2e extends \Mustache\Template
{
    protected $strictCallables = true;
    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<h1>login</h1>
';
        $buffer .= $indent . '<form action="accedi" method="post">
';
        $buffer .= $indent . 'email:
';
        $buffer .= $indent . '<input type="email" name="email">
';
        $buffer .= $indent . 'password:
';
        $buffer .= $indent . '<input type="password" name="password">
';
        $buffer .= $indent . '<button type="submit">invia</button>
';
        $buffer .= $indent . '</form>';

        return $buffer;
    }
}
