<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PdfController extends AbstractController
{
    /**
     * @Route("support")
     * @return BinaryFileResponse
     */
    public function displayPDF(): BinaryFileResponse
    {

        return $this->file('pdf/support1.pdf', null, 'inline');
    }
}