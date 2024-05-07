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
          <button @click="evaluarRubrica(rubrica.id)">Evaluar</button>
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
      modulos: [], // Aquí se cargarán los módulos del usuario
      rubricas: [], // Aquí se cargarán las rúbricas del módulo seleccionado
    };
  },
  mounted() {
    this.cargarModulos();
  },
  methods: {
    async cargarModulos() {
      try {
        // Cambiando la ruta para obtener los módulos del usuario
        const response = await axios.get(`/usuari/${this.userId}/moduls`);
        this.modulos = response.data;
      } catch (error) {
        console.error('Error al cargar los módulos:', error);
      }
    },
    async cargarRubricas() {
      if (!this.selectedModulo) return;
      try {
        // Cambiando la ruta para obtener las rúbricas por módulo
        const response = await axios.get(`/moduls/${this.selectedModulo}/resultats`);
        this.rubricas = response.data;
      } catch (error) {
        console.error('Error al cargar las rúbricas:', error);
      }
    },
    async evaluarRubrica(rubricaId) {
      // Implementa la lógica de evaluación aquí
    },
    enviarAutoevaluacion() {
      // Implementa la lógica de envío de autoevaluación aquí
    }
  },
  computed: {
    userId() {
      // Aquí obtén el ID del usuario autenticado
      // Puedes obtenerlo de tu sistema de autenticación (por ejemplo, Vuex)
      // o pasarlo como una propiedad si se encuentra en la URL o en el almacenamiento local.
      return 1; // Ejemplo: retorna el ID 1
    }
  }
};
</script>

<style scoped>
/* Estilos CSS específicos para este componente */
</style>
