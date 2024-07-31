<?php

    require './vendor/autoload.php';

    if($_GET['t'] == 0)
        require 'forma_pdf/forma_pdf.php';
    else if($_GET['t'] == 1)
        require 'forma_pdf/forma_pdf1.php';
    else if($_GET['t'] == 2)
        require 'forma_pdf/forma_pdf2.php';
    else if($_GET['t'] == 3)
        require 'forma_pdf/forma_pdf3.php';
    else if($_GET['t'] == 4)
        require 'forma_pdf/forma_pdf4.php';
    else if($_GET['t'] == 5)
        require 'forma_pdf/forma_pdf5.php';
    else if($_GET['t'] == 6)
        require 'forma_pdf/forma_pdf6.php';
    else if($_GET['t'] == 7) 
        require 'forma_pdf/forma_pdf7.php';
    else if($_GET['t'] == 8)
        require 'forma_pdf/forma_pdf8.php';
    else if($_GET['t'] == 9)
        require 'forma_pdf/forma_pdf9.php';
    else if($_GET['t'] == 10)
        require 'forma_pdf/forma_pdf10.php';
    else if($_GET['t'] == 11)
        require 'forma_pdf/forma_pdf11.php';
    else if($_GET['t'] == 12)
        require 'forma_pdf/forma_pdf12.php';
    else if($_GET['t'] == 13)
        require 'forma_pdf/forma_pdf13.php';
    else if($_GET['t'] == 14)
        require 'forma_pdf/forma_pdf14.php';
    else if($_GET['t'] == 15)    
        require 'forma_pdf/forma_pdf15.php';
    else if($_GET['t'] == 16)
        require 'forma_pdf/forma_pdf16.php';
    else if($_GET['t'] == 17)
        require 'forma_pdf/forma_pdf17.php';
    else if($_GET['t'] == 18)
        require 'forma_pdf/forma_pdf18.php';
        else if($_GET['t'] == 19)
        require 'forma_pdf/forma_pdf19.php';

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