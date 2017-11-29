@extends('layouts.Admin')

@section('content')
    <div class="container">
        <div class="container">
            <form action="/xpTb" method="post"
                  class="form-inline" role="form">
                {{ csrf_field() }}

                <label>{{ __('xpTable.name')}}</label>
                <div class="form-group">
                    <input type="text" class="form-control" name="Skillname">
                </div>

                <button type="submit" class="btn btn-primary">{{ __('xpTable.add')}}</button>
            </form>
            <table class="table">
                <thead>
                <tr class="header">
                    <th>
                        {{ __('xpTable.name')}}
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
                                    data-toggle="collapse" href="#collapse{{ $XpTable->id}}">{{ __('xpTable.modify')}}
                            </button>

                            <a href='/xp/{{ $XpTable->id}}'  class="btn btn-info">{{ __('xpTable.detail')}}</a>
                        </td>

                    </tr>
                    <tr id=collapse{{ $XpTable->id}} class="collapse">
                        <td colspan="2" align="center">

                            <form action="/xpTb/{{ $XpTable->id}}" method="post">
                                {{ csrf_field() }}
                                <div>
                                    {{ __('xpTable.name')}}

                                    <input type="text" name="NameXpTable" value={{$XpTable->name }}>
                                    <button type="submit" class="btn btn-info">{{ __('xpTable.save')}}</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                    </tbody>

                @endforeach
            </table>
        </div>
@endsection