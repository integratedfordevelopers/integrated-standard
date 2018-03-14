<?php

/*
 * This file is part of the Integrated package.
 *
 * (c) e-Active B.V. <integrated@e-active.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Integrated\Behat\Context\Setup;

use Behat\Behat\Context\Context;
use Doctrine\ODM\MongoDB\DocumentManager;
use Exception;
use Integrated\Bundle\ContentBundle\Document\Content;

class ContentContext implements Context
{
    /**
     * @var DocumentManager
     */
    private $documentManager;

    /**
     * @var array
     */
    private $content;

    /**
     * @param DocumentManager $documentManager
     */
    public function __construct(DocumentManager $documentManager)
    {
        $this->documentManager = $documentManager;

        $this->content = [
            'article' => [
                'Article' =>  (new Content\Article)->setContentType('article')
            ]
        ];
    }

    /**
     * @Given there is a content :content of content type :type
     * @param string $content
     * @param string $type
     * @throws Exception
     */
    public function createContentType($content, $type)
    {
        if (!isset($this->content[$type][$content])) {
            throw new Exception('There is no implementation for this type of content');
        }

        $this->documentManager->persist($this->content[$type][$content]);
        $this->documentManager->flush();
    }
}
