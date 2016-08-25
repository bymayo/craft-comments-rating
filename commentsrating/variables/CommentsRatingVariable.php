<?php
/**
 * Comments Rating plugin for Craft CMS
 *
 * Comments Rating Variable
 *
 * @author    Jason Mayo
 * @copyright Copyright (c) 2016 Jason Mayo
 * @link      bymayo.co.uk
 * @package   CommentsRating
 * @since     1.0.0
 */

namespace Craft;

class CommentsRatingVariable
{
    /**
     */
    public function elementRating($elementId)
    {
        return craft()->commentsRating->elementRating($elementId);
    }
    
    public function commentRating($commentId)
    {
        return craft()->commentsRating->commentRating($commentId);
    }
    
}