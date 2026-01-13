<?php

class __Mustache_f1eafa4549aadb4c9649e1b42e921788 extends \Mustache\Template
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
        $buffer .= $indent . '    btnAggiungi.addEventListener(\'click\', function() {
';
        $buffer .= $indent . '        const valore = inputNuovo.value.trim();
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '        if (valore === "") {
';
        $buffer .= $indent . '            alert("Inserisci il nome di un ingrediente");
';
        $buffer .= $indent . '            return;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        // Creiamo la riga per l\'ingrediente confermato
';
        $buffer .= $indent . '        const newRow = document.createElement(\'div\');
';
        $buffer .= $indent . '        newRow.className = \'row g-2 mb-2 align-items-center animate__animated animate__fadeIn\';
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '        // Nota: Qui l\'input ha name="ingredienti[]", quindi verrà inviato al POST
';
        $buffer .= $indent . '        newRow.innerHTML = `
';
        $buffer .= $indent . '            <div class="col-md-6">
';
        $buffer .= $indent . '                <div class="input-group">
';
        $buffer .= $indent . '                    <span class="input-group-text bg-light"><i class="fas fa-check text-success"></i></span>
';
        $buffer .= $indent . '                    <input type="text" name="ingredienti[]" class="form-control" value="${valore}" readonly>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="col-md-2">
';
        $buffer .= $indent . '                <button type="button" class="btn btn-outline-danger w-100 remove-row">
';
        $buffer .= $indent . '                    <i class="fas fa-trash"></i> Elimina
';
        $buffer .= $indent . '                </button>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        `;
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        listaConfermati.appendChild(newRow);
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '        // Puliamo l\'input principale per il prossimo ingrediente
';
        $buffer .= $indent . '        inputNuovo.value = \'\';
';
        $buffer .= $indent . '        inputNuovo.focus();
';
        $buffer .= $indent . '    });
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    // Delega evento per la rimozione
';
        $buffer .= $indent . '    listaConfermati.addEventListener(\'click\', function(e) {
';
        $buffer .= $indent . '        if (e.target.closest(\'.remove-row\')) {
';
        $buffer .= $indent . '            e.target.closest(\'.row\').remove();
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    });
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    // Permetti l\'invio con il tasto INVIO nell\'input
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
