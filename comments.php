<?php

if(comments_open())
{
?>

	<h3 class="comment-counts">
		<?php comments_number('0 Commentaire','1 Commentaire','% Commentaires') ?>
	</h3>

<?php
	echo '<ul class="list-unstyled comments-list">';

	$comments_args = array(
		'max_depth' => 3,
		'type' => 'comment',
		'avatar_size' => 64
	);

	wp_list_comments($comments_args);

	echo '</ul>';

	$comment_form = array(
		'fields' => array(
			'author' => '<div class="form-group">
							<label>Nom et Prenom </label>
							<input id="author" name="author" size="30"
							 maxlength="245" required="required" class="form-control" type="text">
						</div>',
			'email' => '<div class="form-group">
							<label>Email </label>
							<input id="email" name="email" size="30"
							 maxlength="100" aria-describedby="email-notes"
							 required="required" class="form-control" type="text">
						</div>',
			'url' => '<div class="form-group">
							<label>Votre siteweb </label>
							<input id="url" name="url" 
							 size="30" maxlength="200" class="form-control" type="text">
						</div>',
		),
		'comment_field' => '<div class="form-group">
								<label>Commentaire </label>
								<textarea id="comment" name="comment" cols="45" rows="8" 
								maxlength="65525" required="required" class="form-control"></textarea>
							</div>',
        'title_reply' => 'Écrivez votre commentaire',
        'title_reply_to' => 'Ajouter une réponse à [%s]',
        'comment_notes_before' => ''
	);

	comment_form($comment_form);

}else
{
	echo 'les commentaires sont fermés';
}