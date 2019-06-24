<?php
/**
 * Доступные страницы на сайте
 *
 * @var array $availableLinks
 */
$availableLinks = include './availableLinks.php';
class WrongHeader extends Exception
{
}
class PageNotFound extends Exception
{
}
class Router
{
    public $page;
    public $links;
    public function __construct($name, $availableLinks)
    {
        $this->page = $name;
        $this->links = $availableLinks;
    }
    public function checkPageName()
    {
        if (!array_key_exists('page', $_GET)) {
            throw new WrongHeader('Get request error');
        }
        if (!array_key_exists($_GET['page'], $links)) {
            throw new PageNotFound('Page is not exist');
        }
        return true;
    }
}
$page = new Router('main', $availableLinks);
try {
    $page->checkPageName();
    echo "Вы находитесь на странице {$_GET['page']}";
} catch (WrongHeader $e) {
    header('Location: error.php', 400);
} catch (PageNotFound $e) {
    header('Location: 404.php', 404);
}
?>
