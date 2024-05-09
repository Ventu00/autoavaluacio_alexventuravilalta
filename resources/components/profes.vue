<template>
    <div class="profesor-view">
      <h1>Consulta de Autoevaluaciones (Profesor)</h1>
      <div class="form-group">
        <label for="buscar-alumno">Buscar Alumno:</label>
        <input type="text" class="form-control" v-model="nombreAlumno" id="buscar-alumno" placeholder="Ingrese el nombre del alumno">
        <button @click="buscarAlumno" class="btn btn-primary">Buscar</button>
      </div>
      <div v-if="alumnoSeleccionado">
        <h2>Alumno Seleccionado: {{ alumnoSeleccionado.nom }}</h2>
        <div v-for="modulo in alumnoSeleccionado.modulo" :key="modulo.id">
          <h3>{{ modulo.nom }}</h3>
          <div v-for="resultado in modulo.resultados_aprendizaje" :key="resultado.resultado_aprendizaje.id">
            <h4>{{ resultado.resultado_aprendizaje.descripcio }}</h4>
            <ul>
              <li v-for="criterio in resultado.criterios" :key="criterio.id">
                <h5>{{ criterio.descripcio }}</h5>
                <ul>
                  <li v-for="rubrica in criterio.rubricas" :key="rubrica.id">
                    {{ rubrica.descripcio }} - Nota: {{ rubrica.nota }}
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div v-else>
        <p>No se ha encontrado ningún alumno con ese nombre.</p>
      </div>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        nombreAlumno: '',
        alumnoSeleccionado: null,
      };
    },
    methods: {
      async buscarAlumno() {
        try {
          const response = await axios.get(`http://localhost/autoavaluacio_alexventuravilalta/public/api/usuarios/${encodeURIComponent(this.nombreAlumno)}/datos`);
          this.alumnoSeleccionado = response.data[0];
          console.log('Alumno encontrado:', this.alumnoSeleccionado);
        } catch (error) {
          console.error('Error al buscar el alumno:', error);
        }
      },
    },
  };
  </script>
  
  <style scoped>
  /* Estilos CSS específicos para este componente */
  .profesor-view {
    background-color: #343a40;
    color: #ffffff;
    padding: 20px;
  }
  </style>
  