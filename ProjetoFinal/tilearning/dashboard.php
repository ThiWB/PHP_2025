<?php
require_once __DIR__ . '/init.php';

// Redireciona para a página de login se o usuário não estiver autenticado
if (!isUserLoggedIn()) {
    redirect(BASE_URL . '/auth/login.php');
}

include __DIR__ . '/templates/header.php';
?>

<div class="main-content">
    <h1>Dashboard</h1>
    <p>Bem-vindo, <?= htmlspecialchars($_SESSION['fullname'] ?? '') ?>!</p>
    <a href="<?= BASE_URL ?>/logout.php" class="btn">Sair</a>

    <h2>Cursos Disponíveis</h2>
    <?php
    $stmt = $pdo->query("SELECT title, description, level, hours FROM courses");
    $courses = $stmt->fetchAll();

    if (count($courses) > 0):
    ?>
    <ul class="course-list">
        <?php foreach ($courses as $course): ?>
        <li class="course-item">
            <h3><?= htmlspecialchars($course['title']) ?></h3>
            <p><?= htmlspecialchars($course['description']) ?></p>
            <p>Nível: <?= htmlspecialchars($course['level']) ?> | Duração: <?= htmlspecialchars($course['hours']) ?> horas</p>
        </li>
        <?php endforeach; ?>
    </ul>
    <?php else: ?>
    <p>Nenhum curso disponível no momento.</p>
    <?php endif; ?>
</div>

<?php include __DIR__ . '/templates/footer.php'; ?>