<?php

class __Mustache_1bbe09837cbb9d65c765c43fbb6db698 extends \Mustache\Template
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
