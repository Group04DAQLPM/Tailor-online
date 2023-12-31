<?php

namespace AmeliaHttp\Message\UriFactory;

use AmeliaHttp\Message\UriFactory;
use AmeliaPsr\Http\Message\UriInterface;
use Slim\Http\Uri;

/**
 * Creates Slim 3 URI.
 *
 * @author Mika Tuupola <tuupola@appelsiini.net>
 */
final class SlimUriFactory implements UriFactory
{
    /**
     * {@inheritdoc}
     */
    public function createUri($uri)
    {
        if ($uri instanceof UriInterface) {
            return $uri;
        }

        if (is_string($uri)) {
            return Uri::createFromString($uri);
        }

        throw new \InvalidArgumentException('URI must be a string or UriInterface');
    }
}
