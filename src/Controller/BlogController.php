<?php


namespace App\Controller;





use mysql_xdevapi\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\BinaryFileResponse;


class BlogController extends AbstractController
{
    /**
     * @Route("/page/{id}", requirements={"id"="[0-9]+"})
     * @param int|null $id
     * @return Response
     */
    public function page(?int $id = null): Response
    {
        var_dump($id);
        return $this->render('blog.html.twig');
    }

    public function page2(?int $id = null): Response
    {
        var_dump($id);
        return $this->render('blog.html.twig');
    }

    /**
     * @Route("/page3/{id<[0-9]+>}", methods={"GET"})
     * @param int|null $id
     * @return Response
     */
    public function page3(?int $id = null): Response
    {
        var_dump($id);
        return $this->render('blog.html.twig');
    }

    /**
     * @return JsonResponse
     * @Route("/api/product")
     */
    public function displayJson(): JsonResponse
    {
        $product = [
            "id" => 1,
            "name" => 'hamac',
            "price" => 10.95
        ];
        return $this->json($product);
    }

    /**
     * @Route("/support")
     * @return BinaryFileResponse
     */
    public function displayPDF(): BinaryFileResponse
    {

        return $this->file('pdf/support1.pdf', null, 'inline');
    }

    /**
     * @Route("/photo")
     * @return BinaryFileResponse
     */
    public function displayPhoto(): BinaryFileResponse
    {
        return $this->file('img/cochons.jpg', null, 'inline');
    }

    /**
     * @Route("/redirige-moi-vers-accueil")
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirection(): RedirectResponse
    {
        return $this->redirectToRoute('app_home');
        /*
        return $this->redirect('https://www.doranco.fr/');
        return $this->redirectToRoute('app_blog_page', ['id' => 154]);
        */
    }

    /**
     * @Route("/formulaire/affichage")
     */
    public function displayForm(): Response
    {
        return $this->render('form/index.html.twig');
    }
    /**
     * @Route("/formulaire/traitement", name="form_handler")
     * @param Request $request
     */
    public function handleForm(Request $request, SessionInterface $session)
    {
        var_dump($session);
        $posts = $request->request;
        var_dump($posts);
        var_dump("Le formulaire a été soumis");
        die('debug');
    }
    public function recupSession(Request $request)
    {
        $session = $request->getSession();
    }
}