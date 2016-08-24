<?php
/**
 * Comments Rating plugin for Craft CMS
 *
 * CommentsRating Model
 *
 * @author    Jason Mayo
 * @copyright Copyright (c) 2016 Jason Mayo
 * @link      bymayo.co.uk
 * @package   CommentsRating
 * @since     1.0.0
 */

namespace Craft;

class CommentsRatingModel extends BaseModel
{
    /**
     * @return array
     */
    protected function defineAttributes()
    {
        return array_merge(parent::defineAttributes(), array(
            'commentId' => array(AttributeType::Number),
            'elementId' => array(AttributeType::Number),
            'userId' => array(AttributeType::Number),
            'rating' => array(AttributeType::Number)
        ));
    }

}