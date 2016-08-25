<?php
/**
 * Comments Rating plugin for Craft CMS
 *
 * CommentsRating Service
 *
 * @author    Jason Mayo
 * @copyright Copyright (c) 2016 Jason Mayo
 * @link      bymayo.co.uk
 * @package   CommentsRating
 * @since     1.0.0
 */

namespace Craft;

class CommentsRatingService extends BaseApplicationComponent
{

    public function createRating($comment)
    {
	    
        $model = new CommentsRatingModel();
	    $model->commentId = $comment->id;
	    $model->elementId = $comment->elementId;
	    $model->userId = $comment->userId;
	    $model->rating = craft()->request->getPost('fields.commentRating');
	    
		$commentRatingRecord = new CommentsRatingRecord;
		$commentRatingRecord->setAttributes($model->getAttributes());
		$commentRatingRecord->save();
	    
    }
    
    public function elementRating($elementId)
    {
	    
		$query = craft()->db->createCommand()
			->select('AVG(rating) as average')
			->from('comments_rating')
			->where('elementId=' . $elementId)
			->queryAll();
		
		return round($query[0]['average']);
	    
    }
    
    public function commentRating($commentId)
    {
	    
		$query = craft()->db->createCommand()
			->select('rating')
			->from('comments_rating')
			->where('commentId=' . $commentId)
			->queryAll();
		
		return $query[0]['rating'];
	    
    }

}