<?php
/**
 * Created by PhpStorm.
 * User: Nicolas Canfrère
 * Date: 29/08/14
 * Time: 09:29
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

class FooterController extends Controller
{
    public function mainAction()
    {
        return $this->render('ZPBSitesZooBundle:Footer:main.html.twig');
    }
} 
