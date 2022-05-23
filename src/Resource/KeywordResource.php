<?php

declare(strict_types = 1);

namespace Target365\ApiSdk\Resource;

use Target365\ApiSdk\Model\Keyword;

class KeywordResource extends AbstractCrudResource
{
    protected function getResourceUri()
    {
        return 'keywords';
    }

    protected function getResourceModelFqns()
    {
        return Keyword::class;
    }

    public function list(
        $shortNumberId = null,
        string $keywordText = null,
        string $mode = null,
        string $tag = null
    ) {
        $queryStringData = [
            'shortNumberId' => $shortNumberId,
            'keywordText' => $keywordText,
            'mode' => $mode,
            'tag' => $tag,
        ];

        return parent::listBase($queryStringData);
    }
}
