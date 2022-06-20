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

lib/core/class/article.php

Blog article. This is used for both viewing and editing articles.

*******************************************************************************/

namespace lib\class;

//use lib\interface\Database as iDB;
//use lib\interface\Displayable as iDisp;
//use lib\interface\Exception as iExcep;
//use lib\traits\Database as tDB;

enum ArticleType
{
	case Active;	// Has comments. User may be able to comment depending on status.
	case Archive;	// No comments. Comments not allowed.
	case Admin;		// Includes admin features, also applies to non-site admins who made the article.
}

enum CommentsType : int
{
	case NOTALLOWED	= 0;
	case ALLOWED	= 1;
}

class Article //implements iDisp, iExcep
{
	private readonly ArticleType $type;
	private int $id = 0;

	// This can be NULL if the article does not allow comments.
	private ?int $num_comments = NULL;

	private readonly string
		$category,
		$date,
		$title;

	private ?string $contents = NULL;

	function __construct(int $id)
	{
		global $mysqli;

		// Attempt to get article data from the database.
		$result = $mysqli->query
		(
			"SELECT
				articles.*,
				article_categories.id as cat_id,
				article_categories.name as cat_name,
				active_articles.article_id as active,
				(SELECT COUNT(*) from article_comments WHERE article_id = {$_GET["id"]}) as num_comments
			FROM articles
			LEFT JOIN article_categories ON article_categories.id = articles.category
			LEFT JOIN active_articles ON active_articles.article_id = articles.id
			WHERE articles.id = {$_GET["id"]}"
		) or die($mysqli->error);

		// No article found.
		if(!$result || !$result->num_rows)
			return;

		$data = $result->fetch_assoc();
		$this->id		= $data["id"];
		$this->category = $data["category"];
		$this->date		= $data["date"];	// FIX This
		$this->title	= htmlspecialchars($data["title"]);

		if(array_key_exists("content", $data))
			$this->content = htmlspecialchars($data["content"]);
	}

	//
	function __destruct()
	{

	}

	// Checks if article exists.
	public function exists() : bool
	{
		return (bool)$this->id;
	}
}
