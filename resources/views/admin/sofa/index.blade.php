@extends('admin.layouts.master')

@section('content')

<p>{!! link_to_route('admin.sofa.create', trans('quickadmin::templates.templates-view_index-add_new') , null, array('class' => 'btn btn-success')) !!}</p>

@if ($sofa->count())
    <div class="portlet box green">
        <div class="portlet-title">
            <div class="caption">{{ trans('quickadmin::templates.templates-view_index-list') }}</div>
        </div>
        <div class="portlet-body">
            <table class="table table-striped table-hover table-responsive datatable" id="datatable">
                <thead>
                    <tr>
                        <th>
                            {!! Form::checkbox('delete_all',1,false,['class' => 'mass']) !!}
                        </th>
                        <th>Гарантия</th>
<th>Страна-производитель</th>
<th>Артикул</th>
<th>Механизм</th>
<th>Материал обивки</th>
<th>Материал каркаса</th>
<th>Описание</th>
<th>Ширина</th>
<th>Высота</th>
<th>Глубина</th>
<th>Длина</th>
<th>Ширина</th>
<th>Купили</th>
<th>Заглавие</th>
<th>Цена</th>

                        <th>&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($sofa as $row)
                        <tr>
                            <td>
                                {!! Form::checkbox('del-'.$row->id,1,false,['class' => 'single','data-id'=> $row->id]) !!}
                            </td>
                            <td>{{ $row->guarantee }}</td>
<td>{{ $row->country_id }}</td>
<td>{{ $row->code }}</td>
<td>{{ $row->mechanism }}</td>
<td>{{ $row->material }}</td>
<td>{{ $row->frame_material }}</td>
<td>{{ $row->description }}</td>
<td>{{ $row->width }}</td>
<td>{{ $row->heigth }}</td>
<td>{{ $row->depth }}</td>
<td>{{ $row->length_b }}</td>
<td>{{ $row->width_b }}</td>
<td>{{ $row->bought }}</td>
<td>{{ $row->title }}</td>
<td>{{ $row->price }}</td>

                            <td>
                                {!! link_to_route('admin.sofa.edit', trans('quickadmin::templates.templates-view_index-edit'), array($row->id), array('class' => 'btn btn-xs btn-info')) !!}
                                {!! Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'onsubmit' => "return confirm('".trans("quickadmin::templates.templates-view_index-are_you_sure")."');",  'route' => array('admin.sofa.destroy', $row->id))) !!}
                                {!! Form::submit(trans('quickadmin::templates.templates-view_index-delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col-xs-12">
                    <button class="btn btn-danger" id="delete">
                        {{ trans('quickadmin::templates.templates-view_index-delete_checked') }}
                    </button>
                </div>
            </div>
            {!! Form::open(['route' => 'admin.sofa.massDelete', 'method' => 'post', 'id' => 'massDelete']) !!}
                <input type="hidden" id="send" name="toDelete">
            {!! Form::close() !!}
        </div>
	</div>
@else
    {{ trans('quickadmin::templates.templates-view_index-no_entries_found') }}
@endif

@endsection

@section('javascript')
    <script>
        $(document).ready(function () {
            $('#delete').click(function () {
                if (window.confirm('{{ trans('quickadmin::templates.templates-view_index-are_you_sure') }}')) {
                    var send = $('#send');
                    var mass = $('.mass').is(":checked");
                    if (mass == true) {
                        send.val('mass');
                    } else {
                        var toDelete = [];
                        $('.single').each(function () {
                            if ($(this).is(":checked")) {
                                toDelete.push($(this).data('id'));
                            }
                        });
                        send.val(JSON.stringify(toDelete));
                    }
                    $('#massDelete').submit();
                }
            });
        });
    </script>
@stop