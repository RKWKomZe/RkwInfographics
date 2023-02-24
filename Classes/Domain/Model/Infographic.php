<?php
namespace RKW\RkwInfographics\Domain\Model;
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

use TYPO3\CMS\Extbase\Domain\Model\File;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;

/**
 * Infographic
 *
 * @author Christian Dilger <c.dilger@addorange.de>
 * @copyright RKW Kompetenzzentrum
 * @package RKW_Infographics
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Infographic extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * @var string
     */
    protected string $title = '';


    /**
     * @var string
     */
    protected string $description = '';


    /**
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference|null
     */
    protected ?FileReference $imageTeaser = null;


    /**
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference|null
     */
    protected ?FileReference $imageDetail = null;


    /**
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference|null
     */
    protected ?FileReference $imageSocial = null;


    /**
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference|null
     */
    protected ?FileReference $download  = null;


    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle(): string
    {
        return $this->title;
    }


    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }


    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription(): string
    {
        return $this->description;
    }


    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }


    /**
     * Returns the imageTeaser
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $imageTeaser
     */
    public function getImageTeaser():? FileReference
    {
        return $this->imageTeaser;
    }


    /**
     * Sets the imageTeaser
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $imageTeaser
     * @return void
     */
    public function setImageTeaser(\TYPO3\CMS\Extbase\Domain\Model\FileReference $imageTeaser)
    {
        $this->imageTeaser = $imageTeaser;
    }


    /**
     * Returns the imageDetail
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $imageDetail
     */
    public function getImageDetail():? FileReference
    {
        return $this->imageDetail;
    }

    /**
     * Sets the imageDetail
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $imageDetail
     * @return void
     */
    public function setImageDetail(\TYPO3\CMS\Extbase\Domain\Model\FileReference $imageDetail)
    {
        $this->imageDetail = $imageDetail;
    }


    /**
     * Returns the imageSocial
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $imageSocial
     */
    public function getImageSocial():? FileReference
    {
        return $this->imageSocial;
    }


    /**
     * Sets the imageSocial
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $imageSocial
     * @return void
     */
    public function setImageSocial(\TYPO3\CMS\Extbase\Domain\Model\FileReference $imageSocial)
    {
        $this->imageSocial = $imageSocial;
    }


    /**
     * Returns the download
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $download
     */
    public function getDownload():? FileReference
    {
        return $this->download;
    }


    /**
     * Sets the download
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $download
     * @return void
     */
    public function setDownload(\TYPO3\CMS\Extbase\Domain\Model\FileReference $download)
    {
        $this->download = $download;
    }
}
