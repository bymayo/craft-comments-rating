<img src="https://github.com/madebyshape/comments-rating/raw/master/screenshots/icon.png" width="50">

# Comments Rating :star:

Comments Rating extends the functionality of Engram Design's Comments plugin :fire::100: (https://github.com/engram-design/Comments) by adding the ability to store a rating per comment.

You can also output the average rating of an element and output the rating per comment.

## Install

### IMPORTANT

You must have the Comments plugin installed to use this plugin. Download it from https://github.com/engram-design/Comments

- Add the `commentsrating` directory into your `craft/plugins` directory.
- Navigate to Settings -> Plugins and click the "Install" button.

## Templating

### Get Rating

To get the rating for a comment you first need to be using the `form.html` Template Override (https://github.com/engram-design/Comments/wiki/04.-Template-Overrides) provided by Comments. Then you just need to add the `<select>` inside the `<form>` tag of the comment

```HTML
	<form method="post" action="" accept-charset="UTF-8">
	
		...
		
		<label>Rating</label>
		<select name="fields[commentsRating]">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
		</select>
		
		...
		
	</form>
	
```

### Comment Rating

To output the rating for a particular comment you again need to be using the `comment.html` Template Override (https://github.com/engram-design/Comments/wiki/04.-Template-Overrides) provided by Comments.

Then just pass the comment ID to the variable -

```HTML
	{{ craft.commentsrating.commentRating(comment.id) }}
```

### Element Rating Average

To output the average rating for an element, simply pass the element ID to the variable - 

```HTML
	{{ craft.commentsrating.elementRating(entry.id) }}
```

### Outputting Stars

Because this is a basic 'Extend' of a plugin that exists I haven't gone full out with the features! So outputting stars etc will need to be done via your own TWIG files and CSS. See the `examples` folder in the repo for a basic TWIG snippet.

## Roadmap

- Allow half rating average
- Variable to output star rating
- Variable to output the select menu
- Setting to set the amount a rating should go up to
