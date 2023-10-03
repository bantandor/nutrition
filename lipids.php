<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lipids and Their Functions Flashcards</title>
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
            background-color: #03A9F4;
            color: white;
        }

        .back {
            transform: rotateY(180deg);
            background-color: #F8BF04;
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

<h2>Lipids and Their Functions</h2>

<div class="cards-wrapper">
    <?php
    $cards = [
        "What roles do lipids play in the human body?" => "Energy storage, cell membrane structure, hormone production, and absorption of fat-soluble vitamins.",
        "What is the common characteristic of lipids?" => "Their hydrophobic nature.",
        "What are the basic units of lipids?" => "Fatty acids.",
        "What do fatty acids consist of?" => "A hydrocarbon chain and a carboxyl group.",
        "What is the composition of triglycerides?" => "Three fatty acids attached to a glycerol molecule.",
        "Where does the digestion of lipids begin?" => "In the mouth.",
        "What emulsifies dietary fats in the small intestine?" => "Bile salts.",
        "What breaks down triglycerides into fatty acids and monoglycerides?" => "Pancreatic lipase.",
        "How are fatty acids and monoglycerides transported after digestion?" => "Reassembled into triglycerides, packaged into chylomicrons, and transported through the lymphatic system.",
        "What is the primary energy storage form in the body?" => "Triglycerides.",
        "What roles do triglycerides play in the body?" => "Energy storage, insulation, protection, and contributing to cell membrane structure and function.",
        "What are the health effects of saturated fats?" => "Increased risk of cardiovascular disease and raising LDL cholesterol levels.",
        "What are the benefits of unsaturated fats?" => "Lower LDL cholesterol and reduce the risk of heart disease.",
        "What are trans fats?" => "Artificial fats created through hydrogenation that can elevate LDL cholesterol and lower HDL cholesterol.",
        "How do cis fatty acids differ from trans fatty acids in terms of hydrogen atom placement?" => "In cis fatty acids, hydrogen atoms are on the same side of the carbon chain."
    
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
