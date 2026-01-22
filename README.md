# MANUALE DI MANUTENZIONE - SVUOTAFRIGO v2.0

![Logo SVUOTAFRIGO](../img/logo_svuotafrigo.png)

---

## INFORMAZIONI GENERALI

### Identificazione Documento

- **Titolo**: Manuale di Manutenzione SVUOTAFRIGO
- **Versione**: 2.0
- **Data**: 20 Gennaio 2026
- **Azienda**: 0-Waste
- **Progetto**: SVUOTAFRIGO (Sistema Anti-Spreco Alimentare)

### Team di Sviluppo

- Andrea
- Irene
- Kappy
- AJ

### Versioning e Release

| Versione | Data | Modifiche Principali |
|----------|------|---------------------|
| 1.0 | - | Versione iniziale JavaScript (ingredienti, ricette filtrate, elenco completo) |
| 1.1 | - | Aggiunta form inserimento ricette utente |
| 1.2 | - | Algoritmo filtri v2, parametri portata, login/registrazione, DB InnoDB v1 |
| 2.0 | 2026-01 | Migrazione completa a PHP/Slim, DB InnoDB v2, filtri allergie/diete, architettura MVC |

### Scopo del Documento

Questo manuale fornisce tutte le informazioni necessarie per la **manutenzione ordinaria e straordinaria** dell'applicazione SVUOTAFRIGO, includendo:

- Architettura tecnica dettagliata
- Procedure di backup e restore
- Troubleshooting e risoluzione problemi
- Aggiornamenti e patch
- Monitoraggio e performance
- Sicurezza e hardening

---

## ARCHITETTURA TECNICA

### Stack Tecnologico

#### Backend
- **Linguaggio**: PHP 8.x
- **Framework**: Slim Framework 4.x
- **Template Engine**: Mustache.php 3.x
- **Database**: MySQL 8.x / MariaDB 10.5+
- **Data Access**: PDO (PHP Data Objects)
- **Dependency Manager**: Composer 2.x

#### Frontend
- **HTML**: HTML5
- **CSS**: CSS3 + Bootstrap 5.x
- **JavaScript**: Vanilla JS (ES6+)
- **Icons**: Font Awesome 6.x
- **Fonts**: Google Fonts

#### Server
- **Web Server**: Apache 2.4+ (mod_rewrite obbligatorio)
- **OS**: Windows/Linux/macOS
- **PHP Extensions**: PDO, PDO_MySQL, mbstring, json

### Pattern Architetturale: MVC

```
┌─────────────┐      ┌──────────────┐      ┌─────────────┐
│   Browser   │ ───► │  Controller  │ ───► │   Model     │
│   (Client)  │      │  (Business)  │      │ (Database)  │
└─────────────┘      └──────────────┘      └─────────────┘
       ▲                     │                     │
       │                     ▼                     │
       │             ┌──────────────┐             │
       └─────────────│     View     │◄────────────┘
                     │  (Mustache)  │
                     └──────────────┘
```

**Model**: `Database.php` (Singleton), future classi in `models/`  
**View**: Template Mustache (`.mst`) in `templates/`  
**Controller**: Classi in `controllers/` (10 controller)

### Middleware Pipeline

```
HTTP Request
    ↓
SessionMiddleware (gestione sessioni)
    ↓
UIMessageMiddleware (messaggi flash)
    ↓
FooterMiddleware (inject footer)
    ↓
MenuMiddleware (inject menu contestuale)
    ↓
PageMiddleware (init Page object)
    ↓
Controller (business logic)
    ↓
Mustache Rendering
    ↓
HTTP Response
```

### Struttura Directory

```
SVUOTAFRIGO/
├── .git/                       # Version control
├── .gitignore                  # Git ignore
├── .htaccess                   # Apache rewrite rules
├── Documentazione/             # Documentazione progetto
│   ├── MANUALE_GENERALE.md
│   ├── MANUALE_UTENTE.md
│   ├── MANUALE_MANUTENZIONE.md (questo file)
│   ├── DECISION_LOG.md
│   ├── CHANGELOG.txt
│   └── Screenshot/
│       └── diagramma_flusso.png
├── assets/                     # Asset statici
├── cache/                      # Cache Mustache (scrivibile)
│   └── mustache/
├── configuratores/             # Configuratori
│   ├── PageConfigurator.php
│   └── RouterConfigurator.php
├── controllers/                # 10 Controller MVC
│   ├── AccediController.php
│   ├── AssistenzaController.php
│   ├── CancellaRicettaController.php
│   ├── ContattiController.php
│   ├── CreaRicettaController.php
│   ├── EsciController.php
│   ├── HomeController.php
│   ├── MieRicetteController.php
│   ├── RegistratiController.php
│   └── RicetteController.php
├── img/                        # Immagini
├── includes/                   # Classi core (9 file)
│   ├── Application.php         # Singleton app
│   ├── Controller.php          # Controller base
│   ├── Database.php            # Singleton DB
│   ├── Page.php
│   ├── PageContainer.php
│   ├── PageElement.php
│   ├── TemplateEngine.php
│   ├── UIElement.php
│   └── UIMessage.php
├── messages/                   # Template messaggi
├── middlewares/                # 5 Middleware Slim
│   ├── FooterMiddleware.php
│   ├── MenuMiddleware.php
│   ├── PageMiddleware.php
│   ├── SessionMiddleware.php
│   └── UIMessageMiddleware.php
├── models/                     # Modelli (future)
├── stile/                      # CSS custom
├── templates/                  # Template Mustache
│   ├── css/
│   ├── js/
│   ├── ricette/               # 6 template ricette
│   └── ui/                    # 8 template UI
├── ui/                        # Componenti UI
├── vendor/                    # Composer dependencies
├── views/                     # Viste (future)
├── autoload.php               # Autoloader custom
├── composer.json              # Dipendenze
├── composer.lock              # Lock versioni
├── config.php                 # Configurazione
├── index.php                  # Entry point
├── menu.php                   # Menu dinamico
├── routes.php                 # Routing
├── structure.php              # Struttura app
└── svuotafrigo_db.sql        # Schema DB + seed
```

### Controller e Responsabilità

| Controller | Rotta | Responsabilità |
|------------|-------|----------------|
| `HomeController` | `/` | Homepage |
| `RicetteController` | `/ricette` | Ricerca ricette con filtri |
| `CreaRicettaController` | `/crea-ricetta` | Form creazione ricetta (auth richiesto) |
| `MieRicetteController` | `/le-mie-ricette` | Elenco ricette personali (auth richiesto) |
| `CancellaRicettaController` | `/cancella-ricetta` | Eliminazione ricetta (auth richiesto) |
| `RegistratiController` | `/registrati` | Registrazione nuovo utente |
| `AccediController` | `/accedi` | Login utente |
| `EsciController` | `/esci` | Logout |
| `AssistenzaController` | `/assistenza` | FAQ e supporto |
| `ContattiController` | `/contatti` | Form contatti |

### Database Schema

**DBMS**: MySQL 8.0+ / MariaDB 10.5+  
**Charset**: utf8mb4  
**Collation**: utf8mb4_unicode_ci

#### Tabella: `utenti`

| Colonna | Tipo | Vincoli | Descrizione |
|---------|------|---------|-------------|
| `id_utente` | INT | PK, AUTO_INCREMENT | ID univoco |
| `email` | VARCHAR(100) | UNIQUE, NOT NULL | Email login |
| `password` | VARCHAR(255) | NOT NULL | Password hash |
| `nome` | VARCHAR(50) | NULL | Nome visualizzato |

#### Tabella: `ricette`

| Colonna | Tipo | Vincoli | Descrizione |
|---------|------|---------|-------------|
| `id` | INT | PK, AUTO_INCREMENT | ID univoco ricetta |
| `titolo` | VARCHAR(255) | NOT NULL | Nome ricetta |
| `procedimento` | TEXT | NOT NULL | Istruzioni |
| `tipologia` | VARCHAR(50) | NULL | Antipasto/Primo/Secondo/Contorno/Dolce |
| `dieta_musulmana` | TINYINT(1) | DEFAULT 0 | Halal |
| `dieta_ebraica` | TINYINT(1) | DEFAULT 0 | Kosher |
| `vegetariana` | TINYINT(1) | DEFAULT 0 | Vegetariana |
| `vegana` | TINYINT(1) | DEFAULT 0 | Vegana |
| `senza_glutine` | TINYINT(1) | DEFAULT 0 | Gluten-free |
| `senza_lattosio` | TINYINT(1) | DEFAULT 0 | Lactose-free |
| `senza_crostacei` | TINYINT(1) | DEFAULT 1 | No shellfish |
| `senza_frutta_secca` | TINYINT(1) | DEFAULT 1 | No nuts |
| `id_utente` | INT | FK, NULL | Creatore (NULL = pubblica) |

#### Tabella: `ingredienti`

| Colonna | Tipo | Vincoli | Descrizione |
|---------|------|---------|-------------|
| `id` | INT | PK, AUTO_INCREMENT | ID univoco |
| `nome` | VARCHAR(100) | UNIQUE, NOT NULL | Nome ingrediente |

#### Tabella: `ricette_ingredienti` (Junction)

| Colonna | Tipo | Vincoli | Descrizione |
|---------|------|---------|-------------|
| `id_ricetta` | INT | FK | Riferimento ricetta |
| `id_ingrediente` | INT | FK | Riferimento ingrediente |

**PK Composita**: (`id_ricetta`, `id_ingrediente`)

#### Relazioni

```
utenti (1) ─────< (0..N) ricette
                      ↓
              ricette_ingredienti (junction)
                      ↓
ingredienti (1) ─────< (0..N) ricette_ingredienti
```

---

## DIAGRAMMA DI FLUSSO APPLICAZIONE

![Diagramma di Flusso SVUOTAFRIGO](Screenshot/diagramma_flusso.png)

### Descrizione Flusso Principale

#### 1. **Homepage** (`/`)
- Utente accede all'applicazione
- Scelta tra:
  - Cercare ricette (guest/authenticated)
  - Accedere/Registrarsi
  - Creare ricetta (solo authenticated)

#### 2. **Ricerca Ricette** (`/ricette`)
- Form inserimento ingredienti disponibili
- Selezione filtri:
  - **Portata**: Antipasto, Primo, Secondo, Contorno, Dolce
  - **Stile di Vita**: Halal, Kosher, Vegetariana, Vegana
  - **Intolleranze**: Senza Glutine, Senza Lattosio, Senza Crostacei, Senza Frutta Secca
- Algoritmo filtri (versione 3 PHP):
  - Matching ingredienti disponibili
  - Applicazione filtri selezionati
  - Ordinamento risultati per pertinenza
- Visualizzazione ricette filtrate:
  - Titolo, ingredienti, procedimento
  - Badge filtri applicabili

#### 3. **Registrazione/Login**
- **Registrazione** (`/registrati`):
  - Form: email, password, conferma password, nome (opzionale)
  - Validazione: email unica, password minimo 6 caratteri
  - Hash password (password_hash PHP)
  - Creazione utente in DB
  - Auto-login post-registrazione
- **Login** (`/accedi`):
  - Form: email, password
  - Verifica credenziali
  - password_verify() per hash
  - Creazione sessione utente
  - Redirect a homepage

#### 4. **Crea Ricetta** (`/crea-ricetta`) [Auth Required]
- Form multi-step:
  - **Step 1**: Titolo, procedimento, tipologia
  - **Step 2**: Ingredienti (dynamic add/remove)
  - **Step 3**: Filtri (checkboxes multi-selezione)
- Validazione server-side:
  - Titolo non vuoto
  - Procedimento non vuoto
  - Almeno 1 ingrediente
- Salvataggio:
  - Insert ricetta in `ricette` table
  - Insert ingredienti in `ingredienti` (se non esistono)
  - Insert giunzioni in `ricette_ingredienti`
  - Associazione `id_utente` corrente
- Redirect a "Le Mie Ricette"

#### 5. **Le Mie Ricette** (`/le-mie-ricette`) [Auth Required]
- Query ricette con `id_utente = sessione corrente`
- Visualizzazione lista ricette personali
- Azioni disponibili:
  - Visualizzazione dettaglio
  - Eliminazione ricetta (conferma richiesta)

#### 6. **Elimina Ricetta** (`/cancella-ricetta`) [Auth Required]
- Verifica ownership (`id_utente` == sessione)
- Cascade delete:
  - Delete giunzioni `ricette_ingredienti`
  - Delete ricetta `ricette`
- Redirect a "Le Mie Ricette"

#### 7. **Assistenza** (`/assistenza`)
- FAQ dinamiche
- Form contatti
- Link manuali PDF

#### 8. **Logout** (`/esci`)
- Distruzione sessione
- Redirect homepage

---

## PROCEDURE DI MANUTENZIONE

### Manutenzione Ordinaria

#### 1. Backup Database (Giornaliero)

**Automatizzazione consigliata**: Cron job (Linux) / Task Scheduler (Windows)

```bash
# Linux/Mac - Cron job
0 2 * * * /usr/bin/mysqldump -u root -p'PASSWORD' svuotafrigo > /backups/svuotafrigo_$(date +\%Y\%m\%d).sql

# Windows - PowerShell Script
$date = Get-Date -Format "yyyyMMdd_HHmmss"
$backupPath = "C:\Backups\svuotafrigo_$date.sql"
& "C:\Program Files\Ampps\mysql\bin\mysqldump.exe" -u root -pmysql svuotafrigo > $backupPath

# Verifica backup creato
if (Test-Path $backupPath) {
    Write-Host "Backup completato: $backupPath"
} else {
    Write-Host "ERRORE: Backup fallito!" -ForegroundColor Red
}
```

**Retention Policy**: Mantenere backup ultimi 30 giorni, poi archiviazione mensile

#### 2. Pulizia Cache Template (Settimanale)

```bash
# Linux/Mac
rm -rf cache/mustache/*

# Windows PowerShell
Remove-Item "cache\mustache\*" -Recurse -Force
```

**Quando necessario**:
- Dopo modifica template `.mst`
- Dopo aggiornamento Mustache.php
- Se rendering anomalo

#### 3. Monitoraggio Log Errori PHP

**Log Apache/PHP**: Controllare settimanalmente

```bash
# Linux
tail -n 100 /var/log/apache2/error.log

# Windows AMPPS
notepad "C:\Program Files\Ampps\apache\logs\error.log"
```

**Errori critici da monitorare**:
- Fatal errors (500)
- Database connection failures
- Session errors
- Deprecated function warnings

#### 4. Verifica Spazio Disco

```bash
# Linux
df -h /var/www/html/SVUOTAFRIGO

# Windows PowerShell
Get-PSDrive C | Select-Object Used,Free
```

**Soglie di allerto**:
- Disco < 10% libero: Critico
- Disco < 20% libero: Warning

#### 5. Controllo Integrità Database

```sql
-- Eseguire mensilmente
USE svuotafrigo;

-- Check tabelle
CHECK TABLE utenti, ricette, ingredienti, ricette_ingredienti;

-- Ottimizza tabelle
OPTIMIZE TABLE utenti, ricette, ingredienti, ricette_ingredienti;

-- Verifica foreign keys
SELECT 
    TABLE_NAME, 
    CONSTRAINT_NAME 
FROM information_schema.TABLE_CONSTRAINTS 
WHERE CONSTRAINT_TYPE = 'FOREIGN KEY' 
    AND TABLE_SCHEMA = 'svuotafrigo';
```

### Manutenzione Straordinaria

#### 1. Aggiornamento Dipendenze Composer

```bash
cd /path/to/SVUOTAFRIGO

# Backup composer.lock corrente
cp composer.lock composer.lock.backup

# Update dipendenze
composer update

# Test applicazione
php -S localhost:8000 index.php

# Se OK, commit
git add composer.lock
git commit -m "chore: update dependencies"

# Se problemi, rollback
cp composer.lock.backup composer.lock
composer install
```

**Frequency**: Trimestrale o per security patches

#### 2. Migrazione Database (Schema Changes)

**Procedura**:

1. **Backup pre-migrazione** (critico!)
```bash
mysqldump -u root -p svuotafrigo > backup_pre_migration_$(date +%Y%m%d).sql
```

2. **Preparare script migrazione**
```sql
-- migrations/migration_v2.1.sql
USE svuotafrigo;

-- Esempio: Aggiunta colonna
ALTER TABLE ricette 
ADD COLUMN tempo_preparazione INT NULL COMMENT 'Minuti preparazione';

-- Esempio: Aggiunta indice
CREATE INDEX idx_ricette_tipologia ON ricette(tipologia);
```

3. **Applicare migrazione**
```bash
mysql -u root -p svuotafrigo < migrations/migration_v2.1.sql
```

4. **Verifica**
```sql
DESCRIBE ricette;
SHOW INDEX FROM ricette;
```

5. **Update versione applicazione**
```php
// config.php
define('APP_VERSION', '2.1');
```

#### 3. Aggiornamento PHP Major Version

**Esempio: PHP 8.1 → PHP 8.2**

1. **Test compatibilità locale**
```bash
# Usare Docker per test
docker run -v $(pwd):/app -w /app php:8.2-cli composer install
docker run -v $(pwd):/app -w /app php:8.2-cli php -l index.php
```

2. **Deprecation check**
```bash
# Analisi statica
composer require --dev phpstan/phpstan
vendor/bin/phpstan analyse controllers includes middlewares --level=8
```

3. **Aggiornamento server**
```bash
# Backup completo
tar -czf svuotafrigo_backup_php81.tar.gz /var/www/html/SVUOTAFRIGO

# Installare PHP 8.2
# (Varia per OS/distribuzione)

# Update Apache config
a2dismod php8.1
a2enmod php8.2
systemctl restart apache2

# Verifica
php -v
```

4. **Test funzionale**
- Login/Logout
- Ricerca ricette
- Creazione ricetta
- Eliminazione ricetta

---

## TROUBLESHOOTING

### Problema 1: Database Connection Failed

**Errore**: `"Errore di connessione al database"` o PDO Exception

**Cause possibili**:
1. MySQL/MariaDB non in esecuzione
2. Credenziali errate in `Database.php`
3. Database `svuotafrigo` non esiste
4. Firewall blocca porta 3306

**Diagnosi**:

```bash
# 1. Verificare servizio MySQL
# Linux
systemctl status mysql

# Windows
"C:\Program Files\Ampps\mysql\bin\mysql.exe" --version

# 2. Test connessione manuale
mysql -u root -p -e "SHOW DATABASES;"

# 3. Verificare esistenza database
mysql -u root -p -e "SHOW DATABASES LIKE 'svuotafrigo';"

# 4. Test porta 3306
telnet localhost 3306
# O
nc -zv localhost 3306
```

**Soluzioni**:

```bash
# Se MySQL non running
systemctl start mysql  # Linux
# O avviare AMPPS Control Panel (Windows)

# Se database non esiste
mysql -u root -p -e "CREATE DATABASE svuotafrigo CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
mysql -u root -p svuotafrigo < svuotafrigo_db.sql

# Se credenziali errate, modificare
# includes/Database.php linee 10-13
```

### Problema 2: 404 Not Found su Tutte le Route

**Errore**: Tutte le route (tranne `/`) ritornano 404

**Causa**: `mod_rewrite` non attivo o `.htaccess` ignorato

**Diagnosi**:

```bash
# Verificare mod_rewrite
apache2ctl -M | grep rewrite  # Linux
httpd -M | grep rewrite       # Windows

# Verificare .htaccess presente
ls -la .htaccess

# Verificare AllowOverride in Apache config
cat /etc/apache2/sites-available/000-default.conf | grep -A5 Directory
```

**Soluzioni**:

```bash
# Abilitare mod_rewrite
a2enmod rewrite
systemctl restart apache2

# Modificare Apache config
# /etc/apache2/sites-available/000-default.conf
<Directory /var/www/html/SVUOTAFRIGO>
    AllowOverride All
    Require all granted
</Directory>

# Restart Apache
systemctl restart apache2
```

### Problema 3: Template Not Found

**Errore**: `Mustache_Exception_UnknownTemplateException`

**Cause**:
1. Template `.mst` non esistente
2. Path `TEMPLATES_FOLDER` errato in `config.php`
3. Permessi file insufficienti

**Diagnosi**:

```bash
# Verificare template esiste
ls -la templates/ui/homepage.mst

# Verificare config
grep TEMPLATES_FOLDER config.php

# Verificare permessi
ls -la templates/
```

**Soluzioni**:

```bash
# Correggere permessi
chmod -R 755 templates/

# Verificare config.php
# define("TEMPLATES_FOLDER", __DIR__ . "/templates");

# Verificare nome file template in controller
# Es: 'ui/homepage' → cerca 'templates/ui/homepage.mst'
```

### Problema 4: Sessione Non Persiste (Logout Automatico)

**Causa**: Session storage o session cookie config

**Diagnosi**:

```php
// Aggiungere debug in SessionMiddleware.php
echo "Session ID: " . session_id() . "<br>";
echo "Session Data: ";
print_r($_SESSION);
```

**Soluzioni**:

```php
// SessionMiddleware.php - Aggiungere opzioni
session_start([
    'cookie_lifetime' => 86400, // 24 ore
    'gc_maxlifetime' => 86400,
    'cookie_httponly' => true,
    'cookie_secure' => false, // true se HTTPS
]);
```

```bash
# Verificare permessi session directory
ls -la /var/lib/php/sessions  # Linux
# O in php.ini: session.save_path
```

### Problema 5: Form Submission Non Funziona

**Sintomi**: POST non riceve dati o redirect errato

**Diagnosi**:

```php
// Aggiungere debug in controller
var_dump($_POST);
var_dump($request->getParsedBody());
die();
```

**Cause comuni**:
1. Form action errato
2. Method POST non specificato
3. CSRF token mancante (se implementato)
4. Middleware interferenza

**Soluzioni**:

```html
<!-- Verificare form HTML -->
<form action="/rotta-corretta" method="POST">
    <!-- campos -->
</form>
```

```php
// Controller - Recupero dati
$data = $request->getParsedBody();
$email = $data['email'] ?? '';
```

### Problema 6: Errori dopo Update Composer

**Sintomi**: Fatal error, class not found dopo `composer update`

**Soluzione Rapida**:

```bash
# Rollback composer.lock
git checkout composer.lock
composer install

# O restore backup
cp composer.lock.backup composer.lock
composer install

# Clear autoload cache
composer dump-autoload
```

---

## PROCEDURE DI BACKUP E RESTORE

### Backup Completo Applicazione

#### Script Backup Completo (Linux/Mac)

```bash
#!/bin/bash
# backup_complete.sh

DATE=$(date +%Y%m%d_%H%M%S)
BACKUP_DIR="/backups/svuotafrigo"
APP_DIR="/var/www/html/SVUOTAFRIGO"

# Creare directory backup
mkdir -p "$BACKUP_DIR"

# 1. Backup Database
echo "Backup database..."
mysqldump -u root -p'PASSWORD' svuotafrigo > "$BACKUP_DIR/db_$DATE.sql"

# 2. Backup File Applicazione (escluso vendor e cache)
echo "Backup file applicazione..."
tar -czf "$BACKUP_DIR/app_$DATE.tar.gz" \
    --exclude='vendor' \
    --exclude='cache' \
    --exclude='.git' \
    -C "$APP_DIR" .

# 3. Backup Configurazione (separato)
echo "Backup configurazione..."
cp "$APP_DIR/config.php" "$BACKUP_DIR/config_$DATE.php"
cp "$APP_DIR/includes/Database.php" "$BACKUP_DIR/Database_$DATE.php"

# 4. Verifica integrità
echo "Verifica integrità..."
if [ -f "$BACKUP_DIR/db_$DATE.sql" ] && [ -f "$BACKUP_DIR/app_$DATE.tar.gz" ]; then
    echo "✓ Backup completato con successo: $DATE"
    ls -lh "$BACKUP_DIR"/*$DATE*
else
    echo "✗ ERRORE: Backup fallito!"
    exit 1
fi

# 5. Cleanup backup vecchi (>30 giorni)
find "$BACKUP_DIR" -name "*.sql" -mtime +30 -delete
find "$BACKUP_DIR" -name "*.tar.gz" -mtime +30 -delete
```

#### Script Backup Completo (Windows PowerShell)

```powershell
# backup_complete.ps1

$date = Get-Date -Format "yyyyMMdd_HHmmss"
$backupDir = "C:\Backups\SVUOTAFRIGO"
$appDir = "C:\Program Files\Ampps\www\SVUOTAFRIGO"
$mysqlBin = "C:\Program Files\Ampps\mysql\bin"

# Creare directory backup
New-Item -ItemType Directory -Force -Path $backupDir | Out-Null

# 1. Backup Database
Write-Host "Backup database..."
& "$mysqlBin\mysqldump.exe" -u root -pmysql svuotafrigo > "$backupDir\db_$date.sql"

# 2. Backup File Applicazione
Write-Host "Backup file applicazione..."
$compress = @{
    Path = "$appDir\*"
    Destination = "$backupDir\app_$date.zip"
    CompressionLevel = "Optimal"
    Exclude = "vendor", "cache", ".git"
}
Compress-Archive @compress

# 3. Backup Configurazione
Write-Host "Backup configurazione..."
Copy-Item "$appDir\config.php" "$backupDir\config_$date.php"
Copy-Item "$appDir\includes\Database.php" "$backupDir\Database_$date.php"

# 4. Verifica
if ((Test-Path "$backupDir\db_$date.sql") -and (Test-Path "$backupDir\app_$date.zip")) {
    Write-Host "✓ Backup completato: $date" -ForegroundColor Green
    Get-ChildItem "$backupDir\*$date*"
} else {
    Write-Host "✗ ERRORE: Backup fallito!" -ForegroundColor Red
    exit 1
}

# 5. Cleanup (>30 giorni)
Get-ChildItem "$backupDir\*.sql" | Where-Object {$_.LastWriteTime -lt (Get-Date).AddDays(-30)} | Remove-Item
Get-ChildItem "$backupDir\*.zip" | Where-Object {$_.LastWriteTime -lt (Get-Date).AddDays(-30)} | Remove-Item
```

### Procedura Restore Completo

#### 1. Restore Database

```bash
# ATTENZIONE: Questo sovrascriverà il database corrente!

# Backup database corrente (precauzione)
mysqldump -u root -p svuotafrigo > svuotafrigo_before_restore.sql

# Drop database corrente
mysql -u root -p -e "DROP DATABASE IF EXISTS svuotafrigo;"

# Ricreare database
mysql -u root -p -e "CREATE DATABASE svuotafrigo CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"

# Restore da backup
mysql -u root -p svuotafrigo < /backups/svuotafrigo/db_20260120_140000.sql

# Verifica
mysql -u root -p svuotafrigo -e "SELECT COUNT(*) FROM ricette;"
```

#### 2. Restore File Applicazione

```bash
# Backup directory corrente (precauzione)
mv /var/www/html/SVUOTAFRIGO /var/www/html/SVUOTAFRIGO.old

# Creare directory nuova
mkdir /var/www/html/SVUOTAFRIGO
cd /var/www/html/SVUOTAFRIGO

# Estrarre backup
tar -xzf /backups/svuotafrigo/app_20260120_140000.tar.gz

# Restore vendor (rerun Composer)
composer install --no-dev --optimize-autoloader

# Restore config se modificato
# (Opzionale se non nel backup)
cp /backups/svuotafrigo/config_20260120_140000.php config.php

# Permessi cache
chmod -R 775 cache/
chown -R www-data:www-data cache/

# Test applicazione
curl -I http://localhost/SVUOTAFRIGO/
```

### Restore Parziale (Solo Database)

```bash
# Esempio: Restore solo tabella utenti
mysqldump -u root -p svuotafrigo utenti > backup_utenti.sql
mysql -u root -p svuotafrigo < backup_utenti.sql
```

---

## SICUREZZA E HARDENING

### Misure Implementate ✅

#### 1. SQL Injection Prevention
- **Prepared Statements**: Sempre usati via PDO
- **Parametri Bound**: `:placeholder` syntax

```php
// CORRETTO ✅
$stmt = $db->prepare("SELECT * FROM ricette WHERE id = :id");
$stmt->execute([':id' => $id]);

// SBAGLIATO ❌ MAI FARE COSÌ
$query = "SELECT * FROM ricette WHERE id = $id";
```

#### 2. XSS Prevention
- **Auto-escape Mustache**: Di default escape HTML
- **Triple-stash solo quando sicuro**: `{{{raw}}}` solo per HTML fidato

```mustache
{{! Auto-escaped ✅ }}
<h1>{{titolo}}</h1>

{{! Raw - solo se fidato ⚠️ }}
<div>{{{html_content}}}</div>
```

#### 3. Session Management
- **Session Middleware**: Gestione centralizzata
- **Session regeneration**: (TODO: implementare on login)

### Vulnerabilità Note e Mitigazioni ⚠️

#### 1. CSRF Protection: NON IMPLEMENTATO

**Rischio**: Form può essere sottomesso da siti esterni  
**Impatto**: Medio-Alto  
**Priorità**: Alta

**Implementazione Consigliata**:

```php
// includes/CSRFProtection.php (da creare)
class CSRFProtection {
    public static function generateToken() {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        if (empty($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
        return $_SESSION['csrf_token'];
    }
    
    public static function validateToken($token) {
        return hash_equals($_SESSION['csrf_token'] ?? '', $token);
    }
}

// In controller POST
$submittedToken = $request->getParsedBody()['csrf_token'] ?? '';
if (!CSRFProtection::validateToken($submittedToken)) {
    throw new Exception('CSRF token invalid');
}

// In template Mustache
<input type="hidden" name="csrf_token" value="{{csrf_token}}">
```

#### 2. Password Hashing: DA VERIFICARE

**Stato**: Campo VARCHAR(255) presente ma algoritmo non verificato  
**Raccomandato**: `password_hash()` con BCRYPT/ARGON2

```php
// Registrazione
$hashedPassword = password_hash($plainPassword, PASSWORD_ARGON2ID);
// O PASSWORD_BCRYPT

// Login verification
if (password_verify($plainPassword, $hashedPassword)) {
    // Login OK
}
```

#### 3. Session Timeout: NON CONFIGURATO

**Raccomandato**: Timeout 30 minuti inattività

```php
// SessionMiddleware.php
$timeout = 1800; // 30 minuti
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $timeout)) {
    session_unset();
    session_destroy();
    header('Location: /accedi?timeout=1');
    exit;
}
$_SESSION['LAST_ACTIVITY'] = time();
```

#### 4. Rate Limiting: NON IMPLEMENTATO

**Rischio**: Brute force su login  
**Implementazione**:

```php
// includes/RateLimiter.php
class RateLimiter {
    public static function checkLoginAttempts($email) {
        $key = "login_attempts_" . md5($email);
        $attempts = $_SESSION[$key] ?? 0;
        $timestamp = $_SESSION[$key . '_time'] ?? time();
        
        // Reset dopo 15 minuti
        if (time() - $timestamp > 900) {
            $attempts = 0;
        }
        
        if ($attempts >= 5) {
            throw new Exception('Troppi tentativi. Riprova tra 15 minuti.');
        }
        
        $_SESSION[$key] = $attempts + 1;
        $_SESSION[$key . '_time'] = time();
    }
}
```

#### 5. HTTPS Enforcement: NON CONFIGURATO

**Produzione**: Sempre usare HTTPS

```apache
# .htaccess - Force HTTPS
RewriteEngine On
RewriteCond %{HTTPS} off
RewriteRule ^ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
```

#### 6. Security Headers: NON CONFIGURATI

```apache
# .htaccess
<IfModule mod_headers.c>
    # XSS Protection
    Header set X-XSS-Protection "1; mode=block"
    
    # Prevent clickjacking
    Header set X-Frame-Options "SAMEORIGIN"
    
    # Content type sniffing
    Header set X-Content-Type-Options "nosniff"
    
    # CSP (Content Security Policy)
    Header set Content-Security-Policy "default-src 'self'; script-src 'self' 'unsafe-inline'; style-src 'self' 'unsafe-inline';"
</IfModule>
```

### Checklist Sicurezza Produzione

- [x] SQL Injection prevention (prepared statements)
- [x] XSS prevention (Mustache escape)
- [x] Session management presente
- [ ] **CSRF protection** ⚠️ CRITICO
- [ ] **Password hashing verification** ⚠️ Alta priorità
- [ ] **Session timeout** ⚠️ Alta priorità
- [ ] **Rate limiting login** ⚠️ Media priorità
- [ ] **HTTPS enforcement** ⚠️ CRITICO per produzione
- [ ] **Security headers** ⚠️ Alta priorità
- [ ] **Input validation completa** ⚠️ Media priorità
- [ ] **File upload validation** (se implementato)
- [ ] **Audit logging** (login, modifiche critiche)

---

## MONITORAGGIO E PERFORMANCE

### Metriche da Monitorare

#### 1. Performance Database

```sql
-- Query lente (>1 secondo)
SELECT * FROM information_schema.PROCESSLIST 
WHERE TIME > 1 AND COMMAND != 'Sleep';

-- Table sizes
SELECT 
    table_name,
    ROUND(((data_length + index_length) / 1024 / 1024), 2) AS "Size (MB)"
FROM information_schema.TABLES 
WHERE table_schema = 'svuotafrigo'
ORDER BY (data_length + index_length) DESC;

-- Index usage
SHOW INDEX FROM ricette;
```

#### 2. PHP Error Log Monitoring

```bash
# Monitorare errori in real-time
tail -f /var/log/apache2/error.log | grep SVUOTAFRIGO

# Contare errori ultimi 7 giorni
grep -i "error\|warning" /var/log/apache2/error.log | wc -l
```

#### 3. Disk Usage

```bash
# Monitorare crescita database
du -sh /var/lib/mysql/svuotafrigo/

# Monitorare cache
du -sh cache/mustache/
```

### Ottimizzazioni Consigliate

#### 1. Database Indexing

```sql
-- Indici consigliati
CREATE INDEX idx_ricette_utente ON ricette(id_utente);
CREATE INDEX idx_ricette_tipologia ON ricette(tipologia);
CREATE INDEX idx_ingredienti_nome ON ingredienti(nome);

-- Query optimization
EXPLAIN SELECT * FROM ricette WHERE id_utente = 1;
```

#### 2. Caching Template

Già implementato via Mustache cache (`cache/mustache/`)

#### 3. Composer Autoload Optimization

```bash
composer dump-autoload --optimize --classmap-authoritative
```

#### 4. PHP OPcache (Raccomandato)

```ini
; php.ini
opcache.enable=1
opcache.memory_consumption=128
opcache.max_accelerated_files=10000
opcache.revalidate_freq=2
```

---

## DEPLOYMENT E CONFIGURAZIONE

### Requisiti Minimi Server

- **CPU**: 1 core
- **RAM**: 1 GB
- **Disk**: 5 GB disponibili
- **Network**: Connessione stabile

### Requisiti Consigliati Produzione

- **CPU**: 2+ core
- **RAM**: 4 GB
- **Disk**: 20 GB SSD
- **Network**: 100 Mbps

### Checklist Pre-Deployment

- [ ] Backup database completo
- [ ] Test locale OK su tutti i flussi principali
- [ ] Composer dependencies aggiornate
- [ ] Config.php configurato per produzione
- [ ] Database.php credenziali produzione
- [ ] Cache directory permessi 775
- [ ] .htaccess presente e configurato
- [ ] mod_rewrite Apache abilitato
- [ ] PHP >= 8.0 installato
- [ ] MySQL >= 8.0 installato
- [ ] Estensioni PHP necesssarie (PDO, PDO_MySQL, mbstring, json)
- [ ] HTTPS configurato (Let's Encrypt)
- [ ] Security headers configurati
- [ ] Error reporting disabilitato in produzione

### Configurazione Produzione

```php
// config.php - Modifiche produzione
define("BASE_PATH", "/");  // O subdirectory se necessario
define("APP_ENV", "production");
define("DEBUG_MODE", false);

// Error reporting OFF in produzione
if (APP_ENV === 'production') {
    ini_set('display_errors', 0);
    error_reporting(0);
} else {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
}
```

```php
// includes/Database.php - Credenziali produzione
private $host = 'localhost';
private $db   = 'svuotafrigo';
private $user = 'svuotafrigo_user';  // NON root!
private $pass = 'STRONG_PASSWORD_HERE';  // NON 'mysql'!
```

### Configurazione Apache VirtualHost Produzione

```apache
<VirtualHost *:443>
    ServerName svuotafrigo.example.com
    DocumentRoot /var/www/html/SVUOTAFRIGO
    
    # SSL Configuration
    SSLEngine on
    SSLCertificateFile /etc/letsencrypt/live/svuotafrigo.example.com/fullchain.pem
    SSLCertificateKeyFile /etc/letsencrypt/live/svuotafrigo.example.com/privkey.pem
    
    <Directory /var/www/html/SVUOTAFRIGO>
        Options -Indexes +FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
    
    # Log
    ErrorLog ${APACHE_LOG_DIR}/svuotafrigo_error.log
    CustomLog ${APACHE_LOG_DIR}/svuotafrigo_access.log combined
</VirtualHost>

# Redirect HTTP to HTTPS
<VirtualHost *:80>
    ServerName svuotafrigo.example.com
    Redirect permanent / https://svuotafrigo.example.com/
</VirtualHost>
```

---

## TESTING

### Stato Attuale

**Framework Testing**: ❌ Non implementato  
**Metodologia**: Testing manuale

### Testing Strategy Consigliata

#### 1. Unit Testing (PHPUnit)

```bash
composer require --dev phpunit/phpunit
```

```php
// tests/Unit/DatabaseTest.php
use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase {
    public function testDatabaseConnection() {
        $db = Database::getInstance();
        $this->assertInstanceOf(PDO::class, $db->getConnection());
    }
}
```

#### 2. Integration Testing

```php
// tests/Integration/RicetteControllerTest.php
class RicetteControllerTest extends TestCase {
    public function testRicercaRicette() {
        // Test ricerca con ingredienti
        // Test applicazione filtri
        // Test nessun risultato
    }
}
```

#### 3. End-to-End Testing

**Tool consigliato**: Selenium / Playwright

**Test Cases**:
1. Homepage caricamento
2. Ricerca ricette (guest)
3. Registrazione nuovo utente
4. Login
5. Creazione ricetta
6. Visualizzazione "Le Mie Ricette"
7. Eliminazione ricetta
8. Logout

### Test Manuali per Release

#### Checklist Test Pre-Release

**Funzionalità Core**:
- [ ] Homepage carica correttamente
- [ ] Menu navigazione funziona (guest/authenticated)
- [ ] Ricerca ricette senza filtri
- [ ] Ricerca ricette con filtri multipli
- [ ] Ricerca senza risultati mostra messaggio
- [ ] Registrazione nuovo utente (email unica)
- [ ] Registrazione fallisce con email duplicata
- [ ] Login con credenziali corrette
- [ ] Login fallisce con credenziali errate
- [ ] Crea ricetta (title, procedimento, ingredienti, filtri)
- [ ] Le Mie Ricette mostra solo ricette utente
- [ ] Elimina ricetta (con conferma)
- [ ] Logout funziona
- [ ] Form contatti invia messaggio
- [ ] Assistenza/FAQ caricano

**Cross-Browser** (consigliato):
- [ ] Chrome
- [ ] Firefox
- [ ] Safari
- [ ] Edge

**Responsive** (consigliato):
- [ ] Desktop (1920x1080)
- [ ] Tablet (768x1024)
- [ ] Mobile (375x667)

---

## GESTIONE VERSIONI E CHANGELOG

### Semantic Versioning

SVUOTAFRIGO segue **Semantic Versioning 2.0.0**:

```
MAJOR.MINOR.PATCH

MAJOR: Breaking changes (incompatibilità)
MINOR: Nuove funzionalità (retrocompatibili)
PATCH: Bug fixes (retrocompatibili)
```

**Esempi**:
- `2.0.0` → Migrazione PHP/Slim (breaking)
- `2.1.0` → Aggiunta upload immagini ricette (feature)
- `2.1.1` → Fix bug ricerca ingredienti (patch)

### Procedura Release

#### 1. Preparazione Release

```bash
# Update versione in config.php
# define('APP_VERSION', '2.1.0');

# Update CHANGELOG.txt
# Aggiungere entry con data e modifiche

# Commit modifiche
git add config.php Documentazione/CHANGELOG.txt
git commit -m "chore: bump version to 2.1.0"
```

#### 2. Git Tag

```bash
git tag -a v2.1.0 -m "Release 2.1.0 - Upload immagini ricette"
git push origin v2.1.0
```

#### 3. Deployment Produzione

```bash
# Su server produzione
git pull origin main
git checkout v2.1.0
composer install --no-dev --optimize-autoloader

# Run migrations se necessario
mysql -u root -p svuotafrigo < migrations/migration_v2.1.sql

# Clear cache
rm -rf cache/mustache/*

# Restart servizi
sudo systemctl restart apache2
```

#### 4. Verifica Post-Deploy

- [ ] Applicazione raggiungibile
- [ ] Login funziona
- [ ] Nuove feature funzionano
- [ ] No errori in log

---

## CONTATTI E SUPPORTO

### Team 0-Waste

- **Email supporto**: support@0-waste.example.com
- **Email tecnico**: tech@0-waste.example.com

### Repository

- **Git**: (specificare URL se pubblico)
- **Issues**: (specificare URL issue tracker)

### Documentazione

- **Manuale Generale**: `Documentazione/MANUALE_GENERALE.md`
- **Manuale Utente**: `Documentazione/MANUALE_UTENTE.md`
- **Manuale Manutenzione**: `Documentazione/MANUALE_MANUTENZIONE.md` (questo documento)

### Escalation Path

1. **Supporto Tier 1**: FAQ e documentazione
2. **Supporto Tier 2**: Email supporto (risposta entro 24h)
3. **Supporto Tier 3**: Team tecnico (issue critici)

---

## APPENDICI

### A. Comandi Utili

#### Database

```bash
# Connessione MySQL
mysql -u root -p svuotafrigo

# Backup rapido
mysqldump -u root -p svuotafrigo > backup.sql

# Restore rapido
mysql -u root -p svuotafrigo < backup.sql

# Count records
mysql -u root -p svuotafrigo -e "SELECT COUNT(*) FROM ricette;"
```

#### Composer

```bash
# Install dipendenze
composer install

# Update dipendenze
composer update

# Autoload optimization
composer dump-autoload --optimize
```

#### Git

```bash
# Status
git status

# Commit
git add .
git commit -m "messaggio"

# Push
git push origin main

# Tag
git tag -a v2.0.0 -m "Release 2.0"
git push origin v2.0.0
```

### B. Configurazioni di Riferimento

#### php.ini (Snippet Produzione)

```ini
; Error handling
display_errors = Off
log_errors = On
error_log = /var/log/php/error.log

; Security
expose_php = Off
allow_url_fopen = Off
allow_url_include = Off

; Performance
max_execution_time = 30
memory_limit = 256M
upload_max_filesize = 10M
post_max_size = 10M

; Sessions
session.cookie_httponly = 1
session.cookie_secure = 1
session.use_strict_mode = 1

; OPcache
opcache.enable = 1
opcache.memory_consumption = 128
opcache.max_accelerated_files = 10000
```

#### MySQL Configuration (my.cnf Snippet)

```ini
[mysqld]
character-set-server = utf8mb4
collation-server = utf8mb4_unicode_ci
max_connections = 100
innodb_buffer_pool_size = 1G
innodb_log_file_size = 256M
```

### C. Glossario

| Termine | Definizione |
|---------|-------------|
| **MVC** | Model-View-Controller pattern architetturale |
| **PSR-7** | PHP Standard Recommendation: HTTP Message Interface |
| **PSR-15** | PHP Standard Recommendation: HTTP Server Request Handlers |
| **Middleware** | Software che processa richieste HTTP prima del controller |
| **ORM** | Object-Relational Mapping (non usato in questo progetto) |
| **PDO** | PHP Data Objects - astrazione database |
| **Mustache** | Logic-less template engine |
| **Singleton** | Design pattern che garantisce singola istanza classe |
| **CSRF** | Cross-Site Request Forgery attack |
| **XSS** | Cross-Site Scripting attack |
| **SQL Injection** | Attacco tramite input SQL malevolo |

### D. FAQ Tecniche

#### D.1. Come aggiungo un nuovo controller?

1. Creare file `controllers/NuovoController.php`
2. Estendere classe `Controller`
3. Implementare metodi richiesti
4. Aggiungere route in `routes.php`
5. Creare template Mustache in `templates/`

```php
// controllers/NuovoController.php
class NuovoController extends Controller {
    public function mostra($request, $response, $args) {
        return $this->render($response, 'ui/nuovo_template', [
            'titolo' => 'Nuova Pagina'
        ]);
    }
}

// routes.php
$app->get('/nuovo', [NuovoController::class, 'mostra']);
```

#### D.2. Come aggiungo una nuova tabella al database?

1. Creare migration SQL
2. Applicare migration
3. Aggiornare `svuotafrigo_db.sql` per nuove installazioni
4. (Opzionale) Creare Model class in `models/`

```sql
-- migrations/add_commenti_table.sql
CREATE TABLE commenti (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_ricetta INT NOT NULL,
    id_utente INT NOT NULL,
    testo TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_ricetta) REFERENCES ricette(id) ON DELETE CASCADE,
    FOREIGN KEY (id_utente) REFERENCES utenti(id_utente) ON DELETE CASCADE
);
```

#### D.3. Come cambio porta MySQL da 3306?

```php
// includes/Database.php
private $host = 'localhost:3307';  // O
private $dsn = "mysql:host=localhost;port=3307;dbname=svuotafrigo;charset=utf8mb4";
```

---

## CRONOLOGIA REVISIONI

| Versione Manuale | Data | Autore | Modifiche |
|------------------|------|--------|-----------|
| 1.0 | 2026-01-20 | Team 0-Waste | Prima versione completa con integrazione diagramma flusso |

---

**Fine Manuale di Manutenzione SVUOTAFRIGO v2.0**

*Documento generato il: 20 Gennaio 2026*  
*Azienda: 0-Waste*  
*Progetto: SVUOTAFRIGO - Sistema Anti-Spreco Alimentare*
