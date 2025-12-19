<?php
namespace App\Controller;

use Symfony\Bridge\Twig\Attribute\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ListsUsersController extends AbstractController
{
    #[Route('/list-users', name: 'app_list_users')]
    #[Template('page/list_users.html.twig')]
    public function listUsers(): array
    {
        return [];
    }
}
