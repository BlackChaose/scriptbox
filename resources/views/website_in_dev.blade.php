@extends('layouts.app')
@section('title')
    Сайт в разработке
@endsection
@section('content')

    <div class="container">
        <div class="row justify-content-center p-5 m-5">
            <h2>Сайт в разработке</h2>
        </div>
        {{--        <div class="row justify-content-center">--}}
        {{--                            <iframe width="560" height="315" src="https://www.youtube.com/embed/H_iaFHRmEDM" frameborder="0"--}}
        {{--                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"--}}
        {{--                        allowfullscreen></iframe>--}}

        {{--        </div>--}}
        <div class="row justify-content-center p-5 m-5">
            <div id="player"></div>
        </div>
        <script>
            var tag = document.createElement('script');

            tag.src = "https://www.youtube.com/iframe_api";
            var firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
            var player;

            function onYouTubeIframeAPIReady() {
                player = new YT.Player('player', {
                    height: '315',
                    width: '560',
                    videoId: 'H_iaFHRmEDM',
                    events: {
                        'onReady': onPlayerReady,
                        'onStateChange': onPlayerStateChange
                    }
                });
            }

            function onPlayerReady(event) {
                event.target.playVideo();
            }

            var done = false;

            function onPlayerStateChange(event) {
                if (event.data == YT.PlayerState.PLAYING && !done) {
                    setTimeout(stopVideo, 18000);
                    done = true;
                }
            }

            function stopVideo() {
                player.stopVideo();
            }
        </script>
    </div>
@endsection
