@extends('layouts.app')
@section('content')

    <div class="container product_section_container">
        <div class="row">
            <div class="col product_section clearfix">

                <!-- Breadcrumbs -->

                <div class="breadcrumbs d-flex flex-row align-items-center">
                    <ul>
                        <li><a href="{{route('home')}}">Главная</a></li>
                        <li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>О нас</a></li>
                    </ul>
                </div>

                <div>
                    <h3>CodePen is a social development environment.</h3>
                    <p class="mb-4">At its heart, it allows you to write code in the browser, and see the results of it as you build. A useful and liberating online code editor for developers of any skill, and particularly empowering for people learning to code. We focus primarily on front-end languages like HTML, CSS, JavaScript, and preprocessing syntaxes that turn into those things.</p>

                    <div class="mb-4">
                        <h4 class="title"> <i class="fa fa-share-alt mr-2"></i>CodePen is a community</h4>
                        <p class="description pl-4">Most creations on CodePen are public and open source. They are living things that other people and the community can interact with, from a simple hearting, to leaving a comment, to forking and changing for their own needs.</p>
                    </div>

                    <div class="mb-4">
                        <h4 class="title"> <i class="fa fa-share-alt mr-2"></i>CodePen is a community</h4>
                        <p class="description pl-4">Most creations on CodePen are public and open source. They are living things that other people and the community can interact with, from a simple hearting, to leaving a comment, to forking and changing for their own needs.</p>
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection

