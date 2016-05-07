<div class="form-group">
    {!! Form::label('code', 'Артикл', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('code', old('code'), array('class'=>'form-control')) !!}
    </div>
    {!! Form::label('photo', 'Картинка*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-9">
        <div class="col-sm-5">
            {!! Form::file('photo') !!}
            {!! Form::hidden('photo_w', 4096) !!}
            {!! Form::hidden('photo_h', 4096) !!}
        </div>
    </div>
        <div class="col-sm-1">
            <a href="#" class="rem btn btn-danger"><i class="fa fa-minus"></i></a>
        </div>
</div>