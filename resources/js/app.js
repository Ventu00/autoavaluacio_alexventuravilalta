// app.js

// Importa Bootstrap y el CSS de Bootstrap
import './bootstrap';
import * as bootstrap from 'bootstrap';
import {createApp} from 'vue'

import autoevaluacionAlumnos from '../components/autoevaluacionAlumnos.vue';

createApp(autoevaluacionAlumnos).mount('#autoevaluacionAlumnos')


import profes from '../components/profes.vue';

createApp(profes).mount('#profes')