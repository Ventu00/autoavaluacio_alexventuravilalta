<template>
  <div class="autoevaluacion-alumnos">
    <h1>Autoevaluación de Alumnos</h1>
    <!-- Selector de módulos -->
    <div>
      <label for="modulo">Seleccione un módulo:</label>
      <select v-model="selectedModulo" @change="cargarRubricas">
        <option v-for="modulo in modulos" :key="modulo.id" :value="modulo.id">{{ modulo.nom }}</option>
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
        // Obtener el ID del usuario del local storage
        const userId = localStorage.getItem('userId');

        // Realizar la solicitud a la API utilizando el ID del usuario
        const response = await axios.get(`/autoavaluacio_alexventuravilalta/public/api/usuarios/${userId}/modulos`);
        this.modulos = response.data;
      } catch (error) {
        console.error('Error al cargar los módulos:', error);
      }
    },
    async cargarRubricas() {
    if (!this.selectedModulo) return;
    try {
        const response = await axios.get(`/autoavaluacio_alexventuravilalta/public/api/modulos/${this.selectedModulo}/rubricas`);
        this.rubricas = response.data;
    } catch (error) {
        console.error('Error al cargar las rúbricas:', error);
    }
}
,
    async evaluarRubrica(rubricaId) {
      // Implementar la lógica de evaluación aquí
    },
    enviarAutoevaluacion() {
      // Implementar la lógica de envío de autoevaluación aquí
    }
  }
};
</script>

<style scoped>
/* Estilos CSS específicos para este componente */
</style>
