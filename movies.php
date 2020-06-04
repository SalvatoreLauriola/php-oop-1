<!-- Creazione di una classe ‘Movie’
Dichiarazione delle proprietà della classe
Dichiarazione del costruttore
Dichiarazione di almeno un metodo
Fare poi degli esempi di utilizzo della classe istanziando almeno due oggetti e stampando a schermo il valore delle proprietà -->

<?php

//Movies

class Movie {
    public $title;
    public $director;
    public $lang;
    public $genre;
    public $rating;
    public $duration;
    public $price;


    public function __construct($_title, $_director, $_lang, $_genre, $_rating, $_duration, $_price) {
        $this->title = $_title;
        $this->director = $_director;
        $this->lang = $_lang;
        $this->genre = $_genre;
        $this->rating = $_rating;
        $this->duration = $_duration;
        $this->price = number_format($_price, 2);
    }

    //Methods
    public function calcPrice($percent) {
        $discount = $this->price * $percent / 100;
        $disc_price = $this->price - $discount;
        return number_format($disc_price, 2);
    }
}


//Instanziare oggetti

$movie1 = new Movie('Lord of the Rings', 'Peter Jackson', 'ENG', 'Fantasy', '90/100', 2.50, 15.88);

$movie2 = new Movie('Fight Club', 'Chuck Palahniuk', 'ENG', 'Thriller', '95/100', 2.20, 12.99);

$movie3 = new Movie('The Godfather', 'Francis Ford Coppola', 'ENG', 'Noir', '85/100', 2.30, 18.99);





//Display
// echo "Prezzo scontato di $movie1->title al 20%;
// Vecchio Prezzo $ $movie1->price
// Nuovo Prezzo $ {$movie1->calcPrice(20)}<br>";

// echo "Prezzo scontato di $movie2->title al 40%;
// Vecchio Prezzo $ $movie1->price
// Nuovo Prezzo $ {$movie2->calcPrice(40)}<br>";

// echo "Prezzo scontato di $movie3->title al 10%;
// Vecchio Prezzo $ $movie3->price
// Nuovo Prezzo $ {$movie3->calcPrice(10)}<br>";
