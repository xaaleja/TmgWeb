<?php
namespace Tmg\TaldeaBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class LekuaController extends Controller
{
    public function estatikoaAction($orrialdea)
    {
        return $this->render('TaldeaBundle:Lekua:'.$orrialdea.'.html.twig');
    }
}