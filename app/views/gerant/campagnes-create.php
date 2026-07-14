<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Créer une campagne — Gérant</title>
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
    <a class="nav-btn active" href="/gerant/campagnes/create"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 11v2a2 2 0 002 2h1l2 5h2l-1-5h6l5 3V6l-5 3H8L6 5H4a2 2 0 00-2 2v0"/></svg><span>Campagnes</span><span class="dot"></span></a>
    <a class="nav-btn" href="/gerant/apprenants"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="8" cy="8" r="3"/><circle cx="17" cy="9" r="2.6"/><path d="M2.5 20c.5-3.6 2.9-5.8 5.5-5.8s5 2.2 5.5 5.8M14 15c2.3.1 4 1.9 4.5 5"/></svg><span>Apprenants</span><span class="dot"></span></a>
    <div class="sidebar-foot"><a class="btn btn-ghost" style="width:100%;font-size:13px;" href="/logout">Se déconnecter</a></div>
  </nav>

  <div class="main-col">
    <div class="topbar">
      <div class="topbar-title"><span class="topbar-eyebrow">Gérant</span><h1>Campagnes</h1></div>
      <div class="topbar-user"><div class="avatar">AD</div><a class="icon-btn" href="/logout"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#1E2A44" stroke-width="2"><path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4M16 17l5-5-5-5M21 12H9"/></svg></a></div>
    </div>

    <div class="screen">
      <div class="section-head">
        <div class="eyebrow">Cotisations ponctuelles</div>
        <h2>Créer une campagne</h2>
        <p class="section-sub">Choisissez le type d'événement — les règles changent selon le cas</p>
      </div>

      <?php if (!empty($erreurs)): ?>
        <div style="margin:12px 0;">
          <?php foreach ($erreurs as $erreur): ?>
            <p style="color:#c0392b;font-size:12.5px;margin:0 0 4px;"><?= htmlspecialchars($erreur) ?></p>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <form method="POST" action="/gerant/campagnes/create">
        <input type="hidden" id="campType" name="type" value="anniv">

        <div class="type-cards">
          <div class="type-card anniv selected" onclick="selectType(this,'anniv')">
            <div class="tc-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v4M8 8h8l1 4H7l1-4zM6 12h12l1 9H5l1-9z"/></svg></div>
            <h3>Anniversaire</h3><p>Montant fixe, collecté la dernière semaine du mois</p>
          </div>
          <div class="type-card deces" onclick="selectType(this,'deces')">
            <div class="tc-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s-7-4.6-9.3-8.9C1.2 8.9 3 5 6.7 5c2 0 3.5 1.3 4.3 2.6C11.8 6.3 13.3 5 15.3 5 19 5 20.8 8.9 19.3 12.1 17 16.4 12 21 12 21z"/></svg></div>
            <h3>Cas social / Décès</h3><p>Montant libre, campagne ouverte 7 jours puis clôture automatique</p>
          </div>
          <div class="type-card autre" onclick="selectType(this,'autre')">
            <div class="tc-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18"/></svg></div>
            <h3>Autre événement</h3><p>Matériel, sortie… montant et date limite paramétrables</p>
          </div>
        </div>

        <div class="card form-card" style="margin-top:16px;">
          <div class="form-row"><label class="field-label">Titre de la campagne</label><input type="text" id="campTitle" name="titre" value="Anniversaire — Juillet 2026"></div>
          <div class="form-row" id="campAmountRow"><label class="field-label">Montant par apprenant (FCFA)</label><input type="number" name="montant" value="1000"></div>
          <div class="form-row" id="campDateRow" style="display:none;"><label class="field-label">Date limite</label><input type="date" name="date_limite"></div>
          <div id="campDecesNote" style="display:none;"><span class="countdown">⏱ Clôture automatique dans 7 jours</span></div>
          <div class="form-row" style="margin-top:16px;"><button class="btn btn-accent" style="width:100%;color:#fff;" type="submit">Créer la campagne</button></div>
        </div>
      </form>
    </div>
  </div>

  <nav class="bottom-nav">
    <a class="nav-btn" href="/gerant/dashboard"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="7" height="9" rx="1.5"/><rect x="14" y="3" width="7" height="5" rx="1.5"/><rect x="14" y="12" width="7" height="9" rx="1.5"/><rect x="3" y="16" width="7" height="5" rx="1.5"/></svg><span>Tableau</span><span class="dot"></span></a>
    <a class="nav-btn" href="/gerant/paiements/create"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M12 7v10M9 9.5c0-1.4 1.3-2.5 3-2.5s3 1 3 2.2c0 3-6 1.5-6 4.5 0 1.3 1.3 2.3 3 2.3s3-1 3-2.3"/></svg><span>Paiements</span><span class="dot"></span></a>
    <a class="nav-btn active" href="/gerant/campagnes/create"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 11v2a2 2 0 002 2h1l2 5h2l-1-5h6l5 3V6l-5 3H8L6 5H4a2 2 0 00-2 2v0"/></svg><span>Campagnes</span><span class="dot"></span></a>
    <a class="nav-btn" href="/gerant/apprenants"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="8" cy="8" r="3"/><circle cx="17" cy="9" r="2.6"/><path d="M2.5 20c.5-3.6 2.9-5.8 5.5-5.8s5 2.2 5.5 5.8M14 15c2.3.1 4 1.9 4.5 5"/></svg><span>Apprenants</span><span class="dot"></span></a>
  </nav>
</div>

<script>
  function selectType(el, type){
    document.querySelectorAll('.type-card').forEach(c=>c.classList.remove('selected'));
    el.classList.add('selected');
    document.getElementById('campType').value = type;
    const amountRow = document.getElementById('campAmountRow');
    const dateRow = document.getElementById('campDateRow');
    const decesNote = document.getElementById('campDecesNote');
    const titleInput = document.getElementById('campTitle');
    if(type==='anniv'){ amountRow.style.display='block'; dateRow.style.display='none'; decesNote.style.display='none'; titleInput.value='Anniversaire — Juillet 2026'; }
    else if(type==='deces'){ amountRow.style.display='none'; dateRow.style.display='none'; decesNote.style.display='block'; titleInput.value='Cas social — Décès famille Sarr'; }
    else { amountRow.style.display='block'; dateRow.style.display='block'; decesNote.style.display='none'; titleInput.value='Sortie pédagogique — à préciser'; }
  }
</script>
</body>
</html>
