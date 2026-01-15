<?php

class __Mustache_2d3caa80cc639ca80d07c8a52eeef36c extends \Mustache\Template
{
    protected $strictCallables = true;
    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="bg-image"
';
        $buffer .= $indent . '     style="
';
        $buffer .= $indent . '       background-image: url(\'https://mdbootstrap.com/img/new/textures/full/171.jpg\');
';
        $buffer .= $indent . '       height: 300px;
';
        $buffer .= $indent . '       background-size: cover;
';
        $buffer .= $indent . '       background-position: center;
';
        $buffer .= $indent . '       background-repeat: no-repeat;
';
        $buffer .= $indent . '     ">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<form action="registrati" method="post">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <!-- First / Last name (opzionali, puoi anche toglierli) -->
';
        $buffer .= $indent . '  <div class="row">
';
        $buffer .= $indent . '    <div class="col-md-6 mb-4">
';
        $buffer .= $indent . '      <div class="form-outline">
';
        $buffer .= $indent . '        <input type="text" class="form-control" name="nome" />
';
        $buffer .= $indent . '        <label class="form-label">First name</label>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="col-md-6 mb-4">
';
        $buffer .= $indent . '      <div class="form-outline">
';
        $buffer .= $indent . '        <input type="text" class="form-control" name="cognome" />
';
        $buffer .= $indent . '        <label class="form-label">Last name</label>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <!-- Email -->
';
        $buffer .= $indent . '  <div data-mdb-input-init class="form-outline mb-4">
';
        $buffer .= $indent . '    <input type="email" class="form-control" name="email" required />
';
        $buffer .= $indent . '    <label class="form-label">Email address</label>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <!-- Password -->
';
        $buffer .= $indent . '  <div data-mdb-input-init class="form-outline mb-4">
';
        $buffer .= $indent . '    <input type="password" class="form-control" name="password" required />
';
        $buffer .= $indent . '    <label class="form-label">Password</label>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <!-- Checkbox -->
';
        $buffer .= $indent . '  <div class="form-check d-flex justify-content-center mb-4">
';
        $buffer .= $indent . '    <input class="form-check-input me-2" type="checkbox" />
';
        $buffer .= $indent . '    <label class="form-check-label">
';
        $buffer .= $indent . '      Subscribe to our newsletter
';
        $buffer .= $indent . '    </label>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <!-- Submit -->
';
        $buffer .= $indent . '  <button type="submit" class="btn btn-primary btn-block mb-4">
';
        $buffer .= $indent . '    Sign up
';
        $buffer .= $indent . '  </button>
';
        $buffer .= $indent . '  
';
        $buffer .= $indent . '   <div class="text-center mt-3">
';
        $buffer .= $indent . '  <button type="button" class="btn btn-link btn-floating mx-1">
';
        $buffer .= $indent . '    <i class="fab fa-google"></i>
';
        $buffer .= $indent . '  </button>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <button type="button" class="btn btn-link btn-floating mx-1">
';
        $buffer .= $indent . '    <i class="fab fa-twitter"></i>
';
        $buffer .= $indent . '  </button>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <button type="button" class="btn btn-link btn-floating mx-1">
';
        $buffer .= $indent . '    <i class="fab fa-github"></i>
';
        $buffer .= $indent . '  </button>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</form>
';

        return $buffer;
    }
}
