<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\KernelInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
* @Route("/commands")
*/
class CommandController extends Controller
{
    /**
    * @Route("/generate-invoice", name="generateInvoice")
    */
    public function generateInvoiceAction(Request $request, KernelInterface $kernel)
    {
        $companyService = $this->container->get('app.company.service');
        $response = $companyService->generateInvoiceFromCommand($request->query->get('id'),$kernel);
        return new Response($response);
    }
}
