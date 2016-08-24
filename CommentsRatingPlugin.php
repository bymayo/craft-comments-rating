<?php
/**
 * Comments Rating plugin for Craft CMS
 *
 * Adds star rating functionality to Engram Design&#39;s -  Comments plugin
 *
 * @author    Jason Mayo
 * @copyright Copyright (c) 2016 Jason Mayo
 * @link      bymayo.co.uk
 * @package   CommentsRating
 * @since     1.0.0
 */

namespace Craft;

class CommentsRatingPlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init()
    {
	    
		craft()->on('comments.onSaveComment', function($event) {
		    $comment = $event->params['comment'];
		    craft()->commentsRating->createRating($comment);
		});
	    
    }

    /**
     * @return mixed
     */
    public function getName()
    {
         return Craft::t('Comments Rating');
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return Craft::t('Adds star rating functionality to Engram Design&#39;s -  Comments plugin');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl()
    {
        return 'https://github.com/bymayo/commentsrating/blob/master/README.md';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/bymayo/commentsrating/master/releases.json';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getDeveloper()
    {
        return 'Jason Mayo';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'bymayo.co.uk';
    }

    /**
     * @return bool
     */
    public function hasCpSection()
    {
        return false;
    }

    /**
     */
    public function onBeforeInstall()
    {
    }

    /**
     */
    public function onAfterInstall()
    {
    }

    /**
     */
    public function onBeforeUninstall()
    {
    }

    /**
     */
    public function onAfterUninstall()
    {
    }
}