<?php

/*
 * This file is part of Rulerr HasOffers.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Rulerr\HasOffers\Api\Network;

use Rulerr\AbstractApi;

class RawLog extends AbstractApi
{
    public $target = 'RawLog';

    public function getDownloadLink($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getDownloadLink');
    }

    public function getLogExpirations($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getLogExpirations');
    }

    public function listDateDirs($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('listDateDirs');
    }

    public function listLogs($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('listLogs');
    }
}
