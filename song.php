<!DOCTYPE html>
<html>
<head>
    <title>PHP Lyric Remix</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: linear-gradient(rgb(201, 31, 59), rgb(124, 23, 27));
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            max-width: 700px;
            width: 90%;
            text-align: center;
        }
        h1, h2 {
            color: #333;
        }
        h3 {
            margin-top: 30px;
            color: #8b0000;
        }
        .verse, .chorus, .prechorus, .outro {
            margin-bottom: 20px;
        }
        .chorus {
            font-weight: bold;
            color: #5f4b32;
        }
        p {
            margin: 6px 0;
        }
    </style>
</head>
<body>

<div class="container">
<?php

// String variables
$title = "Buttons";
$artist = "Lyn Lapid";
$mood = "Cozy";
$background = "“Buttons” by Lyn Lapid released on October 25th, 2024 is about Lyn’s feelings for her crush. Lyn released an Instagram reel about her feelings about why she wrote this song. She says “I had a crush on a boy… did I talk to him? No. Did I know anything about him? No. Did he know I existed? Probably not… did I write this pathetically borderline song about him? No further questions”. The lyrics convey the overwhelming feelings and thoughts she experiences during her crush.";

// Integer variables and operator
$verseCount = 2;
$repeatChorus = 2;
$totalSections = $verseCount + $repeatChorus + 3; // total parts of the song / addition operator

// Type junggling
$chorusIndex = "1"; // string
$chorusIndex += 1;  // to integer
$chorusText = "Replay count: ";
$chorusText .= $repeatChorus * 2; // string and number 

// Arrays of nouns, verbs, and adjectives.
$nouns = ["words", "mouth", "time", "couch", "ceiling", "night", "sunrise", "mind", "buttons", "clothes", "melody", "head", "shirt", "back", "pink", "black", "hinge", "door", "date", "tour", "pin", "map"];
$verbs = ["know", "say", "waste", "stare", "go", "be", "stay", "get"];
$adjectives = ["Close", "closer", "alright", "supposed", "on", "your"];

// Song section arrays
$verse1 = [
    "What's it like to $verbs[0]?",
    "The $nouns[0] in your $nouns[1] right 'fore you $verbs[1] them?",
    "I wanna $verbs[0] what's it like to $verbs[2]?",
    "$nouns[2] on your $nouns[3], $verbs[3] at the $nouns[4]"
];

$preChorus1 = [
    "If it's $adjectives[2] we can $verbs[4] from late $nouns[5]",
    "'Til $nouns[6], you're on my $nouns[7]",
    "I just wanna $verbs[5]—"
];

$chorus = [
    "$adjectives[0], $adjectives[1] than the $nouns[8] on your $nouns[9]",
    "Can I be the $nouns[10] you $verbs[0]?",
    "Stay on replay in your $nouns[11]",
    "What am I $adjectives[3] to do to $verbs[6] $adjectives[0] to you?"
];

$verse2 = [
    "What's it like to $verbs[5] the $nouns[12] on your $nouns[13]?",
    "What's it like to $verbs[5] the $nouns[14] to your $nouns[15]?",
    "A $nouns[16] on your $nouns[17], a $nouns[18] on your $nouns[19]",
    "Guess I'd like to be the $nouns[20] on your $nouns[21]"
];

$preChorus2 = [
    "From late $nouns[5]",
    "'Til $nouns[6], you're on my $nouns[7]",
    "And I just wanna $verbs[5]—"
];;

$outro = [
    "I just wanna be $adjectives[0]",
    "$adjectives[1] than the $nouns[8] on your $nouns[9]",
    "Can I be the $nouns[10] you $verbs[0]?",
    "Stay on replay in your $nouns[11]",
    "What am I $adjectives[3] to do to $verbs[6] $adjectives[0] to you?"
];

// Display song title and info
echo "<h1>$title</h1>";
echo "<h2>by $artist</h2>";
echo "<p><em>Mood: $mood</em></p>";
echo "<p><strong>Total Sections:</strong> $totalSections</p>";
echo "<p><strong>$chorusText</strong></p>";

// Verse 1
echo "<h3>Verse 1</h3><div class='verse'>";
echo "<p>$verse1[0]</p>";
echo "<p>$verse1[1]</p>";
echo "<p>$verse1[2]</p>";
echo "<p>$verse1[3]</p>";
echo "</div>";

// Pre-Chorus 1
echo "<h3>Pre-Chorus</h3><div class='prechorus'>";
echo "<p>$preChorus1[0] </p>";
echo "<p>$preChorus1[1]</p>";
echo "<p>$preChorus1[2]</p>";
echo "</div>";

// Chorus 1
echo "<h3>Chorus</h3><div class='chorus'>";
echo "<p>$chorus[0]</p>";
echo "<p>$chorus[1]</p>";
echo "<p>$chorus[2]</p>";
echo "<p>$chorus[3]</p>";
echo "</div>";

// Verse 2
echo "<h3>Verse 2</h3><div class='verse'>";
echo "<p>$verse2[0]</p>";
echo "<p>$verse2[1]</p>";
echo "<p>$verse2[2]</p>";
echo "<p>$verse2[3]</p>";
echo "</div>";

// Pre-Chorus 2
echo "<h3>Pre-Chorus</h3><div class='prechorus' >";
echo "<p>$preChorus2[0]</p>";
echo "<p>$preChorus2[1]</p>";
echo "<p>$preChorus2[2]</p>";
echo " </div>";

// Chorus 2
echo "<h3>Chorus</h3><div class='chorus'>";
echo "<p>$chorus[0]</p>";
echo "<p>$chorus[1]</p>";
echo "<p>$chorus[2]</p>";
echo "<p>$chorus[3]</p>";
echo "</div>" ;

// Outro
echo "<h3>Outro</h3><div class='outro'>";
echo "<p>$outro[0]</p>" ;
echo "<p>$outro[1]</p>";
echo "<p>$outro[2]</p>";
echo "<p>$outro[3]</p>";
echo "<p>$outro[4]</p>";
echo "</div>";

// Background info
echo "<br><p><em>Background: $background</em></p>";
?>
</div>

</body>
</html>
