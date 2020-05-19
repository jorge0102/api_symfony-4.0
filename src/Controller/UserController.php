<?php

namespace App\Controller;


use App\Entity\Gallery;
use App\Entity\Post;
use App\Entity\User;
use App\Controller\JMS\Serializer\SerializerBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\HttpFoundation\Response;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;


class UserController extends AbstractController
{
    /**
     * @Route("/users", name="users")
     */
    public function usersAll()
    {

        $user = $this->getDoctrine()->getRepository(User::class)->findAll();


        return $this->json($user, Response::HTTP_OK, [], [
            //ObjectNormalizer::SKIP_NULL_VALUES => true
            //ObjectNormalizer::ATTRIBUTES => ['galleries']
            ObjectNormalizer::CIRCULAR_REFERENCE_HANDLER => function ($object) {
                return $object->getId();
            }
        ]);
    }

    /**
     * @Route("/users/{id<\d+>}/galleries", name="users_galleries")
     */
    public function usersAllGalleries(Gallery $galleries): Response
    {

        return $this->json($galleries, Response::HTTP_OK, [], [
            ObjectNormalizer::ATTRIBUTES => ['name', 'slug', 'createdate', 'modifydate' ]
        ]);
    }

}
