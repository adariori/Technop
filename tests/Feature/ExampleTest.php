<?php

test('the application returns a successful response', function () {
    $response = $this->get('/accueil');

    $response->assertStatus(200);
});

test('the root url redirects to accueil', function () {
    $response = $this->get('/');

    $response->assertRedirect('/accueil');
});
