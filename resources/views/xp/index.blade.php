@extends('layouts.app')

@section('content')

    <form action="/xp" method="post"
          class="form-inline" role="form">
        {{ csrf_field() }}

        <div class="form-group">
            <label>{{ __('lvl')}}</label>
            <input type="text" name="lvl">

            <label>{{ __('xps')}}</label>
            <input type="text" name="xps">

            <label>{{ __('dif')}}</label>
            <input type="text" name="dif">


            <label>{{ __('name')}}</label>
            <select name="name">
                @foreach($ListXpTable as $LXpTable)
                    <option value="{{$LXpTable->id}}">{{$LXpTable->name}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">{{ __('Add')}}</button>
    </form>
    <table class="table">
        <thead>
        <tr class="header">
            <th>
                {{ __('lvl')}}
            </th>

            <th>
                {{ __('xps')}}
            </th>

            <th>
                {{ __('dif')}}
            </th>

            <th>
                {{ __('name')}}
            </th>

            <th></th>
        </tr>
        </thead>
        @foreach ($ListXp as $LXp)
            <tbody>

            <tr>
                <td>{{ $LXp->lvl }}</td>

                <td>{{ $LXp->xp }}</td>

                <td>{{ $LXp->dif }}</td>

                <td>
                    @foreach($ListXpTable as $LXpTable)
                        @if($LXp->id_XpTable == $LXpTable->id)
                            {{$LXpTable->name}}
                        @endif
                    @endforeach
                </td>

                <td>
                    <button type="button" class="btn btn-info"
                            data-toggle="collapse" href="#collapse{{ $LXp->id}}">Modifier
                    </button>
                </td>

            </tr>
            <tr id=collapse{{ $LXp->id}} class="collapse">
                <td colspan="5" align="center">

                    <form action="/xp/{{ $LXp->id}}" method="post">
                        {{ csrf_field() }}
                        <div>
                            {{ __('Name')}}

                            <label>{{ __('lvl')}}</label>
                            <input type="text" name="lvl" value={{$LXp->lvl }}>

                            <label>{{ __('xps')}}</label>
                            <input type="text" name="xps" value={{$LXp->xp }}>

                            <label>{{ __('dif')}}</label>
                            <input type="text" name="dif" value={{$LXp->dif }}>


                            <label>{{ __('name')}}</label>
                            <select name="name">
                                @foreach($ListXpTable as $LXpTable)

                                    @if($LXp->id_XpTable == $LXpTable->id)
                                        <option value="{{$LXpTable->id}}" selected>{{$LXpTable->name}}</option>
                                    @endif

                                    @if($LXp->id_XpTable != $LXpTable->id)
                                        <option value="{{$LXpTable->id}}">{{$LXpTable->name}}</option>
                                    @endif


                                @endforeach
                            </select>
                            <button type="submit" class="btn btn-info">Sauvegarder</button>
                        </div>
                    </form>
                </td>
            </tr>
            </tbody>

        @endforeach
    </table>
@endsection