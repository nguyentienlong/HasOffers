<?php

/*
 * This file is part of Rulerr HasOffers.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Rulerr\HasOffers\Modifiers;

use Rulerr\Modifiers\AbstractModifier;

class AffiliateModifier extends AbstractModifier
{
    private $uri = 'https://api.hasoffers.com/v3/%s_%s.json?Method=';

    public function apply()
    {
        $client = $this->httpClient;

        if ($this->arguments['type'] === 'Affiliate') {
            $client->setOption('base_uri', sprintf(
                $this->uri, $this->arguments['type'], $this->arguments['target']
            ));

            $client->addQuery('NetworkId', $client->getConfig('networkId'));
            $client->addQuery('api_key', $client->getConfig('apiKey'));
        }

        return $client;
    }
}
