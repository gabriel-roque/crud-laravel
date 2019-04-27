@extends('crud.templetes.template_Dashboard')

@section('conteudo')


    <section class=" section-components pb-0" id="section-components">
        <div class="container">
            <table class="table table-hover table-dark">
                <h4><strong>DASHBOARD <i class="ni ni-archive-2"></i></strong></h4><hr>
                <thead>
                <tr class="bg-primary">
                    <th scope="col"></th>
                    <th scope="col">Nome</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Carga H.</th>
                    <th scope="col">Contagem</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>

                <tbody>
                    @foreach ($clientes as $cliente)

                        <tr>
                            <th scope="row">{{$cliente->id}}</th>
                            <td>{{$cliente->nome}}</td>
                            <td>{{$cliente->estado}}</td>
                            <td>{{$cliente->carga}}</td>
                            <td>{{$loop->index+1}} / {{$loop->count}}</td>
                            <td>{{$cliente->nome_cargo}}</td>
                            <td>
                                <a href="{{url("/crud/edit/$cliente->id")}}"><i class="fas fa-user-edit icon-edit"></i></a>
                                <a href="{{url("/crud/del/$cliente->id")}}"><i class="fas fa-user-minus icon-delete"></i></a>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>

            <a href="{{url('/crud/create')}}">
                <button class="btn btn-icon btn-3 btn-primary" type="button">
                    <span class="btn-inner--icon"><i class="fas fa-ad"></i></span>
                    <span class="btn-inner--text">Adicionar</span>
                </button>
            </a>

        </div>

    </section><hr>

    <div class="container">
        <div class="col">
            {{$clientes->links()}}
        </div>
    </div>
@endsection
