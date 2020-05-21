<?php
/**
 * Review plugin for Craft CMS 3.x
 *
 * See all entries that are not published yet and need to be reviewed by an administrator.
 *
 * @link      https://ynm.studio
 * @copyright Copyright (c) 2020 Denis Yilmaz
 */

namespace ynmstudio\review\assetbundles\reviewwidgetwidget;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * ReviewWidgetWidgetAsset AssetBundle
 *
 * AssetBundle represents a collection of asset files, such as CSS, JS, images.
 *
 * Each asset bundle has a unique name that globally identifies it among all asset bundles used in an application.
 * The name is the [fully qualified class name](http://php.net/manual/en/language.namespaces.rules.php)
 * of the class representing it.
 *
 * An asset bundle can depend on other asset bundles. When registering an asset bundle
 * with a view, all its dependent asset bundles will be automatically registered.
 *
 * http://www.yiiframework.com/doc-2.0/guide-structure-assets.html
 *
 * @author    Denis Yilmaz
 * @package   Review
 * @since     1.0.0
 */
class ReviewWidgetWidgetAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * Initializes the bundle.
     */
    public function init()
    {
        // define the path that your publishable resources live
        $this->sourcePath = "@ynmstudio/review/assetbundles/reviewwidgetwidget/dist";

        // define the dependencies
        $this->depends = [
            CpAsset::class,
        ];

        // define the relative path to CSS/JS files that should be registered with the page
        // when this asset bundle is registered
        $this->js = [
            'js/ReviewWidget.js',
        ];

        $this->css = [
            'css/ReviewWidget.css',
        ];

        parent::init();
    }
}
