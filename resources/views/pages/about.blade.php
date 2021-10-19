@extends('layouts.default',['title' => 'About'])

@section('content')
<div class="container">
        <h2>What is {{ config('app.name') }} ?</h2>
        <p>{{ config('app.name') }} is a clone of <a href="https://laramap.com">Laramap.com</a></p>

        <div class="row">
            <div class="col-md-6">
                <p class="alert-warning">
                    <strong> <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> This app has been bluid by <a href="https://twitter.com/emmanuelS">@EmmanuelS </a> for learning purposes</strong>
                </p>
            </div>
        </div>
        <p>Feel free to help to improve <a href="https://github.com/Emmanuelson77/laracarte-E7">the source code</a> .</p>

        <hr>
        <h2>What is Laramap ?</h2>
        <p>Laramap is the website which {{ config('app.name') }} was inspired :).</p>
        <p>More info <a href="https://laramap.com/p/about">here</a></p>

        <hr>

        <h2>Which tools and services are used in {{ config('app.name') }} ?</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis sed vitae quibusdam a enim explicabo sequi dolorum ullam, hic placeat culpa, quas sapiente repellendus ducimus quidem asperiores dignissimos. Ipsa, beatae.</p>

        <ul>
            <li>Laravel</li>
            <li>Bootstrap</li>
            <li>Amazon S7</li>
            <li>Mandrill</li>
            <li>Google Maps</li>
            <li>Gravatar</li>
            <li>Anthony Martin's Geolocalisation Pactage</li>
            <li>Miche Fortin's Markdown Parser Pactage</li>
            <li>Heroku</li>
        </ul>
</div>

@endsection
