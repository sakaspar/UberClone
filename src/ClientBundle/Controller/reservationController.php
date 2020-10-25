<?php

namespace ClientBundle\Controller;

use ClientBundle\Entity\reservation;
use ClientBundle\Entity\Trajet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class reservationController extends Controller
{
    public function ajoutAction(Request $req)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('ClientBundle:User')->find($this->getUser());
        if ($req->isMethod("post")) {
            $Trajet = new Trajet();
            $Trajet->setVilleDepart($req->get("case_Depart"));
            $Trajet->setVilleArrivee($req->get("case_Arrive"));
            //Formattage de la date start
            $time = strtotime($req->get('case_date'));
            $newformat = date('Y-m-d', $time);
            try {
                $Trajet->setDate(new \DateTime($newformat));
            } catch (\Exception $e) {
            }
            //end Formattage Date
            $Trajet->setNbPlaces($req->get("case_Nbplace"));
            $Trajet->setPrix($req->get("case_prix"));
            $heure=$req->get("case_heure");
            $minute=$req->get("case_minute");
            $Trajet->setHeure($heure.':'.$minute);
            $Trajet->setIdUser($user);
            $em->persist($Trajet);
            $em->flush();
            return $this->redirectToRoute("afficher");
        }
        return $this->render("@Client/trajet.html.twig");
    }
    public function reserverTrajetAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('ClientBundle:User')->find($this->getUser());

        if ($request->isMethod("post")) {

            $id = $request->get("toRes");
            $Trajet = $em->getRepository('ClientBundle:Trajet')->find($id);

            $reservation = new reservation();
            $reservation->setIdTrajet($Trajet);
            //set connected user id
            $reservation->setIdUser($user);


            try {
                $em->persist($reservation);
                $em->flush();

                $this->addFlash(
                    'success',
                    'Demande de reservation envoyé'
                );

                return $this->redirectToRoute('afficher');

            } catch (\Exception $e) {

                $this->addFlash(
                    'error',
                    'Vous avey deja fait une reservation de cette Trajet'
                );

            }

        }
        $Trajet = $em->getRepository('ClientBundle:Trajet')->findAll();

        return $this->render('@Client/reserverTrajet.html.twig', array('trajets' => $Trajet));

    }


        public function supprimerAction( Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        if($request->isMethod("post")) {

            $ids=$request->get("toDel");
            $idsTab=explode(',',$ids);
            foreach($idsTab as $key=>$id)
            {
                if($id!=null)
                {
                    $trajet = $em->getRepository('ClientBundle:Trajet')->find($id);
                    $em->remove($trajet);
                    $em->flush();
                }

            }
            $this->addFlash(
                'success',
                'trajet supprimer avec succée'
            );

        }

        return $this->redirectToRoute('afficher');
    }
    public function afficherAction()
    {
        $em = $this->getDoctrine()->getManager();
        $Trajet = $em->getRepository('ClientBundle:Trajet')->findBy(['idUser'=>$this->getUser()]);


        return $this->render('@Client/afficherTrajet.html.twig',array('trajets'=>$Trajet));
    }
    }
