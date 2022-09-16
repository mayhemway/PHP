<?
class Chef {
    function makeChicken(){
    echo "The chef makes chikcken <br>";
}
function makeSalad(){
    echo "The chef makes salad <br>";
}
function makeSpecialDish(){
    echo "The chef makes bbq ribs <br>";
}
}
class ItalianChef extends Chef {
    function makePasta(){
        echo "The italian chef makes pasta";
    }
    function makeSpecialDish(){
        echo "The italian chef makes chicken parm";
    }
}
$chef = new Chef();
$chef->makeSpecialDish();

$italianChef = new italianChef();
$italianChef->makeSpecialDish();
?>