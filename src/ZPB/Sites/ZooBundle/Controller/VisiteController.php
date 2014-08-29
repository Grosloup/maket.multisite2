<?php
/**
 * Created by PhpStorm.
 * User: Nicolas Canfrère
 * Date: 29/08/14
 * Time: 12:51
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

class VisiteController extends Controller
{
    public function indexAction()
    {
        return $this->render('ZPBSitesZooBundle:Visite:index.html.twig', []);
    }
} 
