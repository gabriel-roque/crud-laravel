@extends('crud.templetes.home')

@section('conteudo')


    <section class="section section-components pb-0" id="section-components">

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
                    <th scope="col">Actions</th>
                </tr>
                </thead>

                <tbody>

                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>
                        <a href="#"><i class="fas fa-user-edit icon-edit"></i></a>
                        <a href="#"><i class="fas fa-user-minus icon-delete"></i></a>
                    </td>
                </tr>


                </tbody>

            </table>

            <button class="btn btn-icon btn-3 btn-primary" type="button">
                <span class="btn-inner--icon"><i class="fas fa-ad"></i></span>
                <span class="btn-inner--text">Adicionar</span>
            </button>

        </div>

    </section>


@endsection