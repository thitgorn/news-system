<style>
    .time{
        background: #0b58a2;
        color: lightgrey;
    }
    .content {
        margin: 10px;
        background: #00acd6;
    }
</style>
@extends ('layouts.master')

@section('content')
    <div class="container">
    @if(count($news) > 0)
        @foreach($news as $new)
                <div class="row content">
                    <h3 class="time col-md-12">{{$new->updated_at}}</h3>
                    {{--author news--}}
                    <div class="col-md-3">
                        <h1>
                            {{ $new->author_name }}
                        </h1>
                    </div>
                    {{--category--}}
                    <div class="col-md-3">
                        <div>
                            {{ $new->category }}
                        </div>
                    </div>
                    {{--body news--}}
                    <div class="col-md-3">
                        <div id="news-body-{{ $new->id }}"></div>
                        <?php echo "<script>
                            document.getElementById('news-body-$new->id').innerHTML = '<?php {$new->body}';
                        </script>" ?>
                    </div>
                    <div class="col-md-3">
                        <div>{{$new->emergency_level}}</div>
                    </div>
                </div>
        @endforeach
    @endif
    </div>
@endsection