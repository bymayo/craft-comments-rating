<?php
/**
 * Comments Rating plugin for Craft CMS
 *
 * @author    	Jason Mayo
 * @twitter 	@madebymayo
 * @package   	CommentsRating
 */

namespace Craft;

class CommentsRatingService extends BaseApplicationComponent
{

	/**
	 * Rating - Create
	 *
	 * @return null
	*/
    public function createRating($comment)
    {
	    
        $model = new CommentsRatingModel();
	    $model->commentId = $comment->id;
	    $model->elementId = $comment->elementId;
	    $model->userId = $comment->userId;
	    $model->rating = craft()->request->getPost('fields.commentsRating');
	    
		$commentRatingRecord = new CommentsRatingRecord;
		$commentRatingRecord->setAttributes($model->getAttributes());
		$commentRatingRecord->save();
	    
    }
    
	/**
	 * Rating - Element
	 *
	 * @return integer
	*/
    public function elementRating($elementId)
    {
	    
		$query = craft()->db->createCommand()
			->select('AVG(rating) as average')
			->from('comments_rating')
			->where('elementId=' . $elementId)
			->queryAll();
		
		return (count($query) == 0) ? 0 : round($query[0]['average']);
	    
    }
    
	/**
	 * Rating - Comment
	 *
	 * @return integer
	*/
    public function commentRating($commentId)
    {
	    
		$query = craft()->db->createCommand()
			->select('rating')
			->from('comments_rating')
			->where('commentId=' . $commentId)
			->queryAll();
		
		return (count($query) == 0) ? 0 : $query[0]['rating'];
	    
    }

}