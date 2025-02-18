<?php

/**
 * Review plugin for Craft CMS 3.x
 *
 * asdf
 *
 * @link      ynm.studio
 * @copyright Copyright (c) 2020 Denis
 */

namespace ynmstudio\review\variables;

use ynmstudio\review\Review;

use Craft;

/**
 * Review Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.review }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Denis Yilmaz
 * @package   Review
 * @since     1.0.0
 */
class ReviewVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.review.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.review.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function getAllDrafts($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }

    public function getAllSectionOptions()
    {
        $options = [[
            'label' => Craft::t('review', 'All'),
            'value' => '*'
        ]];
        $sections = Craft::$app->entries->allSections;
        foreach ($sections as $field) {
            $options[] = [
                'label' => $field['name'],
                'value' => $field['handle']
            ];
        }

        // $options = [];
        // $options[] = [
        //     '' => 'Please select',
        // ];
        // foreach (Craft::$app->sections->allSections as $field) {
        //     $options[] = [
        //         $field['handle'] => $field['name']
        //     ];
        // }

        return $options;
    }

    public function getTypeName($type)
    {
        $typeName = $type;

        $entryType = Craft::$app->entries->getEntryTypeByHandle($type);

        if ($entryType) {
            $typeName = $entryType->name;
        }

        return $typeName;
    }
}
