// Funcția pentru generarea tabelului
function genereazaTabel() {
    // Crearea elementului tabel
    const tabel = document.createElement('table');
    
    // Generarea rândurilor și celulelor tabelului
    for (let i = 1; i <= 9; i++) {
        // Creează un rând nou
        const rand = document.createElement('tr');
        
        // Adaugă prima celulă cu valoarea i
        const primaCelula = document.createElement('td');
        primaCelula.textContent = i;
        rand.appendChild(primaCelula);
        
        // Pentru fiecare rând, adaugă celule de la 1 la 9, exceptând i
        if (i < 9) { // Pentru rândurile 1-8, adăugăm toate celulele
            for (let j = 1; j <= 9; j++) {
                const celula = document.createElement('td');
                celula.textContent = j;
                rand.appendChild(celula);
            }
        }
        
        // Adaugă rândul la tabel
        tabel.appendChild(rand);
    }
    
    // Adaugă tabelul în container
    document.getElementById('result').appendChild(tabel);
}

// Apelarea funcției pentru generarea tabelului
genereazaTabel();