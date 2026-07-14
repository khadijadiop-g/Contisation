<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Audit détaillé — Coach Superviseur</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=IBM+Plex+Sans:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body class="role-coach">
<div id="app">
  <nav class="sidebar">
    <div class="sidebar-brand"><div class="avatar">SB</div><div class="topbar-title"><span class="topbar-eyebrow">Coach</span><h1>Carnet Cotis.</h1></div></div>
    <a class="nav-btn" href="/coach/dashboard"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="7" height="9" rx="1.5"/><rect x="14" y="3" width="7" height="5" rx="1.5"/><rect x="14" y="12" width="7" height="9" rx="1.5"/><rect x="3" y="16" width="7" height="5" rx="1.5"/></svg><span>Tableau de bord</span><span class="dot"></span></a>
    <a class="nav-btn active" href="/coach/audit"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg><span>Audit</span><span class="dot"></span></a>
    <div class="sidebar-foot"><a class="btn btn-ghost" style="width:100%;font-size:13px;" href="/logout">Se déconnecter</a></div>
  </nav>

  <div class="main-col">
    <div class="topbar">
      <div class="topbar-title"><span class="topbar-eyebrow">Coach Superviseur</span><h1>Audit</h1></div>
      <div class="topbar-user"><div class="avatar">SB</div><a class="icon-btn" href="/logout"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#1E2A44" stroke-width="2"><path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4M16 17l5-5-5-5M21 12H9"/></svg></a></div>
    </div>

    <div class="screen">
      <div class="section-head">
        <div class="eyebrow">Audit détaillé</div>
        <h2>Apprenants × Semaines</h2>
        <span class="readonly-tag">🔒 Aucune modification possible</span>
      </div>
      <div class="ledger-wrap" style="margin-top:12px;"><table class="ledger" id="ledgerTable"></table></div>
      <div class="legend">
        <div class="legend-item"><span class="cell-dot paid"></span> Payé</div>
        <div class="legend-item"><span class="cell-dot late"></span> Retard</div>
        <div class="legend-item"><span class="cell-dot pending"></span> Non échu</div>
      </div>
      <button class="btn btn-ghost" style="width:100%;margin-top:18px;">Exporter le rapport (PDF)</button>
    </div>
  </div>

  <nav class="bottom-nav">
    <a class="nav-btn" href="/coach/dashboard"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="7" height="9" rx="1.5"/><rect x="14" y="3" width="7" height="5" rx="1.5"/><rect x="14" y="12" width="7" height="9" rx="1.5"/><rect x="3" y="16" width="7" height="5" rx="1.5"/></svg><span>Tableau</span><span class="dot"></span></a>
    <a class="nav-btn active" href="/coach/audit"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg><span>Audit</span><span class="dot"></span></a>
  </nav>
</div>

<script>
  const apprenants = [
    {nom:'Fatou Ndiaye', statut:'ok'}, {nom:'Moussa Sarr', statut:'late'},
    {nom:'Ibrahima Diallo', statut:'late'}, {nom:'Aïssatou Ba', statut:'ok'},
    {nom:'Cheikh Sy', statut:'ok'}, {nom:'Mariama Kane', statut:'ok'},
    {nom:'Ousmane Diouf', statut:'late'}, {nom:'Rokhaya Faye', statut:'ok'},
  ];
  const weeks = 40;
  const table = document.getElementById('ledgerTable');
  let thead = '<thead><tr><th class="name-col">Apprenant</th>';
  for(let w=1; w<=weeks; w++){ thead += `<th>S${w}</th>`; }
  thead += '</tr></thead>';
  let tbody = '<tbody>';
  apprenants.forEach((a,idx)=>{
    tbody += `<tr><td class="name-col">${a.nom}</td>`;
    for(let w=1; w<=weeks; w++){
      let cls = 'pending';
      if(w < 14){ cls = ((w+idx)%5===0 && a.statut==='late') ? 'late' : 'paid'; }
      tbody += `<td><div class="cell-dot ${cls}"></div></td>`;
    }
    tbody += '</tr>';
  });
  tbody += '</tbody>';
  table.innerHTML = thead + tbody;
</script>
</body>
</html>
