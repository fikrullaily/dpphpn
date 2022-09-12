@extends('template.base-master')
@section('title','Detail Pesan')
@section('content')
<!-- Page Heading -->

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Detail Pesan</h1>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Form - Detail Pesan </h6>
    </div>
    <div class="card-body row">
        <div class="col-xl-8 col-lg-7">
            @foreach ($form as $key => $value)
            <div class="form-group">
                <label for="">{{ $value['label'] }}</label>
                @if($value['type'] == 'textarea')
                <textarea class="form-control" name="{{ $value['field'] }}" id="{{ $value['field'] }}" class="form-control @error($value['field']) is-invalid @enderror " readonly>
                {{ $data[$value['field']] }}
                </textarea>
                @elseif($value['type'] == 'dropdown')
                <select name="{{ $value['field'] }}" class="form-control @error($value['field']) is-invalid @enderror ">
                    @foreach ($value['source'] as $key => $source)
                        <option value="{{ $key }}">{{ $source }}</option>
                    @endforeach
                </select>
                @else
                <input name="{{ $value['field'] }}" type="{{ $value['type'] }}" class="form-control @error($value['field']) is-invalid @enderror " id="{{ $value['field'] }}" value="{{ $data[$value['field']] }}" autocomplete="off" readonly>
                @endif
            </div>
            @endforeach
            <a href="<?php echo url('/master-request') ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
