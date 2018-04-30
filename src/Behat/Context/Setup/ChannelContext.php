<?php

namespace Integrated\Behat\Context\Setup;

use Behat\Behat\Context\Context;
use Doctrine\ODM\MongoDB\DocumentManager;
use Exception;
use Integrated\Bundle\ContentBundle\Document\Channel\Channel;

class ChannelContext implements Context
{
    /**
     * @var DocumentManager
     */
    private $documentManager;

    /**
     * @param DocumentManager $documentManager
     */
    public function __construct(DocumentManager $documentManager)
    {
        $this->documentManager = $documentManager;
    }

    /**
     * @Given there is a channel :name with the domains :domains and the color :color
     * @param string $name
     * @param string $domains
     * @param string $color
     * @throws Exception
     */
    public function createChannels($name, $domains, $color)
    {
        if (!is_string($name)) {
            throw new Exception('String expected for :name');
        }

        if (!is_string($domains)) {
            throw new Exception('String or array expected for :domains');
        }

        if (!is_string($color)) {
            throw new Exception('String expected for :color');
        }

        $channel = new Channel();
        $channel->setName($name);
        $channel->setDomains(explode(',', $domains));
        $channel->setColor($color);

        $this->documentManager->persist($channel);
        $this->documentManager->flush();
    }
}
