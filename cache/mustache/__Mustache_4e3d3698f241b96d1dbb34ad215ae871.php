<?php

class __Mustache_4e3d3698f241b96d1dbb34ad215ae871 extends \Mustache\Template
{
    protected $strictCallables = true;
    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<h1>Accedi</h1>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<form action="accedi" method="post">
';
        $buffer .= $indent . '  <!-- Pills navs -->
';
        $buffer .= $indent . '<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
';
        $buffer .= $indent . '  <li class="nav-item" role="presentation">
';
        $buffer .= $indent . '    <a class="nav-link active" id="tab-login" data-mdb-pill-init href="#pills-login" role="tab"
';
        $buffer .= $indent . '      aria-controls="pills-login" aria-selected="true">Login</a>
';
        $buffer .= $indent . '  </li>
';
        $buffer .= $indent . '  <li class="nav-item" role="presentation">
';
        $buffer .= $indent . '    <a class="nav-link" id="tab-register" data-mdb-pill-init href="#pills-register" role="tab"
';
        $buffer .= $indent . '      aria-controls="pills-register" aria-selected="false">Register</a>
';
        $buffer .= $indent . '  </li>
';
        $buffer .= $indent . '</ul>
';
        $buffer .= $indent . '<!-- Pills navs -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<!-- Pills content -->
';
        $buffer .= $indent . '<div class="tab-content">
';
        $buffer .= $indent . '  <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
';
        $buffer .= $indent . '    <form>
';
        $buffer .= $indent . '      <div class="text-center mb-3">
';
        $buffer .= $indent . '        <p>Sign in with:</p>
';
        $buffer .= $indent . '        <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
';
        $buffer .= $indent . '          <i class="fab fa-facebook-f"></i>
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
';
        $buffer .= $indent . '          <i class="fab fa-google"></i>
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
';
        $buffer .= $indent . '          <i class="fab fa-twitter"></i>
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
';
        $buffer .= $indent . '          <i class="fab fa-github"></i>
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      <p class="text-center">or:</p>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      <!-- Email input -->
';
        $buffer .= $indent . '      <div data-mdb-input-init class="form-outline mb-4">
';
        $buffer .= $indent . '        <input type="email" id="loginName" class="form-control" />
';
        $buffer .= $indent . '        <label class="form-label" for="loginName">Email or username</label>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      <!-- Password input -->
';
        $buffer .= $indent . '      <div data-mdb-input-init class="form-outline mb-4">
';
        $buffer .= $indent . '        <input type="password" id="loginPassword" class="form-control" />
';
        $buffer .= $indent . '        <label class="form-label" for="loginPassword">Password</label>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      <!-- 2 column grid layout -->
';
        $buffer .= $indent . '      <div class="row mb-4">
';
        $buffer .= $indent . '        <div class="col-md-6 d-flex justify-content-center">
';
        $buffer .= $indent . '          <!-- Checkbox -->
';
        $buffer .= $indent . '          <div class="form-check mb-3 mb-md-0">
';
        $buffer .= $indent . '            <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
';
        $buffer .= $indent . '            <label class="form-check-label" for="loginCheck"> Remember me </label>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="col-md-6 d-flex justify-content-center">
';
        $buffer .= $indent . '          <!-- Simple link -->
';
        $buffer .= $indent . '          <a href="#!">Forgot password?</a>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      <!-- Submit button -->
';
        $buffer .= $indent . '      <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      <!-- Register buttons -->
';
        $buffer .= $indent . '      <div class="text-center">
';
        $buffer .= $indent . '        <p>Not a member? <a href="#!">Register</a></p>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </form>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '  <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
';
        $buffer .= $indent . '    <form>
';
        $buffer .= $indent . '      <div class="text-center mb-3">
';
        $buffer .= $indent . '        <p>Sign up with:</p>
';
        $buffer .= $indent . '        <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
';
        $buffer .= $indent . '          <i class="fab fa-facebook-f"></i>
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
';
        $buffer .= $indent . '          <i class="fab fa-google"></i>
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
';
        $buffer .= $indent . '          <i class="fab fa-twitter"></i>
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
';
        $buffer .= $indent . '          <i class="fab fa-github"></i>
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      <p class="text-center">or:</p>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      <!-- Name input -->
';
        $buffer .= $indent . '      <div data-mdb-input-init class="form-outline mb-4">
';
        $buffer .= $indent . '        <input type="text" id="registerName" class="form-control" />
';
        $buffer .= $indent . '        <label class="form-label" for="registerName">Name</label>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      <!-- Username input -->
';
        $buffer .= $indent . '      <div data-mdb-input-init class="form-outline mb-4">
';
        $buffer .= $indent . '        <input type="text" id="registerUsername" class="form-control" />
';
        $buffer .= $indent . '        <label class="form-label" for="registerUsername">Username</label>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      <!-- Email input -->
';
        $buffer .= $indent . '      <div data-mdb-input-init class="form-outline mb-4">
';
        $buffer .= $indent . '        <input type="email" id="registerEmail" class="form-control" />
';
        $buffer .= $indent . '        <label class="form-label" for="registerEmail">Email</label>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      <!-- Password input -->
';
        $buffer .= $indent . '      <div data-mdb-input-init class="form-outline mb-4">
';
        $buffer .= $indent . '        <input type="password" id="registerPassword" class="form-control" />
';
        $buffer .= $indent . '        <label class="form-label" for="registerPassword">Password</label>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      <!-- Repeat Password input -->
';
        $buffer .= $indent . '      <div data-mdb-input-init class="form-outline mb-4">
';
        $buffer .= $indent . '        <input type="password" id="registerRepeatPassword" class="form-control" />
';
        $buffer .= $indent . '        <label class="form-label" for="registerRepeatPassword">Repeat password</label>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      <!-- Checkbox -->
';
        $buffer .= $indent . '      <div class="form-check d-flex justify-content-center mb-4">
';
        $buffer .= $indent . '        <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked
';
        $buffer .= $indent . '          aria-describedby="registerCheckHelpText" />
';
        $buffer .= $indent . '        <label class="form-check-label" for="registerCheck">
';
        $buffer .= $indent . '          I have read and agree to the terms
';
        $buffer .= $indent . '        </label>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      <!-- Submit button -->
';
        $buffer .= $indent . '      <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-3">Sign in</button>
';
        $buffer .= $indent . '    </form>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<!-- Pills content -->';

        return $buffer;
    }
}
