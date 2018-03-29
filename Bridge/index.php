<?php

trait TemplateData
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
        $this->prepare();
    }
    abstract protected function prepare();
}

trait TemplateShow
{
    private $content;

    public function show()
    {
        echo $this->content . "\n";
    }
}

class HtmlFormat
{
    use TemplateData, TemplateShow;

    protected function prepare()
    {
        $this->content = '<html><head><title>Document</title></head><body>';
        foreach ($this->data as $name => $item) {
            $this->content .= "<article><h1>Article № $name</h1><p>$item</p></article>" . "\n";
        }
        $this->content .= '</body></html>';
    }
}

class JsonFormat
{
    use TemplateData, TemplateShow;

    protected function prepare()
    {
        $this->content = json_encode($this->data);
    }
}

$html = new HtmlFormat(array('name1' => 'text1', 'text2'));
$json = new JsonFormat(array('name2' => 'text3', 'text4'));

$html->show();
$json->show();