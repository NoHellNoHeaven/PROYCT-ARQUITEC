@extends('layout')

@section('title','Hospital Melipilla.')




    <div class="main">
        <div class="emerg-form">
            <form action="/register-emergency" method="POST">
            <h1>Registro de Emergencia</h1>
            
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
                    
           
            <div class="paciente">
                <h3>Información del Paciente</h3>
                <label for="name">Nombre del Paciente:</label>
                <input type="text" id="name" name="name" required>

                <div class="datos">
                    <span>
                        <label for="edad">Edad:</label>
                        <input type="number" id="edad" name="edad" required>
                    </span>
                    <span>
                        <label for="genero">Género:</label>
                        <select id="genero" name="genero" required>
                        <option value="masc">Masculino</option>
                        <option value="fem">Femenino</option>
                        <option value="otro">Otro</option>
                        </select>
                    </span>
                    <span>
                        <label for="estado">Estado:</label>
                        <select id="estado" name="estado" required>
                        <option value="estable">Estable</option>
                        <option value="urgente">Urgente</option>
                        <option value="grave">Grave</option>
                        <option value="critico">Crítico</option>
                        <option value="comatoso">Comatoso</option>
                        <option value="desconocido">Desconocido</option>
                        </select>
                     </span>
                </div>
            </div>
                
                

              
           

            
          
               
            <button type="submit">Registrar Emergencia</button>
            </form>
        </div>
    </div>


