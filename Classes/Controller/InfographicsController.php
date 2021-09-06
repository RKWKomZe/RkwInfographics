<?php

namespace RKW\RkwInfographics\Controller;

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

use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

/**
 * InfographicsController
 *
 * @author Christian Dilger <c.dilger@addorange.de>
 * @copyright Rkw Kompetenzzentrum
 * @package RKW_RkwInfographics
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class InfographicsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * infographicRepository
     *
     * @var \RKW\RkwInfographics\Domain\Repository\InfographicRepository
     * @inject
     */
    protected $infographicRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {

        $infographics = $this->infographicRepository->findByUidList(explode(',', $this->settings['infographicsUids']));
        $this->view->assign( 'infographicsList', $infographics );

    }

    /**
     * action show
     *
     * @param \RKW\RkwInfographics\Domain\Model\Infographic $infographic
     * @return void
     * @ignorevalidation $event
     */
    public function showAction(\RKW\RkwInfographics\Domain\Model\Infographic $infographic = null)
    {
        $this->view->assign('infographic', $infographic);
    }


}
