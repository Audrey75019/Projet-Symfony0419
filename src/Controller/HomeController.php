<?php


namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;



class HomeController extends AbstractController
{
    /**
     * @param Environment $twig
     * @return Response
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */

    public function home(): Response
    {

        return $this->render('home.html.twig');
    }

    public function contact(): Response
    {

        return $this->render('contact.html.twig');

    }
    public function about(): Response
    {
        return $this->render('about.html.twig');
    }
}