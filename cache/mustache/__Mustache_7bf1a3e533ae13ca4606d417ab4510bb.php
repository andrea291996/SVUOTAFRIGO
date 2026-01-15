<?php

class __Mustache_7bf1a3e533ae13ca4606d417ab4510bb extends \Mustache\Template
{
    protected $strictCallables = true;
    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<section id="assistenza">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <h1 class="text-center margine">ASSISTENZA</h1>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="container margine">
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
        $buffer .= $indent . '    </div> <!-- container margine -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="fascia_giallina">
';
        $buffer .= $indent . '        <h3>Scarica il <strong>Manuale d\'uso</strong></h3>
';
        $buffer .= $indent . '        <p>Per maggiori informazioni sul funzionamento di questa web application, scarica il Manuale d\'uso</p>
';
        $buffer .= $indent . '        <button class="btn btn-primary text-uppercase"><a href="http://localhost/SVUOTAFRIGO/Documentazione/diagramma_di_flusso_svuotafrigo.drawio.pdf">Scarica il manuale d\'uso</a></button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="container margine">
';
        $buffer .= $indent . '        <h3 class="my-4">Hai bisogno di altre informazioni?</h3>
';
        $buffer .= $indent . '        <p>Se non hai ancora trovato quello che cerchi, contattaci!
';
        $buffer .= $indent . '        <br>Un nostro tecnico risponderà entro 24h.</p>
';
        $buffer .= $indent . '        <form method="POST" action="contatti">   <!-- richiesta al server, poi index, poi router e poi su post_contatti -->
';
        $buffer .= $indent . '            <div class="mb-3">
';
        $buffer .= $indent . '            <label for="exampleFormControlInput1" class="form-label">Email address</label>
';
        $buffer .= $indent . '            <input required name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="mb-3">
';
        $buffer .= $indent . '            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
';
        $buffer .= $indent . '            <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="mb-3">
';
        $buffer .= $indent . '                <button type="submit" class="btn btn-primary">Invio</button>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </form>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="container margine">
';
        $buffer .= $indent . '        <h4>Link utili:</h4>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <h5>Spreco alimentare</h5>
';
        $buffer .= $indent . '        <p><a href="https://www.isprambiente.gov.it/it/archivio/notizie-e-novita-normative/notizie-ispra/2025/02/12a-giornata-nazionale-di-prevenzione-dello-spreco-alimentare">https://www.isprambiente.gov.it/it/archivio/notizie-e-novita-normative/notizie-ispra/2025/02/12a-giornata-nazionale-di-prevenzione-dello-spreco-alimentare</a>
';
        $buffer .= $indent . '        <br><a href="https://www.epicentro.iss.it/intolleranze/link">https://www.epicentro.iss.it/intolleranze/link</a>
';
        $buffer .= $indent . '        <br><a href="https://www.gazzettaufficiale.it/eli/id/2016/08/30/16G00179/sg">https://www.gazzettaufficiale.it/eli/id/2016/08/30/16G00179/sg</a>
';
        $buffer .= $indent . '        <br><a href="https://www.masaf.gov.it/flex/cm/pages/ServeBLOB.php/L/IT/IDPagina/16886">https://www.masaf.gov.it/flex/cm/pages/ServeBLOB.php/L/IT/IDPagina/16886</a>
';
        $buffer .= $indent . '        <br><a href="https://www.salute.gov.it/new/it/news-e-media/notizie/sicurezza-alimentare/giornata-nazionale-contro-lo-spreco-alimentare-le/">https://www.salute.gov.it/new/it/news-e-media/notizie/sicurezza-alimentare/giornata-nazionale-contro-lo-spreco-alimentare-le/</a>
';
        $buffer .= $indent . '        <br><a href="https://www.senato.it/export/ddl/full/57820">https://www.senato.it/export/ddl/full/57820</a></p>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <h5>Intolleranze alimentari</h5>
';
        $buffer .= $indent . '        <p><a href="https://www.salute.gov.it/new/it/tema/nutrizione/celiachia">https://www.salute.gov.it/new/it/tema/nutrizione/celiachia</a>
';
        $buffer .= $indent . '        <br><a href="https://www.salute.gov.it/new/it/tema/nutrizione/intolleranze-al-lattosio">https://www.salute.gov.it/new/it/tema/nutrizione/intolleranze-al-lattosio</a>
';
        $buffer .= $indent . '        <br><a href="https://www.salute.gov.it/new/it/tema/nutrizione/allergie-alimentari">https://www.salute.gov.it/new/it/tema/nutrizione/allergie-alimentari</a>
';
        $buffer .= $indent . '        <br><a href="https://www.salute.gov.it/new/it/faq/faq-allergie-alimentari/">https://www.salute.gov.it/new/it/faq/faq-allergie-alimentari/</a>
';
        $buffer .= $indent . '        <br><a href="https://www.efsa.europa.eu/it/safe2eat/italia">https://www.efsa.europa.eu/it/safe2eat/italia</a>
';
        $buffer .= $indent . '        <br><a href="https://www.epicentro.iss.it/intolleranze/link">https://www.epicentro.iss.it/intolleranze/link</a></p>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</section>';

        return $buffer;
    }
}
