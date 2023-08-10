<?php
require_once('tcpdf/tcpdf.php');
// Create a new TCPDF instance
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8');

// Set document information and properties
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('Exam Result');
$pdf->SetSubject('Exam Result');
$pdf->SetKeywords('Exam, Result');

// Add a page
$pdf->AddPage();

// Set font
$pdf->SetFont('helvetica', '', 12);

// Output user details
$pdf->Cell(0, 10, 'User Details', 0, 1, 'L');
$pdf->Ln();
$pdf->Cell(0, 0, 'Name: ' . $exmne_fullname, 0, 1, 'L');
$pdf->Cell(0, 0, 'Email: ' . $exmne_email, 0, 1, 'L');
$pdf->Ln();

// Output exam details
$pdf->Cell(0, 10, 'Exam Details', 0, 1, 'L');
$pdf->Ln();
$pdf->Cell(0, 0, 'Title: ' . $selExam['ex_title'], 0, 1, 'L');
$pdf->Cell(0, 0, 'Description: ' . $selExam['ex_description'], 0, 1, 'L');
$pdf->Ln();

// Output result details
$pdf->Cell(0, 10, 'Result Details', 0, 1, 'L');
$pdf->Ln();
$pdf->Cell(0, 0, 'Score: ' . $score . ' / ' . $over, 0, 1, 'L');
$pdf->Cell(0, 0, 'Percentage: ' . number_format($ans, 2) . '%', 0, 1, 'L');
$pdf->Ln();

// Output answers table
$pdf->Cell(0, 10, 'Your Answers', 0, 1, 'L');
$pdf->Ln();

$pdf->SetFont('helvetica', '', 10);
$pdf->SetFillColor(224, 235, 255);
$pdf->SetTextColor(0);

$i = 1;
$selQuest = $conn->query("SELECT * FROM exam_question_tbl eqt INNER JOIN exam_answers ea ON eqt.eqt_id = ea.quest_id WHERE eqt.exam_id='$examId' AND ea.axmne_id='$exmneId' AND ea.exans_status='new' ");
while ($selQuestRow = $selQuest->fetch(PDO::FETCH_ASSOC)) {
    $pdf->Cell(0, 0, $i . '.) ' . $selQuestRow['exam_question'], 0, 1, 'L', true);
    $pdf->Cell(0, 0, 'Answer: ' . $selQuestRow['exans_answer'], 0, 1, 'L', true);
    $pdf->Ln();
    $i++;
}

// Output the PDF for download
$pdf->Output('exam_result.pdf', 'D');
?>