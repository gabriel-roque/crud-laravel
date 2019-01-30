@extends('crud.templetes.template_Pages')

@section('conteudo')


    <form action="{{route('crud.update', $registro->id)}}" method="POST">
        @csrf
        {!! method_field('PUT') !!}

        <div class="form-group">
            <input value="{{$registro->nome}}" type="text" name="nome" class="form-control form-control-alternative" placeholder="Insira seu nome" required>
        </div>

        <div class="form-group">
            <label for="estadoOP">Selecione o estado</label>
            <select name="estado" class="form-control form-control-alternative" id="estadoOP" required>

                <option selected value="{{$registro->estado}}">{{$registro->estado}}</option>
                @foreach ($estados as $estado)

                    <option value="{{$estado->sigla}}">{{$estado->sigla}}</option>

                @endforeach

            </select>
        </div>


        <div class="form-group">
            <label for="cargaOP">Selecione a Carga H.</label>
            <select name="carga" class="form-control form-control-alternative" id="cargaOP" required>

                <option selected value="{{$registro->carga}}">{{$registro->carga}}</option>
                @foreach ($cargas as $carga)

                    <option value="{{$carga->horas}}">{{$carga->horas}}</option>

                @endforeach

            </select>
        </div>

        <button type="submit" class="btn btn-success" value="submit">Atualizar</button>
        <a href="/">
            <button type="button" class="btn btn-dark">Voltar</button>
        </a>

    </form>





@endsection