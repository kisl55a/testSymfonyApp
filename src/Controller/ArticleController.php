<?php 

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('OMG, MY FIRST(not really) page ');
    }
    /**
     * @Route("/news/{da}")
     */
    public function show($da)
    {
        return new Response(
            'Future page to show one space article '.
            $da
            );
    }
}