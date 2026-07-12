# COTIZ — Incrément 1 (Acteur Gérant)

Application de gestion des cotisations de classe. Architecture **Front Controller + MVC**
en PHP natif (sans framework), avec `$_SESSION` comme **unique** mécanisme de stockage
(aucune base de données).

Cet incrément couvre entièrement l'**Acteur Gérant** :
- Authentification
- Tableau de bord croisé (Apprenants × Semaines)
- Saisie des paiements avec **ventilation automatique** des semaines hebdomadaires
- Création de campagnes ponctuelles (Anniversaire / Cas social-Décès / Autre)
- Gestion (liste + ajout) des apprenants

Les incréments 2 (Apprenant) et 3 (Coach Superviseur) réutiliseront les mêmes Models
et le même Router ; seuls de nouveaux Controllers et Views seront ajoutés.

## Arborescence

```
public/
  index.php          → Front Controller (point d'entrée unique)
  .htaccess          → URLs propres (Apache, mod_rewrite)
  assets/css/style.css

app/
  routes.php         → Table des routes

  core/
    Router.php         → Routeur simple (chemin + méthode HTTP → Controller::action)
    Controller.php      → Classe de base : rendu de vues, redirections, rôle requis, CSRF
    SessionManager.php  → Accès EXCLUSIF à $_SESSION (les Models ne touchent jamais $_SESSION directement)

  models/
    ApprenantModel.php  → CRUD apprenants + suivi des semaines payées
    PaiementModel.php   → Enregistrement des paiements + ventilation automatique
    CampagneModel.php   → Campagnes ponctuelles + règles métier (J+7, dernière semaine du mois)
    UserModel.php       → Authentification (démo)

  controllers/
    AuthController.php    → /login, /logout
    GerantController.php  → /gerant/*

  views/
    layout/main.php       → Gabarit partagé (header, nav, messages flash)
    auth/login.php
    gerant/dashboard.php
    gerant/paiement_form.php
    gerant/campagne_form.php
    gerant/apprenants.php
```

## Lancer le projet en local

Aucune dépendance externe (pas de Composer). PHP ≥ 8.1 suffit.

```bash
cd public
php -S localhost:8000
```

Puis ouvrir `http://localhost:8000/login`.

**Identifiants de démonstration :**
- Identifiant : `gerant`
- Mot de passe : `gerant123`

Sur un vrai hébergement Apache, le `.htaccess` fourni dans `public/` prend en charge
les URLs propres (`/gerant/dashboard`, etc.) sans configuration supplémentaire —
il suffit de pointer le DocumentRoot vers `public/`.

## Règles métier implémentées

- **Ventilation automatique** (`PaiementModel::enregistrerHebdomadaire`) : un versement
  hebdomadaire est réparti automatiquement sur les semaines impayées les plus anciennes,
  à raison du montant hebdomadaire fixé en configuration.
- **Campagne "Cas social / Décès"** (`CampagneModel::creerDeces`) : montant libre par
  apprenant, clôture automatique fixée à J+7 dès la création (pas de date à saisir).
- **Campagne "Anniversaire"** (`CampagneModel::creerAnniversaire`) : ne peut être créée
  que si la date du jour tombe dans la dernière semaine du mois (`estDerniereSemaineDuMois`) ;
  montant fixe identique pour tous, date limite = fin du mois.
- **Sécurité** : jeton CSRF sur tous les formulaires POST (`SessionManager::csrfToken`/`checkCsrf`),
  échappement systématique à l'affichage (`htmlspecialchars`), contrôle d'accès par rôle
  (`Controller::requireRole`).

## Ce qui reste à faire pour les incréments suivants

- **Incrément 2 — Apprenant** : `AuthController` étendu (comptes apprenants + auto-inscription),
  `ApprenantController` avec `/apprenant/dashboard`, vue "mon carnet" personnel, notifications.
- **Incrément 3 — Coach Superviseur** : `CoachController` en lecture seule, `/coach/dashboard`,
  audit global (déjà esquissé dans la maquette HTML).
- **Import Excel/CSV** des apprenants : `ApprenantModel::importer()` est déjà prêt à recevoir
  un tableau de lignes ; il ne manque que le parsing du fichier uploadé côté contrôleur.
- **Notifications** (retard, nouvelle campagne, relances) : à modéliser comme une nouvelle
  clé de session (`$_SESSION['notifications']`) alimentée par les Models existants.
