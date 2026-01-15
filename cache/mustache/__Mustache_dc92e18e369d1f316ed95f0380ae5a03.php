<?php

class __Mustache_dc92e18e369d1f316ed95f0380ae5a03 extends \Mustache\Template
{
    protected $strictCallables = true;
    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<section class="container">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <h1 class="text-center">ASSISTENZA</h1>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="container py-2">
';
        $buffer .= $indent . '        <h2>Faq</h2>
';
        $buffer .= $indent . '        <div class="accordion" id="accordionExample">
';
        $buffer .= $indent . '            <div class="accordion-item">
';
        $buffer .= $indent . '                <h3 class="accordion-header">
';
        $buffer .= $indent . '                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
';
        $buffer .= $indent . '                    Accordion Item #1
';
        $buffer .= $indent . '                </button>
';
        $buffer .= $indent . '                </h3>
';
        $buffer .= $indent . '                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
';
        $buffer .= $indent . '                    <div class="accordion-body">
';
        $buffer .= $indent . '                        <strong>This is the first item’s accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It’s also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="accordion-item">
';
        $buffer .= $indent . '                <h3 class="accordion-header">
';
        $buffer .= $indent . '                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
';
        $buffer .= $indent . '                    Accordion Item #2
';
        $buffer .= $indent . '                </button>
';
        $buffer .= $indent . '                </h3>
';
        $buffer .= $indent . '                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
';
        $buffer .= $indent . '                    <div class="accordion-body">
';
        $buffer .= $indent . '                        <strong>This is the second item’s accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It’s also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="accordion-item">
';
        $buffer .= $indent . '                <h3 class="accordion-header">
';
        $buffer .= $indent . '                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
';
        $buffer .= $indent . '                    Accordion Item #3
';
        $buffer .= $indent . '                </button>
';
        $buffer .= $indent . '                </h3>
';
        $buffer .= $indent . '                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
';
        $buffer .= $indent . '                    <div class="accordion-body">
';
        $buffer .= $indent . '                        <strong>This is the third item’s accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It’s also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <h3>Scarica il Manuale d\'uso</h3>
';
        $buffer .= $indent . '    <button type="submit" class="btn btn-success">Invio</button>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <h3 class="my-4">Hai bisogno di altre informazioni?</h3>
';
        $buffer .= $indent . '    <p>Contattaci! Un nostro tecnico risponderà entro 24h.</p>
';
        $buffer .= $indent . '    <form method="POST" action="contatti">   <!-- richiesta al server, poi index, poi router e poi su post_contatti -->
';
        $buffer .= $indent . '        <div class="mb-3">
';
        $buffer .= $indent . '        <label for="exampleFormControlInput1" class="form-label">Email address</label>
';
        $buffer .= $indent . '        <input required name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="mb-3">
';
        $buffer .= $indent . '        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
';
        $buffer .= $indent . '        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="mb-3">
';
        $buffer .= $indent . '            <button type="submit" class="btn btn-success">Invio</button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </form>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</section>
';

        return $buffer;
    }
}
