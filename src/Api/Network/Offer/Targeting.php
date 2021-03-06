<?php

/*
 * This file is part of Rulerr HasOffers.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Rulerr\HasOffers\Api\Network\Offer;

use Rulerr\AbstractApi;

class Targeting extends AbstractApi
{
    public $target = 'OfferTargeting';

    public function addTargetRuleToOffer($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('addTargetRuleToOffer');
    }

    public function createTargetRule($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('createTargetRule');
    }

    public function deleteTargetRule($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('deleteTargetRule');
    }

    public function findTargetRules($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findTargetRules');
    }

    public function getActiveOfferIdsUsingRule($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getActiveOfferIdsUsingRule');
    }

    public function getActiveUsesOfRule($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getActiveUsesOfRule');
    }

    public function getRuleTargetingForOffer($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getRuleTargetingForOffer');
    }

    public function removeTargetRuleFromOffer($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('removeTargetRuleFromOffer');
    }

    public function updateTargetRule($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateTargetRule');
    }

    public function updateTargetRuleOfferAction($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateTargetRuleOfferAction');
    }
}
