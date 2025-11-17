<?php
//Variables
    $title = "About You"; //String title
    $artist = "1975";   //String artist
    $genre = 'love';//String Genre
    //Arrays of nouns and verbs
    $nouns = ['place', 'face', 'heads', 'something'];
    $nouns_i = "I";
    $nouns_you = "you";
    $verb = ['look', 'surrender', 'married', 'miss','recall','find'];
    $verbrem = 'remember';
    $verbthink = 'think';
    $verbfogotten = 'forgotten';
    $verbgo = 'go';
    //Verse 3 Lines Arrays
    $verse3 = ["And there was something about you that now I can't remember", //0
            "It's the same damn thing that made my heart surrender", //1
            "And I'll miss you on a train, I'll miss you in the mornin'", //2
            "I never know what to think about",//3
            "I think about you (Don't let go)",//4
            "About you (Don't let go)"]; //5
    //Integer Variable        
    $repeatchorus = 3;
    $versecount = 3;
    //Calculation of total number of repetitions
    $total = $repeatchorus + $versecount;

?>

<!-- Start HTML-->
<!DOCTYPE html>
<html>
    <!--HeadL-->
    <head>
     <meta charset="UTF-8">
     <title>About You - 1975</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS Program-->
    <style>
        body {
            background-color: #ece5e5ff;
            color: #333;            
            text-align: center;
        }

        h1 {
            color: #222;  
            font-size: 28px;
        }

        h4 {
            color: #555;  
            margin-top: 20px;
        }

        p {
            margin: 5px 0; 
            line-height: 1.5;
        }

        strong {
            color: #c0392b;  
}
     </style>
    </head>
    <!-- Start Body-->
    <body>
    <h1><?php echo $title?></h1>
    <p><strong>By :<?php echo $artist ?> <br/>
    Genre: <?php echo $genre ?></strong></p>
    
<!--VERSE 1-->
    <h4>Verse 1:</h4>
    <p> <?php echo $nouns_i ?> know a <?php echo $nouns[0] ?><br/>
     It's somewhere <?php echo $nouns_i ?> <?php echo $verbgo ?>  when <?php echo $nouns_i ?> need to <?php echo $verbrem?> your face<br/>
    We get <?php echo $verb[2] ?> in our heads<br/>
    Something to do while we try to <?php echo $verb[4] ?> how we met</p>
<!--CHORUS-->
    <h4>Chorus:</h4>
    <p>"Do <?php echo $nouns_you ?>  <?php echo $verbthink ?> <?php echo $nouns_i ?> have <?php echo $verbfogotten ?>? <br/>
            Do <?php echo $nouns_you ?> <?php echo $verbthink ?> <?php echo $nouns_i ?>  have <?php echo $verbfogotten ?>?<br/>
            Do <?php echo $nouns_you ?> <?php echo $verbthink ?> <?php echo $nouns_i ?>  have<?php echo $verbfogotten ?>?<br/>
            About <?php echo $nouns_you ?>?"</p>
<!--VERSE 2-->
    <h4>Verse 2:</h4>
            <p><?php echo $nouns_you ?>  and <?php echo $nouns_i ?>(Don't let <?php echo $verbgo ?>)<br/>
            We're alive (Don't let <?php echo $verbgo ?>).<br/>
             With nothing to do, <?php echo $nouns_i ?> could lay and just look in your eyes<br/>
            Wait (Don't let <?php echo $verbgo ?>)<br/>
            And pretend (Don't let <?php echo $verbgo ?>, oh)<br/>
            Hold on and hope that we'll <?php echo $verb[5] ?> our way back in the end (In the end) ?</p>.
        </p>
<!--CHORUS-->
    <h4>Chorus:</h4>
    <p>"Do <?php echo $nouns_you ?>  <?php echo $verbthink ?> <?php echo $nouns_i ?> have <?php echo $verbfogotten ?>? <br/>
            Do <?php echo $nouns_you ?> <?php echo $verbthink ?> <?php echo $nouns_i ?>  have <?php echo $verbfogotten ?>?<br/>
            Do <?php echo $nouns_you ?> <?php echo $verbthink ?> <?php echo $nouns_i ?>  have<?php echo $verbfogotten ?>?<br/>
            About <?php echo $nouns_you ?>?"</p>
        <p>"Do <?php echo $nouns_you ?>  <?php echo $verbthink ?> <?php echo $nouns_i ?> have <?php echo $verbfogotten ?>? <br/>
            Do <?php echo $nouns_you ?> <?php echo $verbthink ?> <?php echo $nouns_i ?>  have <?php echo $verbfogotten ?>?<br/>
            Do <?php echo $nouns_you ?> <?php echo $verbthink ?> <?php echo $nouns_i ?>  have<?php echo $verbfogotten ?>?<br/>
            About <?php echo $nouns_you ?>?"</p>
<!--VERSE3-->
    <h4>Bridge:</h4>
    <p>
    <?php echo $verse3[0] ?> <br/>
    <?php echo $verse3[1] ?> <br/>
    <?php echo $verse3[2] ?> <br/>
    <?php echo $verse3[3] ?> <br/>
    <?php echo $verse3[4] ?> <br/>
    <?php echo $verse3[5] ?> <br/></p>
    
<!--CHORUS-->
    <h4>Chorus:</h4>
    <p>"Do <?php echo $nouns_you ?>  <?php echo $verbthink ?> <?php echo $nouns_i ?> have <?php echo $verbfogotten ?>? <br/>
            Do <?php echo $nouns_you ?> <?php echo $verbthink ?> <?php echo $nouns_i ?>  have <?php echo $verbfogotten ?>?<br/>
            Do <?php echo $nouns_you ?> <?php echo $verbthink ?> <?php echo $nouns_i ?>  have<?php echo $verbfogotten ?>?<br/>
            About <?php echo $nouns_you ?>?"</p>
        <p>"Do <?php echo $nouns_you ?>  <?php echo $verbthink ?> <?php echo $nouns_i ?> have <?php echo $verbfogotten ?>? <br/>
            Do <?php echo $nouns_you ?> <?php echo $verbthink ?> <?php echo $nouns_i ?>  have <?php echo $verbfogotten ?>?<br/>
            Do <?php echo $nouns_you ?> <?php echo $verbthink ?> <?php echo $nouns_i ?>  have<?php echo $verbfogotten ?>?<br/>
            About <?php echo $nouns_you ?>?"</p>

  <!-- Total count display -->
<h4>Total:</h4>
<p>Total repetitions (verses + chorus): <?php echo $total; ?></p>
</body>
</html>