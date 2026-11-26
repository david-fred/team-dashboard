<?php

$deployments = [
    [
        'version' => 'v1.0.0',
        'environment' => 'Production',
        'status' => 'Successful',
        'date' => '2026-11-20'
    ],
    [
        'version' => 'v1.1.0',
        'environment' => 'Staging',
        'status' => 'Failed',
        'date' => '2026-11-22'
    ],
];

?>

<h1>Deployment History</h1>

<?php foreach ($deployments as $deployment): ?>
    <div>
        <h3><?= $deployment['version'] ?></h3>
        <p>Environment: <?= $deployment['environment'] ?></p>
        <p>Status: <?= $deployment['status'] ?></p>
        <p>Date: <?= $deployment['date'] ?></p>
    </div>
<?php endforeach; ?>
