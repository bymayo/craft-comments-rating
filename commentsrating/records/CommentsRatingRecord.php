<?php
/**
 * Comments Rating plugin for Craft CMS
 *
 * @author    	Jason Mayo
 * @twitter 	@madebymayo
 * @package   	CommentsRating
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