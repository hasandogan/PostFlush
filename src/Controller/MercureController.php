<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mercure\HubInterface;
use Symfony\Component\Mercure\Update;

/**
 * Class MercureController
 * @package App\Controller
 */
class MercureController extends AbstractController
{
    public function publish(HubInterface $hub,Request $request): Response
    {
        $message = $request->request->get('message');
        $username = $request->request->get('userName');

            try {

                $update = new Update(
                    'live_message',
                    json_encode(
                        [
                            'message' => $request->request->get('message'),
                            'username' => $request->request->get('username'),
                        ], JSON_THROW_ON_ERROR
                    ),
                    true
                );
                $hub->publish($update);
            } catch (\Exception $exception) {
                dd($exception->getMessage());
            }

        return new Response();
    }

    public function generateJwt(HubInterface $hub): string
    {
        dd($hub->getFactory()->create(['live_message'], ['live_message']));
    }

    public function subscribe()
    {
        return $this->render('mercure-res.twig', []);
    }

}
