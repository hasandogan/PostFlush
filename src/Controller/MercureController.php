<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mercure\HubInterface;
use Symfony\Component\Mercure\Update;

/**
 * Class MercureController
 * @package App\Controller
 */
class MercureController extends AbstractController
{

    public function publish(HubInterface $hub): Response
    {
        try {
            $messageList = [
                "test",
                "deneme",
                "kim elledi götümü"
            ];

            $update = new Update(
                'live_message',
                json_encode(
                    [
                        'message' => $messageList[rand(0, 2)],
                        'username' => 'hasan',
                    ], JSON_THROW_ON_ERROR
                ),
                true
            );
            $hub->publish($update);
        } catch (\Exception $exception){
            dd($exception);
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
