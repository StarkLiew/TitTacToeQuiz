<?php

function win( $broad ) {
    $xScore = 0;
    $oScore = 0;
    $xColScore = [];
    $oColScore = [];
    $xDlScore = 0;
    $xDrScore = 0;
    
    foreach($broad as $rowIndex => $row) {
        $xScore = 0;
        $oScore = 0;
        foreach($row as $cellIndex => $cell) {
             
             if($cell === 'X') {
                 $xScore++;
                 $xColScore[$cellIndex] += 1;
                 if($cellIndex == 0 && $rowIndex == 0) $xDlScore++;
                 if($cellIndex == 1 && $rowIndex == 1) $xDlScore++;
                 if($cellIndex == 2 && $rowIndex == 2) $xDlScore++;
                 
                 if($cellIndex == 2 && $rowIndex == 0) $xDrScore++;
                 if($cellIndex == 1 && $rowIndex == 1) $xDrScore++;
                 if($cellIndex == 0 && $rowIndex == 2) $xDrScore++;
             }
             
             if($cell === 'O') {
                 $oScore++;
                 $oColScore[$cellIndex] += 1;
                 
                 if($cellIndex == 0 && $rowIndex == 0) $oDlScore++;
                 if($cellIndex == 1 && $rowIndex == 1) $oDlScore++;
                 if($cellIndex == 2 && $rowIndex == 2) $oDlScore++;
                 
                 if($cellIndex == 2 && $rowIndex == 0) $oDrScore++;
                 if($cellIndex == 1 && $rowIndex == 1) $oDrScore++;
                 if($cellIndex == 0 && $rowIndex == 2) $oDrScore++;
             } 
             
             if($xScore === 3) return 'X';
             else if($oScore === 3) return 'O';
             
         } 
    }
 
    foreach($xColScore as $score) {
         if($score === 3) return 'X';
    }
             
    foreach($oColScore as $score) {
         if($score === 3) return 'O';
    }
    
    if($xDlScore === 3) return 'X';
    if($oDlScore === 3) return 'O';
    
    if($xDrScore === 3) return 'X';
    if($oDrScore === 3) return 'O';
    
    return "NO ONE WIN";
    
    
}


$broad = [
           ['O', 'X', 'X'],
           ['X', 'O', 'O'],
           ['O', 'X', 'X'],
         ];
echo win($broad);
?>
