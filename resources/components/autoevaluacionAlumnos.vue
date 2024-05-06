<template>
    <div class="autoevaluacion-alumnos">
      <h1>Autoevaluación de Alumnos</h1>
      <!-- Selector de módulos -->
      <div>
        <label for="modulo">Seleccione un módulo:</label>
        <select v-model="selectedModulo" @change="cargarRubricas">
          <option v-for="modulo in modulos" :key="modulo.id" :value="modulo.id">{{ modulo.nombre }}</option>
        </select>
      </div>
  
      <!-- Lista de resultados de aprendizaje -->
      <div v-if="rubricas.length > 0">
        <h2>Rúbrica de Resultados de Aprendizaje</h2>
        <ul>
          <li v-for="rubrica in rubricas" :key="rubrica.id">
            <h3>{{ rubrica.nombre }}</h3>
            <p>{{ rubrica.descripcion }}</p>
          </li>
        </ul>
      </div>
      <div v-else>
        <p>No hay rúbricas disponibles para este módulo.</p>
      </div>
  
      <!-- Botón de enviar autoevaluación -->
      <button @click="enviarAutoevaluacion">Enviar Autoevaluación</button>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        selectedModulo: null,
        modulos: [], // Aquí se cargarán los módulos disponibles para el alumno
        rubricas: [], // Aquí se cargarán las rúbricas del módulo seleccionado
      };
    },
    mounted() {
      this.cargarModulos();
    },
    methods: {
      async cargarModulos() {
        try {
          const response = await axios.get('/api/modulos'); // Cambia la ruta según la API de tu backend
          this.modulos = response.data;
        } catch (error) {
          console.error('Error al cargar los módulos:', error);
        }
      },
      async cargarRubricas() {
        if (!this.selectedModulo) return;
        try {
          const response = await axios.get(`/api/modulos/${this.selectedModulo}/rubricas`); // Cambia la ruta según la API de tu backend
          this.rubricas = response.data;
        } catch (error) {
          console.error('Error al cargar las rúbricas:', error);
        }
      },
      enviarAutoevaluacion() {
        // Aquí puedes implementar la lógica para enviar la autoevaluación al servidor
      }
    }
  };
  </script>
  
  <style scoped>
  /* Estilos CSS específicos para este componente */
  </style>
  