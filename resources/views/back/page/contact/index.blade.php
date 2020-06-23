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
            <th>{{ __('contact.No') }}</th>
            <th>{{ __('contact.Name') }}</th>
            <th>{{ __('contact.Content') }}</th>
            <th width="280px">{{ __('contact.Action') }}</th>
        </tr>
        @foreach ($contacts as $key => $contact)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->content }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('contacts.edit',$contact->id) }}">{{ __('contact.Edit') }}</a>
                {!! Form::open(['method' => 'DELETE','route' => ['contacts.destroy',
                $contact->id],'style'=>'display:inline']) !!}
                <button class="btn btn-danger" type="submit">{{ __('contact.Delete') }}</button>
                {{-- {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} --}}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>
    {!! $contacts->render() !!}
</div>
@endsection
