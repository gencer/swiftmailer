<?php

/*
 Analyzes characters for a specific character set.
 
 This program is free software: you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation, either version 3 of the License, or
 (at your option) any later version.
 
 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program.  If not, see <http://www.gnu.org/licenses/>.
 
 */


/**
 * Analyzes characters for a specific character set.
 * @package Swift
 * @subpackage Encoder
 * @author Chris Corbyn
 */
interface Swift_CharacterSetValidator
{

  /**
   * Returns an integer which specifies how many more bytes to read.
   * A positive integer indicates the number of more bytes to fetch before invoking
   * this method again.
   * A value of zero means this is already a valid character.
   * A value of -1 means this cannot possibly be a valid character.
   * @param string $partialCharacter
   * @return int
   */
  public function validateCharacter($partialCharacter);
  
}
