@extends('layouts.app')

@section('content')

    <form action="/skill" method="post"
          class="form-inline" role="form">
        {{ csrf_field() }}

        <div class="form-group">
            <label>{{ __('name')}}</label>
            <input type="text" name="name">

            <label>{{ __('xp')}}</label>
            <select name="xp">

                @foreach($listSkill as $ls)
                    <option value="{{$ls->id}}">{{$ls->nameSkill}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">{{ __('Add')}}</button>
    </form>
    <table class="table">
        <thead>
        <tr class="header">

            <th>
                {{ __('name')}}
            </th>

            <th>
                {{ __('xp')}}
            </th>

            <th></th>
        </tr>
        </thead>
        @foreach ($ListSC as $LSC)
            <tbody>

            <tr>

                <td>{{ $LSC->name }}</td>

                <td>
                    @foreach($listSkill as $ls)
                        @if($LSC->id_XpTable == $ls->id)
                            {{$ls->nameSkill}}
                        @endif
                    @endforeach
                </td>

                <td>
                    <button type="button" class="btn btn-info"
                            data-toggle="collapse" href="#collapse{{ $LSC->id}}">Modifier
                    </button>
                </td>

            </tr>
            <tr id=collapse{{ $LSC->id}} class="collapse">
                <td colspan="5" align="center">

                    <form action="/skill/{{$LSC->id}}" method="post">
                        {{ csrf_field() }}
                        <div>

                            <label> {{ __('Name')}}</label>
                            <input type="text" name="dif" value={{$LSC->name }}>

                            <label> {{ __('Name')}}</label>
                            <input type="text" name="dif" value={{$LSC->xp }}>

                            <label>{{ __('skillName')}}</label>
                            <select name="name">
                                @foreach($listSkill as $ls)

                                    @if($LSC->id_skill == $ls->id)
                                        <option value="{{$ls->id}}" selected>{{$ls->nameSkill}}</option>
                                    @endif

                                    @if($LSC->id_XpTable != $ls->id)
                                        <option value="{{$ls->id}}">{{$ls->nameSkill}}</option>
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