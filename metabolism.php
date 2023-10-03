<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Energy Metabolism Flashcards</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        h2 {
            margin-top: 20px;
        }

        .cards-wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .card {
            width: 320px;
            height: 180px;
            position: relative;
            perspective: 1000px;
            margin: 20px;
            cursor: pointer;
        }

        .card-side {
            width: 100%;
            height: 100%;
            position: absolute;
            backface-visibility: hidden;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 8px;
            transition: transform 0.3s;
        }

        .front {
            transform: rotateY(0deg);
            background-color: #E79CA4;
            color: white;
        }

        .back {
            transform: rotateY(180deg);
            background-color: #D6E79C;
            color: white;
        }

        .card.flipped .front {
            transform: rotateY(180deg);
        }

        .card.flipped .back {
            transform: rotateY(360deg);
        }

        .title {
            font-weight: bold;
            margin-bottom: 15px;
        }

        .content {
            text-align: center;
            max-width: 90%;
        }

    </style>
</head>
<body>

<h2>Energy Metabolism</h2>

<div class="cards-wrapper">
    <?php
    $cards = [
        "What is energy metabolism?" => "Energy metabolism is the process by which the body converts the energy stored in nutrients into a usable form of energy to support various physiological functions.",
        "What is catabolism?" => "Catabolism involves breaking down complex molecules (e.g., carbohydrates, fats, proteins) into simpler units to release energy used for cellular activities and maintaining the body's functions.",
        "What is anabolism?" => "Anabolism involves using energy to build complex molecules from simpler units, supporting processes like growth, repair, and maintenance.",
        "What is the primary unit of energy used in biological systems?" => "Adenosine triphosphate (ATP).",
        "What happens during glycolysis?" => "Glycolysis is an anaerobic process that breaks down glucose into two molecules of pyruvate, generating ATP and NADH.",
        "What is the citric acid cycle (Krebs Cycle)?" => "Pyruvate is further broken down in the mitochondria to produce ATP, NADH, FADH2, and CO2.",
        "What occurs during beta oxidation?" => "Fatty acids are broken down in the mitochondria, producing acetyl-CoA, NADH, and FADH2, which enter the citric acid cycle.",
        "How do amino acids serve as an energy source?" => "Amino acids can enter metabolic pathways, such as the citric acid cycle and the electron transport chain, to produce ATP.",
        "What is nitrogen balance?" => "Protein metabolism involves the regulation of nitrogen balance. Amino acids contain nitrogen, which is excreted primarily as urea. Negative balance occurs during illness, injury, or inadequate protein intake.",
        "What is protein turnover?" => "A dynamic process where old or damaged proteins are broken down and replaced with new ones to ensure functional and healthy tissues.",
        "What happens to the body during fasting?" => "Initially, glucose from glycogen is used for energy, and as glycogen stores deplete, the body begins to use fat stores for energy production through ketogenesis.",
        "What is the keto diet?" => "A low-carbohydrate, high-fat diet that induces ketosis, where the body uses ketone bodies as an energy source instead of glucose."

    ];

    foreach($cards as $question => $answer) {
        echo "<div class='card' onclick='flipCard(this)'>";
        echo "<div class='card-side front'>";
        echo "<div class='title'>Question</div>";
        echo "<div class='content'>$question</div>";
        echo "</div>";
        echo "<div class='card-side back'>";
        echo "<div class='title'>Answer</div>";
        echo "<div class='content'>$answer</div>";
        echo "</div>";
        echo "</div>";
    }
    ?>
</div>

<script>
    function flipCard(card) {
        if(card.classList.contains('flipped')) {
            card.classList.remove('flipped');
        } else {
            card.classList.add('flipped');
        }
    }
</script>

</body>
</html>
