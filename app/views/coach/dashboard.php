<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tableau de bord — Coach Superviseur</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=IBM+Plex+Sans:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body class="role-coach">
<div id="app">
  <nav class="sidebar">
    <div class="sidebar-brand"><div class="avatar">SB</div><div class="topbar-title"><span class="topbar-eyebrow">Coach</span><h1>Carnet Cotis.</h1></div></div>
    <a class="nav-btn active" href="/coach/dashboard"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="7" height="9" rx="1.5"/><rect x="14" y="3" width="7" height="5" rx="1.5"/><rect x="14" y="12" width="7" height="9" rx="1.5"/><rect x="3" y="16" width="7" height="5" rx="1.5"/></svg><span>Tableau de bord</span><span class="dot"></span></a>
    <a class="nav-btn" href="/coach/audit"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg><span>Audit</span><span class="dot"></span></a>
    <div class="sidebar-foot"><a class="btn btn-ghost" style="width:100%;font-size:13px;" href="/logout">Se déconnecter</a></div>
  </nav>

  <div class="main-col">
    <div class="topbar">
      <div class="topbar-title"><span class="topbar-eyebrow">Coach Superviseur</span><h1>Tableau de bord</h1></div>
      <div class="topbar-user"><div class="avatar">SB</div><a class="icon-btn" href="/logout"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#1E2A44" stroke-width="2"><path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4M16 17l5-5-5-5M21 12H9"/></svg></a></div>
    </div>

    <div class="screen">
      <div class="section-head">
        <div class="eyebrow">Statistiques globales</div>
        <h2>Recouvrement de la promotion</h2>
        <span class="readonly-tag">🔒 Lecture seule</span>
      </div>

      <div class="stat-grid">
        <div class="card stat-card money"><div class="label">Trésorerie</div><div class="value mono">1 284 000 F</div></div>
        <div class="card stat-card blue"><div class="label">Taux global</div><div class="value mono">81 %</div></div>
        <div class="card stat-card late"><div class="label">Retards</div><div class="value mono">6</div></div>
        <div class="card stat-card camp"><div class="label">Campagnes actives</div><div class="value mono">2</div></div>
      </div>

      <div class="section-head">
        <div class="eyebrow">Évolution mensuelle</div>
        <h2>Taux de recouvrement par mois</h2>
      </div>
      <div class="card" style="padding:18px;">
        <div class="rec-bars">
          <div class="rec-row"><span class="rec-label">Sept.</span><div class="rec-track"><div class="rec-fill" style="width:96%;"></div></div><span class="rec-pct mono">96%</span></div>
          <div class="rec-row"><span class="rec-label">Oct.</span><div class="rec-track"><div class="rec-fill" style="width:90%;"></div></div><span class="rec-pct mono">90%</span></div>
          <div class="rec-row"><span class="rec-label">Nov.</span><div class="rec-track"><div class="rec-fill" style="width:85%;"></div></div><span class="rec-pct mono">85%</span></div>
          <div class="rec-row"><span class="rec-label">Déc.</span><div class="rec-track"><div class="rec-fill" style="width:78%;"></div></div><span class="rec-pct mono">78%</span></div>
          <div class="rec-row"><span class="rec-label">Janv.</span><div class="rec-track"><div class="rec-fill" style="width:82%;"></div></div><span class="rec-pct mono">82%</span></div>
          <div class="rec-row"><span class="rec-label">Juil.</span><div class="rec-track"><div class="rec-fill" style="width:81%;"></div></div><span class="rec-pct mono">81%</span></div>
        </div>
      </div>

      <div class="section-head">
        <div class="eyebrow">Campagnes en cours</div>
        <h2>Suivi des collectes ponctuelles</h2>
      </div>
      <div class="card" style="padding:14px;margin-bottom:10px;display:flex;justify-content:space-between;align-items:center;">
        <div><div style="font-weight:600;font-size:13.5px;">Anniversaire — Juillet 2026</div><div style="font-size:12px;color:var(--ink-soft);margin-top:2px;">Montant fixe · 24/32 payés</div></div>
        <span class="badge ok">76 %</span>
      </div>
      <div class="card" style="padding:14px;display:flex;justify-content:space-between;align-items:center;">
        <div><div style="font-weight:600;font-size:13.5px;">Cas social — Décès famille Sarr</div><div style="font-size:12px;color:var(--ink-soft);margin-top:2px;">Montant libre · clôture dans 3 jours</div></div>
        <span class="badge late">89 500 F</span>
      </div>
    </div>
  </div>

  <nav class="bottom-nav">
    <a class="nav-btn active" href="/coach/dashboard"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="7" height="9" rx="1.5"/><rect x="14" y="3" width="7" height="5" rx="1.5"/><rect x="14" y="12" width="7" height="9" rx="1.5"/><rect x="3" y="16" width="7" height="5" rx="1.5"/></svg><span>Tableau</span><span class="dot"></span></a>
    <a class="nav-btn" href="/coach/audit"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg><span>Audit</span><span class="dot"></span></a>
  </nav>
</div>
</body>
</html>
