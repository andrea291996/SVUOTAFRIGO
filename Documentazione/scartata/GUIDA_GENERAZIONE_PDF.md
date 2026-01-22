# GUIDA GENERAZIONE PDF - Documentazione SVUOTAFRIGO
**Azienda**: 0-Waste  
**Data**: Gennaio 2026

---

## Metodi per Generare PDF

### ✅ Metodo 1: Pandoc (CONSIGLIATO - Alta Qualità)

**Installazione**:
1. Scarica Pandoc: https://pandoc.org/installing.html
2. Scarica MiKTeX (LaTeX): https://miktex.org/download
3. Installa entrambi seguendo le istruzioni
4. Riavvia PowerShell/Terminale

**Utilizzo**:

```powershell
# Esegui lo script automatico
cd "c:\Program Files\Ampps\www\SVUOTAFRIGO\Documentazione"
.\genera_pdf.ps1
```

Oppure manualmente:

```powershell
# MANUALE_UTENTE.pdf
pandoc MANUALE_UTENTE.md -o MANUALE_UTENTE.pdf --pdf-engine=xelatex -V geometry:margin=2.5cm --toc --metadata title="Manuale Utente SVUOTAFRIGO" --metadata author="0-Waste"

# MANUALE_GENERALE.pdf
pandoc MANUALE_GENERALE.md -o MANUALE_GENERALE.pdf --pdf-engine=xelatex -V geometry:margin=2.5cm --toc --metadata title="Manuale Generale SVUOTAFRIGO" --metadata author="0-Waste"

# ANALISI_SWOT.pdf
pandoc ANALISI_SWOT.md -o ANALISI_SWOT.pdf --pdf-engine=xelatex -V geometry:margin=2.5cm --toc --metadata title="Analisi SWOT SVUOTAFRIGO" --metadata author="0-Waste"
```

**Output**:
- PDF di alta qualità
- Indice automatico (TOC)
- Link cliccabili
- Immagini embedded
- Layout professionale

---

### ✅ Metodo 2: Visual Studio Code (FACILE)

**Installazione**:
1. Apri VS Code
2. Vai su Extensions (CTRL+SHIFT+X)
3. Cerca "Markdown PDF" (autore: yzane)
4. Clicca Install

**Utilizzo**:
1. Apri il file `.md` in VS Code
2. Premi **CTRL+SHIFT+P**
3. Digita "Markdown PDF: Export (PDF)"
4. Enter
5. Il PDF verrà salvato nella stessa cartella

**Ripeti per**:
- MANUALE_UTENTE.md
- MANUALE_GENERALE.md
- ANALISI_SWOT.md

**Note**:
- Più semplice di Pandoc
- Qualità buona
- Supporta screenshot e immagini
- Configurabile tramite settings.json

---

### ✅ Metodo 3: Typora (A PAGAMENTO - Premium)

**Caratteristiche**:
- Editor WYSIWYG Markdown
- Export PDF nativo
- Licenza una tantum €15

**Installazione**:
1. Scarica da https://typora.io/
2. Installa
3. Acquista licenza (opzionale - 15 giorni trial)

**Utilizzo**:
1. Apri file `.md` in Typora
2. File → Export → PDF
3. Scegli destinazione
4. Clicca OK

---

### ✅ Metodo 4: Servizio Online (VELOCE - No Install)

**Sito Consigliato**: https://www.markdowntopdf.com/

**Utilizzo**:
1. Vai sul sito
2. Clicca "Choose File" o trascina file .md
3. Attendi conversione (automatica)
4. Clicca "Download PDF"

**Alternative**:
- https://md2pdf.netlify.app/
- https://dillinger.io/ (Export → PDF)

**Limitazioni**:
- Screenshot potrebbero non caricarsi se percorsi relativi
- Nessun controllo avanzato sul layout
- Qualità media

---

### ✅ Metodo 5: Grip + Print to PDF (Hybrid)

**Installazione**:
```bash
pip install grip
```

**Utilizzo**:
```bash
cd "c:\Program Files\Ampps\www\SVUOTAFRIGO\Documentazione"
grip MANUALE_UTENTE.md
```

1. Apri http://localhost:6419 nel browser
2. CTRL+P (Stampa)
3. Seleziona "Salva Come PDF"
4. Salva

**Vantaggio**: Preview GitHub-style

---

## File da Convertire

| File Markdown | PDF Output | Dimensione Stimata |
|---------------|------------|-------------------|
| MANUALE_UTENTE.md | MANUALE_UTENTE.pdf | ~800 KB |
| MANUALE_GENERALE.md | MANUALE_GENERALE.pdf | ~1.2 MB |
| ANALISI_SWOT.md | ANALISI_SWOT.pdf | ~1.5 MB |

**Percorso**: `c:\Program Files\Ampps\www\SVUOTAFRIGO\Documentazione\`

---

## Configurazione Opzionale Pandoc

Per PDF più professionali, crea `metadata.yaml`:

```yaml
---
title: "Manuale Utente SVUOTAFRIGO"
author: "0-Waste"
date: "Gennaio 2026"
geometry: margin=2.5cm
fontsize: 11pt
documentclass: article
toc: true
toc-depth: 3
colorlinks: true
linkcolor: blue
urlcolor: blue
---
```

Poi:
```bash
pandoc MANUALE_UTENTE.md metadata.yaml -o MANUALE_UTENTE.pdf
```

---

## Troubleshooting

### Problema: "Pandoc not found"
**Soluzione**: Aggiungi Pandoc al PATH di sistema o riavvia terminale post-installazione

### Problema: "xelatex not found"
**Soluzione**: Installa MiKTeX e riprova

### Problema: "Immagini non visibili nel PDF"
**Soluzione**: 
- Verifica che le immagini esistano nei percorsi specificati
- Usa percorsi assoluti se necessario
- Per Pandoc: `--resource-path=.:..:../img`

### Problema: "Layout rotto nel PDF"
**Soluzione**: 
- Alcuni elementi HTML potrebbero non essere supportati
- Rimuovi caratteri speciali dal markdown
- Usa Pandoc invece di tool online

---

## Raccomandazione Finale

**Per risultati professionali**: Usa **Pandoc** con lo script fornito (`genera_pdf.ps1`)

**Per semplicità**: Usa **VS Code** con estensione Markdown PDF

**Per velocità**: Usa **servizio online** markdowntopdf.com

---

## Script Batch Completo

Salva come `converti_tutti.bat`:

```batch
@echo off
echo Conversione Manuali SVUOTAFRIGO in PDF
echo Azienda: 0-Waste
echo.

pandoc MANUALE_UTENTE.md -o MANUALE_UTENTE.pdf --pdf-engine=xelatex -V geometry:margin=2.5cm --toc --metadata title="Manuale Utente" --metadata author="0-Waste"
echo Generato: MANUALE_UTENTE.pdf

pandoc MANUALE_GENERALE.md -o MANUALE_GENERALE.pdf --pdf-engine=xelatex -V geometry:margin=2.5cm --toc --metadata title="Manuale Generale" --metadata author="0-Waste"
echo Generato: MANUALE_GENERALE.pdf

pandoc ANALISI_SWOT.md -o ANALISI_SWOT.pdf --pdf-engine=xelatex -V geometry:margin=2.5cm --toc --metadata title="Analisi SWOT" --metadata author="0-Waste"
echo Generato: ANALISI_SWOT.pdf

echo.
echo Conversione completata!
pause
```

---

**Azienda**: 0-Waste  
**Supporto**: team@0-waste.com (esempio)  
**Versione Guida**: 1.0
