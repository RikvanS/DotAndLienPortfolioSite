@extends('layouts.app')

@section('content')
<section class="hero">
        <div class="hero-inner">
        <h1 class="violet">Dot & Lien</h1>
        <h2 class="violet">Dotwork Illustrations</h2>
        <a href="#social-footer" class="button violet">Contact me!</a>
        </div>
        </section>
        <h1 class="titleheader">Dot&Lien</h1>

        <div class="image-gallery">
            {{-- <div class="column"> --}}
                <img src="../images/Leop1.JPG" alt="" class="gallery-image">
                <img src="../images/Leop2.JPG" alt="" class="gallery-image">
                <img src="../images/Leop3.JPG" alt="" class="gallery-image">
                <img src="../images/Leop4.JPG" alt="" class="gallery-image">
                <img src="../images/Leop5.JPG" alt="" class="gallery-image">
                <img src="../images/Leop6.JPG" alt="" class="gallery-image">
            {{-- </div> --}}

            {{-- <div class="column"> --}}
                <img src="../images/Tig1.JPG" alt="" class="gallery-image">
                <img src="../images/Tig2.JPG" alt="" class="gallery-image">
                <img src="../images/Tig3.JPG" alt="" class="gallery-image">
                <img src="../images/Tig4.JPG" alt="" class="gallery-image">
                <img src="../images/Tig5.JPG" alt="" class="gallery-image">
                <img src="../images/Tig6.JPG" alt="" class="gallery-image">
            {{-- </div> --}}
        </div>

        <div id="social-footer">
                <footer>
                    <h3>Find me on:</h3>
                    <a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/dot.and.lien/"><img src="../images/instagram.png" alt="Instagram" class="footer-link"></a>
                    <a target="_blank" rel="noopener noreferrer" href="https://nl.pinterest.com/dotandlien/my-work-+-illustrations/"><img src="../images/pinterest.png" alt="Pinterest" class="footer-link"></a>
                </footer>
                    </div>
@endsection