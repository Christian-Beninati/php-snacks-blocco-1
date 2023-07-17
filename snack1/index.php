<?php

$matches = [
    [
        "home_team" => "Chicago Bulls",
        "guest_team" => "Los Angeles Lakers",
        "home_points" => 105,
        "guest_points" => 110
    ],
    [
        "home_team" => "Toronto Raptors",
        "guest_team" => "Golden State Warriors",
        "home_points" => 115,
        "guest_points" => 120
    ],
    [
        "home_team" => "Real Madrid",
        "guest_team" => "FC Barcelona",
        "home_points" => 80,
        "guest_points" => 75
    ],
    [
        "home_team" => "CSKA Moscow",
        "guest_team" => "Fenerbahçe",
        "home_points" => 92,
        "guest_points" => 88
    ],
    [
        "home_team" => "Panathinaikos",
        "guest_team" => "Olympiacos",
        "home_points" => 70,
        "guest_points" => 68
    ],
    [
        "home_team" => "Maccabi Tel Aviv",
        "guest_team" => "Efes Istanbul",
        "home_points" => 78,
        "guest_points" => 80
    ],
    [
        "home_team" => "San Antonio Spurs",
        "guest_team" => "Dallas Mavericks",
        "home_points" => 105,
        "guest_points" => 100
    ],
    [
        "home_team" => "Houston Rockets",
        "guest_team" => "Denver Nuggets",
        "home_points" => 110,
        "guest_points" => 108
    ],
    [
        "home_team" => "Boston Celtics",
        "guest_team" => "Philadelphia 76ers",
        "home_points" => 98,
        "guest_points" => 102
    ],
    [
        "home_team" => "Milwaukee Bucks",
        "guest_team" => "Los Angeles Clippers",
        "home_points" => 112,
        "guest_points" => 108
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basketball Match Results</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <main>
        <section id="matches" class="container mt-5">
            <h1 class="ms-3">Basketball Match </h1>
            <ul>
                <?php foreach ($matches as $matche) : ?>
                    <li class="py-2">
                        <?= $matche['home_team']; ?> - <?= $matche['guest_team']; ?> | <?= $matche['home_points']; ?> - <?= $matche['guest_points']; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
    </main>
</body>

</html>