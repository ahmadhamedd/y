@extends('front.layouts.master')

@section('content')
<div class="container text-right">
    {!! Form::open(array('files'=>true))!!}
    <div class="form-group">
        <label>عنوان الاعلان</label>
        {{Form::text('title',null,['class'=>'form-control'])}}
    </div>
    <div class="form-group">
        <label> تفاصيل الاعلان</label>
        {{Form::text('text',null,['class'=>'form-control'])}}
    </div>
    <div class="form-group">
        <label>السعر</label>
        {{Form::text('price',null,['class'=>'form-control'])}}
    </div>

    <div class="form-group">
        <label>القسم</label>
        {{Form::select('category_id',$categories,['class'=>'form-control'])}}
    </div>

    <div class="form-group">
        <label>البلد</label>
        {{Form::select('country_id',$countries,['class'=>'form-control'])}}
    </div>

    <div class="form-group text-right">
        <label class="control-label " >الصور</label>
        <div class="col-md-6">
            <input type="file" class="form-control"  name="images[]">
        </div>
    </div>
    <button type="submit"class="btn btn-primary" >Add</button>
    {{Form::close()}}
</div>
@endsection

