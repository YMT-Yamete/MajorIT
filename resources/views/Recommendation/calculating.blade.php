@extends('Layout.layout')
<link rel="stylesheet" href="{{ asset('css/calculating_anim.css') }}">
<script>
    function pageRedirect() {
        var delay = 3000;
        document.getElementById("message").innerHTML = "Calculating Your Result ...";
        setTimeout(function() {
            window.location = 'results/' + {{ session()->get('recommendation_id') }};
        }, delay);

    }
    window.onload = function() {
        pageRedirect();
    };
</script>
@section('content')
    <div class="container">
        <div class="d-flex align-items-center justify-content-center" style="height: 80vh">
            <div>
                <section class="talign-center">
                    <div class="spinner icon-spinner-3" aria-hidden="true"></div>
                    <div>
                        <footer class="talign-center">
                            <h4 id="message">Calculating Your Result ...</h4>
                        </footer>
                    </div>
                </section>
            </div>
        </div>
        <div class="starHr">
            <span class="star">
                ✢
            </span>
        </div>
    </div>
@endsection
