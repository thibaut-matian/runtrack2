<?php
session_start();

// grille
if (!isset($_SESSION['grille'])) {
    $_SESSION['grille'] = [
        ['-', '-', '-'],
        ['-', '-', '-'],
        ['-', '-', '-']
    ];
    $_SESSION['joueur_courant'] = 'X';
    $_SESSION['partie_finie'] = false;
    $_SESSION['message'] = '';
}

// Fonction: vérifier si un joueur a gagné
function verifierVictoire($grille, $joueur) {
    // Vérifier lignes
    for ($i = 0; $i < 3; $i++) {
        if ($grille[$i][0] === $joueur && $grille[$i][1] === $joueur && $grille[$i][2] === $joueur) {
            return true;
        }
    }
    
    // Vérifier colonnes
    for ($j = 0; $j < 3; $j++) {
        if ($grille[0][$j] === $joueur && $grille[1][$j] === $joueur && $grille[2][$j] === $joueur) {
            return true;
        }
    }
    
    // Vérifier diagonales
    if ($grille[0][0] === $joueur && $grille[1][1] === $joueur && $grille[2][2] === $joueur) {
        return true;
    }
    if ($grille[0][2] === $joueur && $grille[1][1] === $joueur && $grille[2][0] === $joueur) {
        return true;
    }
    
    return false;
}

// Fonction pour vérifier match nul
function verifierMatchNul($grille) {
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            if ($grille[$i][$j] === '-') {
                return false;
            }
        }
    }
    return true;
}

// Traitement des actions
if (isset($_POST['reset'])) {
    // Réinitialiser la partie
    $_SESSION['grille'] = [
        ['-', '-', '-'],
        ['-', '-', '-'],
        ['-', '-', '-']
    ];
    $_SESSION['joueur_courant'] = 'X';
    $_SESSION['partie_finie'] = false;
    $_SESSION['message'] = '';
} elseif (isset($_POST['case']) && !$_SESSION['partie_finie']) {
    // Jouer un coup
    $position = $_POST['case'];
    $ligne = intval($position / 3);
    $colonne = $position % 3;
    
    if ($_SESSION['grille'][$ligne][$colonne] === '-') {
        $_SESSION['grille'][$ligne][$colonne] = $_SESSION['joueur_courant'];
        
        // Vérifier victoire
        if (verifierVictoire($_SESSION['grille'], $_SESSION['joueur_courant'])) {
            $_SESSION['message'] = $_SESSION['joueur_courant'] . ' a gagné';
            $_SESSION['partie_finie'] = true;
        } elseif (verifierMatchNul($_SESSION['grille'])) {
            $_SESSION['message'] = 'Match nul';
            $_SESSION['partie_finie'] = true;
        } else {
            // Changer de joueur
            $_SESSION['joueur_courant'] = ($_SESSION['joueur_courant'] === 'X') ? 'O' : 'X';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Jeu du Morpion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Jeu du Morpion</h1>
    
    <div class="game-container">
        <?php if ($_SESSION['message'] !== ''): ?>
            <div class="message"><?php echo $_SESSION['message']; ?></div>
        <?php endif; ?>
        
        <?php if (!$_SESSION['partie_finie']): ?>
            <div class="joueur-courant">Au tour de : <strong><?php echo $_SESSION['joueur_courant']; ?></strong></div>
        <?php endif; ?>
        
        <table>
            <?php for ($i = 0; $i < 3; $i++): ?>
                <tr>
                    <?php for ($j = 0; $j < 3; $j++): ?>
                        <td>
                            <?php if ($_SESSION['grille'][$i][$j] === '-' && !$_SESSION['partie_finie']): ?>
                                <form method="post" style="margin: 0; height: 100%;">
                                    <button type="submit" name="case" value="<?php echo $i * 3 + $j; ?>">-</button>
                                </form>
                            <?php else: ?>
                                <div class="game-symbol <?php echo $_SESSION['grille'][$i][$j] === 'X' ? 'symbol-x' : ($_SESSION['grille'][$i][$j] === 'O' ? 'symbol-o' : ''); ?>">
                                    <?php echo $_SESSION['grille'][$i][$j] === '-' ? '' : $_SESSION['grille'][$i][$j]; ?>
                                </div>
                            <?php endif; ?>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
        
        <div class="reset-button">
            <form method="post">
                <button type="submit" name="reset" class="reset-btn">🔄 Nouvelle partie</button>
            </form>
        </div>
    </div>
</body>
</html>
