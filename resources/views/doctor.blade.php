@extends('layout')

@section('title','Hospital Melipilla.')

<div class="main">

    <div class="buscar">
        <span>
            <input type="search" name="buscar" id="buscar" placeholder="Buscar...">
            <button type="submit" class="btn"> Buscar.</button>
        </span>
            <label for="profesional">Selecciona un profesional:</label>
            <select id="profesional" name="profesional">
                <option value="todo">Todo</option>
                <option value="medicos_cuidados_criticos">Médicos de Cuidados Críticos</option>
                <option value="medicos_traumatologos">Médicos Traumatólogos</option>
                <option value="cirujanos_emergencia">Cirujanos de Emergencia</option>
                <option value="medicos_anestesistas">Médicos Anestesistas</option>
                <option value="enfermeras_emergencia">Enfermeras de Emergencia</option>
                <option value="medicos_especialistas">Médicos Especialistas</option>
            </select>
    </div>
    <div class="contenedor">
        <div class="doctores">
            <div class="doctor">
                <img src="{{ asset('img/doctor-foto.jpg') }}" alt="">
                <div class="doc-datos">
                    <h4>Daddy Yankee.</h4>
                    <h6>Traumatologo.</h6>
                    <label for="" class="disponibilidad">Disponible</label>
                </div>
            </div>
            
        </div>
    </div>
</div>