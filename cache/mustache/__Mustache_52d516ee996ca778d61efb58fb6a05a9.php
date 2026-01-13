<?php

class __Mustache_52d516ee996ca778d61efb58fb6a05a9 extends \Mustache\Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $this->lambdaHelper = new \Mustache\LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="col-md-6 mb-4">
';
        $buffer .= $indent . '    <div class="card shadow-sm border-start border-primary border-4">
';
        $buffer .= $indent . '        <div class="card-body">
';
        $buffer .= $indent . '            <h4 class="card-title"><b>Nome:</b> ';
        $value = $this->resolveValue($context->find('getNome'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</h4>
';
        $buffer .= $indent . '            <hr>
';
        $buffer .= $indent . '            <p><b>Tipologia:</b> ';
        $value = $this->resolveValue($context->find('getTipologia'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</p>
';
        $buffer .= $indent . '            <p><b>Dieta:</b> ';
        $value = $this->resolveValue($context->find('getDieta'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</p>
';
        $buffer .= $indent . '            
';
        $buffer .= $indent . '            <p><b>Ingredienti:</b></p>
';
        $buffer .= $indent . '            <ul>
';
        $value = $context->find('getIngredienti');
        $buffer .= $this->sectionFae89c613871ac20be4dd0cd582abef1($context, $indent, $value);
        $buffer .= $indent . '            </ul>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <p><b>Procedimento:</b></p>
';
        $buffer .= $indent . '            <div class="p-3 bg-light rounded border">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('getProcedimento'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function sectionFae89c613871ac20be4dd0cd582abef1(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
                    <li>{{.}}</li> 
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
                
                $buffer .= $indent . '                    <li>';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</li> 
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
