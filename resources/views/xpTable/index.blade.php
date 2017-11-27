@extends('layouts.app')

@section('content')
    <form action="/xpTb" method="post"
          class="form-inline" role="form">
        {{ csrf_field() }}

        <div class="form-group">
            <input type="text" class="form-control" name="Skillname">
        </div>

        <button type="submit" class="btn btn-primary">{{ __('Add')}}</button>
    </form>
    <table class="table">
        <thead>
        <tr class="header">
            <th>
                {{ __('Name')}}
            </th>

            <th></th>
        </tr>
        </thead>
        @foreach ($ListXpTable as $XpTable)
            <tbody>

            <tr>
                <td>{{ $XpTable->name }}</td>

                <td>
                    <button type="button" class="btn btn-info"
                            data-toggle="collapse" href="#collapse{{ $XpTable->id}}">Modifier
                    </button>
                </td>

                <td>
                    <a href='/xp/{{ $XpTable->id}}'>Detail</a>
                </td>
            </tr>
            <tr id=collapse{{ $XpTable->id}} class="collapse">
                <td colspan="3" align="center">

                    <form action="/xpTb/{{ $XpTable->id}}" method="post">
                    {{ csrf_field() }}
                    <div>
                        {{ __('Name')}}

                        <input type="text" name="NameXpTable" value={{$XpTable->name }}>
                        <button type="submit" class="btn btn-info">Sauvegarder</button>
                    </div>
                    </form>
                </td>
            </tr>
            </tbody>

        @endforeach
    </table>
@endsection