@extends('back.layout.master')
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="col-md-12 table-responsive-lg">
    <table class="table table-bordered">
        <tr>
            <th>{{ __('setting.No') }}</th>
            <th>{{ __('setting.Name') }}</th>
            <th width="280px">{{ __('setting.Action') }}</th>
        </tr>
        @foreach ($settings as $key => $setting)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $setting->name }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('setting.edit',$setting->id) }}">{{ __('setting.Edit') }}</a>
                {!! Form::open(['method' => 'DELETE','route' => ['setting.destroy',
                $setting->id],'style'=>'display:inline']) !!}
                <button class="btn btn-danger" type="submit">{{ __('setting.Delete') }}</button>
                {{-- {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} --}}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>
    {!! $settings->render() !!}
</div>
@endsection
