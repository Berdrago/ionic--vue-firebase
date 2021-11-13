<template>
  <ion-app>
    <ion-router-outlet />
  </ion-app>
</template>

<script lang="ts">
import { IonApp, IonRouterOutlet } from '@ionic/vue';
import { defineComponent } from 'vue';
import { ref } from 'vue';






export default defineComponent({
  name: 'App',
  components: {
    IonApp,
    IonRouterOutlet
  },
  methods:{
  },
  });

  export const App = () =>  {

    const Catproductos = ref([
        { id : 1,name: 'Pefil'},
        { id : 2,name: 'Cerrar Sesion'}
    ])
        return {
          Catproductos
          

          
        };
    
        
  };

</script>



