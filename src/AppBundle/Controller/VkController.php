<?php

namespace AppBundle\Controller;

use HWI\Bundle\OAuthBundle\Controller\ConnectController as BaseConnectController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class VkController extends BaseConnectController
{
    /**
     * @param Request $request
     * @param string  $service
     *
     * @return RedirectResponse
     */
    public function redirectToServiceAction(Request $request, $service = 'vkontakte')
    {
        if ($request->hasSession()) {
            // initialize the session for preventing SessionUnavailableException
            $session = $request->getSession();
            $session->start();

            $providerKey = $this->container->getParameter('hwi_oauth.firewall_name');
            $request->getSession()->set('_security.' . $providerKey . '.target_path', $request->headers->get('referer'));
        }

        $redirectUrl = $this->container->get('hwi_oauth.security.oauth_utils')->getAuthorizationUrl($request, $service);
//        var_dump($redirectUrl);exit;
//        https://oauth.vk.com/authorize?response_type=code&client_id=4843394&redirect_uri=http%3A%2F%2Frest-demo.local%2Fvk-check
//        https://oauth.vk.com/authorize?client_id=1&redirect_uri=http://example.com/callback&scope=12&display=mobile

        return new RedirectResponse($redirectUrl);
    }

    public function checkAction(Request $request)
    {
        var_dump('checkAction');
        var_dump($request);exit;
    }


}
