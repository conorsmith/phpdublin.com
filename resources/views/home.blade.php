@extends('layout.master')

@section('content')

<?php
$pageId = 'home';
$meetupUrl = 'http://www.meetup.com/PHP-Dublin/events/225356604/';
?>

    <h1>Next Meetup</h1>
    <p><strong>What?</strong> <a href="{{$meetupUrl}}">PHP Dublin &mdash; September 2015</a></p>
    <p><strong>When?</strong>  September 22nd 2015 @ 7:00pm</p>
    <p><strong>Where?</strong>
        <a href="http://maps.google.com/maps?f=q&hl=en&q=Block+B%2C+Joyce%E2%80%99s+Court%2C+Joyce%E2%80%99s+Walk%2C+Talbot+Street%2C+Dublin%2C+ie" target="_blank">Kitman Labs Ltd, Block B, Joyce's Court, Joyce's Walk, Talbot Street, Dublin</a>
    </p>

    <hr />

    <p><strong>September Talks</strong></p>
    <p>We have two talks taking place this month. <br>The first is from <b>Nexus Point Ltd</b>, they're going to take us through a new system that they're developing, a light talk with some design discussion, should be interesting.
    <br>Our second talk is from <b>Barry O Sullivan</b> and it's about Laravel 5.1, and how we used it to make the site/blog easy to use and update.</p>
    <p>Let's not forget the food, drinks and networking after the talks!</p>
    <h3>The Venue</h3>
    <p>Many thanks to <a href="http://kitmanlabs.com">Kitman Labs</a> (<a href="http://careers.kitmanlabs.com">they're hiring</a> !) we've got a new city-centre venue on Joyce’s Walk, just off Talbot Street.</p>

    <h3>I wanna talk!</h3>
    <p>Great! We'd love to hear from you. If you have a talk you would like to give, please <a href="/contact-us">send us details</a>. Don't be shy!</p>
    <p>In fact, if you need a template for your talk, feel free to <a href="./templates/PHPDublinSlideTemplate.otp">use ours</a>!</p>

    <h3>Doors open 7pm</h3>
    
@endsection