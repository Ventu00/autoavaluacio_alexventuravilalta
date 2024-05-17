<template>
  <div class="profesor-view">
    <h1>Consulta de Autoevaluaciones (Profesor)</h1>
    <div class="form-group">
      <label for="buscar-alumno">Buscar Alumno:</label>
      <input type="text" class="form-control" v-model="nombreAlumno" id="buscar-alumno" placeholder="Ingrese el nombre del alumno">
      <br>
      <button @click="buscarAlumno" class="btn btn-primary">Buscar</button>
    </div>
    <br>
    <div v-if="alumnoSeleccionado">
      <div v-for="modulo in alumnoSeleccionado.modulo" :key="modulo.id">
        <h2>Modulos alumno: {{ modulo.nom }}</h2> 
        <div class="resultados-aprendizaje">
          <div v-for="resultado in alumnoSeleccionado.resultados_aprendizaje" :key="resultado.resultado_aprendizaje.id">
            <div class="resultado-aprendizaje">
              {{ resultado.resultado_aprendizaje.descripcio }}
            </div>
            <div class="criterios">
              <li v-for="criterio in resultado.criterios" :key="criterio.id">
                {{ criterio.descripcio }} - <span :class="notaClass(criterio.nota)">{{ criterio.nota }}</span>
              </li>
            </div>
            <br>
          </div>
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

    // Verificar si alumnoSeleccionado.modulo es un objeto y convertirlo en un array si es necesario. 
    //Me ha dado problemas al iterar en el tempaltae
    if (this.alumnoSeleccionado && typeof this.alumnoSeleccionado.modulo === 'object' && !Array.isArray(this.alumnoSeleccionado.modulo)) {
      this.alumnoSeleccionado.modulo = [this.alumnoSeleccionado.modulo];
    }
  } catch (error) {
    console.error('Error al buscar el alumno:', error);
  }
},

    notaClass(nota) {
      if (nota < 1) {
        return 'nota-roja';
      } else if (nota === 1) {
        return 'nota-amarilla';
      } else {
        return 'nota-verde';
      }
    }
  },
};
</script>

<style scoped>
.profesor-view {
  background-color: #343a40;
  color: #ffffff;
  padding: 20px;
}

.resultados-aprendizaje {
  background-color: #25282c;
  padding: 10px;
  margin-bottom: 10px;
}

.resultado-aprendizaje {
  color: #ffffff;
  font-weight: bold;
}

.criterios {
  margin-left: 20px;
}

.nota-roja, .nota-amarilla, .nota-verde {
  padding: 5px 10px;
  border-radius: 5px;
}

.nota-roja {
  background-color: red;
}

.nota-amarilla {
  background-color: yellow;
}

.nota-verde {
  background-color: green;
}
</style>
