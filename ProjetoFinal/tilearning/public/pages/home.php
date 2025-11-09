<?php
include dirname(__DIR__, 2) . '/templates/header.php';

$stmt = $pdo->query("SELECT title, description, level, hours FROM courses");
$courses = $stmt->fetchAll();
?>

<div class="main-content">
    <h1>Cursos Disponíveis</h1>
    <?php if (count($courses) > 0): ?>
        <ul class="course-list">
            <?php foreach ($courses as $course): ?>
                <li class="course-item">
                    <h2><?= htmlspecialchars($course['title']) ?></h2>
                    <p><?= htmlspecialchars($course['description']) ?></p>
                    <p>Nível: <?= htmlspecialchars($course['level']) ?> | Duração: <?= htmlspecialchars($course['hours']) ?> horas</p>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Nenhum curso disponível no momento.</p>
    <?php endif; ?>
</div>

<?php include dirname(__DIR__, 2) . '/templates/footer.php'; ?>