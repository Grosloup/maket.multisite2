<?php
/**
 * Created by PhpStorm.
 * User: Nicolas Canfrere
 * Date: 05/09/2014
 * Time: 06:34
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

namespace ZPB\Sites\CEBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndivController extends Controller
{
    public function indexAction()
    {
        return $this->render('ZPBSitesCEBundle:Indiv:index.html.twig', []);
    }
}
