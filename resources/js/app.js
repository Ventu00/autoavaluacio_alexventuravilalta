// Me he instalado bootstrap y lo he importado a la app ETAPA 1


import './bootstrap';
import * as bootstrap from 'bootstrap';
import {createApp} from 'vue'

//componentes Vue que usare
import autoevaluacionAlumnos from '../components/autoevaluacionAlumnos.vue';

createApp(autoevaluacionAlumnos).mount('#autoevaluacionAlumnos')


import profes from '../components/profes.vue';

createApp(profes).mount('#profes')