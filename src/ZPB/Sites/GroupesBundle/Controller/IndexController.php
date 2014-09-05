<?php
/**
 * Created by PhpStorm.
 * User: Nicolas Canfrère
 * Date: 29/08/14
 * Time: 11:24
 */
  /*
           ____________________
  __      /     ______         \
 {  \ ___/___ /       }         \
  {  /       / #      }          |
   {/ ô ô  ;       __}           |
   /          \__}    /  \       /\
<=(_    __<==/  |    /\___\     |  \
   (_ _(    |   |   |  |   |   /    #
    (_ (_   |   |   |  |   |   |
      (__<  |mm_|mm_|  |mm_|mm_|
*/

namespace ZPB\Sites\GroupesBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render('ZPBSitesGroupesBundle:Index:index.html.twig', []);
    }

    public function pratiqueAction()
    {
        return $this->render('ZPBSitesGroupesBundle:Index:pratique.html.twig', []);
    }

    public function outilsTelechargeAction()
    {
        return $this->render('ZPBSitesGroupesBundle:Index:outil_telecharge.html.twig', []);
    }

    public function outilsCommandeAction()
    {
        return $this->render('ZPBSitesGroupesBundle:Index:outil_commande.html.twig', []);
    }


}
