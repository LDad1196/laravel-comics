<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data = [
        "studenti" => ["Lorenzo", "Giuseppe", "Francesco", "Luca"],
        "comics" => [
            "title" => "Action Comics #1000: The Deluxe Edition",
            "description" => "The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!",
            "thumb" => "https://www.coverbrowser.com/image/action-comics/1-1.jpg",
            "price" => "$19.99",
            "series" => "Action Comics",
            "sale_date" => "2018-10-02",
            "type" => "comic book",
        ],
        [
        "title" => "American Vampire 1976 #1",
        "description" => "America is broken. Trust between the government and the American public has crumbled. Paranoia reigns supreme. It’s 1976, and this is the concluding chapter of the Eisner Award-winning American Vampire! Skinner Sweet has exhausted all efforts to regain his lost immortality. With his powers and purpose gone, he is now determined to go out with a bang. At a seedy motorcycle rally in the desert where he’s closer than ever to his death wish, Pearl Jones and a shocking partner track him down for one last, desperate mission: The force known as the Gray Trader and its minions are tunneling through the bowels of the world to unleash hell on Earth—just in time for America’s bicentennial. With catastrophe looming, it’s up to Skinner and Pearl to reconcile and change the course of history—or die trying. The series that launched the careers of superstars Scott Snyder and Rafael Albuquerque returns for nine final issues and the closing chapter of the legacy of American Vampire.",
        "thumb" => "https://www.panini.it/media/catalog/product/cache/a5b5dd3adfe0d321084804c738f29601/M/1/M1BLLA015ISBN_0.jpg",
        "price" => "$3.99",
        "series" => "American Vampire 1976",
        "sale_date" => "2020-10-06",
        "type" => "comic book",
        ],
        [
        "title" => "Aquaman Vol. 4: Underworld",
        "description" => "Enraged by rumors of Arthur’s survival in the slums of Atlantis, the ruthless King Rath orders the use of ancient Atlantean techno-magic to track down the Aquaman at all costs! But the ex-king Arthur can’t hide for long when his fate collides with that of a mysterious young woman on the run from Rath’s own secret police. Her name: Dolphin. Collects AQUAMAN #25-30.  ",
        "thumb" => "https://media.wired.com/photos/593384dad80dd005b42b2817/master/w_2560%2Cc_limit/Aquaman-16.jpg",
        "price" => "$16.99",
        "series" => "Aquaman",
        "sale_date" => "2018-01-24",
        "type" => "graphic novel",
        ],
    ];


    return view('home', $data, config('store'));
});
