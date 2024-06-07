<?php

namespace myfrm;

class Pagination
{
    protected int $per_page;
    public string $uri;
    public int $pages;
    protected int $start;
    protected int $current_page;
    public function __construct(int $per_page, protected int $total, int $current_page)
    {

        $this->per_page = $per_page;
        $this->pages = $this->getPages();
        $this->current_page = $this->getCurrentPage($current_page);
        $this->start = $this->getStart();
        $this->uri = $this->getParams();
    }
    protected function getPages(): int
    {
        return ceil($this->total / $this->per_page) ?: 1;
    }
    protected function getCurrentPage(int $current_page): int
    {
        if($current_page < 1) {
            $current_page = 1;
        }
        if($current_page > $this->pages) {
            $current_page = $this->pages;
        }
        return $current_page;
    }
    protected function getStart(): int
    {
        return ($this->current_page - 1) * $this->per_page;

    }
    public function getPosts($db)
    {
        return $db->query("SELECT * FROM test.TEST ORDER BY id LIMIT {$this->start}, {$this->per_page}")->findAll();
    }
    public function getParams(): string
    {
        $url = explode("?", $_SERVER['REQUEST_URI']);
        $uri = $url[0];
        $uri .= '?';
        if(isset($url[1]) && $url[1] != '') {

            $param = explode("&", $url[1]);
            foreach($param as $val) {
                if(!str_contains($val, "page=")) {
                    $uri .= "$val&";
                }
            }

        }
        return $uri;
    }
    public function renderHtml(): string
    {
        $prev = "<li class='page-item'><a class='page-link' href=" . "{$this->uri}page=" . ($this->current_page-1) . ">&laquo;</a></li>";
        $next = "<li class='page-item'><a class='page-link' href=" . "{$this->uri}page=" . ($this->current_page+1) .">&raquo;</a></li>";
        for($i = 1; $i <= $this->pages; $i++){
            $nav .= "<li class='page-item'><a class='page-link' href=" . "{$this->uri}page={$i}". ">{$i}</a></li>";
        }
        return '<nav>
                     <ul class="pagination pagination-lg">' . $prev .
                        $nav . $next
                     . '</ul>
                </nav>';
    }

}