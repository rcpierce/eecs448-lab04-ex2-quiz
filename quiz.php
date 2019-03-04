<?php
    $a1 = $_POST['a1'];
    $a2 = $_POST['a2'];
    $a3 = $_POST['a3'];
    $a4 = $_POST['a4'];
    $a5 = $_POST['a5'];

    $total_correct = 0;

    if ($a1 == "Knight"){
        $total_correct++;
    }
    if ($a2 == "Rook"){
        $total_correct++;
    }
    if ($a3 == "King"){
        $total_correct++;
    }
    if ($a4 == "Queen"){
        $total_correct++;
    }
    if ($a5 == "Pawn"){
        $total_correct++;
    }

    echo "<strong>Question 1 - This chess piece moves in an 'L' shape:</strong><br>";
    echo "Your answer was " . $a1 . ".<br>";
    echo "The correct answer was Knight.<br>";
    echo "<br>";
    echo "<strong>Question 2 - This chess piece can move forward, backward, left, and right, but it cannot move diagonally:</strong><br>";
    echo "Your answer was " . $a2 . ".<br>";
    echo "The correct answer was Rook.<br>";
    echo "<br>";
    echo "<strong>Question 3 - This chess piece can move in any direction, but only one space at a time:</strong><br>";
    echo "Your answer was " . $a3 . ".<br>";
    echo "The correct answer was King.<br>";
    echo "<br>";
    echo "<strong>Question 4 - This chess piece can move in any direction, and has no limit to how far it can move:</strong><br>";
    echo "Your answer was " . $a4 . ".<br>";
    echo "The correct answer was Queen.<br>";
    echo "<br>";
    echo "<strong>Question 5 - This chess piece can only move forward unless it is taking the opposing player's piece, in which case it can move diagonally:</strong><br>";
    echo "Your answer was " . $a5 . ".<br>";
    echo "The correct answer was Pawn.<br>";
    echo "<br>";
    echo "<strong>You answered " . $total_correct . " out of 5 questions correctly.</strong><br>";
    echo "<strong>Your final score is " . (($total_correct/5) * 100) . "%</strong>";
?>