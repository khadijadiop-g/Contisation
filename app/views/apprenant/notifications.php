<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Notifications — Apprenant</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=IBM+Plex+Sans:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body class="role-apprenant">
<div id="app">
  <nav class="sidebar">
    <div class="sidebar-brand"><div class="avatar">KF</div><div class="topbar-title"><span class="topbar-eyebrow">Apprenant</span><h1>Carnet Cotis.</h1></div></div>
    <a class="nav-btn" href="/apprenant/dashboard"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 11.5L12 4l8 7.5M6 10v10h5v-6h2v6h5V10"/></svg><span>Accueil</span><span class="dot"></span></a>
    <a class="nav-btn" href="/apprenant/historique"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg><span>Historique</span><span class="dot"></span></a>
    <a class="nav-btn active" href="/apprenant/notifications"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M6 9a6 6 0 1112 0c0 5 2 6 2 6H4s2-1 2-6zM10 20a2 2 0 004 0"/></svg><span>Alertes</span><span class="dot"></span></a>
    <div class="sidebar-foot"><a class="btn btn-ghost" style="width:100%;font-size:13px;" href="/logout">Se déconnecter</a></div>
  </nav>

  <div class="main-col">
    <div class="topbar">
      <div class="topbar-title"><span class="topbar-eyebrow">Apprenant</span><h1>Notifications</h1></div>
      <div class="topbar-user"><div class="avatar">KF</div><a class="icon-btn" href="/logout"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#1E2A44" stroke-width="2"><path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4M16 17l5-5-5-5M21 12H9"/></svg></a></div>
    </div>

    <div class="screen">
      <div class="section-head">
        <div class="eyebrow">Alertes</div>
        <h2>Notifications</h2>
        <p class="section-sub">Retards, nouvelles campagnes et rappels d'échéance</p>
      </div>

      <div class="card notif-item late">
        <div class="notif-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 9v4M12 17h.01M10.3 3.9L1.8 18a2 2 0 001.7 3h17a2 2 0 001.7-3L13.7 3.9a2 2 0 00-3.4 0z"/></svg></div>
        <div class="notif-body">
          <div class="n-title">Retard détecté</div>
          <div class="n-desc">Semaine 13 non payée avant l'échéance de samedi 00h00</div>
          <div class="n-time">Il y a 2 jours</div>
        </div>
      </div>

      <div class="card notif-item gold">
        <div class="notif-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v4M8 8h8l1 4H7l1-4zM6 12h12l1 9H5l1-9z"/></svg></div>
        <div class="notif-body">
          <div class="n-title">Nouvelle campagne</div>
          <div class="n-desc">Anniversaire — Juillet 2026 est maintenant ouverte</div>
          <div class="n-time">Il y a 4 jours</div>
        </div>
      </div>

      <div class="card notif-item info">
        <div class="notif-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v5l3 2"/></svg></div>
        <div class="notif-body">
          <div class="n-title">Rappel d'échéance</div>
          <div class="n-desc">Votre cotisation de la semaine est due samedi 00h00</div>
          <div class="n-time">Il y a 6 jours</div>
        </div>
      </div>

      <div class="card notif-item info">
        <div class="notif-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s-7-4.6-9.3-8.9C1.2 8.9 3 5 6.7 5c2 0 3.5 1.3 4.3 2.6C11.8 6.3 13.3 5 15.3 5 19 5 20.8 8.9 19.3 12.1 17 16.4 12 21 12 21z"/></svg></div>
        <div class="notif-body">
          <div class="n-title">Campagne cas social ouverte</div>
          <div class="n-desc">Décès dans la famille de Moussa Sarr — don libre pendant 7 jours</div>
          <div class="n-time">Il y a 11 jours</div>
        </div>
      </div>
    </div>
  </div>

  <nav class="bottom-nav">
    <a class="nav-btn" href="/apprenant/dashboard"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 11.5L12 4l8 7.5M6 10v10h5v-6h2v6h5V10"/></svg><span>Accueil</span><span class="dot"></span></a>
    <a class="nav-btn" href="/apprenant/historique"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg><span>Historique</span><span class="dot"></span></a>
    <a class="nav-btn active" href="/apprenant/notifications"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M6 9a6 6 0 1112 0c0 5 2 6 2 6H4s2-1 2-6zM10 20a2 2 0 004 0"/></svg><span>Alertes</span><span class="dot"></span></a>
  </nav>
</div>
</body>
</html>
