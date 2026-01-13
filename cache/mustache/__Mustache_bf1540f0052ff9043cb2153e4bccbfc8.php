<?php

class __Mustache_bf1540f0052ff9043cb2153e4bccbfc8 extends \Mustache\Template
{
    protected $strictCallables = true;
    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<meta charset="UTF-8">
';
        $buffer .= $indent . '<meta name="viewport" content="width=device-width, initial-scale=1.0">
';
        $buffer .= $indent . '<title>';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</title>
';
        $buffer .= $indent . '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<link href="/SVUOTAFRIGO/assets/fontawesome/css/all.min.css" rel="stylesheet">
';
        $buffer .= $indent . '<link rel="stylesheet" href="/SVUOTAFRIGO/style.css">';

        return $buffer;
    }
}
