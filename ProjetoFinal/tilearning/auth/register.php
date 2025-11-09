<?php
require_once dirname(__DIR__) . '/init.php';
// O restante do seu c\u00f3digo...
$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = $_POST['fullname'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    if ($password !== $confirm_password) {
        $error = "As senhas n\u00e3o coincidem.";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        try {
            $stmt = $pdo->prepare("INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)");
            $stmt->execute([$fullname, $email, $hashed_password]);
            $success = "Cadastro realizado com sucesso! Voc\u00ea pode agora <a href='" . BASE_URL . "/auth/login'>entrar</a>.";
        } catch (PDOException $e) {
            if ($e->getCode() === '23000') {
                $error = "Este email j\u00e1 est\u00e1 cadastrado.";
            } else {
                $error = "Ocorreu um erro ao registrar: " . $e->getMessage();
            }
        }
    }
}
?>

<div class="form-container">
    <h2>Cadastre-se</h2>
    <?php if ($error): ?>
        <p style="color: red;"><?= $error ?></p>
    <?php endif; ?>
    <?php if ($success): ?>
        <p style="color: green;"><?= $success ?></p>
    <?php endif; ?>
    <form action="" method="post">
        <div class="form-group">
            <label for="fullname">Nome Completo</label>
            <input type="text" name="fullname" id="fullname" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div class="form-group">
            <label for="confirm_password">Confirmar Senha</label>
            <input type="password" name="confirm_password" id="confirm_password" required>
        </div>
        <button type="submit" class="btn">Cadastrar</button>
    </form>
</div>