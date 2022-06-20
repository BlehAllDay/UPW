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

lib/class/itemlist.php

An itemlist is simply a set of repeating HTML objects, such as the list of
comments for an article or posts for a forum topic. Lists have optional headers
/ footers and display settings based on user permissions.

*******************************************************************************/

use lib\interface\displayable as iDisp;

namespace core\lib\class;

class ItemList impliments iDisp;
{
	// Header shows the list options. Can be placed at the top and / or bottom
	// of the list.
	enum HeaderOptions
	{
		case HeaderTop		= 0x1;
		case HeaderBottom	= 0x2;
		case HeaderBoth		= 0x3;
	}

	// List options. These are common option for all lists. List-specific
	// options are set by either extended classes or by the script for the page
	// being viewed.
	enum SortDirection
	{
		case Ascending;
		case Descending;
	}

	enum ItemsPerPage
	{
		case XSmall	= 10;
		case Small	= 20;
		case Med	= 30;
		case Large	= 50;
		case XLarge	= 100;
	}

	// Supplied by user's display settings. Common for any and all item lists
	// shown on a page.
	static private int $per_page = ;

	private int $num_items;
	private HTML $html;



	// Constructor.
	function __construct(HeaderOptions $ho)
	{
		$flags = HeaderOptions::tryFrom($ho)
	}

	//
	public function display() : void
	{
		while()
		yield;
	}
}
