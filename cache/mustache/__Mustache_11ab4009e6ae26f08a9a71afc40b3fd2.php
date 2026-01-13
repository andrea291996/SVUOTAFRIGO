<?php

class __Mustache_11ab4009e6ae26f08a9a71afc40b3fd2 extends \Mustache\Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $this->lambdaHelper = new \Mustache\LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="container mt-5">
';
        $buffer .= $indent . '    <h3>Ecco le ricette trovate:</h3>
';
        $buffer .= $indent . '    <div class="row">
';
        $value = $context->find('lista');
        $buffer .= $this->sectionB0e67256c2b13591581e86ddde22bbb6($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('lista');
        if (empty($value)) {
            
            $buffer .= $indent . '        <div class="col-12 text-center py-5">
';
            $buffer .= $indent . '            <div class="alert alert-info">
';
            $buffer .= $indent . '                Nessuna ricetta corrisponde ai filtri selezionati.
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '        </div>
';
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function sectionB0e67256c2b13591581e86ddde22bbb6(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
            {{> ricette/ricetta}}
        ';
            $value = call_user_func($value, $source, $this->lambdaHelper);
    
            if ($value instanceof \Mustache\RenderedString) {
                return $value->getValue();
            }
    
            if (is_string($value)) {
                if (strpos($value, '{{') === false) {
                    return $value;
                }
    
                return $this->mustache
                    ->loadLambda($value)
                    ->renderInternal($context);
            }
        }
    
        if (!empty($value)) {
            $values = $this->isIterable($value) ? $value : [$value];
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('ricette/ricetta')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
