<!DOCTYPE html>
<html lang="fr"> 
<head> 
    <meta charset="UTF-8"> 
    <title> Liste des etudiants </title> 
    <link rel="stylesheet" href = "assets/style.css"> 
</head>
<body>
    <h1> Liste des etudiants </h1> 
<ul>
<?php if (!empty($students)) : ?>
    <?php foreach ($students as $student) : ?>
        <li>
            <?= htmlspecialchars($student['prenom'] ?? '') ?>
            (<?= (int)($student['age'] ?? 0) ?> ans)
        </li>
    <?php endforeach; ?>
<?php else : ?>
    <li>Aucun étudiant</li>
<?php endif; ?>
</ul>
</body>
</html>
