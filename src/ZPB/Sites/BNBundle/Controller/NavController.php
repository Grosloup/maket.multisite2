<?php
/**
 * Created by PhpStorm.
 * User: Nicolas Canfrère
 * Date: 29/08/14
 * Time: 10:28
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

namespace ZPB\Sites\BNBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NavController extends Controller
{
    public function secondNavbarAction()
    {
        return $this->render('ZPBSitesBNBundle:Nav:second-navbar.html.twig', []);
    }
} 
