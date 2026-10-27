const fs = require('fs');
const path = require('path');

const BASE_DIR = 'C:/xampp-school/htdocs/MesProjets/Sujets';

let totalFiles = 0;
let totalBytes = 0;
let theoSujets = 0;
let theoCorriges = 0;
let pratSujets = 0;
let pratCorriges = 0;

console.log('--- RECAPITULATIF PAR ANNEE ---');
for (let y = 2008; y <= 2026; y++) {
    const yDir = path.join(BASE_DIR, String(y));
    if (!fs.existsSync(yDir)) continue;
    const files = fs.readdirSync(yDir);
    let yTheo = 0, yTheoC = 0, yPrat = 0, yPratC = 0;

    for (const f of files) {
        const stats = fs.statSync(path.join(yDir, f));
        totalFiles++;
        totalBytes += stats.size;

        if (/theorique.*corrige|bd.*corrige|sti.*corrige/i.test(f)) {
            theoCorriges++;
            yTheoC++;
        } else if (/theorique|bac.*bd\.pdf|bac.*sti\.pdf/i.test(f)) {
            theoSujets++;
            yTheo++;
        } else if (/pratique.*corrige|tic.*corrige/i.test(f)) {
            pratCorriges++;
            yPratC++;
        } else {
            pratSujets++;
            yPrat++;
        }
    }

    console.log(`[${y}] ${files.length} fichiers (Sujets: ${yTheo} Théo, ${yPrat} Prat | Corrigés: ${yTheoC} Théo, ${yPratC} Prat)`);
}

console.log('\n--- TOTAL GLOBAL ---');
console.log(`Total Sujets Théoriques (Principale + Contrôle): ${theoSujets}`);
console.log(`Total Corrigés Théoriques (Principale + Contrôle): ${theoCorriges}`);
console.log(`Total Sujets Pratiques STI/TIC: ${pratSujets}`);
console.log(`Total Corrigés Pratiques TIC (ZIP / PDF): ${pratCorriges}`);
console.log(`TOTAL FICHIERS TELECHARGES: ${totalFiles} (${(totalBytes / (1024 * 1024)).toFixed(2)} MB)`);
