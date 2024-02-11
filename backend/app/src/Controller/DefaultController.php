<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController {
    #[Route('/api/posts/{id}', methods: ['GET', 'HEAD'])]
    public function index() {
        return $this->json([
            'message' => 'Welcome home!',
            'path' => 'src/Controller/DefaultController.php',
        ]);
    }
}