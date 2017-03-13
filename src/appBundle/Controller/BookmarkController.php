<?php

namespace appBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use appBundle\Repository\BookmarkRepository;

class BookmarkController extends Controller
{
    /*
    public function indexAction()
    {
        $bookmarkRepository = new BookmarkRepository();
        $bookmarks = $bookmarkRepository->findAll();
        
        return $this->render('appBundle:bookmark:index.html.twig',['bookmarks' => $bookmarks]);
    }*/
    public function indexAction()
    {
        $bookmarks = $this->get('app.repository.bookmark')->findAll();

        return $this->render(
            'bookmark\bookmark.html.twig',
            ['bookmarks' => $bookmarks]
        );
    }
    public function detalAction($id)
    {
        $bookmarkRepository = new BookmarkRepository();
        $bookmark = $bookmarkRepository->findOneById($id);
        
        return $this->render('appBundle:bookmark:detal.html.twig',['bookmark' => $bookmark]);
    }
}
?>
