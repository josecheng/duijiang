<?php
// Ui/View/ListDuijiangView.php
namespace Josecheng\Duijiang\Ui\View;

use Illuminate\Contracts\View\Factory as ViewFactory;

class ListDuijiangView
{
    public function __invoke(ViewFactory $view)
    {
        // 这里编写返回视图的逻辑
        return $view->make('duijiang::your-view'); // 你需要替换成实际的视图文件名
    }
}
