<?php

/*
 * This file is part of the Integrated package.
 *
 * (c) e-Active B.V. <integrated@e-active.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Integrated\Behat\Page;

use Behat\Mink\Exception\ElementNotFoundException;
use Behat\Mink\Session;
use Integrated\Behat\Page\Exception\InvalidResponseException;

abstract class Page implements PageInterface
{
    /**
     * @var Session
     */
    private $session;

    /**
     * @param Session $session
     */
    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    /**
     * {@inheritdoc}
     */
    public function open(array $params = [])
    {
        $this->session->visit($this->getUrl($params));
        $this->verify();
    }

    /**
     * @throws ElementNotFoundException
     */
    public function delete()
    {
        $this->getSession()->getPage()->pressButton('Delete');
    }

    /**
     * {@inheritdoc}
     */
    public function verify()
    {
        $statusCode = $this->getSession()->getStatusCode();

        if ($statusCode >= 200 && $statusCode <= 299) {
            return;
        }

        throw new InvalidResponseException(sprintf(
            ' Received an error status code: %s for page %s',
            $statusCode,
            $this->getSession()->getCurrentUrl()
        ));
    }

    /**
     * @return Session
     */
    protected function getSession()
    {
        return $this->session;
    }
}
