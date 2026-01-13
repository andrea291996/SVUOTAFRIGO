<?php

class __Mustache_51191a0c9fb33fa4291f895349ef92c1 extends \Mustache\Template
{
    protected $strictCallables = true;
    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<script>
';
        $buffer .= $indent . 'document.addEventListener(\'DOMContentLoaded\', function() {
';
        $buffer .= $indent . '    const btnAggiungi = document.getElementById(\'btn-aggiungi-ingrediente\');
';
        $buffer .= $indent . '    const inputNuovo = document.getElementById(\'input-ingrediente-nuovo\');
';
        $buffer .= $indent . '    const listaConfermati = document.getElementById(\'lista-ingredienti-confermati\');
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    // Assicurati che il contenitore dei badge abbia le classi Bootstrap per l\'allineamento
';
        $buffer .= $indent . '    listaConfermati.className = "mt-3 d-flex flex-wrap gap-2 align-items-center";
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    btnAggiungi.addEventListener(\'click\', function() {
';
        $buffer .= $indent . '        const valore = inputNuovo.value.trim();
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '        if (valore === "") {
';
        $buffer .= $indent . '            return; // Evita di aggiungere badge vuoti
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        // Creiamo il Badge (Pillola) invece della riga intera
';
        $buffer .= $indent . '        const badge = document.createElement(\'span\');
';
        $buffer .= $indent . '        // Usiamo classi Bootstrap per: Pillola, Colore scuro, Flex, Padding, Ombra e Animazione
';
        $buffer .= $indent . '        badge.className = \'badge rounded-pill bg-dark d-inline-flex align-items-center p-2 px-3 animate__animated animate__fadeIn shadow-sm\';
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '        // HTML interno: Nome + Input Hidden (per il PHP) + Pulsante X di Bootstrap
';
        $buffer .= $indent . '        badge.innerHTML = `
';
        $buffer .= $indent . '            <span class="fs-6 fw-normal me-2">${valore}</span>
';
        $buffer .= $indent . '            <input type="hidden" name="ingredienti[]" value="${valore}">
';
        $buffer .= $indent . '            <button type="button" 
';
        $buffer .= $indent . '                    class="btn-close btn-close-white remove-badge" 
';
        $buffer .= $indent . '                    style="font-size: 0.5rem;" 
';
        $buffer .= $indent . '                    aria-label="Rimuovi">
';
        $buffer .= $indent . '            </button>
';
        $buffer .= $indent . '        `;
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        listaConfermati.appendChild(badge);
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '        // Reset input
';
        $buffer .= $indent . '        inputNuovo.value = \'\';
';
        $buffer .= $indent . '        inputNuovo.focus();
';
        $buffer .= $indent . '    });
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    // Delega evento per la rimozione (molto più pulito)
';
        $buffer .= $indent . '    listaConfermati.addEventListener(\'click\', function(e) {
';
        $buffer .= $indent . '        // Se clicco sulla X (o dentro la X)
';
        $buffer .= $indent . '        if (e.target.closest(\'.remove-badge\')) {
';
        $buffer .= $indent . '            e.target.closest(\'.badge\').remove();
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    });
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    // Tasto INVIO per aggiungere velocemente
';
        $buffer .= $indent . '    inputNuovo.addEventListener(\'keypress\', function(e) {
';
        $buffer .= $indent . '        if (e.key === \'Enter\') {
';
        $buffer .= $indent . '            e.preventDefault();
';
        $buffer .= $indent . '            btnAggiungi.click();
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    });
';
        $buffer .= $indent . '});
';
        $buffer .= $indent . '</script>';

        return $buffer;
    }
}
