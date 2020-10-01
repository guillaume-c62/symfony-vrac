<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class WelcomeController extends AbstractController
{
 /**
* @Route ("/welcome" , name="welcome")
*/
    public function Welcome()
    {
        return $this->render('pages/welcome.html.twig');

    }
}