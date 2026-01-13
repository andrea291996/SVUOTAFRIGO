<?php

class __Mustache_f4e9d1535025649217887c15b097ebb5 extends \Mustache\Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $this->lambdaHelper = new \Mustache\LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="carouselExample" class="carousel slide">
';
        $buffer .= $indent . '  <div class="carousel-inner">
';
        $value = $context->find('images');
        $buffer .= $this->section2e2f8713fa6381411146478fd69da15e($context, $indent, $value);
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
';
        $buffer .= $indent . '    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
';
        $buffer .= $indent . '    <span class="visually-hidden">Previous</span>
';
        $buffer .= $indent . '  </button>
';
        $buffer .= $indent . '  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
';
        $buffer .= $indent . '    <span class="carousel-control-next-icon" aria-hidden="true"></span>
';
        $buffer .= $indent . '    <span class="visually-hidden">Next</span>
';
        $buffer .= $indent . '  </button>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section2e2f8713fa6381411146478fd69da15e(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
    <div class="carousel-item {{active}}">
      <img src="{{src}}" class="d-block w-100" alt="{{alt}}">
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
                
                $buffer .= $indent . '    <div class="carousel-item ';
                $value = $this->resolveValue($context->find('active'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '">
';
                $buffer .= $indent . '      <img src="';
                $value = $this->resolveValue($context->find('src'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '" class="d-block w-100" alt="';
                $value = $this->resolveValue($context->find('alt'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '">
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
