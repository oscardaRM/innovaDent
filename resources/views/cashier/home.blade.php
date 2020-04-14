@extends('layouts.app2')

@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
 <div class="row">
    <div class="col-lg-12">
        <div class="col-lg-2">
           <a href="{{url('/patients/create')}}">
                <div class="widget lazur-bg p-lg text-center">
                    <div class="m-b-md">
                        <i style="margin-bottom:5px;" class="fa fa-user-o fa-4x"></i>
                        <h3 class="font-bold no-margins">
                            Nuevo Paciente
                        </h3>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-2">
            <a href="{{url('/consults/create')}}">
                <div class="widget yellow-bg p-lg text-center">
                    <div class="m-b-md">
                        <i style="margin-bottom:5px;" class="fa fa-stethoscope fa-4x"></i>
                        <h3 class="font-bold no-margins">
                            Nueva Consulta
                        </h3>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-2">
           <a href="{{url('/cashier/cash')}}">
                <div class="widget bblue-bg p-lg text-center">
                    <div class="m-b-md">
                        <i style="margin-bottom:5px;" class="fa fa-money fa-4x"></i>
                        <h3 class="font-bold no-margins">
                            <br>
                            Caja
                        </h3>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-2">
            <a>
                <div class="widget blue2-bg p-lg text-center">
                    <div class="m-b-md">
                        <i style="margin-bottom:5px;" class="fa fa-print fa-4x"></i>
                        <h3 class="font-bold no-margins">
                            <br>
                            Imprimibles
                        </h3>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-2">
           <a href="" target="_blank" id="agenda">
                <div class="widget aqua-bg p-lg text-center">
                    <div class="m-b-md">
                        <i style="margin-bottom:5px;" class="fa fa-book fa-4x"></i>
                        <h3 class="font-bold no-margins">
                            <br> Agenda
                        </h3>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-2">
            <a href="" target="_blank" id="correo">
                <div class="widget blue3-bg p-lg text-center">
                    <div class="m-b-md">
                        <i style="margin-bottom:5px;" class="fa fa-envelope fa-4x"></i>
                        <h3 class="font-bold no-margins">
                            <br> Correo
                        </h3>
                    </div>
                </div>
            </a>
        </div>

        

        


        <!--<div class="col-lg-4">
            <div class="widget navy-bg p-lg text-center">
                    <div class="m-b-md">
                        <i class="fa fa-dollar fa-4x"></i> <span style="font-size:55px;">{{$amountToday}}</span>
                        <h3 class="font-bold no-margins">
                            Corte del dia
                        </h3>
                    </div>
                </div>
        </div>

        <div class="col-lg-4">
            <div class="widget blue-bg p-lg text-center">
                    <div class="m-b-md">
                        <i class="fa fa-dollar fa-4x"></i> <span style="font-size:55px;">{{$amountWeek}}</span>
                        <h3 class="font-bold no-margins">
                            Corte de la semana
                        </h3>
                    </div>
                </div>
        </div>-->

            
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-content">
             <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Consultas de hoy</h2>
                </div>
            </div>
                <div class="table-responsive">
                    <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                        <thead>
                        <tr>
                            <th>N Consulta</th>
                            <th>ID Consulta</th>
                            <th data-hide="phone">Paciente</th>
                            <th data-hide="phone">Costo</th>
                            <th data-hide="phone">Dia y Hora de consulta</th>
                            <th data-hide="phone,tablet" >Doctor</th>
                            <th data-hide="phone">Servicio</th>
                            <!--<th class="text-right">Action</th>-->
                        </tr>
                        </thead>
                        <tbody>
                            @php
                                $c = 0;
                            @endphp
                                @foreach ($consults as $consult)
                                    @php
                                        $c++;
                                    @endphp
                            <tr>
                                <td>
                                    {{$c}} 
                                </td>
                                <td>
                                {{$consult->id}} 
                                </td>
                               
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection

@section('additional_scripts')
    <script src="{{asset('js/cashier/home.js')}}"></script>
@endsection


@extends('saludo')
