<?php 

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage()
    {
        return $this->render('article/homepage.html.twig');
    }
    /**
     * @Route("/news/{da}", name="article_show")
     */
    public function show($da)
    {
        // return new Response(
        //     'Future page to show one space article '.
        //     $da
        //     );
        $comments = ['
        What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry
s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it',
' to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
 remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
  Ipsum passages,
 and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        '];

        // dump($da, $this);

        return $this->render('article/show.html.twig',[
            'title' => ucwords(str_replace('-', ' ', $da)),
            'comments' => $comments,
        ]);
    }
}