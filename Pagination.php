<?php

class Pagination
{
    protected int $totalRecord;
    protected int $recordPerPage;
    protected int $currentPage;
    protected int $offset;
    protected int $numberOfPages;

    public function __construct($totalRecord, $recordPerPage, $currentPage)
    {
        $this->totalRecord = $totalRecord;
        $this->recordPerPage = $recordPerPage;
        $this->currentPage = $currentPage;

        $this->offset = ($currentPage - 1) * $recordPerPage;
        $this->numberOfPages = ceil($totalRecord / $recordPerPage);
    }

    public function getOffset()
    {
        return $this->offset;
    }
}
