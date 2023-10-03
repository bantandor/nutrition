<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proteins and Their Functions Flashcards</title>
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
            background-color: #FD4E81;
            color: white;
        }

        .back {
            transform: rotateY(180deg);
            background-color: #FD754E;
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

<h2>Proteins and Their Functions </h2>

<div class="cards-wrapper">
    <?php
    $cards = [
        "What are proteins and their significance in the human body?" => "Proteins are vital macromolecules that play a fundamental role in the structure, function, and regulation of cells, tissues, and organs within the human body.",
        "What are the basic components of proteins?" => "Proteins are complex molecules made up of amino acids, which consist of an amino group, a carboxyl group, and a side chain (R-group).",
        "How many different amino acids are there and what determines a protein's function?" => "There are 20 different amino acids. The sequence and composition of amino acids in a protein determine its unique three-dimensional structure and function.",
        "Where does the digestion of dietary proteins begin?" => "The digestion of dietary proteins begins in the stomach.",
        "What enzymes facilitate the breakdown of proteins in the small intestine?" => "Pancreatic and intestinal proteases and peptidases.",
        "How are amino acids and small peptides absorbed and utilized?" => "They are absorbed through the intestinal lining into the bloodstream and transported to various cells and tissues to build new proteins, support growth, repair tissues, and carry out essential physiological functions.",
        "What are the various roles and importance of proteins?" => "Structural basis of cells, enzymatic catalysts, hormonal regulation, transport, and immune function.",
        "How does protein intake affect health?" => "Protein supports growth, development, and tissue maintenance. Adequate protein prevents malnutrition, but excessive intake can strain kidneys in those with pre-existing conditions.",
        "Why is balanced protein intake important for athletes and weight management?" => "It supports muscle repair and growth, promotes satiety, and preserves lean muscle mass.",
        "What is the recommended daily allowance (RDA) for protein for adults and athletes?" => "For adults, it's 0.8 gram per kilogram (0.36 gram per pound) of healthy body weight. For athletes, it's 1.2 to 2.0 grams per kilogram of body weight per day."

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
