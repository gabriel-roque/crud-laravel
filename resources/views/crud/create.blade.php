@extends('crud.templetes.template_Pages')

@section('conteudo')


    <form action="/">
        <div class="form-group">
            <input type="text" class="form-control form-control-alternative" placeholder="Insira seu nome" required>
        </div>

        <div class="form-group">
            <label for="estadoOP">Selecione o estado</label>
            <select class="form-control form-control-alternative" id="estadoOP" required>

                @foreach ($estados as $estado)

                    <option value="{{$estado->sigla}}">{{$estado->sigla}}</option>

                @endforeach

            </select>
        </div>


        <div class="form-group">
            <label for="cargaOP">Selecione a Carga H.</label>
            <select class="form-control form-control-alternative" id="cargaOP" required>

                @foreach ($cargas as $carga)

                    <option value="{{$carga->horas}}">{{$carga->horas}}</option>

                @endforeach

            </select>
        </div>

        <button type="submit" class="btn btn-success">Enviar</button>
        <a href="/">
            <button type="button" class="btn btn-dark">Voltar</button>
        </a>

    </form>




@endsection