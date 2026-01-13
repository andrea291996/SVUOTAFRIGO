<?php

class __Mustache_d2de5cec7b4002b3393a0804d6922ea7 extends \Mustache\Template
{
    protected $strictCallables = true;
    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="container mt-5">
';
        $buffer .= $indent . '    <div class="card shadow-sm border-0">
';
        $buffer .= $indent . '        <div class="card-header bg-dark text-white py-3">
';
        $buffer .= $indent . '            <h5 class="mb-0"><i class="fas fa-utensils me-2"></i> Filtra le tue Ricette</h5>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="card-body p-4">
';
        $buffer .= $indent . '            <form action="ricette" method="POST">
';
        $buffer .= $indent . '                
';
        $buffer .= $indent . '                <div class="row mb-4">
';
        $buffer .= $indent . '                    <div class="col-md-3">
';
        $buffer .= $indent . '                        <label class="form-label fw-bold">Per quante persone?</label>
';
        $buffer .= $indent . '                        <input type="number" name="persone" class="form-control" value="1" min="1">
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <h6 class="text-primary fw-bold mb-3">I tuoi ingredienti</h6>
';
        $buffer .= $indent . '                <div id="ingredienti-wrapper">
';
        $buffer .= $indent . '                    <div class="row g-2 mb-2 ingredient-row align-items-end">
';
        $buffer .= $indent . '                        <div class="col-md-6">
';
        $buffer .= $indent . '                            <label class="form-label small">Ingrediente</label>
';
        $buffer .= $indent . '                            <input type="text" name="ingredienti[]" class="form-control" placeholder="es. Melanzane">
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                        <div class="col-md-4">
';
        $buffer .= $indent . '                            <label class="form-label small">Quantità (gr/ml)</label>
';
        $buffer .= $indent . '                            <input type="number" name="quantita[]" class="form-control" placeholder="es. 200">
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                        <div class="col-md-2">
';
        $buffer .= $indent . '                            <button type="button" class="btn btn-success w-100" id="add-row">
';
        $buffer .= $indent . '                                <i class="fas fa-plus"></i>
';
        $buffer .= $indent . '                            </button>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <hr class="my-4">
';
        $buffer .= $indent . '                <div class="row">
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="mt-4 pt-3 border-top text-end">
';
        $buffer .= $indent . '                    <button type="submit" class="btn btn-primary btn-lg px-5 shadow-sm">
';
        $buffer .= $indent . '                        <i class="fas fa-search me-2"></i>Trova Ricette
';
        $buffer .= $indent . '                    </button>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </form>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script>
';
        $buffer .= $indent . 'document.addEventListener(\'DOMContentLoaded\', function() {
';
        $buffer .= $indent . '    const wrapper = document.getElementById(\'ingredienti-wrapper\');
';
        $buffer .= $indent . '    const addButton = document.getElementById(\'add-row\');
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    if (addButton) {
';
        $buffer .= $indent . '        addButton.addEventListener(\'click\', function() {
';
        $buffer .= $indent . '            const newRow = document.createElement(\'div\');
';
        $buffer .= $indent . '            newRow.className = \'row g-2 mb-2 ingredient-row align-items-end animate__animated animate__fadeIn\';
';
        $buffer .= $indent . '            
';
        $buffer .= $indent . '            newRow.innerHTML = `
';
        $buffer .= $indent . '                <div class="col-md-6">
';
        $buffer .= $indent . '                    <input type="text" name="ingredienti[]" class="form-control" placeholder="Altro ingrediente...">
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="col-md-4">
';
        $buffer .= $indent . '                    <input type="number" name="quantita[]" class="form-control" placeholder="Quantità">
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="col-md-2">
';
        $buffer .= $indent . '                    <button type="button" class="btn btn-outline-danger w-100 remove-row">
';
        $buffer .= $indent . '                        <i class="fas fa-trash"></i>
';
        $buffer .= $indent . '                    </button>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            `;
';
        $buffer .= $indent . '            
';
        $buffer .= $indent . '            wrapper.appendChild(newRow);
';
        $buffer .= $indent . '        });
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    // Rimuovi riga
';
        $buffer .= $indent . '    wrapper.addEventListener(\'click\', function(e) {
';
        $buffer .= $indent . '        if (e.target.closest(\'.remove-row\')) {
';
        $buffer .= $indent . '            e.target.closest(\'.ingredient-row\').remove();
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
