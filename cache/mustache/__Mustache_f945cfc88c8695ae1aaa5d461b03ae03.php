<?php

class __Mustache_f945cfc88c8695ae1aaa5d461b03ae03 extends \Mustache\Template
{
    protected $strictCallables = true;
    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<h1>registrati</h1>
';
        $buffer .= $indent . '<form action="registrati" method="post">
';
        $buffer .= $indent . 'Nome:<input name="nome">
';
        $buffer .= $indent . 'Email:<input name="email" type="email">
';
        $buffer .= $indent . 'Password:<input name="password" type="password">
';
        $buffer .= $indent . '<button type="submit">Registrati</button>
';
        $buffer .= $indent . '</form>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<form action="registrati" method="post">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <div class="row">
';
        $buffer .= $indent . '    <div class="col-md-6 mb-4">
';
        $buffer .= $indent . '      <div class="form-outline">
';
        $buffer .= $indent . '        <input type="text" class="form-control" name="nome" required />
';
        $buffer .= $indent . '        <label class="form-label">Nome</label>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="col-md-6 mb-4">
';
        $buffer .= $indent . '      <div class="form-outline">
';
        $buffer .= $indent . '        <input type="text" class="form-control" name="cognome" required />
';
        $buffer .= $indent . '        <label class="form-label">Cognome</label>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <div class="form-outline mb-4">
';
        $buffer .= $indent . '    <input type="email" class="form-control" name="email" required />
';
        $buffer .= $indent . '    <label class="form-label">Email</label>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <div class="form-outline mb-4">
';
        $buffer .= $indent . '    <input type="password" class="form-control" name="password" required />
';
        $buffer .= $indent . '    <label class="form-label">Password</label>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <button type="submit" class="btn btn-primary btn-block mb-4">
';
        $buffer .= $indent . '    Sign up
';
        $buffer .= $indent . '  </button>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</form>
';

        return $buffer;
    }
}
