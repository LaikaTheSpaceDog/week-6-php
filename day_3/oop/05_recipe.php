<?php

require __DIR__ . "/vendor/autoload.php";

class Recipe 
{
    private $name;
    private $display = "";
    private $dietary = "";
    private $ingredients = [];
    private $dietList = [];
    private $amounts = [];

    public function __constructor(string $name)
    {
        $this->name = $name;
    }

    public function addIngredient(Ingredient $ingredient, float $amount)
    {
        $this->ingredients[] = $ingredient->name;
        $this->dietList[] = $ingredient->dietary;
        $this->amounts[] = $amount;
        return $this;
    }

    public function addMethod(string $string)
    {

    }

    public function display() : string
    {
        return $this->display;
    }

    public function dietary() : string
    {
        return $this->dietary;
    }

    public function vegan() : string
    {

    }
}

class Ingredient
{
    public $name;
    public $dietary;

    public function __constructor(string $name, string $dietary)
    {
        $this->name = $name;
        $this->dietary = $dietary;
    }
}


// ingredients take a name, followed by an array of dietary notes
$flour = new Ingredient("Flour", ["gluten"]);
$eggs = new Ingredient("Eggs", ["animal produce"]);
$sugar = new Ingredient("Sugar", []);
$butter = new Ingredient("Butter", ["dairy", "animal produce"]);

// a recipe takes a name
$cake = new Recipe("Cake");

// we can add ingredients plus amounts
$cake->addIngredient($flour, "200g");
$cake->addIngredient($butter, "100g");
$cake->addIngredient($sugar, "50g");
$cake->addIngredient($eggs, 2);

// we can add a method
$cake->addMethod("Put them in a bowl, mix them together, cook for a bit. Job's a good'un");

// we can see the recipe
// using echo so it looks nicer
dump($cake->display());
/*
    "Cake

    Ingredients

    - 200g Flour
    - 100g Butter
    - 50g Sugar
    - 2 Eggs

    Method

    Put them in a bowl, mix them together, cook for a bit. Job's a good'un"
 */

// we can list dietary information
dump($cake->dietary()); // "gluten, animal produce, dairy"

// is the recipe vegan? (i.e. contains animal produce)
dump($cake->vegan()); // false