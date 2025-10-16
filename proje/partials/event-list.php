<h5>Katıldığım etkinlikler</h5>

<?php foreach ($events as $event): ?>

<div class="card">
    <div class="card-header">
            <span class="<?php echo $event['badge_class']?>"><?php echo $event['type']?> </span>
    </div>
    <div class="card-body">
        <h5 class="card-title"><?php echo $event['title']?> </h5>
        <p class="card-text"><?php echo  $event['description'] ?></p>
        <a href="#" class="btn btn-outline-secondary"><i class="bi bi-info-circle-fill"></i> Detaylı incele</a>
    </div>
</div>
<?php endforeach; ?>

