<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Historique — Apprenant</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=IBM+Plex+Sans:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body class="role-apprenant">
<div id="app">
  <nav class="sidebar">
    <div class="sidebar-brand"><div class="avatar">KF</div><div class="topbar-title"><span class="topbar-eyebrow">Apprenant</span><h1>Carnet Cotis.</h1></div></div>
    <a class="nav-btn" href="/apprenant/dashboard"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 11.5L12 4l8 7.5M6 10v10h5v-6h2v6h5V10"/></svg><span>Accueil</span><span class="dot"></span></a>
    <a class="nav-btn active" href="/apprenant/historique"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg><span>Historique</span><span class="dot"></span></a>
    <a class="nav-btn" href="/apprenant/notifications"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M6 9a6 6 0 1112 0c0 5 2 6 2 6H4s2-1 2-6zM10 20a2 2 0 004 0"/></svg><span>Alertes</span><span class="dot"></span></a>
    <div class="sidebar-foot"><a class="btn btn-ghost" style="width:100%;font-size:13px;" href="/logout">Se déconnecter</a></div>
  </nav>

  <div class="main-col">
    <div class="topbar">
      <div class="topbar-title"><span class="topbar-eyebrow">Apprenant</span><h1>Historique</h1></div>
      <div class="topbar-user"><div class="avatar">KF</div><a class="icon-btn" href="/logout"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#1E2A44" stroke-width="2"><path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4M16 17l5-5-5-5M21 12H9"/></svg></a></div>
    </div>

    <div class="screen">
      <div class="section-head">
        <div class="eyebrow">Mes paiements</div>
        <h2>Historique complet</h2>
        <p class="section-sub">Toutes vos contributions, semaine par semaine</p>
      </div>

      <div class="receipt-list">
        <div class="card receipt-item">
          <div class="receipt-stamp">S13</div>
          <div class="receipt-info"><div class="r-title">Cotisation hebdomadaire</div><div class="r-meta">6 juillet 2026</div></div>
          <div class="receipt-amount">3 000 F</div>
        </div>
        <div class="card receipt-item">
          <div class="receipt-stamp">S12</div>
          <div class="receipt-info"><div class="r-title">Cotisation hebdomadaire</div><div class="r-meta">29 juin 2026</div></div>
          <div class="receipt-amount">3 000 F</div>
        </div>
        <div class="card receipt-item">
          <div class="receipt-stamp">S11</div>
          <div class="receipt-info"><div class="r-title">Cotisation hebdomadaire</div><div class="r-meta">22 juin 2026</div></div>
          <div class="receipt-amount">3 000 F</div>
        </div>
        <div class="card receipt-item">
          <div class="receipt-stamp" style="border-color:var(--gold);color:var(--gold);">JUIN</div>
          <div class="receipt-info"><div class="r-title">Anniversaire — Juin</div><div class="r-meta">28 juin 2026</div></div>
          <div class="receipt-amount">1 000 F</div>
        </div>
        <div class="card receipt-item">
          <div class="receipt-stamp" style="border-color:var(--red);color:var(--red);">DON</div>
          <div class="receipt-info"><div class="r-title">Cas social — Décès famille Sy</div><div class="r-meta">15 mai 2026</div></div>
          <div class="receipt-amount">2 000 F</div>
        </div>
        <div class="card receipt-item">
          <div class="receipt-stamp">S07</div>
          <div class="receipt-info"><div class="r-title">Cotisation hebdomadaire</div><div class="r-meta">18 mai 2026</div></div>
          <div class="receipt-amount">3 000 F</div>
        </div>
      </div>
    </div>
  </div>

  <nav class="bottom-nav">
    <a class="nav-btn" href="/apprenant/dashboard"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 11.5L12 4l8 7.5M6 10v10h5v-6h2v6h5V10"/></svg><span>Accueil</span><span class="dot"></span></a>
    <a class="nav-btn active" href="/apprenant/historique"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg><span>Historique</span><span class="dot"></span></a>
    <a class="nav-btn" href="/apprenant/notifications"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M6 9a6 6 0 1112 0c0 5 2 6 2 6H4s2-1 2-6zM10 20a2 2 0 004 0"/></svg><span>Alertes</span><span class="dot"></span></a>
  </nav>
</div>
</body>
</html>
