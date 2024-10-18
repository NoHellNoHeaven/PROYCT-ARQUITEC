@extends('layout')

@section('title','Hospital Melipilla.')

<div class="main">

    
    <div class="cont-registro">
        <h2>Registro Emergencias.</h2>
        <div class="descripcion">
            <h3>Detalles de la Emergencia</h3>
            <input type="text" id="detalle" name="detalle" required>
            <div class="datos">
            <span>
            </select>
                <label for="cantidad">N° Pacientes:</label>
                <input type="number" id="cantidad" name="cantidad" required>
            </span>
            <span>
                <label for="prioridad">Prioridad:</label>
                <select id="prioridad" name="prioridad" required>
                    <option value="alta">Alta</option>
                    <option value="media">Media</option>
                    <option value="baja">Baja</option>
                </select>
            </span>
        </div>
    </div>
</div>