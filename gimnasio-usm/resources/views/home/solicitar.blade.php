@extends('layouts.menu')
@section('main-content')
    <div class="row">
        <div class="col">
            <h3>Alumnos</h3>
        </div>
    </div>
    <div class="row">
        {{-- tabla --}}
        <div class="col">
            <table class="table table-border table-striped table-hover">
                <thead>
                    <tr>
                        <th>Rut</th>
                        <th>Alumno</th>
                        <th>Cuenta Activa</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tr>
                    <td>20672906-6</td>
                    <td>Dante Catalán</td>
                    <td>Si</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-info">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-warning">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-danger">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/53cd2d050b.js" crossorigin="anonymous"></script>