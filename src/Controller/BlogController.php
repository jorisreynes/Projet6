<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Form\ArticleType;
use App\Entity\Comment;
use App\Form\CommentType;


class BlogController extends AbstractController
{
    /**
     * @Route("/", name="blog")
     */
    public function index(ArticleRepository $repo)
    {
        $articles = $repo->findAll();
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'articles' => $articles
        ]);
    }
    
    /**
     * @Route("/blog", name="home")
     */
    public function home(){
        return $this->render('blog/home.html.twig', [
            'title' => "Bienvenue sur mon projet 6"
        ]);
    }

        /**
     * 
     * @Route("/blog/new", name="blog_create")
     * @Route("/blog/{id}/edit", name="blog_edit")

     */

    public function form (Article $article = null, request $request, EntityManagerInterface  $manager){

        if (!$article){
            $article = new Article();
        }

        //$article->setTitle("titre d'exemple")
                //->setContent("Le contenu de l'article");

        //$form = $this->createFormBuilder($article)
        //            ->add('title')
          //          ->add('content')
            //        ->add('image')
              //      ->add('video')
                //    ->add('createdBy')

                  //  ->getForm();

        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            if(!$article->getId()){
                $article->setCreatedAt(new \Datetime());
            }


            $manager->persist($article);
            $manager->flush();

            return $this->redirectToRoute('blog_show', ['id' => $article->getId()]);
        }




        return $this->render('blog/create.html.twig', [
            'formArticle' => $form->createView(),
            'editMode' => $article->getId() !== null,
        ]);
    }


    /**
     * @Route("/blog/{id}", name="blog_show")
     */
    public function show(Article $article, Request $request, EntityManagerInterface  $manager){

        //$article = $repo->find($id);

        $comment = new Comment(); 
        $form = $this->createForm(CommentType::class, $comment);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $comment->setCreatedAt(new \DateTime())
                    ->setArticle($article);

            $manager->persist($comment);
            $manager->flush();

            return $this->redirectToRoute('blog_show', ['id' => $article->getId()]);
        }

        return $this->render('blog/show.html.twig', [

            'article' => $article,
            'commentForm' => $form->createView()
        ]);
    }


}
