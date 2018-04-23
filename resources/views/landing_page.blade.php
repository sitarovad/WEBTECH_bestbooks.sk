@extends('layout.app')

@section('content')
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('images/banner-foto-uzke.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('images/banner-foto1-uzke.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('images/banner-foto2-uzke.jpg') }}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container">
        <div class="row">
            <div id="news" class="container col-md-8 col-sm-12">
                <h1>Novinky</h1>
                <div class="container">
                    <div class="row">
                        <div class="my_card">
                            <img class="card-img-top" src="{{ asset('images/book.png') }}" alt="Obalka knihy Noc">
                            <div class="card-body justify-center">
                                <h5 class="card-title">Noc</h5>
                                <p class="card-text">Bernard Minier</p>
                                <p class="card-text price">14,02 €</p>
                            </div>
                        </div>
                        <div class="my_card">
                            <img class="card-img-top" src="{{ asset('images/book.png') }}" alt="Obalka knihy Noc">
                            <div class="card-body justify-center">
                                <h5 class="card-title">Noc</h5>
                                <p class="card-text">Bernard Minier</p>
                                <p class="card-text price">14,02 €</p>
                            </div>
                        </div>
                        <div class="my_card">
                            <img class="card-img-top" src="{{ asset('images/book.png') }}" alt="Obalka knihy Noc">
                            <div class="card-body justify-center">
                                <h5 class="card-title">Noc</h5>
                                <p class="card-text">Bernard Minier</p>
                                <p class="card-text price">14,02 €</p>
                            </div>
                        </div>
                        <div class="my_card">
                            <img class="card-img-top" src="{{ asset('images/book.png') }}" alt="Obalka knihy Noc">
                            <div class="card-body justify-center">
                                <h5 class="card-title">Noc</h5>
                                <p class="card-text">Bernard Minier</p>
                                <p class="card-text price">14,02 €</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="my_card">
                            <img class="card-img-top" src="{{ asset('images/book.png') }}" alt="Obalka knihy Noc">
                            <div class="card-body justify-center">
                                <h5 class="card-title">Noc</h5>
                                <p class="card-text">Bernard Minier</p>
                                <p class="card-text price">14,02 €</p>
                            </div>
                        </div>
                        <div class="my_card">
                            <img class="card-img-top" src="{{ asset('images/book.png') }}" alt="Obalka knihy Noc">
                            <div class="card-body justify-center">
                                <h5 class="card-title">Noc</h5>
                                <p class="card-text">Bernard Minier</p>
                                <p class="card-text price">14,02 €</p>
                            </div>
                        </div>
                        <div class="my_card">
                            <img class="card-img-top" src="{{ asset('images/book.png') }}" alt="Obalka knihy Noc">
                            <div class="card-body justify-center">
                                <h5 class="card-title">Noc</h5>
                                <p class="card-text">Bernard Minier</p>
                                <p class="card-text price">14,02 €</p>
                            </div>
                        </div>
                        <div class="my_card">
                            <img class="card-img-top" src="{{ asset('images/book.png') }}" alt="Obalka knihy Noc">
                            <div class="card-body justify-center">
                                <h5 class="card-title">Noc</h5>
                                <p class="card-text">Bernard Minier</p>
                                <p class="card-text price">14,02 €</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="popular" class="container col-md-4 col-sm-12">
                <h2>Najpredávanejšie</h2>
                <div class="container popular-element">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="image-book" src="{{ asset('images/book.png') }}" alt="Obalka knihy Noc">
                        </div>
                        <div class="container col-md-8">
                            <h5 class="card-title">Noc</h5>
                            <p class="card-text">Bernard Minier</p>
                            <p class="card-text price">14,02 €</p>
                        </div>
                    </div>
                </div>
                <div class="container popular-element">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="image-book" src="{{ asset('images/book.png') }}" alt="Obalka knihy Noc">
                        </div>
                        <div class="container col-md-8">
                            <h5 class="card-title">Noc</h5>
                            <p class="card-text">Bernard Minier</p>
                            <p class="card-text price">14,02 €</p>
                        </div>
                    </div>
                </div>
                <div class="container popular-element">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="image-book" src="{{ asset('images/book.png') }}" alt="Obalka knihy Noc">
                        </div>
                        <div class="container col-md-8">
                            <h5 class="card-title">Noc</h5>
                            <p class="card-text">Bernard Minier</p>
                            <p class="card-text price">14,02 €</p>
                        </div>
                    </div>
                </div>
                <div class="container popular-element">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="image-book" src="{{ asset('images/book.png') }}" alt="Obalka knihy Noc">
                        </div>
                        <div class="container col-md-8">
                            <h5 class="card-title">Noc</h5>
                            <p class="card-text">Bernard Minier</p>
                            <p class="card-text price">14,02 €</p>
                        </div>
                    </div>
                </div>
                <div class="container popular-element">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="image-book" src="{{ asset('images/book.png') }}" alt="Obalka knihy Noc">
                        </div>
                        <div class="container col-md-8">
                            <h5 class="card-title">Noc</h5>
                            <p class="card-text">Bernard Minier</p>
                            <p class="card-text price">14,02 €</p>
                        </div>
                    </div>
                </div>
                <div class="container popular-element">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="image-book" src="{{ asset('images/book.png') }}" alt="Obalka knihy Noc">
                        </div>
                        <div class="container col-md-8">
                            <h5 class="card-title">Noc</h5>
                            <p class="card-text">Bernard Minier</p>
                            <p class="card-text price">14,02 €</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <section class="container">
        <h2>Odporúčame</h2>
        <div class="container">
            <div class="row">
                <div class="my_card">
                    <img class="card-img-top" src="{{ asset('images/book.png') }}" alt="Obalka knihy Noc">
                    <div class="card-body justify-center">
                        <h5 class="card-title">Noc</h5>
                        <p class="card-text">Bernard Minier</p>
                        <p class="card-text price">14,02 €</p>
                    </div>
                </div>
                <div class="my_card">
                    <img class="card-img-top" src="{{ asset('images/book.png') }}" alt="Obalka knihy Noc">
                    <div class="card-body justify-center">
                        <h5 class="card-title">Noc</h5>
                        <p class="card-text">Bernard Minier</p>
                        <p class="card-text price">14,02 €</p>
                    </div>
                </div>
                <div class="my_card">
                    <img class="card-img-top" src="{{ asset('images/book.png') }}" alt="Obalka knihy Noc">
                    <div class="card-body justify-center">
                        <h5 class="card-title">Noc</h5>
                        <p class="card-text">Bernard Minier</p>
                        <p class="card-text price">14,02 €</p>
                    </div>
                </div>
                <div class="my_card">
                    <img class="card-img-top" src="{{ asset('images/book.png') }}" alt="Obalka knihy Noc">
                    <div class="card-body justify-center">
                        <h5 class="card-title">Noc</h5>
                        <p class="card-text">Bernard Minier</p>
                        <p class="card-text price">14,02 €</p>
                    </div>
                </div>
                <div class="my_card">
                    <img class="card-img-top" src="{{ asset('images/book.png') }}" alt="Obalka knihy Noc">
                    <div class="card-body justify-center">
                        <h5 class="card-title">Noc</h5>
                        <p class="card-text">Bernard Minier</p>
                        <p class="card-text price">14,02 €</p>
                    </div>
                </div>
                <div class="my_card">
                    <img class="card-img-top" src="{{ asset('images/book.png') }}" alt="Obalka knihy Noc">
                    <div class="card-body justify-center">
                        <h5 class="card-title">Noc</h5>
                        <p class="card-text">Bernard Minier</p>
                        <p class="card-text price">14,02 €</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection