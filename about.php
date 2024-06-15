<!-- /about.php -->
<?php include 'includes/header.php'; ?>
<main>
    <h1>About Sidhu moose wala</h1><hr>
    <h2><p>The 28-year-old moved to Brampton, Ont., from India as an international student in 2016. A year later, he kick-started his music career when he released his first single on YouTube, with his music channel on the site now racking up a following of more than 11 million subscribers from around the world.</p></h2>
    <?php
    $team = [
        ["name" => "Byg Byrd", "role" => "producer"],
        ["name" => "Sunny Malton", "role" => "rapper"],
        ["name" => "Navkaran Brar", "role" => "manager"],
    ];
    ?>
    <h2> Team Members of Sidhu moose wala</h2>
    <ul>
        <?php foreach ($team as $member): ?>
            <li><?= $member['name'] ?> - <?= $member['role'] ?></li>
        <?php endforeach; ?>
    </ul>
</main>
<?php include 'includes/footer.php'; ?>