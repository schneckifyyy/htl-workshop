<?php
namespace App\Controller;

use Symfony\Bridge\Twig\Attribute\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CreateUserController extends AbstractController
{
    #[Route('/create-user', name: 'app_create_user')]
    #[Template('page/create_user.html.twig')]
    public function createUser(): array
    {
        return [];
    }
}
