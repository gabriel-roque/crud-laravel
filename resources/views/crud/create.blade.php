@extends('crud.templetes.template_Pages')

@section('conteudo')

    <form  action="{{route('crud.store')}}" method="POST">
        @csrf
        <div class="form-group {{$errors->has('nome') ? 'has-danger' : ' '}}">
            <input type="text" name="nome" class="form-control form-control-alternative
            {{$errors->has('nome') ? 'is-invalid' : ' '}}" placeholder="Insira seu nome">
            <div class="invalid-feedback">
                {{$errors->first('nome')}}
            </div>
        </div>


        <div class="form-group}}">
            <label for="estadoOP">Selecione o estado</label>
            <select name="estado" class="form-control form-control-alternative" id="estadoOP">
                @foreach ($estados as $estado)
                    <option value="{{$estado->sigla}}">{{$estado->sigla}}</option>
                @endforeach
            </select>
            <div class="invalid-feedback">
                {{$errors->first('estado')}}
            </div>
        </div>


        <div class="form-group">
            <label for="cargaOP">Selecione a Carga H.</label>
            <select name="carga" class="form-control form-control-alternative" id="cargaOP">
                @foreach ($cargas as $carga)
                    <option value="{{$carga->horas}}">{{$carga->horas}}</option>
                @endforeach
            </select>
            <div class="invalid-feedback">
                {{$errors->first('carga')}}
            </div>
        </div>

        <div class="form-group">
            <label for="cargoOP">Selecione o Cargo do Cliente</label>
            <select name="cargo_id" class="form-control form-control-alternative" id="cargoOP">
                @foreach ($cargos as $cargo)
                    <option value="{{$cargo->id}}">{{$cargo->nome_cargo}}</option>
                @endforeach
            </select>
            <div class="invalid-feedback">
                {{$errors->first('cargo')}}
            </div>
        </div>

        <button type="submit" class="btn btn-success" value="submit">Enviar</button>
        <a href="/"><button type="button" class="btn btn-dark">Voltar</button></a>
    </form>

@endsection