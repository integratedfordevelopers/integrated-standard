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
use Integrated\Bundle\ContentBundle\Document\ContentType\ContentType;
use Integrated\Bundle\ContentBundle\Document\ContentType\Embedded\Field;

class ContentTypeContext implements Context
{
    /**
     * @var DocumentManager
     */
    private $documentManager;

    /**
     * @var array
     */
    private $contentTypes;

    public function __construct(DocumentManager $documentManager)
    {
        $this->documentManager = $documentManager;

        $this->contentTypes = [
            'Article' => [
                'class' => Content\Article::class,
                'fields' => [
                    (new Field)->setName('Title')->setOptions(['label' => 'Title', 'required' => true])
                ]
            ],
            'Taxonomy' => [
                'class' => Content\Taxonomy::class,
                'fields' => [
                    (new Field)->setName('Title')->setOptions(['label' => 'Title', 'required' => true])
                ]
            ]
        ];
    }

    /**
     * @Given there is a content type :type named :name
     * @param string $type
     * @param string $name
     * @throws Exception
     */
    public function createContentType($type, $name)
    {
        if (!isset($this->contentTypes[$type])) {
            throw new Exception('There is no implementation for this content type');
        }

        $contentType = new ContentType();
        $contentType->setName($name);
        $contentType->setClass($this->contentTypes[$type]['class']);
        $contentType->setFields($this->contentTypes[$type]['fields']);

        $this->documentManager->persist($contentType);
        $this->documentManager->flush();
    }
}
