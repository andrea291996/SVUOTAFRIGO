<?php

class __Mustache_d959e0e6987b392d1914301c92ad1692 extends \Mustache\Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $this->lambdaHelper = new \Mustache\LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<b>Codice a barre:</b> ';
        $value = $this->resolveValue($context->find('getCodice'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '
';
        $buffer .= $indent . '<br> Descrizione: ';
        $value = $this->resolveValue($context->find('getDescrizione'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '
';
        $buffer .= $indent . '<br> Prezzo: € ';
        $value = $this->resolveValue($context->find('getPrezzo'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '
';
        $buffer .= $indent . '<br> Prezzo scontato: € ';
        $value = $this->resolveValue($context->find('applicaSconto'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<br> Materiale: ';
        $value = $context->find('materialeRiciclabile');
        $buffer .= $this->section9b2a9b96e7d8b1c04208efd3a26f5839($context, $indent, $value);
        $buffer .= '
';
        $value = $context->find('materialeRiciclabile');
        if (empty($value)) {
            
            $buffer .= $indent . 'N.A.';
        }
        $buffer .= '
';
        $buffer .= $indent . '
';
        $value = $context->find('getDataScadenza');
        $buffer .= $this->section31a4fb633d709d5ac6ef1b1118681db8($context, $indent, $value);
        $buffer .= $indent . '<br><br>';

        return $buffer;
    }

    private function section9b2a9b96e7d8b1c04208efd3a26f5839(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '{{materialeRiciclabile}}';
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
                
                $value = $this->resolveValue($context->find('materialeRiciclabile'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31a4fb633d709d5ac6ef1b1118681db8(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
<br> Scade il: {{getDataScadenza}}
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
                
                $buffer .= $indent . '<br> Scade il: ';
                $value = $this->resolveValue($context->find('getDataScadenza'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
