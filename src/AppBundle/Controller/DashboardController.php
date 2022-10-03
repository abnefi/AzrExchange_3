<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use ConfigBundle\Entity\ConfigSociete;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use \Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use UserBundle\Entity\FosUser;

class DashboardController extends Controller
{
    /**
     * @Route   ("/menu", name="menu")
     * @Method("GET")
     */
    public function menuAction(Request $request)
    {
        $user = $this->getUser();
        //        dump($user);die();
        $agence = $user->getAgence();
        if (null === $agence) {
            throw new NotFoundHttpException("Cet utilisateur n'est lié à aucune société.");
        }
        $societe = $agence->getSociete();
        return $this->render('blocks/menu.html.twig', ['societe' => $societe]);
    }
}
