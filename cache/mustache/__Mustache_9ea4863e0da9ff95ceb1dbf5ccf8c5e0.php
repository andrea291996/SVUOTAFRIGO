<?php

class __Mustache_9ea4863e0da9ff95ceb1dbf5ccf8c5e0 extends \Mustache\Template
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
        $buffer .= $indent . '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
';
        $buffer .= $indent . '<link href="assets/fontawesome/css/all.min.css" rel="stylesheet">
';
        $buffer .= $indent . '<link rel="stylesheet" href="style.css">';

        return $buffer;
    }
}
