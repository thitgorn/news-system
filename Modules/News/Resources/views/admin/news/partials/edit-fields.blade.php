<div class="box-body">
    {!! Form::normalInput('author_name','author name',$errors,$news) !!}

    {!! Form::normalInput('category','category',$errors,$news) !!}

    {!! Form::normalInput('emergency_level','emergency level',$errors,$news) !!}

    {!! Form::normalTextarea('body','body',$errors,$news) !!}
</div>
