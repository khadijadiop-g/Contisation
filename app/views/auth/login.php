<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Connexion — Carnet de Cotisation</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=IBM+Plex+Sans:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
  <div class="login-shell">
    <div class="login-card">
      <div class="login-mark">CC</div>
      <h1>Carnet de Cotisation</h1>
      <p class="login-sub">Connectez-vous à votre espace</p>

      <?php if (!empty($erreur)): ?>
        <p style="color:#c0392b;font-size:12.5px;margin-bottom:10px;"><?= htmlspecialchars($erreur) ?></p>
      <?php endif; ?>

      <form method="POST" action="/login">
        <div class="field">
          <label for="li-email">Identifiant</label>
          <input id="li-email" name="identifiant" type="text" placeholder="prenom@gmail.com">
        </div>
        <div class="field">
          <label for="li-pass">Mot de passe</label>
          <input id="li-pass" name="mot_de_passe" type="password" placeholder="••••••••">
        </div>
        <button class="btn btn-primary" type="submit">Se connecter</button>
      </form>

      <p class="login-foot">Un seul formulaire de connexion pour les trois rôles</p>
      <p class="login-foot" style="margin-top:8px;">
        Nouvel apprenant ? <a href="/inscription" style="color:var(--green);font-weight:600;text-decoration:underline;">S'inscrire à la promotion →</a>
      </p>
    </div>
  </div>
</body>
</html>
