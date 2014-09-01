<?php

namespace Tmg\TaldeaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Tmg\TaldeaBundle\Entity\Kontzertua ;

class DefaultController extends Controller
{
    public function laguntzaAction()
    {
        return $this->render('TaldeaBundle:Default:laguntza.html.twig');
    }
    public function portadaAction()
    {
        $em = $this->getDoctrine()->getManager();
        $berriak =$em->getRepository('TaldeaBundle:Berria')->findAll();
        $kontzertuak =$em->getRepository('TaldeaBundle:Kontzertua')->findHurrengoKontzertuak();

        return $this->render('TaldeaBundle:Default:portada.html.twig', array('berriak' => $berriak, 'kontzertuak' => $kontzertuak));
    }

    public function kontzertuakAction()
    {
        $em = $this->getDoctrine()->getManager();
        $kontzertuak =$em->getRepository('TaldeaBundle:Kontzertua')->findHurrengoKontzertuak();
        return $this->render('TaldeaBundle:Default:kontzertua.html.twig', array('kontzertuak' => $kontzertuak));
    }

    public function diskografiaAction()
    {
        $em = $this->getDoctrine()->getManager();
        $diskak = $em->getRepository('TaldeaBundle:Diska')->findAll();
        return $this->render('TaldeaBundle:Default:diskografia.html.twig', array('diskak' => $diskak));
    }

    public function biografiaAction()
    {
        return $this->render('TaldeaBundle:Default:biografia.html.twig');
    }

    public function bideoakAction()
    {
        return $this->render('TaldeaBundle:Default:bideoa.html.twig');
    }
    public function argazkiakAction()
    {
        $em = $this->getDoctrine()->getManager();
        //$argazkiak = $em->getRepository('TaldeaBundle:Argazkia')->findAll();
        $kontzertuak = $em->getRepository('TaldeaBundle:Kontzertua')->findIraganekoKontzertuak();
        $diskak = $em->getRepository('TaldeaBundle:Diska')->findAll();
        $berriak = $em->getRepository('TaldeaBundle:Berria')->findAll();

        return $this->render('TaldeaBundle:Default:argazkia.html.twig', array('kontzertuak' => $kontzertuak,
            'diskak' => $diskak, 'berriak' => $berriak));
    }

    public function dendaAction()
    {
        return $this->render('TaldeaBundle:Default:denda.html.twig');
    }

    public function berriaAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $berria = $em->getRepository('TaldeaBundle:Berria')->find($id);
        return $this->render('TaldeaBundle:Default:berria.html.twig', array('berria' => $berria));
    }

    public function diskaAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $diska = $em->getRepository('TaldeaBundle:Diska')->find($id);
        $abestiak = $em->getRepository('TaldeaBundle:Abestia')->findDiskarenAbestiak($id);
        return $this->render('TaldeaBundle:Default:diska.html.twig', array('diska' => $diska, 'abestiak' => $abestiak));
    }

    public function iragKontzertuakAction()
    {
        $em = $this->getDoctrine()->getManager();
        $kontzertuak2011 = $em->getRepository('TaldeaBundle:Kontzertua')->find2011koKontzertuak();
        $kontzertuak2012 = $em->getRepository('TaldeaBundle:Kontzertua')->find2012koKontzertuak();
        $kontzertuak2013 = $em->getRepository('TaldeaBundle:Kontzertua')->find2013koKontzertuak();
        $kontzertuak2014 = $em->getRepository('TaldeaBundle:Kontzertua')->find2014koKontzertuak();
        return $this->render('TaldeaBundle:Default:iraganekoKontzertuak.html.twig', array('kontzertuak2011' => $kontzertuak2011,
            'kontzertuak2012' => $kontzertuak2012, 'kontzertuak2013' => $kontzertuak2013, 'kontzertuak2014' => $kontzertuak2014));
    }

    public function kontaktuaAction()
    {
        return $this->render('TaldeaBundle:Default:kontaktua.html.twig');
    }

    public function galeriaDiskaAction($slug)
    {
        $em = $this->getDoctrine()->getManager();
        $obj = $em->getRepository('TaldeaBundle:Diska')->findOneBySlug($slug);

        return $this->render('TaldeaBundle:Default:galeria.html.twig', array('obj' => $obj ));
    }

    public function galeriaKontzertuaAction($slug)
    {
        $em = $this->getDoctrine()->getManager();
        $obj = $em->getRepository('TaldeaBundle:Kontzertua')->findOneBySlug($slug);
        return $this->render('TaldeaBundle:Default:galeria.html.twig', array('obj' => $obj ));
    }

    public function galeriaBestelakoaAction($slug)
    {

    }
}
