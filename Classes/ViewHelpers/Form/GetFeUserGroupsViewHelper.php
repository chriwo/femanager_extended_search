<?php
namespace ChriWo\FemanagerExtendedSearch\ViewHelpers\Form;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016-2017 Christian Wolfram <c.wolfram@chriwo.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
use TYPO3\CMS\Extbase\Reflection\ObjectAccess;
use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Class GetFeUserGroupsViewHelper
 *
 * = Example =
 *
 * <code title="Default">
 *  <chriwo:form.getFeUserGroups removeFromUserGroupSelection="2,4,6,8" />
 * </code>
 * <output>
 *  [
 *      1 => \In2code\Femanager\Domain\Model\UserGroup
 *      5 => \In2code\Femanager\Domain\Model\UserGroup
 *  ]
 * </output>
 *
 * <code title="Inline">
 *  {chriwo:form.getFeUserGroups(removeFromUserGroupSelection:"2,4,6,8")}
 * </code>
 * <output>
 *  [
 *      1 => \In2code\Femanager\Domain\Model\UserGroup
 *      5 => \In2code\Femanager\Domain\Model\UserGroup
 *  ]
 * </output>
 *
 * @package TYPO3
 * @subpackage femanager_extended_search
 */
class GetFeUserGroupsViewHelper extends AbstractViewHelper
{
    /**
     * FegroupRepository
     *
     * @var \In2code\Femanager\Domain\Repository\UserGroupRepository
     * @inject
     */
    protected $userGroupRepository;

    /**
     * Build an feUserGroup array
     *
     * @param string $removeFromUserGroupSelection comma separated list
     * @return array
     */
    public function render($removeFromUserGroupSelection = '')
    {
        $feGroups = $this->userGroupRepository->findAllForFrontendSelection($removeFromUserGroupSelection);
        $feGroupsArray = [];
        foreach ($feGroups as $group) {
            /**@var \In2code\Femanager\Domain\Model\UserGroup $group*/
            $feGroupsArray[ObjectAccess::getProperty($group, 'uid')] = ObjectAccess::getProperty($group, 'title');
        }
        return $feGroupsArray;
    }
}
