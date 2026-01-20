# Script PowerShell per Generare PDF dei Manuali SVUOTAFRIGO
# Azienda: 0-Waste
# Data: Gennaio 2026

Write-Host "=== Generazione PDF Documentazione SVUOTAFRIGO ===" -ForegroundColor Cyan
Write-Host ""

# Percorso base
$basePath = "c:\Program Files\Ampps\www\SVUOTAFRIGO\Documentazione"

# File da convertire
$files = @(
    "MANUALE_UTENTE.md",
    "MANUALE_GENERALE.md",
    "ANALISI_SWOT.md"
)

Write-Host "NOTA: Questo script richiede uno dei seguenti strumenti:" -ForegroundColor Yellow
Write-Host "1. Pandoc (consigliato)" -ForegroundColor Yellow
Write-Host "2. Typora (con licenza)" -ForegroundColor Yellow
Write-Host "3. Markdown Monster" -ForegroundColor Yellow
Write-Host "4. Visual Studio Code con estensione Markdown PDF" -ForegroundColor Yellow
Write-Host ""

# Verifica Pandoc
if (Get-Command pandoc -ErrorAction SilentlyContinue) {
    Write-Host "✓ Pandoc trovato! Generazione PDF in corso..." -ForegroundColor Green
    Write-Host ""
    
    foreach ($file in $files) {
        $inputFile = Join-Path $basePath $file
        $outputFile = $inputFile -replace ".md", ".pdf"
        
        Write-Host "Convertendo $file..." -ForegroundColor Cyan
        
        # Comando Pandoc con opzioni per PDF di qualità
        pandoc $inputFile `
            -o $outputFile `
            --pdf-engine=xelatex `
            -V geometry:margin=2.5cm `
            -V fontsize=11pt `
            -V documentclass=article `
            --toc `
            --toc-depth=3 `
            -V colorlinks=true `
            -V linkcolor=blue `
            -V urlcolor=blue `
            --highlight-style=tango `
            --metadata title="SVUOTAFRIGO - $($file -replace '.md', '')" `
            --metadata author="0-Waste" `
            --metadata date="Gennaio 2026"
        
        if ($?) {
            Write-Host "  ✓ PDF generato: $outputFile" -ForegroundColor Green
        } else {
            Write-Host "  ✗ Errore nella generazione di $file" -ForegroundColor Red
        }
    }
    
    Write-Host ""
    Write-Host "=== Generazione Completata ===" -ForegroundColor Green
    
} else {
    Write-Host "✗ Pandoc non trovato." -ForegroundColor Red
    Write-Host ""
    Write-Host "ISTRUZIONI PER L'INSTALLAZIONE:" -ForegroundColor Yellow
    Write-Host ""
    Write-Host "Metodo 1 - Pandoc (CONSIGLIATO):" -ForegroundColor Cyan
    Write-Host "1. Scarica Pandoc da https://pandoc.org/installing.html"
    Write-Host "2. Installa seguendo le istruzioni"
    Write-Host "3. Scarica MiKTeX (per PDF): https://miktex.org/download"
    Write-Host "4. Riavvia PowerShell e riesegui questo script"
    Write-Host ""
    Write-Host "Metodo 2 - VS Code (ALTERNATIVO):" -ForegroundColor Cyan
    Write-Host "1. Apri VS Code"
    Write-Host "2. Installa estensione 'Markdown PDF' (yzane.markdown-pdf)"
    Write-Host "3. Apri ogni file .md"
    Write-Host "4. CTRL+SHIFT+P -> 'Markdown PDF: Export (PDF)'"
    Write-Host ""
    Write-Host "Metodo 3 - Online (VELOCE):" -ForegroundColor Cyan
    Write-Host "1. Vai su https://www.markdowntopdf.com/"
    Write-Host "2. Upload file .md"
    Write-Host "3. Download PDF generato"
    Write-Host ""
    Write-Host "I file da convertire sono:" -ForegroundColor White
    foreach ($file in $files) {
        Write-Host "  - $file" -ForegroundColor Gray
    }
    Write-Host ""
    Write-Host "Percorso: $basePath" -ForegroundColor White
}

Write-Host ""
Write-Host "Premi un tasto per uscire..."
$null = $Host.UI.RawUI.ReadKey('NoEcho,IncludeKeyDown')
