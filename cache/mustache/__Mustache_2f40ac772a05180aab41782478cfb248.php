<?php

class __Mustache_2f40ac772a05180aab41782478cfb248 extends \Mustache\Template
{
    protected $strictCallables = true;
    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="container">
';
        $buffer .= $indent . '    <h3 class="my-4">Contatti</h3>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <form method="POST" action="contatti">
';
        $buffer .= $indent . '        <div class="mb-3">
';
        $buffer .= $indent . '            <label for="exampleFormControlInput1" class="form-label">Email address</label>
';
        $buffer .= $indent . '            <input required name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="mb-3">
';
        $buffer .= $indent . '            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
';
        $buffer .= $indent . '            <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="mb-3">
';
        $buffer .= $indent . '            <button type="submit" class="btn btn-success">Invia</button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </form>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
