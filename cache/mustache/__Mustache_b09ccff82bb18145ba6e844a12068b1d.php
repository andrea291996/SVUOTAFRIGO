<?php

class __Mustache_b09ccff82bb18145ba6e844a12068b1d extends \Mustache\Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $this->lambdaHelper = new \Mustache\LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<h3>Ecco cinque ricette random:
';
        $value = $context->find('Ricette');
        $buffer .= $this->sectionD9069ab6aae8019fac03011e83be64e7($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('Ricette');
        if (empty($value)) {
            
            $buffer .= $indent . '
';
        }

        return $buffer;
    }

    private function sectionD9069ab6aae8019fac03011e83be64e7(\Mustache\Context $context, $indent, $value)
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
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
