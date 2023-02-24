<?php

namespace RKW\RkwInfographics\Domain\Repository;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;

/**
 * InfographicRepository
 *
 * @author Christian Dilger <c.dilger@addorange.de>
 * @copyright RKW Kompetenzzentrum
 * @package RKW_Infographics
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class InfographicRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    /**
     * find all infographics by uid list
     *
     * @param array $uidList
     * @return \TYPO3\CMS\Extbase\Persistence\QueryResultInterface
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException
     */
    public function findByUidList(array $uidList): QueryResultInterface
    {
        $query = $this->createQuery();
        $query->matching(
            $query->in('uid', $uidList)
        );

        return $query->execute();
    }

}
