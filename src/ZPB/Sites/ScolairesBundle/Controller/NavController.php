<?php
/**
 * Created by PhpStorm.
 * User: Nicolas Canfrère
 * Date: 29/08/14
 * Time: 11:47
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

namespace ZPB\Sites\ScolairesBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NavController extends Controller
{
    public function secondNavbarAction()
    {
        return $this->render('ZPBSitesScolairesBundle:Nav:second-navbar.html.twig', []);
    }
} 
