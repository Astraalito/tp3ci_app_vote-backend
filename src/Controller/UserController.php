<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/api/users/authentication", name="api_users_authentication", methods={"POST"})
     * @param Request $request
     * @return Response
     */
    public function userAuthentication(Request $request)
    {
        // On décode les données envoyées
        $data = json_decode($request->getContent());
        $user = $this->getDoctrine()->getRepository(User::class)->findOneBy(["username" => $data->username, "password" => $data->password]);

        if ($user) {
            $data = [
                'id' => $user->getId(),
                'username' => $user->getUsername(),
                'admin' => $user->getAdmin(),
            ];
            return new Response(json_encode($data) , 200);
        } else {
            return new Response('Failed' , 404);
        }

    }

}
