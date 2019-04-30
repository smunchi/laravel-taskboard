@extends('admin.master',['menu'=>'card_price_setting'])
@section('title',__('Admin Setting'))
@section('content')
    @include('admin.widget.page-title',['title' => __('Admin Setting')])
    <div class="main-content-inner">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        {{Form::open(['route'=>'save-admin-settings'])}}
                            <div class="row">
                                    <div class="col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label">Todo Label</label>
                                            <input class="form-control" type="text" name="todo_label" value="{{ @old('eur_card_price', isset($adm_setting['todo_label']) ? $adm_setting['todo_label'] : '') }}" placeholder="Type todo label">
                                        </div>
                                    </div>
                            </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label class="form-label">In progress lanel</label>
                                    <input type="text" class="form-control" name="inprogress_label" value="{{ @old('inprogress_label', isset($adm_setting['inprogress_label']) ? $adm_setting['inprogress_label'] : '') }}" placeholder="Type in progress label">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label class="form-label">Done lanel</label>
                                    <input type="text" class="form-control" name="done_label" value="{{ @old('done_label', isset($adm_setting['done_label']) ? $adm_setting['done_label'] : '') }}" placeholder="Type done label">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <button type="submit" class="btn btn-info">{{__('Update')}}</button>
                        </div>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')

@endsection