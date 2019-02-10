@extends('crud.templetes.template_Pages')

@section('conteudo')


    <form action="{{route('crud.update', $registro->id)}}" method="POST">
        @csrf
        {!! method_field('PUT') !!}

        <div class="form-group {{$errors->has('nome') ? 'has-danger' : ' '}}">
            <input value="{{$registro->nome}}" type="text" name="nome"
                   class="form-control form-control-alternative
                    {{$errors->has('nome') ? 'is-invalid' : ' '}}" placeholder="Insira seu nome">
        </div>

        <div class="form-group">
            <label for="estadoOP">Selecione o estado</label>
            <select name="estado" class="form-control form-control-alternative" id="estadoOP">
                @foreach ($estados as $estado)
                    @if($estado->sigla == $registro->estado)
                        <option value="{{$estado->sigla}}" selected>{{$estado->sigla}}</option>
                    @else
                        <option value="{{$estado->sigla}}">{{$estado->sigla}}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="cargaOP">Selecione a Carga H.</label>
            <select name="carga" class="form-control form-control-alternative" id="cargaOP">
                @foreach ($cargas as $carga)
                    @if($carga->horas == $registro->carga)
                        <option value="{{$carga->horas}}" selected>{{$carga->horas}}</option>
                    @else
                        <option value="{{$carga->horas}}">{{$carga->horas}}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="cargoOP">Selecione o Cargo do Cliente</label>
            <select name="cargo_id" class="form-control form-control-alternative" id="cargoOP">
                @foreach ($cargos as $cargo)
                    @if($cargo->id == $registro->cargo_id)
                        <option value="{{$cargo->id}}" selected>{{$cargo->nome_cargo}}</option>
                    @else
                        <option value="{{$cargo->id}}">{{$cargo->nome_cargo}}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success" value="submit">Atualizar</button>
        <a href="/"><button type="button" class="btn btn-dark">Voltar</button></a>

    </form>

@endsection