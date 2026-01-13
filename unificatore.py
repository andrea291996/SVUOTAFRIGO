import os

output_file = "progetto_integrale.txt"
# Aggiungiamo 'vendor' e 'cache' alle cartelle da saltare
cartelle_da_ignorare = {'vendor', 'cache', '.git'}

with open(output_file, 'w', encoding='utf-8') as f_out:
    for root, dirs, files in os.walk('.'):
        # Modifica dirs sul posto per saltare le cartelle ignorate
        dirs[:] = [d for d in dirs if d not in cartelle_da_ignorare]
        
        for file in files:
            if file in (output_file, "unificatore.py", "composer.lock"):
                continue
                
            percorso_completo = os.path.join(root, file)
            f_out.write(f"\n{'#'*60}\n")
            f_out.write(f"PERCORSO FILE: {percorso_completo}\n")
            f_out.write(f"{'#'*60}\n\n")
            
            try:
                with open(percorso_completo, 'r', encoding='utf-8') as f_in:
                    f_out.write(f_in.read())
            except Exception:
                f_out.write(f"[FILE BINARIO O NON TESTUALE O ERRORE: {percorso_completo}]\n")
            
            f_out.write("\n\n")

print(f"Completato! File generato: {output_file}")