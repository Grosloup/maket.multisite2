<?php
/**
 * Created by PhpStorm.
 * User: Nicolas Canfrere
 * Date: 04/09/2014
 * Time: 20:07
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

class ClubAssocController extends Controller
{
    public function visiteAction()
    {
        return $this->render('ZPBSitesGroupesBundle:ClubAssoc:visite.html.twig', []);
    }

    public function restoAction()
    {
        return $this->render('ZPBSitesGroupesBundle:ClubAssoc:resto.html.twig', []);
    }
}
