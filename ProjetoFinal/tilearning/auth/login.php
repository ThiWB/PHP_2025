<?php
require_once dirname(__DIR__) . '/init.php';
// O restante do seu c\u00f3digo...
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_role'] = $user['role'];
        redirect(BASE_URL . '/dashboard.php');
    } else {
        $error = "Email ou senha incorretos.";
    }
}
?>

<div class="form-container">
    <h2>Login</h2>
    <?php if ($error): ?>
        <p style="color: red;"><?= $error ?></p>
    <?php endif; ?>
    <form action="" method="post">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" required>
        </div>
        <button type="submit" class="btn">Entrar</button>
    </form>
</div>