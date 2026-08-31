<nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow-sm mb-4 px-3">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h5"><?= htmlspecialchars($title ?? 'Dashboard') ?></span>
        <div class="ms-auto">
            <?php if (isLoggedIn()): ?>
                <span class="me-3 text-muted">Welcome, <?= htmlspecialchars(currentUser()['name'] ?? '') ?></span>
                <a class="btn btn-outline-secondary btn-sm" href="/logout.php">Logout</a>
            <?php else: ?>
                <a class="btn btn-primary btn-sm" href="/login.php">Login</a>
            <?php endif; ?>
        </div>
    </div>
</nav>
