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

lib/class/exception.php

Extension of PHP's Exception class. This is used to generate error messages that
are displayed, such as an invalid ID number for an article being requested.

Also, any time this class gets used is due to your fault, not mine.

*******************************************************************************/

namespace lib/class;

//	Error types.
enum ErrorType
{
	case ACCESS		= "You do not have permission to access this page!";
	case NO_DATA	= "No %s given!";
	case INV_DATA	= "%s not found!";
	case CUSTOM		= "%s";
}

class BHU_Exception extends Exception
{
	private HTML $html("error");
	private readonly string	$message;

	function __construct(ErrorType $type, string $data)
	{
		parent::__construct();
		$html->set_items("message", $message);
	}

	public function display();
	{
		$html->display();
	}
}
