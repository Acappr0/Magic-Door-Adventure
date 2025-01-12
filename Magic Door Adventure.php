<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Door Adventure</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            color: #333;
            text-align: center;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            border: 1px solid #ddd;
            border-radius: 8px;
            background: #fff;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .door {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: Orange;
            text-decoration: none;
            text-align: center;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
        }
        .door:hover {
            background-color: darkorange;
            transform: scale(1.05);
        }
        .story {
            margin-top: 20px;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Magic Door Adventure</h1>
        <?php
$stage = isset($_GET['stage']) ? $_GET['stage'] : 1;

// Define the story stages and choices
$story = [
    1 => [
        'text' => "You find yourself in a mysterious hallway with three magical doors. Which one will you choose?",
        'choices' => [
            'Door 1' => 2,
            'Door 2' => 3,
            'Door 3' => 4
        ]
    ],
    2 => [
        'text' => "You enter a room filled with treasures! A voice says, 'Choose wisely.' Do you take the gold or explore further?",
        'choices' => [
            'Take Gold' => 5,
            'Explore Further' => 6
        ]
    ],
    3 => [
        'text' => "You step into a dark forest. A strange creature offers you a riddle. Do you solve it or run away?",
        'choices' => [
            'Solve Riddle' => 7,
            'Run Away' => 8
        ]
    ],
    4 => [
        'text' => "You find a room with a sleeping dragon. Do you sneak past it or try to wake it?",
        'choices' => [
            'Sneak Past' => 9,
            'Wake Dragon' => 10
        ]
    ],
    5 => [
        'text' => "The gold turns into dust! The adventure ends here. But wait, there's a secret passage behind the wall. Do you explore it?",
        'choices' => [
            'Explore Secret Passage' => 11,
            'End Adventure' => 12
        ]
    ],
    6 => [
        'text' => "You find a hidden passage leading to more adventures! Do you go through it or turn back?",
        'choices' => [
            'Go Through' => 13,
            'Turn Back' => 14
        ]
    ],
    7 => [
        'text' => "The creature rewards you with a magical artifact! It grants you the ability to fly. Do you fly out of the forest or explore more?",
        'choices' => [
            'Fly Out' => 15,
            'Explore More' => 16
        ]
    ],
    8 => [
        'text' => "You safely escape back to the hallway. But something feels different... The hallway is now filled with eerie whispers. Do you stay or leave?",
        'choices' => [
            'Stay and Investigate' => 17,
            'Leave Quickly' => 18
        ]
    ],
    9 => [
        'text' => "You successfully sneak past and find an enchanted sword. A door appears, offering more challenges. Do you enter or leave?",
        'choices' => [
            'Enter the Door' => 19,
            'Leave the Sword' => 20
        ]
    ],
    10 => [
        'text' => "The dragon wakes up and flies away, leaving behind a treasure chest. Do you open it or leave?",
        'choices' => [
            'Open Chest' => 21,
            'Leave Treasure' => 22
        ]
    ],
    11 => [
        'text' => "You walk through the secret passage and find a hidden library. It's filled with ancient books. Do you read a book or leave?",
        'choices' => [
            'Read a Book' => 23,
            'Leave the Library' => 24
        ]
    ],
    12 => ['text' => "You leave the adventure, but who knows what awaits next time... The End."],
    13 => ['text' => "You enter a new world! It's a land of floating islands. Do you explore the islands or fly higher?"],
    14 => ['text' => "You turn back to find the hallway is gone, replaced by a vast desert. Do you wander or rest?"],
    15 => ['text' => "You soar above the forest, discovering a hidden village in the clouds. Do you visit the village or keep flying?"],
    16 => ['text' => "You explore more of the forest and encounter a magical creature offering a new quest. Do you accept?"],
    17 => ['text' => "You stay and investigate, only to find an ancient artifact that starts glowing. Do you touch it or leave it alone?"],
    18 => ['text' => "You leave quickly and stumble upon another mysterious door. Do you open it or walk away?"],
    19 => ['text' => "You enter the door and face a trial of wisdom. A puzzle lies ahead. Do you attempt it?"],
    20 => ['text' => "You leave the sword behind and find a peaceful clearing. A gentle breeze blows as you rest. The End."],
    21 => ['text' => "You open the chest and discover a legendary relic. It holds incredible power. Do you keep it or destroy it?"],
    22 => ['text' => "You leave the treasure behind, but a voice echoes: 'You missed your chance.' The End."],
    23 => ['text' => "You read an ancient book and learn a powerful spell. Do you cast the spell or continue reading?"],
    24 => ['text' => "You leave the library, but the passage behind you closes. You stand at the edge of a cliff. Do you jump or turn back?"],
];

if (isset($story[$stage])) {
    echo "<p class='story'>{$story[$stage]['text']}</p>";
    if (isset($story[$stage]['choices'])) {
        foreach ($story[$stage]['choices'] as $label => $nextStage) {
            echo "<a class='door' href='?stage=$nextStage' onclick='expandDoor(event)'>$label</a>";
        }
    }
} else {
    echo "<p class='story'>The adventure has ended. <a href='?stage=1'>Start Over</a></p>";
}
?>

    </div>
</body>
</html>