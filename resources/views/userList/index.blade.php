@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr class="header">

                <th>
                    {{ __('calculator.name')}}
                </th>

                <th>
                    {{ __('calculator.competence')}}
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
                        <a href='/calculator/{{ $LSkill->id}}/{{ $LSkill->id_XpTable}}' class="btn btn-info">{{ __('calculator.detail')}}</a>
                    </td>
                </tr>
                </tbody>

            @endforeach
        </table>
    </div>
@endsection