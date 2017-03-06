<?php

namespace appBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkExtraBundle\Configuration\Routing;

class BookmarkController extends Controller
{

    public function indexAction()
    {
        $bookmarkRepository = new BookmarkRepository();
        $bookmarks = $bookmarkRepository->findAll();
        
        return $this->render('appBundle:bookmark:index.html.twig');
    }
}
?>
