<? 
include 'vendor/autoload.php';

// Initialize and load PDF Parser library 
$parser = new \Smalot\PdfParser\Parser(); 
 
// Source PDF file to extract text 
$file = 'doc.pdf'; 
 
// Parse pdf file using Parser library 
$pdf = $parser->parseFile($file); 
 
// Extract text from PDF 
$textContent = $pdf->getText();
$pdfText = nl2br($textContent);
echo $pdfText;
?>