@extends('layouts.Admin')

@section('content')

    <form action="/skill" method="post"
          class="form-inline" role="form">
        {{ csrf_field() }}

        <div class="form-group">
            <label>{{ __('name')}}</label>
            <input type="text" name="name">

            <label>{{ __('name')}}</label>

            <select name="table">
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
                {{ __('name')}}
            </th>

            <th></th>
        </tr>
        </thead>
        @foreach ($ListSkill as $LSkill)
            <tbody>

            <tr>

                <td>{{ $LSkill->nameSkill }}</td>

                <td>
                    @foreach($ListXpTable as $LXpTable)
                        @if($LSkill->id_XpTable == $LXpTable->id)
                            {{$LXpTable->name}}
                        @endif
                    @endforeach
                </td>

                <td>
                    <button type="button" class="btn btn-info"
                            data-toggle="collapse" href="#collapse{{ $LSkill->id}}">Modifier
                    </button>
                </td>

                <td>
                    <a href='/competence/{{ $LSkill->id}}'>Detail</a>
                </td>
            </tr>
            <tr id=collapse{{ $LSkill->id}} class="collapse">
                <td colspan="4" align="center">

                    <form action="/skill/{{ $LSkill->id}}" method="post">
                        {{ csrf_field() }}
                        <div>

                            <label> {{ __('Name')}}</label>
                            <input type="text" name="name" value={{$LSkill->nameSkill }}>


                            <label>{{ __('skillName')}}</label>
                            <select name="table">
                                @foreach($ListXpTable as $LXpTable)

                                    @if($LSkill->id_XpTable == $LXpTable->id)
                                        <option value="{{$LXpTable->id}}" selected>{{$LXpTable->name}}</option>
                                    @endif

                                    @if($LSkill->id_XpTable != $LXpTable->id)
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