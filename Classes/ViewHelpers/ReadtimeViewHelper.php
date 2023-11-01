<?php

declare(strict_types=1);

namespace Wit\WitNwreadtime\ViewHelpers;

use Closure;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use Typo3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;

final class ReadtimeViewHelper extends AbstractViewHelper {
    use CompileWithRenderStatic;
    
    public $escapeOutput = false;

    public function initializeArguments()
    {
        $this->registerArgument('newsId', 'int', 'News id for check read time', true);
    }

    public static function renderStatic(array $arguments, Closure $renderChildrenClosure, RenderingContextInterface $renderingContext)
    {
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('tx_news_domain_model_news');
        $data = $queryBuilder
            ->select('*')
            ->from('tx_news_domain_model_news')
            ->where(
                $queryBuilder->expr()->eq('uid', $queryBuilder->createNamedParameter($arguments['newsId']))
            )
            ->execute()
            ->fetchAssociative();
            
        $word = str_word_count(strip_tags($data['bodytext']));
        $minutes = floor($word / 200);
        $seconds = floor($word % 200 / (200 / 60));
        $time = $minutes . ' minute' . ($minutes == 1 ? '' : 's') . ', ' . $seconds . ' second' . ($seconds == 1 ? '' : 's');

        return $time;
    }
}