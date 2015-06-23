<?php

namespace DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    // Routing cinfig marbot be in action toye masire zir vaghe shode
    // src/DemoBundle/Resources/config/routing.yml
    public function indexAction($name)
    {
        // Hala ma in parameter vorodi be in action ra mifrestim toye template
        // albate mamaolan ghablesh ye alame karha roye in parametr anjam mishe
        return $this->render(
            // In addrese file template hst. mitoni ina to in masir peyda koni  
            // "src/DemoBundle/Resources/views/Default/index.html.twig"
            'DemoBundle:Default:index.html.twig', 
            // in liste parametrhaye hast ke mikhay toye file twig dide beshe. 
            // Twig hamon template page hast
            array(
                'name' => $name, 
                'age' => 12
                )
            );
    }
}
