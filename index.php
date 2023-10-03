<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flashcards Index</title>
    <style>
        /* Base styling for the buttons */
        .flashcard-button {
            display: inline-block;
            width: 300px;
            height: 150px;
            margin: 20px;
            font-size: 24px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #999;
            transition: background-color 0.3s, box-shadow 0.3s;
            line-height: 150px; /* Vertically center the text */
        }

        /* Individual button colors */
        .lipids {
            background-color: #4CAF50;
            color: #fff;
        }

        .proteins {
            background-color: #FF5733;
            color: #fff;
        }

        .energy {
            background-color: #339CFF;
            color: #fff;
        }

        .metabolism {
            background-color: #FFC433;
            color: #fff;
        }

        /* Hover effects for buttons */
        .flashcard-button:hover {
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }

        /* Centering the container */
        .flashcard-container {
            text-align: center;
            margin-top: 10%;
        }
    </style>
</head>
<body>

<div class="flashcard-container">
    <!-- Flashcard Buttons -->
    <a href="lipids.php" class="flashcard-button lipids">Lipids</a>
    <a href="proteins.php" class="flashcard-button proteins">Proteins</a><br>
    <a href="energy.php" class="flashcard-button energy">Energy</a>
    <a href="metabolism.php" class="flashcard-button metabolism">Metabolism</a>
</div>

</body>
</html>
