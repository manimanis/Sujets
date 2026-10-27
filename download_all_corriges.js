const fs = require('fs');
const path = require('path');

const BASE_DIR = 'C:/xampp-school/htdocs/MesProjets/Sujets';

// 1. Theoretical corriges list
const theoCorriges = [
    // 2008 already downloaded
    { year: 2008, session: 'principale', epreuve: 'BD', filename: 'bac-theorique-2008-bd-corrige.pdf', url: 'http://www.bacweb.tn/bac/principale2008/NR/informatique/bd_c.pdf' },
    { year: 2008, session: 'controle', epreuve: 'BD', filename: 'bac-theorique-2008-controle-bd-corrige.pdf', url: 'http://www.bacweb.tn/bac/controle2008/NR/informatique/bd_c.pdf' },
    // 2009 - 2019
    ...[2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018].flatMap(y => [
        { year: y, session: 'principale', epreuve: 'BD', filename: `bac-theorique-${y}-bd-corrige.pdf`, url: `http://bacweb.tn/bac/${y}/principale/informatique/bd_c.pdf` },
        { year: y, session: 'controle', epreuve: 'BD', filename: `bac-theorique-${y}-controle-bd-corrige.pdf`, url: `http://bacweb.tn/bac/${y}/controle/informatique/bd_c.pdf` }
    ]),
    // 2019
    { year: 2019, session: 'principale', epreuve: 'BD', filename: 'bac-theorique-2019-bd-corrige.pdf', url: 'http://bacweb.tn/bac/2019/principale/informatique/BD_c.pdf' },
    { year: 2019, session: 'controle', epreuve: 'BD', filename: 'bac-theorique-2019-controle-bd-corrige.pdf', url: 'http://bacweb.tn/bac/2019/controle/informatique/bd_c.pdf' },
    // 2022
    { year: 2022, session: 'principale', epreuve: 'STI', filename: 'bac-theorique-2022-sti-corrige.pdf', url: 'http://bacweb.tn/bac/2022/principale/informatique/sti_c.pdf' },
    { year: 2022, session: 'controle', epreuve: 'STI', filename: 'bac-theorique-2022-controle-sti-corrige.pdf', url: 'http://bacweb.tn/bac/2022/controle/informatique/sti_c.pdf' }
];

// 2. Practical TIC corriges from Kiteb
const pratCorriges = [
    // 2010
    { year: 2010, path: '/education/informatique/bac/bacinfo2010/bac-pratique-24052010-tic-corrige1.zip' },
    // 2011
    { year: 2011, path: '/education/informatique/bac/bacinfo2011/bac-pratique-23052011-tic-corrige1.zip' },
    // 2012
    { year: 2012, path: '/education/informatique/bac/bacinfo2012/bac-pratique-21052012-tic-corrige1.zip' },
    { year: 2012, path: '/education/informatique/bac/bacinfo2012/bac-pratique-21052012-tic-corrige2.zip' },
    // 2013
    { year: 2013, path: '/education/informatique/bac/bacinfo2013/bac-pratique-20052013-tic-corrige1.zip' },
    { year: 2013, path: '/education/informatique/bac/bacinfo2013/bac-pratique-20052013-tic-corrige2.zip' },
    // 2014
    { year: 2014, path: '/education/informatique/bac/bacinfo2014/bac-pratique-19052014-tic-corrige1.zip' },
    { year: 2014, path: '/education/informatique/bac/bacinfo2014/bac-pratique-19052014-tic-corrige2.zip' },
    // 2015
    { year: 2015, path: '/education/informatique/bac/bacinfo2015/bac-pratique-18052015-tic-corrige1.zip' },
    { year: 2015, path: '/education/informatique/bac/bacinfo2015/bac-pratique-18052015-tic-corrige2.zip' },
    // 2016
    { year: 2016, path: '/education/informatique/bac/bacinfo2016/bac-pratique-16052016-tic-corrige1.zip' },
    { year: 2016, path: '/education/informatique/bac/bacinfo2016/bac-pratique-16052016-tic-corrige2.zip' },
    // 2017
    { year: 2017, path: '/education/informatique/bac/bacinfo2017/bac-pratique-22052017-tic-corrige1.zip' },
    { year: 2017, path: '/education/informatique/bac/bacinfo2017/bac-pratique-22052017-tic-corrige2.zip' },
    // 2018
    { year: 2018, path: '/education/informatique/bac/bacinfo2018/bac-pratique-21052018-tic-corrige1.zip' },
    { year: 2018, path: '/education/informatique/bac/bacinfo2018/bac-pratique-21052018-tic-corrige2.zip' },
    { year: 2018, path: '/education/informatique/bac/bacinfo2018/bac-pratique-21052018-tic-corrige3.zip' },
    { year: 2018, path: '/education/informatique/bac/bacinfo2018/bac-pratique-21052018-tic-corrige4.zip' },
    { year: 2018, path: '/education/informatique/bac/bacinfo2018/bac-pratique-21052018-tic-corrige5.zip' },
    // 2019
    { year: 2019, path: '/education/informatique/bac/bacinfo2019/bac-pratique-27052019-tic-corrige1.zip' },
    { year: 2019, path: '/education/informatique/bac/bacinfo2019/bac-pratique-27052019-tic-corrige2.zip' },
    { year: 2019, path: '/education/informatique/bac/bacinfo2019/bac-pratique-27052019-tic-corrige3.zip' },
    { year: 2019, path: '/education/informatique/bac/bacinfo2019/bac-pratique-27052019-tic-corrige4.zip' },
    { year: 2019, path: '/education/informatique/bac/bacinfo2019/bac-pratique-27052019-tic-corrige5.zip' },
    // 2020
    { year: 2020, path: '/education/informatique/bac/bacinfo2020/bac-pratique-24062020-tic-corrige1.zip' },
    { year: 2020, path: '/education/informatique/bac/bacinfo2020/bac-pratique-24062020-tic-corrige2.zip' },
    { year: 2020, path: '/education/informatique/bac/bacinfo2020/bac-pratique-24062020-tic-corrige3.zip' },
    { year: 2020, path: '/education/informatique/bac/bacinfo2020/bac-pratique-24062020-tic-corrige4.zip' },
    { year: 2020, path: '/education/informatique/bac/bacinfo2020/bac-pratique-24062020-tic-corrige5.zip' },
    // 2021
    { year: 2021, path: '/education/informatique/bac/bacinfo2021/bac-pratique-03062021-tic-corrige1.zip' },
    { year: 2021, path: '/education/informatique/bac/bacinfo2021/bac-pratique-03062021-tic-corrige2.zip' },
    { year: 2021, path: '/education/informatique/bac/bacinfo2021/bac-pratique-03062021-tic-corrige3.zip' },
    { year: 2021, path: '/education/informatique/bac/bacinfo2021/bac-pratique-03062021-tic-corrige4.zip' },
    // 2022
    { year: 2022, path: '/education/informatique/bac/bacinfo2022/bac-pratique-23052022-tic-corrige1.pdf' },
    { year: 2022, path: '/education/informatique/bac/bacinfo2022/bac-pratique-23052022-tic-corrige2.zip' },
    { year: 2022, path: '/education/informatique/bac/bacinfo2022/bac-pratique-23052022-tic-corrige3.zip' },
    { year: 2022, path: '/education/informatique/bac/bacinfo2022/bac-pratique-23052022-tic-corrige4.zip' },
    // 2023
    { year: 2023, path: '/education/informatique/bac/bacinfo2023/bac-pratique-22052023-tic-corrige1.zip' },
    { year: 2023, path: '/education/informatique/bac/bacinfo2023/bac-pratique-22052023-tic-corrige2.zip' },
    { year: 2023, path: '/education/informatique/bac/bacinfo2023/bac-pratique-22052023-tic-corrige3.zip' },
    { year: 2023, path: '/education/informatique/bac/bacinfo2023/bac-pratique-22052023-tic-corrige4.rar' }
];

async function downloadFile(url, destPath) {
    if (fs.existsSync(destPath)) {
        const stats = fs.statSync(destPath);
        if (stats.size > 2000) {
            console.log(`[ALREADY EXISTS] ${destPath} (${stats.size} bytes)`);
            return { ok: true, size: stats.size, cached: true };
        }
    }

    try {
        const res = await fetch(url, { headers: { 'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)' } });
        if (!res.ok) {
            console.error(`[ERROR ${res.status}] Failed to fetch ${url}`);
            return { ok: false, status: res.status };
        }
        const buffer = await res.arrayBuffer();
        if (buffer.byteLength < 500) {
            console.error(`[TOO SMALL] ${url} (${buffer.byteLength} bytes)`);
            return { ok: false, size: buffer.byteLength };
        }
        fs.mkdirSync(path.dirname(destPath), { recursive: true });
        fs.writeFileSync(destPath, Buffer.from(buffer));
        console.log(`[DOWNLOADED] ${destPath} (${buffer.byteLength} bytes)`);
        return { ok: true, size: buffer.byteLength, cached: false };
    } catch (e) {
        console.error(`[EXCEPTION] ${url} -> ${e.message}`);
        return { ok: false, error: e.message };
    }
}

async function run() {
    console.log('--- 1. DOWNLOADING THEORETICAL CORRIGES ---');
    const downloadedTheo = [];
    for (const item of theoCorriges) {
        const dest = path.join(BASE_DIR, String(item.year), item.filename);
        const res = await downloadFile(item.url, dest);
        if (res.ok) {
            downloadedTheo.push({
                ...item,
                destFile: item.filename,
                size: res.size
            });
        }
    }

    console.log('\n--- 2. DOWNLOADING PRACTICAL CORRIGES FROM KITEB ---');
    const downloadedPrat = [];
    for (const item of pratCorriges) {
        const filename = path.basename(item.path);
        const dest = path.join(BASE_DIR, String(item.year), filename);
        const url = `https://kiteb.net${item.path}`;
        const res = await downloadFile(url, dest);
        if (res.ok) {
            downloadedPrat.push({
                year: item.year,
                nature: 'pratique',
                section: "Sciences de l'informatique",
                epreuve: 'TIC',
                filename: filename,
                url: url,
                size: res.size
            });
        }
    }

    // Save manifest of all corrigés
    const allCorrigesManifest = {
        totalTheo: downloadedTheo.length,
        totalPrat: downloadedPrat.length,
        total: downloadedTheo.length + downloadedPrat.length,
        theorique: downloadedTheo,
        pratique: downloadedPrat
    };

    fs.writeFileSync(path.join(BASE_DIR, 'corriges_manifest.json'), JSON.stringify(allCorrigesManifest, null, 2));
    console.log(`\nSuccessfully downloaded and saved ${allCorrigesManifest.total} corriges!`);
}

run();
