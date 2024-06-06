<template>
  <div class="autoevaluacion-alumnos">
    <h1>Autoevaluación de Alumnos</h1>
    <!-- Select módulos -->
    <div class="form-group">
      <label for="modulo">Seleccione un módulo:</label>
      <select class="form-control" v-model="selectedModulo" @change="cargarResultats">
        <option v-for="modulo in modulos" :key="modulo.id" :value="modulo.id">{{ modulo.nom }}</option>
      </select>
    </div>
<br/>

    <!-- Lista de resultados de aprendizaje -->
    <div v-if="resultatsap.length > 0">
      <h2>Rúbrica de Resultados de Aprendizaje</h2>
      <ul class="list-group">
        <li v-for="resultatsa in resultatsap" :key="resultatsa.id" class="list-group-item">
          <h3>{{ resultatsa.nombre }}</h3>
          <p>{{ resultatsa.descripcio }}</p>
          <!-- Lista de criterios de evaluación -->
          <ul v-if="resultatsa.criterisAvaluacio && resultatsa.criterisAvaluacio.length > 0" class="list-group">
            <li v-for="criteri in resultatsa.criterisAvaluacio" :key="criteri.id" class="list-group-item">
              <h4>{{ criteri.descripcio }}</h4>
              <!-- Lista de rubricas -->
              <ul v-if="criteri.rubriquess && criteri.rubriquess.length > 0" class="list-group">
                <li v-for="rubrica in criteri.rubriquess" :key="rubrica.id" class="list-group-item">
                  <p>{{ rubrica.descripcio }}</p>
                </li>
              </ul>
              <!-- Mostrar notas de los usuarios -->
              <ul class="list-group">
                <li v-for="usuario in usuariosConNotas[criteri.id]" :key="usuario.id" class="list-group-item">
                  <p>{{ usuario.nom }} {{ usuario.cognom }}Nota Actual: {{ usuario.nota }}</p>
                  <input type="number" class="form-control" v-model="usuario.nuevaNota" min="0" max="3">
                  <br>
                  <button @click="evaluar(resultatsa.id, usuario.id, criteri.id, usuario.nuevaNota)" class="btn btn-primary">Evaluar</button>
                </li>
              </ul>
              <p v-if="!usuariosConNotas[criteri.id] || usuariosConNotas[criteri.id].length === 0">Nota: 0</p>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <div v-else>
      <p class="alert alert-warning">No hay resultados disponibles para este módulo.</p>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      selectedModulo: null,
      modulos: [], 
      resultatsap: [], 
      usuariosConNotas: {}, 
    };
  },
  mounted() {
    this.cargarModulos();
  },
  methods: {
    async cargarModulos() {
      try {
        // const userId = localStorage.getItem('userId');
        const userId = 24;

        const response = await axios.get(`/autoavaluacio_alexventuravilalta/public/api/usuarios/${userId}/modulos`);
        this.modulos = response.data;
      } catch (error) {
        console.error('Error al cargar los módulos:', error);
      }
    },
    async cargarResultats() {
      if (!this.selectedModulo) return;
      try {
        const response = await axios.get(`http://localhost/autoavaluacio_alexventuravilalta/public/api/moduls/${this.selectedModulo}/resultatsaprenentatges`);
        this.resultatsap = response.data;

        // Iterar sobre los resultados de aprendizaje
        for (const resultatsa of this.resultatsap) {
          const criterisResponse = await axios.get(`http://localhost/autoavaluacio_alexventuravilalta/public/api/resultats/${resultatsa.id}/criterisAvaluacio`);
          const criterisAvaluacio = criterisResponse.data.criterisAvaluacio;

          // asignamos los criterios de evaluación al resultado 
          resultatsa.criterisAvaluacio = criterisAvaluacio;
          // Inicializo la nota en 0
          for (const criteri of criterisAvaluacio) {
            criteri.nota = 0;
          }
          // Obtener las notas de los usuarios para cada criterio
          await this.obtenerNotasUsuariosPorCriterio(criterisAvaluacio);
        }

        console.log('Datos de resultados de aprendizaje:', this.resultatsap);
      } catch (error) {
        console.error('Error al cargar los resultados de aprendizaje:', error);
      }
    },
    async obtenerNotasUsuariosPorCriterio(criterisAvaluacio) {
      for (const criteri of criterisAvaluacio) {
        try {
          const userId = localStorage.getItem('userId');
          const response = await axios.get(`http://localhost/autoavaluacio_alexventuravilalta/public/api/criterios/${criteri.id}/usuarios/${userId}/nota`);
          console.log('URL de solicitud:', `http://localhost/autoavaluacio_alexventuravilalta/public/api/criterios/${criteri.id}/usuarios/${userId}/nota`);
          const nota = response.data.nota;
                // Verificar si ya existe una entrada para este criterio en el objeto usuariosConNotas
          if (!this.usuariosConNotas[criteri.id]) {
                    // Si no existe, crear una nueva entrada inicializándola como un arreglo vacío

            this.usuariosConNotas[criteri.id] = [];
          }
          this.usuariosConNotas[criteri.id].push({ id: userId, nota, nuevaNota: 0 });
        } catch (error) {
          console.error('Error al obtener la nota:', error);
        }
      }
    },
    async evaluar(resultatsaId, usuarioId, criterioId, nuevaNota) {
      try {
        await axios.put(`http://localhost/autoavaluacio_alexventuravilalta/public/api/criteris/actualizarNota/user/${usuarioId}/criteris/${criterioId}`, { nota: nuevaNota });
        console.log('Nota actualizada exitosamente.');
      } catch (error) {
        console.error('Error al actualizar la nota:', error);
      }
    },
  }
};
</script>

<style scoped>
.autoevaluacion-alumnos {
  background-color: #343a40;
  color: #ffffff;
  padding: 20px;
}
</style>
