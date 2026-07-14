<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Apprenants — Gérant</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=IBM+Plex+Sans:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body class="role-gerant">
<div id="app">
  <nav class="sidebar">
    <div class="sidebar-brand"><div class="avatar">AD</div><div class="topbar-title"><span class="topbar-eyebrow">Gérant</span><h1>Carnet Cotis.</h1></div></div>
    <a class="nav-btn" href="/gerant/dashboard"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="7" height="9" rx="1.5"/><rect x="14" y="3" width="7" height="5" rx="1.5"/><rect x="14" y="12" width="7" height="9" rx="1.5"/><rect x="3" y="16" width="7" height="5" rx="1.5"/></svg><span>Tableau de bord</span><span class="dot"></span></a>
    <a class="nav-btn" href="/gerant/paiements/create"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M12 7v10M9 9.5c0-1.4 1.3-2.5 3-2.5s3 1 3 2.2c0 3-6 1.5-6 4.5 0 1.3 1.3 2.3 3 2.3s3-1 3-2.3"/></svg><span>Paiements</span><span class="dot"></span></a>
    <a class="nav-btn" href="/gerant/campagnes/create"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 11v2a2 2 0 002 2h1l2 5h2l-1-5h6l5 3V6l-5 3H8L6 5H4a2 2 0 00-2 2v0"/></svg><span>Campagnes</span><span class="dot"></span></a>
    <a class="nav-btn active" href="/gerant/apprenants"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="8" cy="8" r="3"/><circle cx="17" cy="9" r="2.6"/><path d="M2.5 20c.5-3.6 2.9-5.8 5.5-5.8s5 2.2 5.5 5.8M14 15c2.3.1 4 1.9 4.5 5"/></svg><span>Apprenants</span><span class="dot"></span></a>
    <div class="sidebar-foot"><a class="btn btn-ghost" style="width:100%;font-size:13px;" href="/logout">Se déconnecter</a></div>
  </nav>

  <div class="main-col">
    <div class="topbar">
      <div class="topbar-title"><span class="topbar-eyebrow">Gérant</span><h1>Apprenants</h1></div>
      <div class="topbar-user"><div class="avatar">AD</div><a class="icon-btn" href="/logout"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#1E2A44" stroke-width="2"><path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4M16 17l5-5-5-5M21 12H9"/></svg></a></div>
    </div>

    <div class="screen">
      <div class="list-head">
        <div class="section-head" style="margin:0;">
          <div class="eyebrow">Gestion de la classe</div>
          <h2>Apprenants</h2>
          <p class="section-sub"><?= count($apprenants) ?> apprenant(s) inscrit(s)</p>
        </div>
      </div>
      <div class="search-bar" style="margin-top:14px;">
        <input type="text" placeholder="Rechercher un apprenant…">
        <button class="btn btn-ghost">Filtrer</button>
      </div>
      <div class="app-list" id="appList">
        <?php if (empty($apprenants)): ?>
          <p class="section-sub">Aucun apprenant pour le moment.</p>
        <?php endif; ?>

        <?php foreach ($apprenants as $a): ?>
          <?php
            $initiales = '';
            foreach (explode(' ', trim($a['nom'])) as $partie) {
                $initiales .= mb_strtoupper(mb_substr($partie, 0, 1));
            }
            $initiales = mb_substr($initiales, 0, 2);

            $libelleStatut = ['ok' => 'À jour', 'late' => 'Retard', 'abandon' => 'Abandon'][$a['statut']] ?? $a['statut'];
          ?>
          <div class="card app-row">
            <div class="avatar"><?= htmlspecialchars($initiales) ?></div>
            <div class="app-info">
              <div class="name"><?= htmlspecialchars($a['nom']) ?></div>
              <div class="meta"><?= htmlspecialchars($a['tel']) ?></div>
            </div>
            <span class="badge <?= htmlspecialchars($a['statut']) ?>"><?= htmlspecialchars($libelleStatut) ?></span>

            <?php if ($a['statut'] !== 'abandon'): ?>
              <form method="POST" action="/gerant/apprenants/abandon" style="margin-left:8px;">
                <input type="hidden" name="id" value="<?= htmlspecialchars($a['id']) ?>">
                <button class="btn btn-ghost" type="submit" style="font-size:11px;padding:6px 10px;"
                        onclick="return confirm('Marquer <?= htmlspecialchars(addslashes($a['nom'])) ?> comme abandon ?');">
                  Marquer abandon
                </button>
              </form>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <a class="fab" href="/gerant/apprenants/create">+</a>

  <nav class="bottom-nav">
    <a class="nav-btn" href="/gerant/dashboard"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="7" height="9" rx="1.5"/><rect x="14" y="3" width="7" height="5" rx="1.5"/><rect x="14" y="12" width="7" height="9" rx="1.5"/><rect x="3" y="16" width="7" height="5" rx="1.5"/></svg><span>Tableau</span><span class="dot"></span></a>
    <a class="nav-btn" href="/gerant/paiements/create"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M12 7v10M9 9.5c0-1.4 1.3-2.5 3-2.5s3 1 3 2.2c0 3-6 1.5-6 4.5 0 1.3 1.3 2.3 3 2.3s3-1 3-2.3"/></svg><span>Paiements</span><span class="dot"></span></a>
    <a class="nav-btn" href="/gerant/campagnes/create"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 11v2a2 2 0 002 2h1l2 5h2l-1-5h6l5 3V6l-5 3H8L6 5H4a2 2 0 00-2 2v0"/></svg><span>Campagnes</span><span class="dot"></span></a>
    <a class="nav-btn active" href="/gerant/apprenants"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="8" cy="8" r="3"/><circle cx="17" cy="9" r="2.6"/><path d="M2.5 20c.5-3.6 2.9-5.8 5.5-5.8s5 2.2 5.5 5.8M14 15c2.3.1 4 1.9 4.5 5"/></svg><span>Apprenants</span><span class="dot"></span></a>
  </nav>
</div>

</body>
</html>
