
<?php

require_once('tcpdf/tcpdf.php'); // Include the TCPDF library

$examId = $_GET['id'];
$selExam = $conn->query("SELECT * FROM exam_tbl WHERE ex_id='$examId' ")->fetch(PDO::FETCH_ASSOC);

// Generate PDF function
function generatePDF($selExam) {
    // Create a new TCPDF instance
    $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8');

    // Set document information and properties
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Your Name');
    $pdf->SetTitle('Exam Result');
    $pdf->SetSubject('Exam Result');
    $pdf->SetKeywords('Exam, Result');

    // Set default header data
    $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

    // Set header and footer fonts
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

    // Set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    // Set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

    // Add a page
    $pdf->AddPage();

    // Set font
    $pdf->SetFont('helvetica', '', 12);

    // Output exam title and description
    $pdf->Write(0, $selExam['ex_title'], '', 0, 'C', true, 0, false, false, 0);
    $pdf->Write(0, $selExam['ex_description'], '', 0, 'C', true, 0, false, false, 0);

    // Output table header
    $pdf->Ln();
    $pdf->Cell(0, 10, 'Your Answers', 0, 1, 'L');
    $pdf->Ln();

    // Output table content
    $pdf->SetFont('helvetica', '', 10);
    $pdf->SetFillColor(224, 235, 255);
    $pdf->SetTextColor(0);

    $i = 1;
    $selQuest = $conn->query("SELECT * FROM exam_question_tbl eqt INNER JOIN exam_answers ea ON eqt.eqt_id = ea.quest_id WHERE eqt.exam_id='$examId' AND ea.axmne_id='$exmneId' AND ea.exans_status='new' ");
    while ($selQuestRow = $selQuest->fetch(PDO::FETCH_ASSOC)) {
        $pdf->Cell(0, 0, $i . '. ' . $selQuestRow['exam_question'], 0, 1, 'L', true);
        $pdf->Cell(0, 0, 'Answer: ' . $selQuestRow['exans_answer'], 0, 1, 'L', true);
        $pdf->Ln();
        $i++;
    }

    // Close and output PDF
    $pdf->Output('exam_result.pdf', 'D'); // D for download, P for displaying in the browser
}

// Call the generatePDF function
generatePDF($selExam);
?>
