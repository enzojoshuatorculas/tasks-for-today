<?= $this->include('layouts/header') ?>

<?php if (empty($user)): ?>
    <div class="empty-state">No profile found.</div>
<?php else: ?>
    <section class="profile-card">
        <div class="avatar"><?= esc(strtoupper(substr($user['full_name'], 0, 1))) ?></div>
        <div>
            <h2><?= esc($user['full_name']) ?></h2>
            <p class="username">@<?= esc($user['username']) ?></p>
            <p><?= esc($user['email']) ?></p>
        </div>
    </section>
<?php endif; ?>

<?= $this->include('layouts/footer') ?>
