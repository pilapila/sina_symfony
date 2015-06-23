<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\Entity\User;

class UserController extends Controller
{
    public function showAllAction()
    {
        $user1 = new User();
        $user1->setAge(12);
        $user1->setEmail('saman@gmail.com');
        $users[] = $user1;
        
        $user2 = new User();
        $user2->setAge(14);
        $user2->setEmail('sina@gmail.com');
        $users[] = $user2;

        $user3 = new User();
        $user3->setAge(15);
        $user3->setEmail('mojan@gmail.com');
        $users[] = $user3;
        
        return $this->render(
            'UserBundle:User:showAll.html.twig', 
            array(
                'users' => $users
                )
            );
    }
}
