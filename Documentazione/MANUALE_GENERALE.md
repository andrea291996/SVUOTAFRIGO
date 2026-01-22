# MANUALE GENERALE - SVUOTAFRIGO v.2

![Logo SVUOTAFRIGO](../img/logo_svuotafrigo.png)

**Indirizzo Web App:** [http://localhost/SVUOTAFRIGO](http://localhost/SVUOTAFRIGO)  
**Azienda:** 0-Waste  
**Data:** 22 Gennaio 2026

---

## INDICE REVISIONI DOCUMENTO
| Versione | Data | Descrizione Modifiche | Autore |
| :--- | :--- | :--- | :--- |
| 1.0 | 15/01/2026 | Prima stesura completa delle generalità di progetto. | Team 0-Waste |
| 2.0 | 22/01/2026 | Integrazione indici figure, scopi differenziati e riferimenti Excel. | Team 0-Waste |

---

## INDICE
1. [Scopo del Documento](#scopo-del-documento)
2. [Generalità](#generalità)
3. [Scopo del Progetto](#scopo)
4. [Applicabilità](#applicabilità)
5. [Responsabilità](#responsabilità)
6. [Riferimenti](#riferimenti)
7. [Architettura Software](#architettura-software)
8. [Struttura Progetto](#struttura-progetto)
9. [Database Schema](#database-schema)
10. [Pattern e Best Practices](#pattern-e-best-practices)
11. [Sicurezza](#sicurezza)
12. [Configurazione e Deployment](#configurazione-e-deployment)
13. [Testing e Quality Assurance](#testing-e-quality-assurance)
14. [Manutenzione e Troubleshooting](#manutenzione-e-troubleshooting)
15. [Guida per Contributori](#guida-per-contributori)

## INDICE FIGURE
- [Figura 1: Logo Ufficiale SVUOTAFRIGO](#figura-1-logo-ufficiale-svuotafrigo)
- [Figura 2: Pattern Architetturale MVC](#figura-2-pattern-architetturale-mvc)

---

## SCOPO DEL DOCUMENTO
Il presente manuale ha l'obiettivo di definire l'identità e la struttura del progetto SVUOTAFRIGO.
*   **Per gli Sviluppatori:** Serve come base di conoscenza per comprendere la logica di business e gli standard qualitativi richiesti per lo sviluppo dei moduli.
*   **Per gli Utenti:** Chiarisce la missione del progetto, i benefici attesi e la trasparenza sull'uso dei dati e delle risorse.

---

## GENERALITÀ

### Contesto e Problematica
Il progetto **SVUOTAFRIGO** nasce dalla volontà di affrontare il problema dello spreco alimentare domestico, un tema di rilevanza globale con significativo impatto ambientale, economico e sociale. Secondo ricerche scientifiche, tra cui la tesi di dottorato di **Silvia Gaiani (2021)** - *"Spreco alimentare domestico: cause, conseguenze e strategie di riduzione"* - gran parte del cibo scartato nelle abitazioni potrebbe essere riutilizzato in maniera efficiente attraverso una migliore gestione degli ingredienti disponibili.

![Logo SVUOTAFRIGO](../img/logo_svuotafrigo.png)  
*Figura 1: Logo Ufficiale SVUOTAFRIGO - Identità visiva del progetto.*

### Genesi del Progetto
L'applicazione è stata sviluppata come risposta concreta a questa problematica, offrendo uno strumento tecnologico pratico e accessibile che supporti gli utenti nella gestione intelligente degli ingredienti domestici. Il progetto combina principi di sostenibilità ambientale, ottimizzazione delle risorse e inclusività alimentare.

### Obiettivi Principali
**A breve termine**:
- Fornire uno strumento immediato per ridurre lo spreco alimentare domestico
- Facilitare la pianificazione dei pasti basata su ingredienti disponibili
- Garantire accessibilità a persone con diverse esigenze alimentari

**A lungo termine**:
- Contribuire alla riduzione dell'impatto ambientale dello spreco alimentare
- Educare gli utenti a pratiche di consumo consapevole
- Creare una community di utenti che condividono ricette antispreco

### Target Utenti
**Utenti Primari**:
- Famiglie che desiderano ridurre sprechi e ottimizzare la spesa
- Persone con esigenze alimentari specifiche (allergie, diete religiose/etiche)
- Studenti e giovani professionisti con budget limitato

**Utenti Secondari**:
- Appassionati di cucina che vogliono sperimentare
- Persone attente alla sostenibilità ambientale
- Chiunque cerchi ispirazione culinaria quotidiana

---

## SCOPO

### Obiettivi Specifici e Misurabili
L'applicazione SVUOTAFRIGO si pone i seguenti obiettivi concreti:
1. **Riduzione Spreco**: Permettere agli utenti di utilizzare ingredienti già disponibili prima che vadano a male
2. **Personalizzazione**: Offrire suggerimenti di ricette adattate a esigenze dietetiche, religiose e mediche individuali
3. **Inclusività**: Garantire accessibilità attraverso filtri per allergie, intolleranze e scelte etiche
4. **Semplicità**: Fornire un'interfaccia intuitiva utilizzabile senza registrazione obbligatoria
5. **Contribuzione**: Permettere agli utenti registrati di arricchire il database con proprie ricette

### Funzionalità Principali
**Per tutti gli utenti** (ospiti e registrati):
- ✅ Ricerca ricette basata su ingredienti disponibili
- ✅ Filtri intelligenti (Portata, Stile di Vita, Intolleranze)
- ✅ Accesso a database di ricette pubbliche
- ✅ FAQ e supporto tecnico

**Per utenti registrati**:
- ✅ Creazione e salvataggio ricette personali
- ✅ Gestione archivio ricette personali
- ✅ Profilo personalizzato

---

## APPLICABILITÀ

### Casi d'Uso Principali
#### Caso d'Uso 1: Utente Occasionale
Maria ha in frigo zucchine, uova e formaggio in scadenza. Inserisce gli ingredienti, applica filtro "Vegetariana" e ottiene suggerimenti immediati.

#### Caso d'Uso 2: Utente con Intolleranze
Luca è celiaco e intollerante al lattosio. Cerca ricette con filtri "Senza Glutine" e "Senza Lattosio" e visualizza solo ricette sicure.

### Filtri Inclusivi Disponibili
**Diete Religiose/Etiche**: Halal, Kosher, Vegetariana, Vegana.  
**Intolleranze/Allergie**: Senza Glutine, Senza Lattosio, Senza Crostacei, Senza Frutta Secca.

---

## ARCHITETTURA SOFTWARE

### Pattern Architetturale
SVUOTAFRIGO è costruita seguendo il pattern **MVC (Model-View-Controller)**:
┌─────────────┐ ┌──────────────┐ ┌─────────────┐
│ Browser │ ───► │ Controller │ ───► │ Model │
│ (User) │ │ (Business │ │ (Database) │
└─────────────┘ │ Logic) │ └─────────────┘
▲ └──────────────┘ │
│ │ │
│ ┌──────────────┐ │
└─────────────│ View │◄────────────┘
│ (Mustache) │
└──────────────┘
code
Code
*Figura 2: Pattern Architetturale MVC - Schema della separazione dei componenti.*

### Gestione Dati ed Excel
Per facilitare l'amministrazione, il progetto utilizza **File di Excel** per il caricamento massivo del catalogo ingredienti. Questo permette di gestire migliaia di record offline e di sincronizzarli con il database MySQL tramite script di migrazione dedicati, garantendo un aggiornamento costante del database.

---

## RIFERIMENTI
1. **Gaiani, S. (2021)**. *"Spreco alimentare domestico: cause, conseguenze e strategie di riduzione"*.
2. **Standard**: WCAG 2.1 per l'accessibilità, PSR-12 per lo stile del codice PHP.

---
*Fine Manuale Generale - © 2026 0-Waste*