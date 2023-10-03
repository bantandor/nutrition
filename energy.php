<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Energy Balance Flashcards</title>
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
            background-color: #4AB25B;
            color: white;
        }

        .back {
            transform: rotateY(180deg);
            background-color: #8B73CB;
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

<h2>Energy Balance</h2>

<div class="cards-wrapper">
    <?php
    $cards = [
        "Energy In: What does it refer to?" => "Energy in, refers to the calories consumed through food and beverages. It represents the energy derived from macronutrients such as carbohydrates, fats, proteins, and alcohol.",
        "Energy Out: What components make up the total energy expended by the body?" => "Basal Metabolic Rate (BMR), Thermic Effect of Food (TEF), and energy used for physical activity.",
        "What is the significance of the balance between energy in and energy out?" => "The balance is critical for maintaining body weight and preventing weight gain or loss. When energy in equals energy out, an individual maintains their current weight.",
        "Body Composition: What does it refer to?" => "Body composition refers to the proportion of fat and non-fat (lean) mass in the body. It includes fat mass and fat-free mass (muscle, bones, organs, etc.).",
        "Fat Mass: What health risks are associated with excess fat accumulation?" => "Increased risk of chronic diseases such as cardiovascular disease, diabetes, and certain cancers. Abdominal or visceral fat poses a higher risk.",
        "Fat-Free Mass: Why is it crucial?" => "Fat-free mass is essential for metabolism, strength, and overall physical function. A higher proportion implies better health and fitness.",
        "Obesity: What are the health risks and metabolic impacts?" => "Health Risks include type 2 diabetes, cardiovascular disease, hypertension, sleep apnea, joint problems, and a higher risk of certain cancers. Metabolic Impact includes insulin resistance and inflammation.",
        "Underweight: What are the health risks?" => "Weakened immune function, nutrient deficiencies, osteoporosis, and reproductive issues.",
        "Normal or Healthy Weight: What are the benefits?" => "Reduces the risk of chronic diseases and enhances overall well-being and longevity.",
        "Muscle Mass and Function: What are the health benefits?" => "Improved metabolic health, better glucose control, enhanced physical performance, and reduced risk of falls and fractures, especially in the elderly."

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
