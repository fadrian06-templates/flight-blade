<?php

Flight::route('GET /', function (): void {
  Flight::render('welcome');
});
