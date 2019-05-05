<?php

namespace EHAERER\EhBackend\Hooks;

use TYPO3\CMS\Backend\Controller\PageLayoutController;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Fluid\View\StandaloneView;

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

class PageHook
{

    /**
     * @var StandaloneView
     */
    protected $view;

    /**
     * @param array $params
     * @param PageLayoutController $parentObject
     * @return string
     */
    public function render(array $params, PageLayoutController $parentObject)
    {
        $pageinfo = $parentObject->pageinfo;
        if ($pageinfo['media'] === 0) {
            return '';
        }
        $fileRepository = GeneralUtility::makeInstance(\TYPO3\CMS\Core\Resource\FileRepository::class);
        $fileObjects = $fileRepository->findByRelation('pages', 'media', $pageinfo['uid']);

        //load partial paths info from typoscript
        $this->view = GeneralUtility::makeInstance(StandaloneView::class);
        $this->view->setFormat('html');

        $resourcesPath = 'EXT:eh_backend/Resources/';
        $this->view->setTemplatePathAndFilename($resourcesPath . 'Private/Templates/PageHook.html');
        $this->view->assign('files', $fileObjects);
        $this->view->assign('page', $parentObject->pageinfo);
        return $this->view->render();
    }

}
