<?php

use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

// Header and footer
$app->add(function (Request $request, Response $response, callable $next) {
    $isAjax = false;
    $requestServerParmas = $request->getServerParams();

    // If the request is AJAX (ideally this param is available) then don't add header/footer
    if(!empty($requestServerParmas['HTTP_X_REQUESTED_WITH']) && strtolower($requestServerParmas['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        return $next($request, $response);
    }

    // If the request URL contains an AJAX prefix, we definitely shouldn't add a header/footer
    if(strpos($request->getUri()->getPath(), '/ajax') === 0) {
        return $next($request, $response);
    }
    
    // Bail based on AJAX request detection
    if($isAjax) {
        return $next($request, $response);
    }

    // Get view dependeny
    $renderer = $this->get('view');

    // Add header to response
    $response = $renderer->render($response, 'structure/header.twig');
    $response = $next($request, $response);

    // Gather data to needed for footer
    $footerVars = [
        'scripts' => $this->get('scripts')
    ];
    // Add footer to response
    $response = $renderer->render($response, 'structure/footer.twig', $footerVars);
    
    return $response;
});

// Add any extra application middleware here