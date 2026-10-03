<?= $this->include('layouts/header') ?>

<section class="intro-card">
    <p class="lead">Here are the tasks scheduled for today, <?= esc($today) ?>.</p>
</section>
<?= $this->include('pages/task_list') ?>

<?= $this->include('layouts/footer') ?>
