<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baccalauréat Tunisie - Sujets & Corrigés STI / BD (2008 - 2026)</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-color: #0b1120;
            --surface: #131c31;
            --surface-card: rgba(30, 41, 69, 0.65);
            --surface-hover: rgba(45, 60, 98, 0.85);
            --border: rgba(255, 255, 255, 0.08);
            --border-hover: rgba(99, 102, 241, 0.4);
            --primary: #6366f1;
            --primary-glow: rgba(99, 102, 241, 0.25);
            --emerald: #10b981;
            --emerald-glow: rgba(16, 185, 129, 0.25);
            --amber: #f59e0b;
            --amber-glow: rgba(245, 158, 11, 0.25);
            --purple: #8b5cf6;
            --purple-glow: rgba(139, 92, 246, 0.25);
            --cyan: #06b6d4;
            --cyan-glow: rgba(6, 182, 212, 0.25);
            --text-main: #f8fafc;
            --text-muted: #94a3b8;
            --text-dim: #64748b;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-main);
            line-height: 1.5;
            min-height: 100vh;
            background-image: 
                radial-gradient(at 10% 20%, rgba(99, 102, 241, 0.12) 0px, transparent 40%),
                radial-gradient(at 90% 15%, rgba(16, 185, 129, 0.08) 0px, transparent 35%),
                radial-gradient(at 50% 90%, rgba(139, 92, 246, 0.08) 0px, transparent 50%);
            background-attachment: fixed;
            padding: 2.5rem 1.5rem;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
        }

        header {
            margin-bottom: 2rem;
            position: relative;
        }

        .badge-header {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.35rem 0.9rem;
            border-radius: 9999px;
            background: rgba(99, 102, 241, 0.15);
            border: 1px solid rgba(99, 102, 241, 0.3);
            color: #818cf8;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 1rem;
        }

        h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.6rem;
            font-weight: 800;
            letter-spacing: -0.025em;
            background: linear-gradient(135deg, #ffffff 40%, #94a3b8 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 0.75rem;
        }

        .subtitle {
            font-size: 1.05rem;
            color: var(--text-muted);
            max-width: 950px;
        }

        .info-card {
            margin-top: 1.5rem;
            padding: 1.25rem 1.5rem;
            border-radius: 1rem;
            background: rgba(19, 28, 49, 0.7);
            border: 1px solid var(--border);
            backdrop-filter: blur(12px);
            display: flex;
            align-items: flex-start;
            gap: 1rem;
        }

        .info-card svg {
            flex-shrink: 0;
            width: 24px;
            height: 24px;
            color: #38bdf8;
            margin-top: 0.2rem;
        }

        .info-card-content {
            font-size: 0.92rem;
            color: var(--text-muted);
            line-height: 1.6;
        }

        .info-card-content b {
            color: #ffffff;
        }

        .stats-bar {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
            gap: 1rem;
            margin: 2rem 0;
        }

        .stat-item {
            padding: 1.25rem;
            border-radius: 1rem;
            background: var(--surface);
            border: 1px solid var(--border);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .stat-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: var(--stat-accent, var(--primary));
        }

        .stat-value {
            font-family: 'Outfit', sans-serif;
            font-size: 2.1rem;
            font-weight: 800;
            color: #ffffff;
        }

        .stat-label {
            font-size: 0.82rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            font-weight: 600;
            margin-top: 0.25rem;
        }

        .toolbar {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 2rem;
            padding: 1rem 1.25rem;
            border-radius: 1rem;
            background: var(--surface);
            border: 1px solid var(--border);
        }

        .search-box {
            position: relative;
            flex: 1;
            min-width: 280px;
        }

        .search-box input {
            width: 100%;
            padding: 0.65rem 1rem 0.65rem 2.6rem;
            border-radius: 0.65rem;
            background: rgba(11, 17, 32, 0.7);
            border: 1px solid var(--border);
            color: #ffffff;
            font-size: 0.92rem;
            outline: none;
            transition: all 0.2s;
        }

        .search-box input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px var(--primary-glow);
        }

        .search-box svg {
            position: absolute;
            left: 0.85rem;
            top: 50%;
            transform: translateY(-50%);
            width: 18px;
            height: 18px;
            color: var(--text-dim);
        }

        .filters {
            display: flex;
            gap: 0.45rem;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 0.45rem 0.85rem;
            border-radius: 0.5rem;
            border: 1px solid var(--border);
            background: rgba(255, 255, 255, 0.03);
            color: var(--text-muted);
            font-size: 0.82rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
        }

        .filter-btn:hover, .filter-btn.active {
            background: var(--primary);
            color: #ffffff;
            border-color: var(--primary);
        }

        .filter-btn.btn-corrige-filter.active {
            background: linear-gradient(135deg, #8b5cf6 0%, #6366f1 100%);
            border-color: #8b5cf6;
        }

        .year-section {
            margin-bottom: 2.25rem;
        }

        .year-title {
            font-family: 'Outfit', sans-serif;
            font-size: 1.4rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid var(--border);
        }

        .year-badge {
            font-size: 0.75rem;
            padding: 0.2rem 0.6rem;
            border-radius: 9999px;
            background: rgba(255, 255, 255, 0.06);
            color: var(--text-muted);
            font-weight: 600;
        }

        .year-badge-corrige {
            font-size: 0.75rem;
            padding: 0.2rem 0.6rem;
            border-radius: 9999px;
            background: rgba(139, 92, 246, 0.15);
            border: 1px solid rgba(139, 92, 246, 0.3);
            color: #c4b5fd;
            font-weight: 600;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(380px, 1fr));
            gap: 1.25rem;
        }

        .card {
            background: var(--surface-card);
            border: 1px solid var(--border);
            border-radius: 1rem;
            padding: 1.25rem;
            backdrop-filter: blur(10px);
            transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card:hover {
            transform: translateY(-3px);
            border-color: var(--border-hover);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.35);
            background: var(--surface-hover);
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 0.75rem;
        }

        .badge-group {
            display: flex;
            gap: 0.4rem;
            flex-wrap: wrap;
            align-items: center;
        }

        .card-type {
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            padding: 0.25rem 0.65rem;
            border-radius: 0.5rem;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
        }

        .type-pratique {
            background: rgba(99, 102, 241, 0.15);
            color: #a5b4fc;
            border: 1px solid rgba(99, 102, 241, 0.3);
        }

        .type-theorique-p {
            background: rgba(16, 185, 129, 0.15);
            color: #34d399;
            border: 1px solid rgba(16, 185, 129, 0.3);
        }

        .type-theorique-c {
            background: rgba(245, 158, 11, 0.15);
            color: #fbbf24;
            border: 1px solid rgba(245, 158, 11, 0.3);
        }

        .badge-corrige-available {
            background: rgba(139, 92, 246, 0.2);
            color: #c4b5fd;
            border: 1px solid rgba(139, 92, 246, 0.4);
            font-size: 0.72rem;
            padding: 0.2rem 0.55rem;
            border-radius: 0.4rem;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 0.3rem;
        }

        .card-size {
            font-size: 0.75rem;
            color: var(--text-dim);
            font-weight: 600;
        }

        .card-title {
            font-family: 'Outfit', sans-serif;
            font-size: 1.08rem;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 0.35rem;
        }

        .card-desc {
            font-size: 0.85rem;
            color: var(--text-muted);
            margin-bottom: 1.15rem;
            line-height: 1.45;
            word-break: break-all;
        }

        .card-actions {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            margin-top: auto;
        }

        .action-row {
            display: flex;
            gap: 0.5rem;
        }

        .btn {
            flex: 1;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.45rem;
            padding: 0.55rem 0.85rem;
            border-radius: 0.6rem;
            font-size: 0.84rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s;
        }

        .btn-primary {
            background: var(--primary);
            color: #ffffff;
        }

        .btn-primary:hover {
            background: #4f46e5;
            box-shadow: 0 4px 12px var(--primary-glow);
        }

        .btn-emerald {
            background: #059669;
            color: #ffffff;
        }

        .btn-emerald:hover {
            background: #047857;
            box-shadow: 0 4px 12px var(--emerald-glow);
        }

        .btn-amber {
            background: #d97706;
            color: #ffffff;
        }

        .btn-amber:hover {
            background: #b45309;
            box-shadow: 0 4px 12px var(--amber-glow);
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.06);
            color: var(--text-main);
            border: 1px solid var(--border);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.12);
        }

        .btn-corrige {
            background: linear-gradient(135deg, #7c3aed 0%, #6366f1 100%);
            color: #ffffff;
            border: 1px solid rgba(139, 92, 246, 0.4);
            box-shadow: 0 4px 12px rgba(124, 58, 237, 0.25);
        }

        .btn-corrige:hover {
            background: linear-gradient(135deg, #6d28d9 0%, #4f46e5 100%);
            box-shadow: 0 6px 16px rgba(124, 58, 237, 0.4);
            transform: translateY(-1px);
        }

        .prat-solutions-box {
            background: rgba(139, 92, 246, 0.08);
            border: 1px solid rgba(139, 92, 246, 0.2);
            border-radius: 0.6rem;
            padding: 0.5rem 0.65rem;
            margin-top: 0.4rem;
        }

        .prat-solutions-title {
            font-size: 0.74rem;
            color: #c4b5fd;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.04em;
            margin-bottom: 0.35rem;
            display: flex;
            align-items: center;
            gap: 0.35rem;
        }

        .solutions-pills {
            display: flex;
            flex-wrap: wrap;
            gap: 0.35rem;
        }

        .sol-pill {
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
            padding: 0.2rem 0.45rem;
            border-radius: 0.35rem;
            background: rgba(139, 92, 246, 0.25);
            border: 1px solid rgba(139, 92, 246, 0.4);
            color: #f5f3ff;
            font-size: 0.73rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s;
        }

        .sol-pill:hover {
            background: #7c3aed;
            color: #ffffff;
            transform: translateY(-1px);
        }

        footer {
            margin-top: 4rem;
            padding-top: 1.5rem;
            border-top: 1px solid var(--border);
            text-align: center;
            color: var(--text-dim);
            font-size: 0.85rem;
        }

        footer a {
            color: var(--primary);
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="badge-header">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                Baccalauréat Tunisien • Section Sciences de l'Informatique
            </div>
            <h1>Archives Officielles des Épreuves & Corrigés STI & BD</h1>
            <p class="subtitle">Portail national unifié des épreuves et corrections du baccalauréat tunisien (2008 – 2026) : <b>STI / TIC Pratique</b>, <b>Théorique Principale</b>, <b>Théorique Contrôle</b> et <b>Corrigés Officiels</b>.</p>
            
            <div class="info-card">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                <div class="info-card-content">
                    <b>Ressources exhaustives indexées et téléchargées (2008 – 2026) :</b><br>
                    • <b>Pratique STI / TIC :</b> 35 épreuves officielles récupérées sur Kiteb.net.<br>
                    • <b>Théorique Principale :</b> 19 sujets de 2008 à 2026 (2008 depuis Kiteb.net, 2009–2026 depuis BacWeb).<br>
                    • <b>Théorique Contrôle :</b> 19 sujets de 2008 à 2026 (2008 récupéré sur BacWeb via <code>ibd.htm</code>).<br>
                    • <b>Corrigés Officiels :</b> <b>67 corrigés disponibles</b> (26 théoriques Principale & Contrôle + 41 corrigés pratiques TIC complets avec codes sources et bases de données).
                </div>
            </div>
        </header>

        <?php
        $pratManifest = __DIR__ . '/manifest.json';
        $theoManifest = __DIR__ . '/theorique_manifest.json';
        $ctrlManifest = __DIR__ . '/controle_manifest.json';
        $corrManifest = __DIR__ . '/corriges_manifest.json';

        $pratItems = file_exists($pratManifest) ? json_decode(file_get_contents($pratManifest), true) : [];
        $theoItems = file_exists($theoManifest) ? json_decode(file_get_contents($theoManifest), true) : [];
        $ctrlItems = file_exists($ctrlManifest) ? json_decode(file_get_contents($ctrlManifest), true) : [];
        $corrData  = file_exists($corrManifest) ? json_decode(file_get_contents($corrManifest), true) : [];

        $allEntries = [];
        $totalBytes = 0;
        $totalCorrigesCount = isset($corrData['total']) ? $corrData['total'] : 0;

        foreach ($pratItems as $it) {
            $it['category'] = 'pratique';
            $allEntries[] = $it;
            $totalBytes += isset($it['sizeBytes']) ? $it['sizeBytes'] : 0;
        }

        foreach ($theoItems as $it) {
            $it['category'] = 'theorique-p';
            $allEntries[] = $it;
            $totalBytes += isset($it['sizeBytes']) ? $it['sizeBytes'] : 0;
        }

        foreach ($ctrlItems as $it) {
            $it['category'] = 'theorique-c';
            $allEntries[] = $it;
            $totalBytes += isset($it['sizeBytes']) ? $it['sizeBytes'] : 0;
        }

        $years = [];
        foreach ($allEntries as $entry) {
            $years[$entry['year']][] = $entry;
        }
        krsort($years);
        ?>

        <div class="stats-bar">
            <div class="stat-item" style="--stat-accent: #6366f1;">
                <div class="stat-value"><?= count($pratItems) ?></div>
                <div class="stat-label">Pratique STI/TIC</div>
            </div>
            <div class="stat-item" style="--stat-accent: #10b981;">
                <div class="stat-value"><?= count($theoItems) ?></div>
                <div class="stat-label">Théorique Principale</div>
            </div>
            <div class="stat-item" style="--stat-accent: #f59e0b;">
                <div class="stat-value"><?= count($ctrlItems) ?></div>
                <div class="stat-label">Théorique Contrôle</div>
            </div>
            <div class="stat-item" style="--stat-accent: #8b5cf6;">
                <div class="stat-value"><?= $totalCorrigesCount ?></div>
                <div class="stat-label">Corrigés Disponibles</div>
            </div>
            <div class="stat-item" style="--stat-accent: #06b6d4;">
                <div class="stat-value"><?= count($allEntries) + $totalCorrigesCount ?></div>
                <div class="stat-label">Fichiers Totaux (<?= round($totalBytes / (1024 * 1024), 1) ?> MB)</div>
            </div>
        </div>

        <div class="toolbar">
            <div class="search-box">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                <input type="text" id="searchInput" placeholder="Rechercher par année, épreuve, session, mot-clé...">
            </div>
            <div class="filters">
                <button class="filter-btn active" data-filter="all">Tous (<?= count($allEntries) ?>)</button>
                <button class="filter-btn btn-corrige-filter" data-filter="has-corrige">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    Avec Corrigé (<?= $totalCorrigesCount ?>)
                </button>
                <button class="filter-btn" data-filter="theorique-p">Théorique Principale (<?= count($theoItems) ?>)</button>
                <button class="filter-btn" data-filter="theorique-c">Théorique Contrôle (<?= count($ctrlItems) ?>)</button>
                <button class="filter-btn" data-filter="pratique">Pratique STI/TIC (<?= count($pratItems) ?>)</button>
            </div>
        </div>

        <div id="contentList">
            <?php foreach ($years as $year => $yearFiles): 
                // Count corrigés in this year
                $yearCorrigesCount = 0;
                foreach ($yearFiles as $yf) {
                    if (!empty($yf['corrige'])) $yearCorrigesCount++;
                    if (!empty($yf['corriges'])) $yearCorrigesCount += count($yf['corriges']);
                }
            ?>
                <div class="year-section" data-year="<?= $year ?>">
                    <div class="year-title">
                        <span>Session <?= $year ?></span>
                        <span class="year-badge"><?= count($yearFiles) ?> sujet<?= count($yearFiles) > 1 ? 's' : '' ?></span>
                        <?php if ($yearCorrigesCount > 0): ?>
                            <span class="year-badge-corrige"><?= $yearCorrigesCount ?> corrigé<?= $yearCorrigesCount > 1 ? 's' : '' ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="grid">
                        <?php foreach ($yearFiles as $file): 
                            $cat = $file['category'];
                            $isRar = str_ends_with(strtolower($file['name']), '.rar');
                            $sizeKB = isset($file['sizeBytes']) ? round($file['sizeBytes'] / 1024, 1) : 0;
                            $relPath = $file['year'] . '/' . $file['name'];
                            $title = $file['epreuve'] ?? ($file['desc'] ?? $file['name']);
                            $source = $file['source'] ?? 'kiteb.net';

                            $badgeClass = 'type-pratique';
                            $badgeLabel = 'Pratique';
                            $btnClass = 'btn-primary';

                            if ($cat === 'theorique-p') {
                                $badgeClass = 'type-theorique-p';
                                $badgeLabel = 'Théorique Principale';
                                $btnClass = 'btn-emerald';
                            } elseif ($cat === 'theorique-c') {
                                $badgeClass = 'type-theorique-c';
                                $badgeLabel = 'Théorique Contrôle';
                                $btnClass = 'btn-amber';
                            } elseif ($isRar) {
                                $badgeLabel = 'Archive RAR';
                            }

                            $hasCorrige = (!empty($file['corrige']) || !empty($file['corriges']));
                        ?>
                            <div class="card" 
                                 data-category="<?= $cat ?>" 
                                 data-has-corrige="<?= $hasCorrige ? '1' : '0' ?>"
                                 data-search="<?= htmlspecialchars(strtolower($year . ' ' . $title . ' ' . $file['name'] . ' ' . $source . ' ' . $badgeLabel . ($hasCorrige ? ' corrigé solution' : ''))) ?>">
                                <div>
                                    <div class="card-header">
                                        <div class="badge-group">
                                            <span class="card-type <?= $badgeClass ?>">
                                                <?= $badgeLabel ?>
                                            </span>
                                            <?php if ($hasCorrige): ?>
                                                <span class="badge-corrige-available">
                                                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                    Corrigé Inclus
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                        <span class="card-size"><?= $sizeKB ?> KB</span>
                                    </div>
                                    <h3 class="card-title"><?= htmlspecialchars($title) ?></h3>
                                    <p class="card-desc"><?= htmlspecialchars($file['name']) ?></p>
                                </div>
                                <div class="card-actions">
                                    <div class="action-row">
                                        <a href="<?= htmlspecialchars($relPath) ?>" target="_blank" class="btn <?= $btnClass ?>">
                                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                            Consulter Sujet
                                        </a>
                                        <a href="<?= htmlspecialchars($relPath) ?>" download class="btn btn-secondary" title="Télécharger">
                                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                        </a>
                                    </div>

                                    <?php if (!empty($file['corrige'])): 
                                        $c = $file['corrige'];
                                        $cSizeKB = round($c['sizeBytes'] / 1024, 1);
                                    ?>
                                        <div class="action-row">
                                            <a href="<?= htmlspecialchars($c['url']) ?>" target="_blank" class="btn btn-corrige">
                                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                                Consulter Corrigé Officiel (<?= $cSizeKB ?> KB)
                                            </a>
                                            <a href="<?= htmlspecialchars($c['url']) ?>" download class="btn btn-secondary" title="Télécharger Corrigé">
                                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                            </a>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (!empty($file['corriges'])): ?>
                                        <div class="prat-solutions-box">
                                            <div class="prat-solutions-title">
                                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                <?= count($file['corriges']) ?> Solution<?= count($file['corriges']) > 1 ? 's' : '' ?> Pratique (Code & BD) :
                                            </div>
                                            <div class="solutions-pills">
                                                <?php foreach ($file['corriges'] as $idx => $sc): 
                                                    $ext = pathinfo($sc['filename'], PATHINFO_EXTENSION);
                                                    $solLabel = 'Corrigé ' . ($idx + 1) . ' (' . strtoupper($ext) . ')';
                                                ?>
                                                    <a href="<?= htmlspecialchars($sc['url']) ?>" download class="sol-pill" title="<?= htmlspecialchars($sc['filename']) ?>">
                                                        <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                                        <?= $solLabel ?>
                                                    </a>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <footer>
            <p>Archive complète du Baccalauréat Tunisien • STI / TIC / BD (Sciences de l'Informatique) • Sources : <a href="http://bacweb.tn/" target="_blank">bacweb.tn</a>, <a href="http://www.bacweb.tn/ibd.htm" target="_blank">bacweb.tn/ibd.htm</a> & <a href="https://kiteb.net/education/informatique/bac/" target="_blank">kiteb.net</a></p>
        </footer>
    </div>

    <script>
        const searchInput = document.getElementById('searchInput');
        const filterBtns = document.querySelectorAll('.filter-btn');
        let currentFilter = 'all';

        function applyFilter() {
            const query = searchInput.value.toLowerCase().trim();
            const yearSections = document.querySelectorAll('.year-section');

            yearSections.forEach(section => {
                const cards = section.querySelectorAll('.card');
                let visibleCardsInSection = 0;

                cards.forEach(card => {
                    const searchData = card.getAttribute('data-search');
                    const category = card.getAttribute('data-category');
                    const hasCorrige = card.getAttribute('data-has-corrige') === '1';

                    const matchesSearch = searchData.includes(query);
                    let matchesFilter = false;

                    if (currentFilter === 'all') {
                        matchesFilter = true;
                    } else if (currentFilter === 'has-corrige') {
                        matchesFilter = hasCorrige;
                    } else {
                        matchesFilter = (category === currentFilter);
                    }

                    if (matchesSearch && matchesFilter) {
                        card.style.display = 'flex';
                        visibleCardsInSection++;
                    } else {
                        card.style.display = 'none';
                    }
                });

                section.style.display = visibleCardsInSection > 0 ? 'block' : 'none';
            });
        }

        searchInput.addEventListener('input', applyFilter);

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                currentFilter = btn.getAttribute('data-filter');
                applyFilter();
            });
        });
    </script>
</body>
</html>
