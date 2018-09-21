<?php

namespace Integrated\Behat\Page\Admin\User;

use Behat\Mink\Exception\ElementNotFoundException;
use Integrated\Behat\Page\Admin\Alert\Alert;
use Integrated\Behat\Page\Page;

class ProfilePage extends Page
{
    use Alert;

    /**
     * @param string $first
     * @param string $second
     * @throws ElementNotFoundException
     */
    public function password($first, $second)
    {
        $this->getSession()->getPage()->fillField('integrated_user_profile_form[password][first]', $first);
        $this->getSession()->getPage()->fillField('integrated_user_profile_form[password][second]', $second);
    }

    /**
     * @return array
     */
    public function errors()
    {
        $errors = [];
        foreach ($this->getSession()->getPage()->findAll('css', '.has-error .help-block li') as $element) {
            $errors[] = $element->getText();
        }

        return $errors;
    }

    /**
     * @throws ElementNotFoundException
     */
    public function save()
    {
        $this->getSession()->getPage()->pressButton('Save');
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl(array $params)
    {
        return '/admin/user/profile/';
    }
}
