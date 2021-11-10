<template>
  <ion-app>
    <ion-router-outlet />
  </ion-app>
</template>

<script lang="ts">
import { IonApp, IonRouterOutlet } from '@ionic/vue';
import { defineComponent } from 'vue';
import { ref } from 'vue';

// eslint-disable-next-line
/* eslint-disable */
//Aqui importare axios para validar Usuarios
import axios from "axios";
//AQUI IMPORTARE FCM PARA  HACER LA CONEXION EN FIREBASE 
import { FCM } from "capacitor-fcm";
 const fcm = new FCM();
import { Plugins} from '@capacitor/core';
const { PushNotifications } = Plugins;

export default defineComponent({
  name: 'App',
  components: {
    IonApp,
    IonRouterOutlet
  },
  methods:{
    register(email: any, password: any) {
    const user = { email, password };
    const ENDPOINT_PATH = "";
    return axios.post(ENDPOINT_PATH + "register", user);  
  },
  
  data: () => ({
  
  })
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



