<?php

/**
 * @author Franck Patouillard <patouillardfranck3@gmail.com>
 * @desc HomeController of homepage controls
 */


namespace App\Controller;

use Symfony\{
    Bundle\FrameworkBundle\Controller\AbstractController,
    Component\HttpFoundation\Response,
    Component\Routing\Annotation\Route
};

/**
 * TODO :
 *  - [ ] return homepage
 */
class HomeController extends AbstractController {

    /**
     * @return Response
     */
    #[Route('/', name: 'app_home')]
    public function index(): Response {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController'
        ]);
    }
}
