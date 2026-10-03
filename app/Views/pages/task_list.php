<?php if (empty($tasks)): ?>
    <div class="empty-state">No tasks found.</div>
<?php else: ?>
    <div class="task-grid">
        <?php foreach ($tasks as $task): ?>
            <article class="task-card">
                <div class="task-card-top">
                    <span class="status status-<?= esc($task['status']) ?>"><?= esc(ucfirst($task['status'])) ?></span>
                    <time datetime="<?= esc($task['task_date']) ?>"><?= esc($task['task_date']) ?></time>
                </div>
                <h2><?= esc($task['title']) ?></h2>
                <p class="task-date">Task date: <?= esc($task['task_date']) ?></p>
            </article>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
