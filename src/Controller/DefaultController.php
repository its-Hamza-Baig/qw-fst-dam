<?php

namespace App\Controller;

use Pimcore\Bundle\AdminBundle\Controller\Admin\LoginController;
use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends FrontendController
{
    /**
     * This action renders the homepage
     * 
     * @Route("/", name="app_home")
     */
    public function indexAction(): Response
    {
        return $this->render('pages/index.html.twig');
    }

    /**
     * This can be used for other fallback/default behavior
     * 
     * @Route("/default", name="app_default")
     */
    public function defaultAction(Request $request): Response
    {
        return $this->render('default/default.html.twig');
    }

    /**
     * Redirects to Pimcore Admin Login
     * 
     * @Route("/admin/login", name="admin_login")
     */
    public function loginAction(): Response
    {
        return $this->forward(LoginController::class . '::loginCheckAction');
    }
}
