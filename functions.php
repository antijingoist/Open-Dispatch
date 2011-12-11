<?
// functions

function _INPUT($name)
{
    if ($_SERVER['REQUEST_METHOD'] == 'GET')
        return strip_tags($_GET[$name]);
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
        return strip_tags($_POST[$name]);
}

?>