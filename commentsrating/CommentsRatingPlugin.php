<?php
/**
 * Comments Rating plugin for Craft CMS
 *
 * @author    	Jason Mayo
 * @twitter 	@madebymayo
 * @package   	CommentsRating
 */

namespace Craft;

class CommentsRatingPlugin extends BasePlugin
{

    public function init()
    {
	    
		craft()->on('comments.onSaveComment', function($event) {
		    $comment = $event->params['comment'];
		    craft()->commentsRating->createRating($comment);
		});
		
		craft()->on('comments.onTrashComment', function($event) {
			$comment = $event->params['comment'];
			craft()->commentsRating->deleteRating($comment);
		});
	    
    }

    public function getName()
    {
         return Craft::t('Comments Rating');
    }

    public function getDescription()
    {
        return Craft::t('Adds rating functionality to Comments plugin');
    }
    
    public function getDocumentationUrl()
    {
        return 'https://raw.githubusercontent.com/bymayo/comments-rating/master/README.md';
    }

    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/bymayo/comments-rating/master/releases.json';
    }

    public function getVersion()
    {
        return '1.0.3';
    }

    public function getSchemaVersion()
    {
        return '1.0.3';
    }

    public function getDeveloper()
    {
        return 'ByMayo';
    }

    public function getDeveloperUrl()
    {
        return 'bymayo.co.uk';
    }

    public function hasCpSection()
    {
        return false;
    }

}