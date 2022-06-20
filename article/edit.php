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

arcile/create.php

Dispalays a form to edit a blog article. User must be either an administrator or
the user who posted the article to use this feature.

*******************************************************************************/

namespace article;

//use lib\core\class\
//use lib\core\class\Article;
use lib\core\class\Form;
use lib\core\class\HTML;
use lib\core\class\Itemlist;
use lib\core\class\URL;

require_once("../lib/core/startup.php");

// Administrators and those deemed worthy to create articles may do so. Make
// sure user is one of them. Chastize them if they're not.

// If no article ID number given, error.

// Create form for editing an article.