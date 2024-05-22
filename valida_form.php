<?php

    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';

    require './vendor/autoload.php';
    require 'forma_pdf.php';

    // reference the Dompdf namespace
    use Dompdf\Dompdf;
    use Dompdf\Options;

    $options = new Options();
    $options->setChroot(__DIR__);

    // instantiate and use the dompdf class
    $dompdf = new Dompdf($options);

    $dompdf->loadHtmlFile('reg.html');

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'portrait');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream();

?>