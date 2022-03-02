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

use ArrayAccess;
use Behat\Mink\Session;
use Integrated\Behat\Page\Exception\InvalidResponseException;
use Integrated\Behat\Page\Exception\UnexpectedUrlException;

abstract class Page implements PageInterface
{
    /**
     * @var Session
     */
    private $session;

    /**
     * @var ArrayAccess
     */
    private $parameters;

    /**
     * @param Session $session
     * @param ArrayAccess $parameters
     */
    public function __construct(Session $session, $parameters)
    {
        $this->session = $session;
        $this->parameters = $parameters;
    }

    /**
     * {@inheritdoc}
     */
    public function open(array $params = [])
    {
        $this->session->visit($this->makePathAbsolute($this->getUrl($params)));
        $this->verify($params);
    }

    /**
     * {@inheritdoc}
     * @throws InvalidResponseException
     * @throws UnexpectedUrlException
     */
    public function verify(array $params = [])
    {
        $this->verifyStatusCode();
        $this->verifyUrl($params);
    }

    /**
     * @throws InvalidResponseException
     */
    protected function verifyStatusCode()
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
     * @param array $params
     * @throws UnexpectedUrlException
     */
    protected function verifyUrl(array $params = [])
    {
        if ($this->getSession()->getCurrentUrl() !== $this->makePathAbsolute($this->getUrl($params))) {
            throw new UnexpectedUrlException(
                sprintf(
                    'Expected to be on "%s" but found "%s" instead',
                    $this->makePathAbsolute($this->getUrl($params)),
                    $this->getSession()->getCurrentUrl()
                )
            );
        }
    }

    /**
     * @return Session
     */
    protected function getSession()
    {
        return $this->session;
    }

    /**
     * @param $name
     * @return mixed|null
     */
    protected function getParameter($name)
    {
        return $this->parameters[$name] ?? null;
    }

    /**
     * @param string $path
     * @return string
     */
    protected function makePathAbsolute($path)
    {
        $baseUrl = rtrim($this->getParameter('base_url'), '/') . '/';
        return 0 !== strpos($path, 'http') ? $baseUrl . ltrim($path, '/') : $path;
    }
}
