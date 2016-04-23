@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-10 col-sm-offset-2">
        <h1>{{ trans('quickadmin::templates.templates-view_edit-edit') }}</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
        	</div>
        @endif
    </div>
</div>

{!! Form::model($armchair, array('class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array('admin.armchair.update', $armchair->id))) !!}

<div class="form-group">
    {!! Form::label('title', 'Заглавие', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('title', old('title',$armchair->title), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('code', 'Артикл*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('code', old('code',$armchair->code), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('country', 'Страна', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('country', old('country',$armchair->country), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('material_facade', 'Материал фасада', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('material_facade', old('material_facade',$armchair->material_facade), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('frame_material', 'Материал корпуса', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('frame_material', old('frame_material',$armchair->frame_material), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('color', 'Цвет', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('color', old('color',$armchair->color), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('width', 'Ширина*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('width', old('width',$armchair->width), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('height', 'Высота*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('height', old('height',$armchair->height), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('depth', 'Глубина*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('depth', old('depth',$armchair->depth), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('bought', 'Купили', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('bought', old('bought',$armchair->bought), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('price', 'Цена*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('price', old('price',$armchair->price), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route('admin.armchair.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection