<?php

/*******************************************************************************

<one line to give the program's name and a brief idea of what it does.>
Copyright (C) <year>  <name of author>

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <https://www.gnu.org/licenses/>.

********************************************************************************

article/view.php

Displays a blog article and any related items, namely the list of comments and
a form to comment, if applicable, acceptable, and ascertainable.

*******************************************************************************/

namespace article;

require_once("../lib/startup.php");

use \lib\class\article;

// Get article.
$article = new Article($_GET["id"]);

//Check that article exists in the databse. If it doesn't, that's bad.
if(!$article->exists())
{
	//BHU::Error();
	return;
}

$article->display();
unset($article);

// List of comments, if article has any. Does not apply to archived articles, as
// comments for those are purged upon archiving.
if($arcile->has_comments())
{
	$comments = new itemlist();
	$comments->display();
	unset($comments);
}

// Create form to add a comment if user is allowed to. User may comment if:
// - They are not banned from the website (either by IP or account).
if($article->can_comment())
{
	$comment_form = new form();
	$comment_form->display();
	unset($comment_form);
}