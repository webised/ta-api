<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Post;
use JMS\Serializer\SerializationContext;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleController extends Controller
{
    /**
     * @Route("/article/{id}", name="article_show")
     */
    public function showAction(Post $post)
    {

        $data = $this->get('jms_serializer')->serialize($post, 'json', SerializationContext::create()->setGroups(array('detail')));

        $response = new Response($data);
        $response->headers->set('Content-type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }

    /**
     * @Route("/articles", name="list_article")
     */
    public function listArticleAction()
    {
        $articles = $this
            ->getDoctrine()
            ->getRepository('AppBundle:Post')
            ->postList2();


        $data = $this->get('jms_serializer')->serialize($articles, 'json', SerializationContext::create()->setGroups(array('list')));

        $response = new Response($data);
        $response->headers->set('Content-type', 'application:json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }

    /**
     * @Route("/articles/{id}", name="category")
     */
    public function categoryAction()
    {
        $articles = $this
            ->getDoctrine()
            ->getRepository('AppBundle:Post')
            ->postList2();


        $data = $this->get('jms_serializer')->serialize($articles, 'json', SerializationContext::create()->setGroups(array('list')));

        $response = new Response($data);
        $response->headers->set('Content-type', 'application:json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }

}