@extends('layouts.Admin')

@section('content')

    <form action="/competence" method="post"
          class="form-inline" role="form">
        {{ csrf_field() }}

        <div class="form-group">

            <label>{{ __('name')}}</label>
            <input type="text" name="name">

            <label>{{ __('xp')}}</label>
            <input type="text" name="xp">

            <label>{{ __('id_skill')}}</label>
            <select name="id_skill">
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

            <th>
                {{ __('skill')}}
            </th>

            <th></th>
        </tr>
        </thead>
        @foreach ($ListSC as $LSC)
            <tbody>

            <tr>

                <td>{{ $LSC->name }}</td>

                <td>{{ $LSC->xp }}</td>

                <td>
                    @foreach($listSkill as $ls)
                        @if($LSC->id_skill == $ls->id)
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

                    <form action="/competence/{{$LSC->id}}" method="post">
                        {{ csrf_field() }}
                        <div>

                            <label> {{ __('Name')}}</label>
                            <input type="text" name="name" value={{$LSC->name }}>

                            <label> {{ __('xp')}}</label>
                            <input type="text" name="xp" value={{$LSC->xp }}>

                            <label>{{ __('skillName')}}</label>
                            <select name="table">
                                @foreach($listSkill as $ls)

                                    @if($LSC->id_skill == $ls->id)
                                        <option value="{{$ls->id}}" selected>{{$ls->nameSkill}}</option>
                                    @endif

                                    @if($LSC->id_skill != $ls->id)
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