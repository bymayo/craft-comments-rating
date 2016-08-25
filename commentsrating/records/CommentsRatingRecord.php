<?php
/**
 * Comments Rating plugin for Craft CMS
 *
 * CommentsRating Record
 *
 * @author    Jason Mayo
 * @copyright Copyright (c) 2016 Jason Mayo
 * @link      bymayo.co.uk
 * @package   CommentsRating
 * @since     1.0.0
 */

namespace Craft;

class CommentsRatingRecord extends BaseRecord
{
    /**
     * @return string
     */
    public function getTableName()
    {
        return 'comments_rating';
    }

    /**
     * @access protected
     * @return array
     */
   protected function defineAttributes()
    {
        return array(
            'commentId' => array(AttributeType::Number),
            'elementId' => array(AttributeType::Number),
            'userId' => array(AttributeType::Number),
            'rating' => array(AttributeType::Number)
        );
    }

    /**
     * @return array
     */
    public function defineRelations()
    {
        return array(
        );
    }
}