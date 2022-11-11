<?php

function magic8Ball()
{
    echo "Enter a yes or no question! \n";
    $question = readline(">> ");
    echo "Question Recieved -  " . $question . "\n";
    $randomNum = rand(0, 5);
    // echo $randomNum . "\n";

    switch ($randomNum) {
        case 0:
            echo "it is certain \n";
            break;
        case 1:
            echo "Future uncertain \n";
            break;
        case 2:
            echo "Yes - definitely \n";
            break;
        case 3:
            echo "Odds are no \n";
            break;
        case 4:
            echo "ask again \n";
            break;
        case 5:
            echo "Definitely Not \n";
            break;
    }
}

magic8Ball();