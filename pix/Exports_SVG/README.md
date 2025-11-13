# Exports SVG - Format Custom Session

Ce dossier contient les illustrations SVG du format de cours Custom Session.

## 🎨 Organisation des fichiers

### Illustrations principales (Groupes)

| Fichier | Description | Utilisation | Couleurs |
|---------|-------------|-------------|----------|
| `Groupe 29.svg` | Pieuvre / Octopus | Section Entraînement | Bleu foncé (#335472), Turquoise (#66c1bf), Blanc |
| `Groupe 30.svg` | Poisson | Élément décoratif | Bleu foncé (#335472) |
| `Groupe 33.svg` | Panneau avec "?" | Indicateur Questions/Aide | Bleu foncé (#335472), Turquoise (#66c1bf), Blanc |
| `Groupe 40.svg` | Personnage - Navigateur | Éléments de navigation | Bleu foncé (#335472), Turquoise (#66c1bf), Blanc, Gris (#707070) |
| `Groupe 836.svg` | Badge/Bouton | Bouton interactif | Bleu foncé (#335472), Turquoise (#66c1bf) |

### Illustrations complexes (Fichiers)

| Fichier | Description | Dimensions | Utilisation |
|---------|-------------|------------|-------------|
| `Fichier 127.svg` | Phare | 832x466 | Section initiale "Questionnaire de départ" |
| `Fichier 128.svg` | Phare (variante) | ~832x466 | Section initiale (alternative) |
| `Fichier 158.svg` | Scène sous-marine avec coraux | 832x466 | Section "Validation" avec dauphins |
| `Fichier 198.svg` | Personnage 1 | 462x321 | Section finale "Bravo !" |
| `Fichier 210.svg` | Personnage 2 | 499x363 | Section finale "Bravo !" |

### Éléments décoratifs (Fichiers 1-32)

- **Fichiers 1-22** : Petits éléments marins (poissons, algues, bulles, etc.)
- **Fichiers 26-32** : Éléments de décoration supplémentaires

### Éléments fonctionnels (Fichiers 100+)

- **Fichiers 115-323** : Éléments d'interface et décoration spécifique

## 🎨 Palette de couleurs principale

```css
--cs-blue-dark: #335472;      /* Bleu foncé principal */
--cs-blue-darker: #335572;    /* Bleu plus foncé */
--cs-turquoise: #66c1bf;      /* Turquoise/vert d'eau */
--cs-white: #FFFFFF;          /* Blanc */
--cs-pink: #c92f51;           /* Rose pour personnages */
--cs-coral: #ec6d81;          /* Corail pour personnages */
--cs-grey: #707070;           /* Gris neutre */
```

## 📝 Notes d'intégration

### Performance

Pour optimiser les performances :
- **Grandes illustrations de fond** : Utiliser les PNG (customsession_01.png à customsession_06.png)
- **Petits éléments décoratifs** : Utiliser les SVG (icônes, badges, petits poissons)
- **Éléments interactifs** : SVG inline pour permettre les animations CSS

### Utilisation dans Moodle

Les SVG peuvent être référencés dans le CSS avec la syntaxe Moodle :
```css
background-image: url([[pix:format_customsession|Exports_SVG/Groupe 29]]);
```

Ou inclus directement dans les templates Mustache pour plus de contrôle.

## 🔄 Mise à jour

Dernière mise à jour : 2025-01-13
Version du design : 1.0

---
**Ingenium Digital Learning** © 2025
