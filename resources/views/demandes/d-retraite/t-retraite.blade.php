<?php
$birthdate = isset($_GET['birthdate']) ? $_GET['birthdate'] : '';
if ($birthdate != '') {
    $retirementAge = 62;
    $retirementDate = date('Y-m-d', strtotime($birthdate . "+$retirementAge years"));
    $timeLeft = strtotime($retirementDate) - time();

    if ($timeLeft < 0) {
        $yearsLeft = 0;
        $monthsLeft = 0;
        $daysLeft = 0;
    } else {
        $yearsLeft = floor($timeLeft / (365.25 * 24 * 60 * 60));
        $monthsLeft = floor(($timeLeft / (30.44 * 24 * 60 * 60)) % 12);
        $daysLeft = floor(($timeLeft / (24 * 60 * 60)) % 30.44);
    }
} else {
    $yearsLeft = '';
    $monthsLeft = '';
    $daysLeft = '';
}
?>
<!DOCTYPE html>
@if(auth()->user()->hasRole('employe'))
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Temps restant avant la retraite</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        
        .container {
            max-width: 500px;
            margin: 0 auto;
            text-align: center;
            background-color: #17a2b8;
            color: white;
            padding: 60px;
            padding-top: 60px;
            border-radius: 10px;
        }

        img {
            height: auto;
            width: 200px;
        }

        h1 {
            font-size: 30px;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }

        label {
            font-size: 20px;
            margin-right: 10px;
        }

        input {
            padding: 5px;
            font-size: 20px;
            border-radius: 5px;
            border: none;
            margin-right: 10px;
        }

        button {
            padding: 5px 15px;
            font-size: 20px;
            background-color: #fff;
            color: #000;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        .countdown {
            font-size: 24px;
            margin-top: 30px;
        }

        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Temps restant avant la retraite</h1>
        <form method="GET">
            <label for="birthdate">Date de naissance :</label>
            <input type="date" id="birthdate" name="birthdate" value="<?php echo $birthdate; ?>">
            <button type="submit">Calculer</button>
        </form>
        <div class="countdown <?php echo ($yearsLeft === '') ? 'hidden' : ''; ?>">
            <span id="years"><?php echo $yearsLeft; ?></span> ans,
            <span id="months"><?php echo $monthsLeft; ?></span> mois et
            <span id="days"><?php echo $daysLeft; ?></span> jours restants avant la retraite
        </div>
    </div>
    <script>
        function calculateCountdown() {
            const birthdate = new Date('<?php echo $birthdate; ?>');
            const retirementAge = 62;
            const retirementDate = new Date(birthdate.getFullYear() + retirementAge, birthdate.getMonth(), birthdate.getDate());
            const timeLeft = retirementDate.getTime() - Date.now();

            if (timeLeft < 0) {
                document.getElementById("years").textContent = "0";
                document.getElementById("months").textContent = "0";
                document.getElementById("days").textContent = "0";
            } else {
                const yearsLeft = Math.floor(timeLeft / (365.25 * 24 * 60 * 60 * 1000));
                const monthsLeft = Math.floor((timeLeft / (30.44 * 24 * 60 * 60 * 1000)) % 12);
                const daysLeft = Math.floor((timeLeft / (24 * 60 * 60 * 1000)) % 30.44);

                document.getElementById("years").textContent = yearsLeft;
                document.getElementById("months").textContent = monthsLeft;
                document.getElementById("days").textContent = daysLeft;
            }
        }

        calculateCountdown();
    </script>
</body>
</html>
@endif

@if(auth()->user()->hasRole('admin'))
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Temps restant avant la retraite</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        
        .container {
            max-width: 500px;
            margin: 0 auto;
            text-align: center;
            background-color: #17a2b8;
            color: white;
            padding: 60px;
            padding-top: 60px;
            border-radius: 10px;
        }

        img {
            height: auto;
            width: 200px;
        }

        h1 {
            font-size: 30px;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }

        label {
            font-size: 20px;
            margin-right: 10px;
        }

        input {
            padding: 5px;
            font-size: 20px;
            border-radius: 5px;
            border: none;
            margin-right: 10px;
        }

        button {
            padding: 5px 15px;
            font-size: 20px;
            background-color: #fff;
            color: #000;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        .countdown {
            font-size: 24px;
            margin-top: 30px;
        }

        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Temps restant avant la retraite</h1>
        <form method="GET">
            <label for="birthdate">Date de naissance :</label>
            <input type="date" id="birthdate" name="birthdate" value="<?php echo $birthdate; ?>">
            <button type="submit">Calculer</button>
        </form>
        <div class="countdown <?php echo ($yearsLeft === '') ? 'hidden' : ''; ?>">
            <span id="years"><?php echo $yearsLeft; ?></span> ans,
            <span id="months"><?php echo $monthsLeft; ?></span> mois et
            <span id="days"><?php echo $daysLeft; ?></span> jours restants avant la retraite
        </div>
    </div>
    <script>
        function calculateCountdown() {
            const birthdate = new Date('<?php echo $birthdate; ?>');
            const retirementAge = 62;
            const retirementDate = new Date(birthdate.getFullYear() + retirementAge, birthdate.getMonth(), birthdate.getDate());
            const timeLeft = retirementDate.getTime() - Date.now();

            if (timeLeft < 0) {
                document.getElementById("years").textContent = "0";
                document.getElementById("months").textContent = "0";
                document.getElementById("days").textContent = "0";
            } else {
                const yearsLeft = Math.floor(timeLeft / (365.25 * 24 * 60 * 60 * 1000));
                const monthsLeft = Math.floor((timeLeft / (30.44 * 24 * 60 * 60 * 1000)) % 12);
                const daysLeft = Math.floor((timeLeft / (24 * 60 * 60 * 1000)) % 30.44);

                document.getElementById("years").textContent = yearsLeft;
                document.getElementById("months").textContent = monthsLeft;
                document.getElementById("days").textContent = daysLeft;
            }
        }

        calculateCountdown();
    </script>
</body>
</html>
@endif

@if(auth()->user()->hasRole('magasinier'))
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Temps restant avant la retraite</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        
        .container {
            max-width: 500px;
            margin: 0 auto;
            text-align: center;
            background-color: #17a2b8;
            color: white;
            padding: 60px;
            padding-top: 60px;
            border-radius: 10px;
        }

        img {
            height: auto;
            width: 200px;
        }

        h1 {
            font-size: 30px;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }

        label {
            font-size: 20px;
            margin-right: 10px;
        }

        input {
            padding: 5px;
            font-size: 20px;
            border-radius: 5px;
            border: none;
            margin-right: 10px;
        }

        button {
            padding: 5px 15px;
            font-size: 20px;
            background-color: #fff;
            color: #000;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        .countdown {
            font-size: 24px;
            margin-top: 30px;
        }

        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Temps restant avant la retraite</h1>
        <form method="GET">
            <label for="birthdate">Date de naissance :</label>
            <input type="date" id="birthdate" name="birthdate" value="<?php echo $birthdate; ?>">
            <button type="submit">Calculer</button>
        </form>
        <div class="countdown <?php echo ($yearsLeft === '') ? 'hidden' : ''; ?>">
            <span id="years"><?php echo $yearsLeft; ?></span> ans,
            <span id="months"><?php echo $monthsLeft; ?></span> mois et
            <span id="days"><?php echo $daysLeft; ?></span> jours restants avant la retraite
        </div>
    </div>
    <script>
        function calculateCountdown() {
            const birthdate = new Date('<?php echo $birthdate; ?>');
            const retirementAge = 62;
            const retirementDate = new Date(birthdate.getFullYear() + retirementAge, birthdate.getMonth(), birthdate.getDate());
            const timeLeft = retirementDate.getTime() - Date.now();

            if (timeLeft < 0) {
                document.getElementById("years").textContent = "0";
                document.getElementById("months").textContent = "0";
                document.getElementById("days").textContent = "0";
            } else {
                const yearsLeft = Math.floor(timeLeft / (365.25 * 24 * 60 * 60 * 1000));
                const monthsLeft = Math.floor((timeLeft / (30.44 * 24 * 60 * 60 * 1000)) % 12);
                const daysLeft = Math.floor((timeLeft / (24 * 60 * 60 * 1000)) % 30.44);

                document.getElementById("years").textContent = yearsLeft;
                document.getElementById("months").textContent = monthsLeft;
                document.getElementById("days").textContent = daysLeft;
            }
        }

        calculateCountdown();
    </script>
</body>
</html>
@endif
