@include('student.include')


@if(session('succes'))
     <div class="alert alert-success">{{session('succes')}}</div>
        @endif
        
<section class="home" id="home">
    <div class="home__container container grid">
        <div class="home__img-bg">
            <img src="{{asset('admin/img/'.$product->image)}}" alt="" class="home__img">
        </div>
        <div class="home__social">
            <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                Facebook
            </a>
            <a href="https://twitter.com/" target="_blank" class="home__social-link">
                Twitter
            </a>
            <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                Instagram
            </a>
        </div>
       
        <div class="home__data">
            <h1 class="home__title">NEW WATCH <br> COLLECTIONS B720</h1>
            <p class="home__description">
                Latest arrival of the new imported watches of the B720 series, 
                with a modern and resistant design.
            </p>
            <span class="home__price">{{$product->name}}</span>
            <div class="home__btns">
                <a href="#" class="button button--gray button--small">
                    {{$product->price}}
                </a>
                <button><a class="button home__button" href="{{ url('carts/'.$product->id) }}">add to cart</a></button>
            </div>
     </div> 
    </div>

    
</section>
<!--==================== FEATURED ====================-->