@extends('layouts.app')


@section('content')
    <div class="container">
        <form action="/show/{{$listId}}" method="post"
              class="form-inline" role="form">
            {{ csrf_field() }}

            <div class="form-group">

                <label>{{ __('lvl')}}</label>
                <input type="text" name="lvl">

                <label>{{ __('xp')}}</label>
                <input type="text" name="xp">
            </div>

            <button type="submit" class="btn btn-primary">{{ __('Calculator')}}</button>

            @if(Session::has('erreurForm'))
                {{ (int)Session::get('erreurForm') }}
            @endif
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
                        @if(Session::has('calculateur'))
                            {{ (int)Session::get('calculateur') }}


                        @endif
                    </td>
                </tr>
                </tbody>
            @endforeach

        </table>
    </div>
@endsection