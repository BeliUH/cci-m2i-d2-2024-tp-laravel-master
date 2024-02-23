@extends('layouts.app')

@section('title', 'Membres')

@section('content')
    <h1>Membres</h1>

    <div>
        {{ $membres->links() }}
    </div>

    <table class="table">
        <tr>
            <th>{{ __("name") }}</th>
            <th>{{ __("Provider name", [], 'fr') }}</th>
        </tr>
        @foreach($membres as $membre)
            <tr>
                <td>{{ $membre->name }}</td>
                <td>{{ $membre->provider_name }}</td>
                <td>
                    <form action="{{ route('membres.delete', $membre) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger d-block w-100" type="submit">{{ __("Delete") }}</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
