@extends('layouts.Admin')

@section('content')
    <div class="container">
        <form action="/xp" method="post"
              class="form-inline" role="form">
            {{ csrf_field() }}

            <div class="form-group">
                <label>{{ __('xp.lvl')}}</label>
                <input type="text" name="lvl">

                <label>{{ __('xp.xp')}}</label>
                <input type="text" name="xps">

                <label>{{ __('xp.dif')}}</label>
                <input type="text" name="dif">


                <label>{{ __('xp.table')}}</label>
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
                    {{ __('xp.lvl')}}
                </th>

                <th>
                    {{ __('xp.xp')}}
                </th>

                <th>
                    {{ __('xp.dif')}}
                </th>

                <th>
                    {{ __('xp.table')}}
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
                                data-toggle="collapse" href="#collapse{{ $LXp->id}}"> {{ __('xp.modify')}}
                        </button>
                    </td>

                </tr>
                <tr id=collapse{{ $LXp->id}} class="collapse">
                    <td colspan="5" align="center">

                        <form action="/xp/{{ $LXp->id}}" method="post">
                            {{ csrf_field() }}
                            <div>


                                <label>{{ __('xp.lvl')}}</label>
                                <input type="text" name="lvl" value={{$LXp->lvl }}>

                                <label>{{ __('xp.xp')}}</label>
                                <input type="text" name="xps" value={{$LXp->xp }}>

                                <label>{{ __('xp.dif')}}</label>
                                <input type="text" name="dif" value={{$LXp->dif }}>


                                <label>{{ __('xp.table')}}</label>
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
                                <button type="submit" class="btn btn-info">{{ __('xp.save')}}</button>
                            </div>
                        </form>
                    </td>
                </tr>
                </tbody>

            @endforeach
        </table>
    </div>
@endsection