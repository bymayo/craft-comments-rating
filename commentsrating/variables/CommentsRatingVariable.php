<?php
/**
 * Comments Rating plugin for Craft CMS
 *
 * @author    	Jason Mayo
 * @twitter 	@madebymayo
 * @package   	CommentsRating
 */

namespace Craft;

class CommentsRatingVariable
{
	
	/**
	 * Rating - Element
	 *
	 * @return integer
	*/
    public function elementRating($elementId)
    {
        return craft()->commentsRating->elementRating($elementId);
    }
    
	/**
	 * Rating - Comment
	 *
	 * @return integer
	*/
    public function commentRating($commentId)
    {
        return craft()->commentsRating->commentRating($commentId);
    }
    
}