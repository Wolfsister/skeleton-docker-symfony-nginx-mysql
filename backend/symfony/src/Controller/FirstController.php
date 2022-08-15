<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{

    #[Route('/test', name: 'test')]
    public function testRoute(): Response
    {
        return $this->json(['message'=> 'OK chef']);
    }

}