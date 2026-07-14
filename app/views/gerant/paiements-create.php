<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Enregistrer un paiement — Gérant</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=IBM+Plex+Sans:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body class="role-gerant">
<div id="app">
  <nav class="sidebar">
    <div class="sidebar-brand"><div class="avatar">AD</div><div class="topbar-title"><span class="topbar-eyebrow">Gérant</span><h1>Carnet Cotis.</h1></div></div>
    <a class="nav-btn" href="/gerant/dashboard"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="7" height="9" rx="1.5"/><rect x="14" y="3" width="7" height="5" rx="1.5"/><rect x="14" y="12" width="7" height="9" rx="1.5"/><rect x="3" y="16" width="7" height="5" rx="1.5"/></svg><span>Tableau de bord</span><span class="dot"></span></a>
    <a class="nav-btn active" href="/gerant/paiements/create"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M12 7v10M9 9.5c0-1.4 1.3-2.5 3-2.5s3 1 3 2.2c0 3-6 1.5-6 4.5 0 1.3 1.3 2.3 3 2.3s3-1 3-2.3"/></svg><span>Paiements</span><span class="dot"></span></a>
    <a class="nav-btn" href="/gerant/campagnes/create"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 11v2a2 2 0 002 2h1l2 5h2l-1-5h6l5 3V6l-5 3H8L6 5H4a2 2 0 00-2 2v0"/></svg><span>Campagnes</span><span class="dot"></span></a>
    <a class="nav-btn" href="/gerant/apprenants"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="8" cy="8" r="3"/><circle cx="17" cy="9" r="2.6"/><path d="M2.5 20c.5-3.6 2.9-5.8 5.5-5.8s5 2.2 5.5 5.8M14 15c2.3.1 4 1.9 4.5 5"/></svg><span>Apprenants</span><span class="dot"></span></a>
    <div class="sidebar-foot"><a class="btn btn-ghost" style="width:100%;font-size:13px;" href="/logout">Se déconnecter</a></div>
  </nav>

  <div class="main-col">
    <div class="topbar">
      <div class="topbar-title"><span class="topbar-eyebrow">Gérant</span><h1>Paiements</h1></div>
      <div class="topbar-user"><div class="avatar">AD</div><a class="icon-btn" href="/logout"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#1E2A44" stroke-width="2"><path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4M16 17l5-5-5-5M21 12H9"/></svg></a></div>
    </div>

    <div class="screen">
      <div class="section-head">
        <div class="eyebrow">Saisie déclarative</div>
        <h2>Enregistrer un paiement</h2>
        <p class="section-sub">Le montant est reçu manuellement, puis déclaré ici</p>
      </div>

      <?php if (!empty($erreurs)): ?>
        <div style="margin-bottom:12px;">
          <?php foreach ($erreurs as $erreur): ?>
            <p style="color:#c0392b;font-size:12.5px;margin:0 0 4px;"><?= htmlspecialchars($erreur) ?></p>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <form method="POST" action="/gerant/paiements/create">
        <div class="card form-card">
          <div class="form-row">
            <label class="field-label">Apprenant</label>
            <select name="apprenant_id">
              <?php if (empty($apprenants)): ?>
                <option value="">Aucun apprenant enregistré</option>
              <?php endif; ?>
              <?php foreach ($apprenants as $a): ?>
                <option value="<?= htmlspecialchars($a['id']) ?>"><?= htmlspecialchars($a['nom']) ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-row">
            <label class="field-label">Montant reçu (FCFA)</label>
            <input type="number" name="montant" value="3000">
          </div>
          <div class="form-row">
            <label class="field-label">Affecter ce paiement à</label>
            <div class="radio-row">
              <label class="radio-opt selected"><input type="radio" name="cible" value="hebdomadaire" checked><div><div class="opt-title">Cotisations hebdomadaires</div><div class="opt-desc">Ventilation automatique sur les semaines impayées les plus anciennes</div></div></label>
              <label class="radio-opt"><input type="radio" name="cible" value="anniversaire"><div><div class="opt-title">Cotisation anniversaire du mois</div><div class="opt-desc">Montant fixe — juillet 2026</div></div></label>
              <label class="radio-opt"><input type="radio" name="cible" value="cas_social"><div><div class="opt-title">Don libre — Cas social</div><div class="opt-desc">Campagne « Décès famille Sarr » — montant libre</div></div></label>
            </div>
          </div>
          <div class="form-row" style="margin-top:18px;"><button class="btn btn-primary" type="submit">Enregistrer le paiement</button></div>
        </div>
      </form>
    </div>
  </div>

  <nav class="bottom-nav">
    <a class="nav-btn" href="/gerant/dashboard"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="7" height="9" rx="1.5"/><rect x="14" y="3" width="7" height="5" rx="1.5"/><rect x="14" y="12" width="7" height="9" rx="1.5"/><rect x="3" y="16" width="7" height="5" rx="1.5"/></svg><span>Tableau</span><span class="dot"></span></a>
    <a class="nav-btn active" href="/gerant/paiements/create"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M12 7v10M9 9.5c0-1.4 1.3-2.5 3-2.5s3 1 3 2.2c0 3-6 1.5-6 4.5 0 1.3 1.3 2.3 3 2.3s3-1 3-2.3"/></svg><span>Paiements</span><span class="dot"></span></a>
    <a class="nav-btn" href="/gerant/campagnes/create"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 11v2a2 2 0 002 2h1l2 5h2l-1-5h6l5 3V6l-5 3H8L6 5H4a2 2 0 00-2 2v0"/></svg><span>Campagnes</span><span class="dot"></span></a>
    <a class="nav-btn" href="/gerant/apprenants"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="8" cy="8" r="3"/><circle cx="17" cy="9" r="2.6"/><path d="M2.5 20c.5-3.6 2.9-5.8 5.5-5.8s5 2.2 5.5 5.8M14 15c2.3.1 4 1.9 4.5 5"/></svg><span>Apprenants</span><span class="dot"></span></a>
  </nav>
</div>

<script>
  document.querySelectorAll('.radio-opt').forEach(opt=>{
    opt.addEventListener('click', ()=>{
      document.querySelectorAll('.radio-opt').forEach(o=>o.classList.remove('selected'));
      opt.classList.add('selected');
      opt.querySelector('input').checked = true;
    });
  });
</script>
</body>
</html>
