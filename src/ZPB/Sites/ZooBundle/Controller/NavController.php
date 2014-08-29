<?php
/**
 * Created by PhpStorm.
 * User: Nicolas Canfrère
 * Date: 29/08/14
 * Time: 09:24
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

namespace ZPB\Sites\ZooBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NavController extends Controller
{
    public function mainTopbarAction()
    {
        return $this->render('ZPBSitesZooBundle:Nav:main-topbar.html.twig', []);
    }

    public function secondNavbarAction()
    {
        return $this->render('ZPBSitesZooBundle:Nav:second-navbar.html.twig');
    }
} 
