const fs = require('fs');
const path = require('path');

const BASE_DIR = 'C:/xampp-school/htdocs/MesProjets/Sujets';

// 1. Update theorique_manifest.json
const theoPath = path.join(BASE_DIR, 'theorique_manifest.json');
if (fs.existsSync(theoPath)) {
    const theo = JSON.parse(fs.readFileSync(theoPath, 'utf8'));
    for (const item of theo) {
        // check if corrige file exists
        const yDir = path.join(BASE_DIR, String(item.year));
        const possibleCorriges = [
            `bac-theorique-${item.year}-bd-corrige.pdf`,
            `bac-theorique-${item.year}-sti-corrige.pdf`
        ];
        item.corrige = null;
        for (const c of possibleCorriges) {
            const cp = path.join(yDir, c);
            if (fs.existsSync(cp)) {
                item.corrige = {
                    filename: c,
                    sizeBytes: fs.statSync(cp).size,
                    url: `${item.year}/${c}`
                };
                break;
            }
        }
    }
    fs.writeFileSync(theoPath, JSON.stringify(theo, null, 2));
    console.log('Updated theorique_manifest.json with corriges links');
}

// 2. Update controle_manifest.json
const ctrlPath = path.join(BASE_DIR, 'controle_manifest.json');
if (fs.existsSync(ctrlPath)) {
    const ctrl = JSON.parse(fs.readFileSync(ctrlPath, 'utf8'));
    for (const item of ctrl) {
        const yDir = path.join(BASE_DIR, String(item.year));
        const possibleCorriges = [
            `bac-theorique-${item.year}-controle-bd-corrige.pdf`,
            `bac-theorique-${item.year}-controle-sti-corrige.pdf`
        ];
        item.corrige = null;
        for (const c of possibleCorriges) {
            const cp = path.join(yDir, c);
            if (fs.existsSync(cp)) {
                item.corrige = {
                    filename: c,
                    sizeBytes: fs.statSync(cp).size,
                    url: `${item.year}/${c}`
                };
                break;
            }
        }
    }
    fs.writeFileSync(ctrlPath, JSON.stringify(ctrl, null, 2));
    console.log('Updated controle_manifest.json with corriges links');
}

// 3. Update manifest.json (practical)
const pratPath = path.join(BASE_DIR, 'manifest.json');
if (fs.existsSync(pratPath)) {
    const prat = JSON.parse(fs.readFileSync(pratPath, 'utf8'));
    for (const item of prat) {
        const yDir = path.join(BASE_DIR, String(item.year));
        // find any practical corriges in this year folder
        if (fs.existsSync(yDir)) {
            const files = fs.readdirSync(yDir);
            const corriges = files.filter(f => /pratique.*corrig|tic.*corrig/i.test(f)).map(f => ({
                filename: f,
                sizeBytes: fs.statSync(path.join(yDir, f)).size,
                url: `${item.year}/${f}`
            }));
            item.corriges = corriges;
        } else {
            item.corriges = [];
        }
    }
    fs.writeFileSync(pratPath, JSON.stringify(prat, null, 2));
    console.log('Updated manifest.json with practical corriges');
}
