<?php

class __Mustache_77c413dc964cdff26a63db831d45248b extends \Mustache\Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $this->lambdaHelper = new \Mustache\LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="container">
';
        $buffer .= $indent . '    <div class="row">
';
        $buffer .= $indent . '
';
        $value = $context->find('Prodotti');
        $buffer .= $this->section421fed3cee0d899c951840d723839328($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('Prodotti');
        if (empty($value)) {
            
            $buffer .= $indent . '
';
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>  
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section421fed3cee0d899c951840d723839328(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '

            <div class="col">
                {{> prodotti/prodotto}}
            </div>

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
                
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <div class="col">
';
                if ($partial = $this->mustache->loadPartial('prodotti/prodotto')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
