<?php
namespace Ecommerce\EcommerceBundle\Services;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
class GetFacture
{
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function facture($facture)
    {
        $html = $this->container->get('templating')->render('UtilisateursBundle:Default:layout/facturePDF.html.twig',
            array('facture' => $facture));

        $html2pdf = new \Html2Pdf_Html2Pdf('P','A4','en');
        $html2pdf->pdf->SetAuthor('Mabonzanet');
        $html2pdf->pdf->SetTitle('Facture '.$facture->getReference());
        $html2pdf->pdf->SetSubject('Facture Mabonzanet');
        $html2pdf->pdf->SetKeywords('facture,Mabonzanet');
        $html2pdf->pdf->SetDisplayMode('real');
        $html2pdf->writeHTML($html);
        //$html2pdf->Output('Facture.pdf');

        return $html2pdf;

    }
}